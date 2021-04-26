<div class="card text-center shadow">
    <div class="card-header">
      <h3>
        Previsão do Tempo
      </h3>
    </div>
    <div class="card-body">
        <div class="row m-5 text-center">
            <div class="col-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Capital</th>
                            <th scope="col">Dia</th>
                            <th scope="col">Max/ºC</th>
                            <th scope="col">Min/ºC</th>
                        </tr>
                    </thead>
                    <tbody id="forecast-tbody">
                        @isset($forecasts)
                            @foreach ($forecasts as $forecast)
                                @foreach ($forecast as $f)
                                    <tr>
                                        <td> {{ $f['nome'] }} </td>
                                        <td> {{ $f['data'] }} </td>
                                        <td> {{ $f['temperatura_max'] }} </td>
                                        <td> {{ $f['temperatura_min'] }} </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @endisset
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
