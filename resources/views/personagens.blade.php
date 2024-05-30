<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Personagens - Projeto JK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        header {
            background-color: #000;
            color: #fff;
            padding: 20px 0;
        }

        header img {
            width: 50px;
        }

        header nav div {
            display: flex;
            align-items: center;
        }

        header nav {
            flex: 1;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .botoes {
            margin-top: 0.5rem;
            font-size: 1.5rem;
            margin-right: 1rem;
        }

        .botoes a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .botoes a:hover {
            text-decoration: underline;
        }

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

        .card-img-top {
            border-radius: 10px;
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
    <header>
        <nav>
            <div>
                <img src="/logo.jpeg" />
                <h1>Projeto JK</h1>
            </div>
            <div class="botoes">
                <a href="/">Home</a>
                <a href="/personagens">Personagens</a>
                <a href="/criar">Crie seu personagem</a>
                <a href="/historia">História</a>
                <a href="/sobrenos">Sobre</a>
            </div>
        </nav>
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
                            <a href="#" class="btn btn-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="yujifiapo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Yuji Itadori</h5>
                            <p class="card-text">O protagonista.</p>
                            <a href="#" class="btn btn-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="todo.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Todo</h5>
                            <p class="card-text">O melhor bestofriendo que você poderia ter.</p>
                            <a href="#" class="btn btn-primary">Saiba mais</a>
                        </div>
                    </div>
                </div>
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
                    <a href="#">Sobre Nós</a>
                    <a href="#">Contato</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>