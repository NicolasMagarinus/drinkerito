<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - Drinkerito</title>
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
            align-items: center;
            justify-content: center;
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

        .login-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: bold;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        @media (max-width: 992px) {
            .drinkerito-card {
                flex-direction: column;
            }
        
            .brand-section {
                padding: 30px 20px;
            }
        
            .form-section {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="drinkerito-card">
        <div class="row g-0">
            <div class="col-lg-5">
                <div class="brand-section">
                    <div class="brand-logo">
                        <i class="fas fa-cocktail me-2"></i>Drinkerito
                    </div>
                    <p class="brand-subtitle">Sua rede social de drinks e receitas</p>
                    <div class="mt-4">
                        <img src="https://images.unsplash.com/photo-1536935338788-846bb9981813?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Drink" class="img-fluid rounded" style="max-height: 250px;">
                    </div>
                    <p class="mt-4">Junte-se à comunidade de mixologistas e entusiastas de drinks</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="form-section">
                    <h2 class="form-title">Crie sua conta</h2>
                    <p class="form-subtitle">Descubra, compartilhe e salve drinks incríveis!</p>
                    
                    <form method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Seu nome completo" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="seu@email.com" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Mínimo de 8 caracteres" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">Confirme a senha</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Digite novamente sua senha" required>
                        </div>

                        <div class="form-check mb-4">
                            <input type="checkbox" name="terms" id="terms" class="form-check-input @error('terms') is-invalid @enderror" {{ old('terms') ? 'checked' : '' }} required>
                            <label class="form-check-label" for="terms">
                                Concordo com os <a href="#" class="login-link">Termos de Serviço</a> e <a href="#" class="login-link">Política de Privacidade</a>
                            </label>
                            @error('terms')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-user-plus me-2"></i> Criar conta
                            </button>
                        </div>
                        
                        <div class="divider">
                            <span class="divider-text">Ou continue com</span>
                        </div>
                        
                        <div class="d-grid mb-4">
                            <a href="{{ route('google.login') }}" class="btn btn-google">
                                <i class="fab fa-google me-2"></i> Entrar com Google
                            </a>
                        </div>
                        
                        <div class="text-center">
                            <p class="mb-0">Já tem uma conta? <a href="{{ route('login') }}" class="login-link">Faça login</a></p>
                        </div>
                    </form>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>