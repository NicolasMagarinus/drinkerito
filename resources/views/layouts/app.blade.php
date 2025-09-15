<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinkerito - Sua rede social de receitas de bebidas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .drink-card {
            transition: transform 0.3s;
        }
        .drink-card:hover {
            transform: translateY(-5px);
        }
        .ingredient-circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            background-color: #f8f9fa;
            border: 2px solid #dee2e6;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1470337458703-46ad1756a187?ixlib=rb-4.0.3&auto=format&fit=crop&w=1349&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    @include('partials.header')
    
    @include('partials.navigation')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>