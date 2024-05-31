<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie seu Personagem - Projeto JK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .form-label {
            font-size: 1.2rem;
        }

        .form-control {
            padding: 15px;
            font-size: 1rem;
        }

        .btn {
            padding: 15px 30px;
            font-size: 1.2rem;
        }

        .card {
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .alert {
            margin-top: 20px;
        }

        footer {
            margin-top: 50px;
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
                        <a class="nav-link" href="/historia">História</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sobrenos">Sobre</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Crie seu Personagem</h2>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('personagens.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="mb-3">
                                <label for="imagem" class="form-label">URL da Imagem</label>
                                <input type="url" class="form-control" id="imagem" name="imagem" required>
                            </div>
                            <div class="mb-3">
                                <label for="historia" class="form-label">História</label>
                                <textarea class="form-control" id="historia" name="historia" rows="3"
                                    required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Criar Personagem</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="containerf">
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy; 2024 Projeto JK. Todos os direitos reservados.</p>
                </div>
            </div>
            <div class="row links">
                <div class="col-lg-12">
                    <a href="#">Termos de Serviço</a>
                    <a href="#">Política de Privacidade</a>
                    <a href="/sobrenos">Sobre Nós</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>