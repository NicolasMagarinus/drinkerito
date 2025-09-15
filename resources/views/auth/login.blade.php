<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - Drinkerito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #0056b3;
            --accent-color: #e74c3c;
            --light-bg: #f8f9fa;
        }

        body {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
            padding: 20px;
            font-family: 'Arial', sans-serif;
        }

        .drinkerito-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 1000px;
            display: flex;
            flex-direction: row;
            margin-top: 40px;
        }

        .brand-section {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .brand-logo {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .brand-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .form-section {
            padding: 40px;
            flex: 1;
        }

        .form-title {
            color: var(--primary-color);
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-subtitle {
            color: #6c757d;
            margin-bottom: 30px;
        }

        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 2px solid #e9ecef;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: bold;
            transition: all 0.3s;
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.4);
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .divider::before, .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background: #e9ecef;
        }

        .divider-text {
            padding: 0 15px;
            color: #6c757d;
            font-size: 0.9rem;
        }

        .btn-google {
            background-color: white;
            color: #757575;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s;
        }

        .btn-google:hover {
            background-color: #f5f5f5;
        }

        .register-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: bold;
        }

        .register-link:hover {
            text-decoration: underline;
            color: var(--secondary-color);
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .invalid-feedback {
            display: block;
            color: #dc3545;
            margin-top: 5px;
        }

        .alert {
            border-radius: 10px;
            border: none;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        @media (max-width: 992px) {
            .drinkerito-card {
                flex-direction: column;
                margin-top: 20px;
            }

            .brand-section {
                padding: 30px 20px;
            }

            .form-section {
                padding: 30px 20px;
            }

            .remember-forgot {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
</head>
<body>

    <!-- Alertas (fora do card para manter o padrão do register) -->
    @if(session('success'))
        <div class="alert alert-success w-100 text-center">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger w-100 text-center">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="drinkerito-card">
        <div class="row g-0 w-100">
            <div class="col-lg-5">
                <div class="brand-section">
                    <div class="brand-logo">
                        <i class="fas fa-cocktail me-2"></i>Drinkerito
                    </div>
                    <p class="brand-subtitle">Sua rede social de drinks e receitas</p>
                    <div class="mt-4">
                        <img src="https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Drink" class="img-fluid rounded" style="max-height: 250px;">
                    </div>
                    <p class="mt-4">Acesse sua conta e descubra drinks incríveis!</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="form-section">
                    <h2 class="form-title">Faça login</h2>
                    <p class="form-subtitle">Entre para descobrir, compartilhar e salvar drinks incríveis!</p>

                    <form method="POST" action="{{ route('login.submit') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="seu@email.com"
                                   value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror"
                                   placeholder="Sua senha" required autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="remember-forgot mb-4">
                            <div class="form-check">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">Lembrar-me</label>
                            </div>
                            {{-- <a href="{{ route('password.request') }}" class="register-link">Esqueceu sua senha?</a> --}}
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-sign-in-alt me-2"></i> Entrar
                            </button>
                        </div>

                        <div class="divider">
                            <span class="divider-text">ou</span>
                        </div>

                        <div class="d-grid mb-3">
                            {{-- <a href="{{ route('google.redirect') }}" class="btn btn-google">
                                <i class="fab fa-google"></i> Entrar com Google
                            </a> --}}
                        </div>

                        <div class="text-center">
                            <span>Não tem uma conta?</span>
                            <a href="{{ route('register') }}" class="register-link">Cadastre-se</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-5 text-center text-muted small">
        &copy; {{ date('Y') }} Drinkerito. Todos os direitos reservados.
    </footer>

</body>
</html>
