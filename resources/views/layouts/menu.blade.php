<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><i class="zmdi zmdi-google-earth"></i>
            {{ config('app.name') }}</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item mx-4">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link active" aria-current="page" href="javascript:void(0);">Sobre</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link active" aria-current="page" href="javascript:void(0);">Recentes</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link active" aria-current="page" href="javascript:void(0);">Tempo</a>
                </li>
            </ul>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-outline-light" href="contato">Contato</a>
        </div>
    </div>
</nav>
