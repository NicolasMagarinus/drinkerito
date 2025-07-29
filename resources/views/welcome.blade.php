<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Drinkerito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            background: linear-gradient(to right, #8e44ad, #3498db);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-lg rounded-3xl p-5 w-full max-w-md">
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-purple-700">Crie sua conta no Drinkerito!</h2>
            <p class="text-sm text-gray-600">Descubra, compartilhe e salve drinks incríveis!</p>
        </div>

        <form method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Seu nome completo" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="seu@email.com" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="********" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirme a senha</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="********" required>
            </div>

            <div class="form-check mb-4">
                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                <label class="form-check-label" for="remember">
                    Lembre-se de mim
                </label>
            </div>

            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary btn-block">
                    Cadastrar
                </button>
            </div>

            <div class="text-center mb-2">
                <p class="text-muted mb-2">ou</p>
                <a href="{{ route('google.login') }}" class="btn btn-outline-dark w-100">
                    <i class="fab fa-google me-2"></i> Entrar com Google
                </a>
            </div>

            <div class="text-center">
                <p class="text-sm text-gray-600">Já tem uma conta?
                    <a class="text-blue-600 hover:underline">Entrar</a>
                </p>
            </div>
        </form>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
