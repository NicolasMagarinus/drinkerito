<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Drinkerito</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarContent">
                <form class="d-flex mx-auto" style="width: 50%;">
                    <input class="form-control me-2" type="search" placeholder="Buscar bebidas..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Buscar</button>
                </form>
                
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-trophy-fill me-1"></i> Top 10</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-dice-5-fill me-1"></i> Aleatória</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i> Usuário
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Cadastro</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>