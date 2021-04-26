@extends('layouts.app')

@section('content')

    <div class="row m-5">
        <div class="col-12">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($articles as $key => $article)
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <div class="card h-100 shadow">
                            <img src="../../images/image{{ $key }}.jpeg" class="card-img-top h-10 text-center"
                                alt="image{{ $key }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article['titulo'] }}</h5>
                                <p class="card-text">{{ $article['descricao'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="row m-5 text-center" style="justify-content: center">
        <div class="col-8 my-3">
            @include('content.forecast-table')

            <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-4">
                <a class="btn btn-dark" href="previsoes">Ver mais...</a>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script src="../../js/cptec.js"></script>

@endsection
