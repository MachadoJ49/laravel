extends('_partials/main')

@section('conteudo')

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

    <!-- Detalhes do Animal -->
    <div class="container">
        <div class="animal-details">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x300" alt="Rex">
                </div>
                <div class="col-md-6">
                    <h1>Rex</h1>
                    <p><strong>Idade:</strong> 2 anos</p>
                    <p><strong>Porte:</strong> Médio</p>
                    <p><strong>Descrição:</strong> Rex é um cachorro muito brincalhão e cheio de energia. Adora passeios e se dá bem com crianças. Ele é muito carinhoso e está procurando um lar cheio de amor.</p>
                    <p><strong>Saúde:</strong> Vacinado e castrado.</p>
                    <p><strong>Localização:</strong> São Paulo, SP</p>
                    <a href="#" class="btn btn-primary btn-lg">Quero Adotar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
            <p>Entre em contato: contato@adoteumamigo.com.br | (11) 1234-5678</p>
        </div>
    </footer>

@endsection
