@extends('_partials/main')

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
                        <a class="nav-link" href="">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Animais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Adote um Amigo</h1>
            <p>Dê um lar para um animal de rua e ganhe um companheiro para a vida toda.</p>
            <a href="#" class="btn btn-primary">Ver Animais para Adoção</a>
        </div>
    </section>

    <!-- Info Section -->
    <section class="info-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Por que adotar?</h2>
                    <p>Adotar um animal de rua não só salva uma vida, mas também traz alegria e amor para o seu lar. Cada adoção ajuda a reduzir o número de animais abandonados e contribui para um mundo mais compassivo.</p>
                </div>
                <div class="col-md-6">
                    <h2>Como adotar?</h2>
                    <p>Navegue pela nossa lista de animais disponíveis para adoção, escolha o seu novo amigo e entre em contato conosco para agendar uma visita. Estamos aqui para ajudar em todo o processo.</p>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
        </div>
    </footer>

@endsection()