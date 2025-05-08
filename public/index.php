<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImobRS - Portal Imobiliário </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">ImobRS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#imoveis">Imóveis</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.html">Admin</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="inicio">
        <div class="container text-center">
            <h1 class="display-4">Encontre o Imóvel dos Seus Sonhos</h1>
            <p class="lead">As melhores ofertas do mercado imobiliário</p>
            <a href="#imoveis" class="btn btn-primary btn-lg">Ver Imóveis</a>
        </div>
    </section>

    <!-- Imóveis em Destaque -->
    <section class="py-5" id="imoveis">
        <div class="container">
            <h2 class="text-center mb-5">Imóveis em Destaque</h2>
            
            <!-- Barra de Filtros -->
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="row g-3" id="filtroImoveis">
                                <div class="col-md-3">
                                    <label class="form-label">Tipo de Imóvel</label>
                                    <select class="form-select" id="tipoImovel">
                                        <option selected value="">Todos</option>
                                        <option value="apartamento">Apartamento</option>
                                        <option value="casa">Casa</option>
                                        <option value="cobertura">Cobertura</option>
                                        <option value="terreno">Terreno</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Faixa de Preço</label>
                                    <select class="form-select" id="faixaPreco">
                                        <option selected value="">Todos</option>
                                        <option value="0-500000">Até R$ 500.000</option>
                                        <option value="500000-1000000">R$ 500.000 - R$ 1.000.000</option>
                                        <option value="1000000-999999999">Acima de R$ 1.000.000</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Quartos</label>
                                    <select class="form-select" id="quartos">
                                        <option selected value="">Todos</option>
                                        <option value="1">1+</option>
                                        <option value="2">2+</option>
                                        <option value="3">3+</option>
                                        <option value="4">4+</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Área (m²)</label>
                                    <select class="form-select" id="area">
                                        <option selected value="">Todos</option>
                                        <option value="0-100">Até 100m²</option>
                                        <option value="100-200">100m² - 200m²</option>
                                        <option value="200-999999">Acima de 200m²</option>
                                    </select>
                                </div>
                                <div class="col-md-2 d-flex align-items-end">
                                    <button type="submit" class="btn btn-primary w-100">Filtrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fim da Barra de Filtros -->

            <div class="row">
                <!-- Imóvel 1 -->
                <div class="col-md-4">
                    <div class="card property-card" data-tipo="apartamento" data-preco="850000" data-quartos="3" data-area="120">
                        <img src="https://picsum.photos/350/200" class="card-img-top" alt="Imóvel 1">
                        <div class="card-body">
                            <h5 class="card-title">Apartamento Luxuoso</h5>
                            <p class="card-text">3 quartos • 2 banheiros • 120m²</p>
                            <h6 class="text-primary">R$ 850.000</h6>
                            <a href="#" class="btn btn-outline-primary">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
                <!-- Imóvel 2 -->
                <div class="col-md-4">
                    <div class="card property-card" data-tipo="casa" data-preco="1200000" data-quartos="4" data-area="250">
                        <img src="https://picsum.photos/350/200" class="card-img-top" alt="Imóvel 2">
                        <div class="card-body">
                            <h5 class="card-title">Casa com Piscina</h5>
                            <p class="card-text">4 quartos • 3 banheiros • 250m²</p>
                            <h6 class="text-primary">R$ 1.200.000</h6>
                            <a href="#" class="btn btn-outline-primary">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
                <!-- Imóvel 3 -->
                <div class="col-md-4">
                    <div class="card property-card" data-tipo="cobertura" data-preco="950000" data-quartos="3" data-area="180">
                        <img src="https://picsum.photos/350/200" class="card-img-top" alt="Imóvel 3">
                        <div class="card-body">
                            <h5 class="card-title">Cobertura Duplex</h5>
                            <p class="card-text">3 quartos • 4 banheiros • 180m²</p>
                            <h6 class="text-primary">R$ 950.000</h6>
                            <a href="#" class="btn btn-outline-primary">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sobre Nós -->
    <section class="features-section" id="sobre">
        <div class="container">
            <h2 class="text-center mb-5">Por que nos escolher?</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="fas fa-home fa-3x mb-3"></i>
                    <h4>Experiência</h4>
                    <p>Mais de 20 anos no mercado imobiliário</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-handshake fa-3x mb-3"></i>
                    <h4>Confiança</h4>
                    <p>Milhares de clientes satisfeitos</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-star fa-3x mb-3"></i>
                    <h4>Qualidade</h4>
                    <p>Os melhores imóveis do mercado</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato -->
    <section class="contact-section" id="contato">
        <div class="container">
            <h2 class="text-center mb-5">Entre em Contato</h2>
            <div class="row">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nome">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" placeholder="Telefone">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Mensagem"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <h4>Informações de Contato</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Av. Principal, 1000 - Centro</p>
                    <p><i class="fas fa-phone"></i> (11) 99999-9999</p>
                    <p><i class="fas fa-envelope"></i> contato@imobiliariapremium.com</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2025 ImobRS. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>
    <script src="js/filtros.js"></script>
</body>
</html>
