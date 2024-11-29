<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InovMark</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        @import url(css/raiz.css);

        </style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">InovMark</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#conheca-nos">Conheça</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contatos">Contatos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feedbacks">Feedbacks</a>
                    </li>
                </ul>
                <a href="login.html" class="btn btn-warning">Entrar</a>
            </div>
        </div>
    </nav>
<div class="teste">



























</div>
    <!-- Seção "Conheça-nos" -->
    <div class=conheca-nos>
  <!--  <section id="conheca-nos" class="container py-5 mt-5">
        <h1>Conheça-nos!</h1>
        <p>Texto sobre a empresa...</p>
    </section> -->


    <section id="conheca-nos" class="inov-mark-section">
        <div class="header">
            <h1>CONHEÇA-NOS!</h1>
            <img src="logo.png" alt="Inov Mark Logo" class="logo">
        </div>
        <div class="content">
            <div class="card">
                <div class="icon">💡</div>
                <p>
                    A INOV MARK propõe uma plataforma interativa para empresários e consumidores,
                    ampliando a divulgação de empresas e ajudando nas escolhas de compras e parcerias.
                    Oferece serviços de marketing e informações estratégicas baseadas em enquetes e
                    feedback dos usuários, com o objetivo de melhorar os negócios e maximizar lucros.
                </p>
            </div>
            <div class="card">
                <div class="icon">❓</div>
                <p>
                    O site é importante porque oferece benefícios mútuos: empresários obtêm informações
                    valiosas para aprimorar suas estratégias, enquanto consumidores têm acesso a ofertas e
                    descontos, melhorando sua experiência de compra. Essa combinação promove um mercado
                    mais eficiente e dinâmico.
                </p>
            </div>
            <div class="card">
                <div class="icon">👥</div>
                <p>
                    Empresas enfrentam desafios na promoção e venda devido à concorrência e às mudanças
                    nas demandas dos consumidores, enquanto consumidores procuram opções vantajosas e
                    bem avaliadas. Dessa forma, nosso site oferece serviços de marketing e insights
                    estratégicos para conectar empresários e clientes de forma eficaz.
                </p>
            </div>
        </div>
    </section>
    
</div>
    <!-- Seção "Contatos" -->
    <section id="contatos" class="container py-5">
        <h2>Entre em contato conosco</h2>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu email">
            </div>
            <div class="mb-3">
                <label for="motivo" class="form-label">Motivo do contato</label>
                <input type="text" class="form-control" id="motivo" placeholder="Digite o motivo">
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Escreva sua mensagem</label>
                <textarea class="form-control" id="mensagem" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </section>

    <!-- Seção "Feedbacks" -->
    <section id="feedbacks" class="container py-5">
        <h2>Feedbacks</h2>
        <div class="feedback-box">
            <h5>Mirela Almeida</h5>
            <p>Estava à procura de um site que atendesse minhas necessidades...</p>
        </div>
        <div class="feedback-box">
            <h5>Thiago Baitar</h5>
            <p>Adorei os serviços do site, são bem objetivos e sem burocracia!</p>
        </div>
    </section>

    <script src="app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>