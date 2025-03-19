<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoção - Adote um Amigo</title>
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
        .adoption-form {
            background-color: #D9AE89;
            border: 1px solid #A66844;
            border-radius: 10px;
            padding: 30px;
            margin-top: 50px;
        }
        .adoption-form h1 {
            color: #40251F;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-control {
            background-color: #F2F0F0;
            border: 1px solid #A66844;
            color: #40251F;
        }
        .form-control:focus {
            border-color: #734230;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #A66844;
            border-color: #A66844;
            width: 100%;
            margin-top: 20px;
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
            margin-top: 50px;
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

    <!-- Formulário de Adoção -->
    <div class="container">
        <div class="adoption-form">
            <h1>Formulário de Adoção</h1>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="name" placeholder="Digite seu nome completo" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Digite seu telefone" required>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="address" placeholder="Digite seu endereço" required>
                </div>
                <div class="mb-3">
                    <label for="animal" class="form-label">Animal de Interesse</label>
                    <input type="text" class="form-control" id="animal" value="Rex" readonly>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensagem (opcional)</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Digite uma mensagem"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Solicitação de Adoção</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
            <p>Entre em contato: contato@adoteumamigo.com.br | (11) 1234-5678</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>