@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center">
            <button class="btn btn-random btn-lg mb-4">
                <i class="fas fa-random me-2"></i>Sortear Nova Bebida
            </button>
            <p class="text-muted">Clique no botão para descobrir uma bebida aleatória</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5 mb-4">
            <div class="drink-card">
                <img src="https://images.unsplash.com/photo-1536935338788-846bb9981813?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Mojito Clássico" style="height: 400px; object-fit: cover;">
            </div>
        </div>
        <div class="col-lg-7 mb-4">
            <div class="card h-100 drink-card">
                <div class="card-body">
                    <h2 class="card-title">Mojito Clássico</h2>
                    <div class="d-flex align-items-center mb-3">
                        <div class="rating me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="text-muted">4.5 (328 avaliações)</span>
                    </div>
                    <p class="card-text">O Mojito é uma bebida cubana refrescante que combina rum, limão, hortelã e água com gás. Perfeita para dias quentes!</p>
                    
                    <h5 class="mt-4">Ingredientes</h5>
                    <ul class="ingredient-list">
                        <li><i class="fas fa-check-circle text-success me-2"></i> 50ml de rum branco</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> 6 folhas de hortelã</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> 25ml de suco de limão fresco</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> 2 colheres de chá de açúcar</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> Água com gás</li>
                        <li><i class="fas fa-check-circle text-success me-2"></i> Gelo</li>
                    </ul>
                    
                    <h5 class="mt-4">Modo de Preparo</h5>
                    <div class="instructions">
                        <p>1. Em um copo alto, coloque as folhas de hortelã e o açúcar.</p>
                        <p>2. Adicione o suco de limão e macere levemente para liberar o aroma da hortelã.</p>
                        <p>3. Adicione o rum e misture bem.</p>
                        <p>4. Complete com gelo e água com gás.</p>
                        <p>5. Mexa suavemente e decore com uma folha de hortelã e uma rodela de limão.</p>
                    </div>
                    
                    <div class="mt-4">
                        <button class="btn btn-primary me-2">
                            <i class="fas fa-heart me-1"></i> Favoritar
                        </button>
                        <button class="btn btn-outline-primary">
                            <i class="fas fa-share-alt me-1"></i> Compartilhar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h3 class="mb-4">Bebidas Semelhantes</h3>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card drink-card h-100">
                <img src="https://images.unsplash.com/photo-1551538827-9c037cb4f32a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Caipirinha" height="200" style="object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Caipirinha</h5>
                    <p class="card-text"><i class="fas fa-star text-warning"></i> 4.8 (425 avaliações)</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card drink-card h-100">
                <img src="https://images.unsplash.com/photo-1605270012917-bf157c5a9541?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Margarita" height="200" style="object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Margarita</h5>
                    <p class="card-text"><i class="fas fa-star text-warning"></i> 4.6 (312 avaliações)</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card drink-card h-100">
                <img src="https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Daiquiri" height="200" style="object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Daiquiri</h5>
                    <p class="card-text"><i class="fas fa-star text-warning"></i> 4.4 (278 avaliações)</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card drink-card h-100">
                <img src="https://images.unsplash.com/photo-1470337458703-46ad1756a187?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Cosmopolitan" height="200" style="object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Cosmopolitan</h5>
                    <p class="card-text"><i class="fas fa-star text-warning"></i> 4.3 (256 avaliações)</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection