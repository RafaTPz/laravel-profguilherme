<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Personagens - Projeto JK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteForms = document.querySelectorAll('form[action*="personagens/"]');

            deleteForms.forEach(form => {
                form.addEventListener('submit', function (event) {
                    const confirmed = confirm('Tem certeza que deseja deletar este personagem?');
                    if (!confirmed) {
                        event.preventDefault();
                    }
                });
            });
        });
    </script>
    <style>
        .welcome-section {
            position: relative;
            background-image: url('/background.png');
            background-size: cover;
            background-position: center;
            color: #fff;
            padding: 200px 0;
            text-align: center;
        }

        .section {
            padding: 100px 0;
            color: #fff;
            background-color: darkred;
            text-align: center;
        }

        .section:nth-child(odd) {
            background-color: #333;
        }

        .section h2 {
            margin-bottom: 20px;
        }

        .section p {
            margin-bottom: 40px;
        }

        .section-buttons {
            margin-top: 2rem;
            text-align: center;
        }

        .section-buttons a {
            margin: 0 10px;
        }

        .card {
            border: none;
            background-color: transparent;
        }

        .card-img-top-wrapper {
            height: 400px;
            display: flex;
            justify-content: center;
            overflow: hidden;
        }

        .card-img-top {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }

        .btn-group .btn {
            flex: 1;
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .card-text {
            color: #ccc;
            font-size: 0.9rem;
        }

        footer {
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        footer .links a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        footer .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fs-4" href="/">
                <img src="/logo2.png" alt="Projeto JK Logo" width="50">
                Projeto JK
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav fs-5">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/personagens">Personagens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/personagens/criar">Crie seu personagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sobre">Sobre</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <section id="personagens" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Conheça os Personagens mais famosos</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="/goujosdajsda.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Satoro Gojou</h5>
                            <p class="card-text">O mais poderoso.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="yujifiapo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Yuji Itadori</h5>
                            <p class="card-text">O protagonista.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="todo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Todo</h5>
                            <p class="card-text">O melhor bestofriendo que você poderia ter.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="criacoes" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Suas Criações</h2>
                    <p>Veja os personagens criados pelos usuários e suas histórias fascinantes.</p>
                </div>
            </div>
            <div class="row">
                @foreach($personagens as $personagem)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-img-top-wrapper">
                                <img src="{{ $personagem->imagem }}" class="card-img-top" alt="{{ $personagem->nome }}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $personagem->nome }}</h5>
                                <p class="card-text">{{ $personagem->historia }}</p>
                                <div class="btn-group">
                                    <a href="{{ route('personagens.edit', $personagem->id) }}"
                                        class="btn btn-primary m-1">Editar</a>
                                    <form action="{{ route('personagens.destroy', $personagem->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger m-1">Deletar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy; 2024 Projeto JK. Todos os direitos reservados.</p>
                </div>
            </div>
            <div class="row links">
                <div class="col-lg-12">
                    <a href="#">Termos de Serviço</a>
                    <a href="#">Política de Privacidade</a>
                    <a href="/sobre">Sobre Nós</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>