<?php

namespace App\Services;

use App\Helpers\Traduct;
use App\Models\Previsao;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class ForecastService
{
    use Traduct;

    const CODIGOS_LOCALIDADE = [
        'Rio Branco' => 240,
        'Maceió' => 233,
        'Macapá' => 232,
        'Manaus' => 234,
        'Salvador' => 242,
        'Fortaleza' => 229,
        'Brasília' => 224,
        'Vitória' => 246,
        'Goiânia' => 230,
        'São Luís' => 243,
        'Cuiabá' => 226,
        'Campo Grande' => 225,
        'Belo Horizonte' => 222,
        'Belém' => 221,
        'João Pessoa' => 231,
        'Curitiba' => 227,
        'Recife' => 239,
        'Teresina' => 245,
        'Rio de Janeiro' => 241,
        'Natal' => 235,
        'Porto Alegre' => 237,
        'Porto Velho' => 238,
        'Boa Vista' => 223,
        'Florianópolis' => 228,
        'São Paulo' => 244,
        'Aracaju' => 220,
        'Palmas' => 236
    ];

    private $client;
    private $forecast;

    public function __construct(
        Client $client,
        Previsao $forecast
    ) {
        $this->client = $client;
        $this->forecast = $forecast;
    }

    public function getForecastService(?int $quantity)
    {
        $items = array_rand(self::CODIGOS_LOCALIDADE, $quantity ?? count(self::CODIGOS_LOCALIDADE));
        $finalForecast = [];

        foreach ($items as $item) {
            $code = self::CODIGOS_LOCALIDADE[$item];

            $check = $this->checkIfForecastExists($code);


            if ($check) {
                $finalForecast[] = [[
                    'nome' => $check->nome,
                    'data' => $check->data,
                    'temperatura_min' => $check->temperatura_min,
                    'temperatura_max' => $check->temperatura_max,
                ]];
                continue;
            }

            $response = $this->client->request('GET', 'http://servicos.cptec.inpe.br/XML/cidade/' . $code . '/previsao.xml');

            if (200 == $response->getStatusCode()) {
                $stringResult = simplexml_load_string($response->getBody()->getContents());
                $array = $this->xmlToArray($stringResult);
                $finalForecast[] = $this->formatToSave($array, $code);
            }
        }

        return $finalForecast;
    }

    // Verifica se existe no banco em um intervalo de tempo, para não fazer requisições desnecessárias
    private function checkIfForecastExists(int $code)
    {
        return DB::table('previsoes')->where('codigo', $code)
            ->whereDate('expira_em', '>', (Carbon::now())->format('Y-m-d'))
            ->first();
    }

    // Formata o retorno para salvar no banco e exibir na tela
    private function formatToSave(array $data, int $code)
    {
        $items = [];
        foreach ($data['previsao'] as $item) {
            $save = [
                'nome' => $data['nome'],
                'data' => $this->traductDays(date('l', strtotime($item['dia']))),
                'codigo' => $code,
                'temperatura_min' => $item['minima'],
                'temperatura_max' => $item['maxima'],
                'expira_em' => (Carbon::now()->addDay())->format('Y-m-d')
            ];

            $this->forecast->create($save);
            $items[] = $save;
        }

        return $items;
    }

    // Transforma a string do xml para array
    private function xmlToArray($xml)
    {
        $json = json_encode($xml);

        return json_decode($json, TRUE);
    }
}
