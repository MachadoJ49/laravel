<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais para Adoção - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #F2F0F0;
            color: #40251F;
        }
        .navbar {
            background-color: #734230;
        }
        .navbar-brand, .nav-link {
            color: #F2F0F0 !important;
        }
        .animal-card {
            background-color: #D9AE89;
            border: 1px solid #A66844;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .animal-card img {
            border-radius: 10px;
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .animal-card h3 {
            color: #40251F;
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 15px;
        }
        .animal-card p {
            color: #40251F;
            font-size: 1rem;
        }
        .btn-primary {
            background-color: #A66844;
            border-color: #A66844;
        }
        .btn-primary:hover {
            background-color: #734230;
            border-color: #734230;
        }
        .footer {
            background-color: #734230;
            color: #F2F0F0;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Adote um Amigo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Animais para Adoção</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Listagem de Animais -->
    <div class="container mt-5">
        <h1 class="text-center mb-4" style="color: #40251F;">Animais para Adoção</h1>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="animal-card">
                    <img src="https://via.placeholder.com/300x200" alt="Cachorro">
                    <h3>Rex</h3>
                    <p>Rex é um cachorro muito brincalhão e cheio de energia. Adora passeios e se dá bem com crianças.</p>
                    <a href="#" class="btn btn-primary">Saiba Mais</a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="animal-card">
                    <img src="https://via.placeholder.com/300x200" alt="Gato">
                    <h3>Luna</h3>
                    <p>Luna é uma gatinha tranquila e carinhosa. Ideal para quem busca um companheiro calmo.</p>
                    <a href="#" class="btn btn-primary">Saiba Mais</a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="animal-card">
                    <img src="https://via.placeholder.com/300x200" alt="Coelho">
                    <h3>Bolinha</h3>
                    <p>Bolinha é um coelho muito dócil e brincalhão. Adora cenouras e espaços abertos.</p>
                    <a href="#" class="btn btn-primary">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>

        <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>