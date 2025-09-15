@extends('layouts.app')

@section('content')
<div class="container mt-4">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="text-center mb-4">Descubra Novas Bebidas</h2>
                
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <button class="btn btn-explore active">Todas</button>
                    <button class="btn btn-explore">Populares</button>
                    <button class="btn btn-explore">Recentes</button>
                    <button class="btn btn-explore">Clássicas</button>
                    <button class="btn btn-explore">Tropicais</button>
                    <button class="btn btn-explore">Sem Álcool</button>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Filtrar por</h4>
                        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Ingrediente Principal</label>
                                <select class="form-select">
                                    <option selected>Todos os ingredientes</option>
                                    <option>Vodka</option>
                                    <option>Gin</option>
                                    <option>Rum</option>
                                    <option>Tequila</option>
                                    <option>Whisky</option>
                                    <option>Licores</option>
                                </select>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Dificuldade</label>
                                <select class="form-select">
                                    <option selected>Todos os níveis</option>
                                    <option>Fácil</option>
                                    <option>Médio</option>
                                    <option>Difícil</option>
                                </select>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Tempo de Preparo</label>
                                <select class="form-select">
                                    <option selected>Qualquer tempo</option>
                                    <option>Até 5 minutos</option>
                                    <option>5-10 minutos</option>
                                    <option>Mais de 10 minutos</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="text-center mt-3">
                            <button class="btn btn-primary">Aplicar Filtros</button>
                            <button class="btn btn-secondary ms-2">Limpar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h3 class="mb-4">Bebidas para Explorar</h3>
            </div>
        </div>
        
        <div class="row" id="drinks-grid">
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card h-100 drink-card">
                    <span class="position-absolute top-0 end-0 badge bg-success m-2">Fácil</span>
                    <img src="https://images.unsplash.com/photo-1536935338788-846bb9981813?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Mojito" height="200" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Mojito Clássico</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="rating text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="text-muted ms-1">4.5</span>
                            </span>
                            <span class="text-muted"><i class="fas fa-clock me-1"></i> 5min</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-outline-primary btn-sm">Ver Receita</a>
                            <button class="btn btn-outline-primary btn-sm"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card h-100 drink-card">
                    <span class="position-absolute top-0 end-0 badge bg-warning m-2">Médio</span>
                    <img src="https://images.unsplash.com/photo-1551538827-9c037cb4f32a?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Margarita" height="200" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Margarita</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="rating text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="text-muted ms-1">4.0</span>
                            </span>
                            <span class="text-muted"><i class="fas fa-clock me-1"></i> 7min</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-outline-primary btn-sm">Ver Receita</a>
                            <button class="btn btn-outline-primary btn-sm"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card h-100 drink-card">
                    <span class="position-absolute top-0 end-0 badge bg-success m-2">Fácil</span>
                    <img src="https://images.unsplash.com/photo-1470337458703-46ad1756a187?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Caipirinha" height="200" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Caipirinha</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="rating text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="text-muted ms-1">4.8</span>
                            </span>
                            <span class="text-muted"><i class="fas fa-clock me-1"></i> 5min</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-outline-primary btn-sm">Ver Receita</a>
                            <button class="btn btn-outline-primary btn-sm"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card h-100 drink-card">
                    <span class="position-absolute top-0 end-0 badge bg-danger m-2">Difícil</span>
                    <img src="https://images.unsplash.com/photo-1605270012917-bf157c5a9541?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Cosmopolitan" height="200" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Cosmopolitan</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="rating text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="text-muted ms-1">4.5</span>
                            </span>
                            <span class="text-muted"><i class="fas fa-clock me-1"></i> 10min</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-outline-primary btn-sm">Ver Receita</a>
                            <button class="btn btn-outline-primary btn-sm"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card h-100 drink-card">
                    <span class="position-absolute top-0 end-0 badge bg-success m-2">Fácil</span>
                    <img src="https://images.unsplash.com/photo-1513558161293-cdaf765ed2fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Piña Colada" height="200" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Piña Colada</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="rating text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="text-muted ms-1">4.2</span>
                            </span>
                            <span class="text-muted"><i class="fas fa-clock me-1"></i> 7min</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-outline-primary btn-sm">Ver Receita</a>
                            <button class="btn btn-outline-primary btn-sm"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card h-100 drink-card">
                    <span class="position-absolute top-0 end-0 badge bg-warning m-2">Médio</span>
                    <img src="https://images.unsplash.com/photo-1549746423-a5cb8a0b4a99?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Old Fashioned" height="200" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Old Fashioned</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="rating text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <span class="text-muted ms-1">4.9</span>
                            </span>
                            <span class="text-muted"><i class="fas fa-clock me-1"></i> 8min</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-outline-primary btn-sm">Ver Receita</a>
                            <button class="btn btn-outline-primary btn-sm"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card h-100 drink-card">
                    <span class="position-absolute top-0 end-0 badge bg-success m-2">Fácil</span>
                    <img src="https://images.unsplash.com/photo-1563227815-9e4a4a523a14?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Moscow Mule" height="200" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Moscow Mule</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="rating text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="text-muted ms-1">4.1</span>
                            </span>
                            <span class="text-muted"><i class="fas fa-clock me-1"></i> 5min</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-outline-primary btn-sm">Ver Receita</a>
                            <button class="btn btn-outline-primary btn-sm"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card h-100 drink-card">
                    <span class="position-absolute top-0 end-0 badge bg-warning m-2">Médio</span>
                    <img src="https://images.unsplash.com/photo-1570598912132-0ba1dc952b7d?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Negroni" height="200" style="object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Negroni</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="rating text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="text-muted ms-1">4.6</span>
                            </span>
                            <span class="text-muted"><i class="fas fa-clock me-1"></i> 6min</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-outline-primary btn-sm">Ver Receita</a>
                            <button class="btn btn-outline-primary btn-sm"><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection