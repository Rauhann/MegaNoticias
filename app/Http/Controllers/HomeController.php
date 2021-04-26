<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    private $article;
    private $register;

    public function __construct(
        Artigo $article,
        Registro $register
    ) {
        $this->article = $article;
        $this->register = $register;
    }

    public function index()
    {
        $articles = $this->article->orderBy('data', 'desc')->get()->take(Artigo::ARTICLE_LIMIT)->toArray() ?? [];

        return view('home', compact('articles'));
    }

    public function register(Request $request)
    {
        $email = $request->email;

        $validator = Validator::make(
            [
                'email' => $email
            ],
            [
                'email' => 'required|email'
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                'Atenção', 'error', 'Email inválido! Tente novamente.'
            ], 200);
        }

        $check = $this->register->where('email', $email)->first();

        if ($check) {
            return response()->json([
                'Olá', 'warning', 'Você já assinou!'
            ], 200);
        }

        $this->register->create([
            'email' => $email
        ]);

        return response()->json([
            'Perfeito', 'success', 'Assinatura realizada. Obrigado!'
        ], 200);
    }
}
