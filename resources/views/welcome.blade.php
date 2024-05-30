<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projeto JK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

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

        #bemvindo{
            background-color: #0007;
            padding:5px;
            border-radius: 3rem;
        }
    </style>
</head>

<body>
    <header class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand fs-4" href="#">
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
                        <a class="nav-link" href="/criar">Crie seu personagem</a>
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


    <section class="welcome-section">
        <div class="container">
            <div class="row" >
                <span id="bemvindo" class="col-lg-8 offset-lg-2">
                    <h2 class="display-4">Bem-vindo ao mundo de Jujutsu Kaisen</h2>
                    <p class="lead">Explore o universo dos feitiços, maldições e lutas épicas.</p>
                    <a href="#" class="btn btn-primary btn-lg">Saiba mais</a>
                </span>
            </div>
        </div>
    </section>

    <section id="personagens" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Conheça os Personagens</h2>
                    <p>Descubra informações sobre os personagens principais, vilões e aliados do mundo de Jujutsu
                        Kaisen, incluindo suas habilidades e histórias de fundo.</p>
                </div>
            </div>
        </div>
        <div class="container section-buttons">
            <div class="row">
                <div class="col">
                    <a href="/personagens" class="btn btn-outline-light">Conheça os Personagens</a>
                </div>
            </div>
        </div>
    </section>

    <section id="criar" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Crie seu Personagem</h2>
                    <p>Liberte sua criatividade e crie seu próprio personagem para se aventurar no mundo de Jujutsu
                        Kaisen. Escolha suas habilidades, aparência e história única.</p>
                </div>
            </div>
        </div>
        <div class="container section-buttons">
            <div class="row">
                <div class="col">
                    <a href="/criar" class="btn btn-outline-light">Crie seu Personagem</a>
                </div>
            </div>
        </div>
    </section>

    <section id="historia" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Conheça a História</h2>
                    <p>Explore a trama envolvente e emocionante que acompanha as aventuras dos personagens de Jujutsu
                        Kaisen. Descubra os segredos do passado e os desafios do presente.</p>
                </div>
            </div>
        </div>
        <div class="container section-buttons">
            <div class="row">
                <div class="col">
                    <a href="/historia" class="btn btn-outline-light">Conheça a História</a>
                </div>
            </div>
        </div>
    </section>

    <section id="sobrenos" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h2>Sobre Nós</h2>
                    <p>Saiba mais sobre o Projeto JK e a equipe por trás deste site. Descubra nossa missão, visão e
                        valores, e entre em contato conosco para saber mais.</p>
                </div>
            </div>
        </div>
        <div class="container section-buttons">
            <div class="row">
                <div class="col">
                    <a href="/sobrenos" class="btn btn-outline-light">Sobre Nós</a>
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