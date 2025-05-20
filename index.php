<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="index.css">
    <title>Habib Coffee</title>
    
</head>
<body>
    <header>
        <h1>Habib Coffee</h1>
        <nav>
            <a href="index.php">Início</a>
            <a href="login.php">Login</a>
            <a href="cadastro.php">Cadastrar</a>
        </nav>
    </header>
    <section class="hero">
        <div class="hero-content">
            <h2>O melhor café para você</h2>
            <p>Desperte seu paladar com grãos selecionados, qualidade e sabor incomparável.</p>
            <a href="#produtos" class="btn-primary">Confira nossos produtos</a>
        </div>
    </section>

    <section class="products" id="produtos">
        <h3>Nossos Produtos</h3>
        <div class="product-list">
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=400&q=80" alt="Café Arábica" class="product-image" />
                <div class="product-info">
                    <h4>Café Arábica</h4>
                    <p>Grãos selecionados de alta qualidade, sabor suave e aroma intenso.</p>
                    <div class="price">R$ 29,90</div>
                </div>
            </div>
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1515442261605-408fd7bab295?auto=format&fit=crop&w=400&q=80" alt="Café Espresso" class="product-image" />
                <div class="product-info">
                    <h4>Café Espresso</h4>
                    <p>Blend especial para um espresso encorpado e sabor marcante.</p>
                    <div class="price">R$ 34,50</div>
                </div>
            </div>
            <div class="product-card">
                <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=400&q=80" alt="Café Gourmet" class="product-image" />
                <div class="product-info">
                    <h4>Café Gourmet</h4>
                    <p>Sabores únicos, torrado na medida certa para um café perfeito.</p>
                    <div class="price">R$ 39,90</div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Café Premium. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

