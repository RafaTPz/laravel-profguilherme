<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projeto JK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #333;
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
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #444;
            color: #fff;
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
                        <a class="nav-link" href="/sobre">Sobre</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>


    <section>
        <div class="container">
            <div class="card">
                <h2 class="card-title text-center mb-4">Sobre Nós</h2>

                <div class="card-body">
                    <p>A Projeto JK é uma empresa fictícia sediada em Indaiatuba, São Paulo. Fundada na Fundação
                        Indaiatubana de Educação e Cultura (FIEC), nossa empresa tem como objetivo principal
                        proporcionar experiências educacionais e culturais de qualidade para todos.</p>

                    <p>Nosso compromisso é com a excelência, tanto na prestação de serviços quanto no
                        desenvolvimento de produtos educacionais inovadores. Trabalhamos arduamente para criar
                        um ambiente onde o aprendizado seja acessível, envolvente e inspirador.</p>

                    <p>Estamos constantemente buscando maneiras de melhorar e expandir nossos serviços, sempre
                        com a missão de promover o conhecimento e o crescimento pessoal. Acreditamos que a
                        educação e a cultura são ferramentas poderosas para transformar vidas e comunidades.</p>

                    <p>Entre em contato conosco para saber mais sobre nossos serviços, produtos e eventos.
                        Estamos sempre abertos a parcerias e colaborações que possam enriquecer ainda mais nossa
                        missão.</p>

                    <img src="/logo.jpeg" alt="Projeto JK Logo" width="300" style="display: block; margin: 0 auto;">
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
                    <a href="/sobre">Sobre Nós</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>