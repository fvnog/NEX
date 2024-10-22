<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NEX - Marketing Digital</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="NEX - Maximize o alcance da sua marca com estratégias de impulsionamento eficazes e direcionadas. Desenvolva páginas otimizadas para conversão, construa e-commerce, gerencie CRM, design gráfico e sites empresariais profissionais.">
    <meta name="keywords" content="marketing digital, impulsionamento, páginas de conversão, e-commerce, CRM, design gráfico, sites empresariais, NEX, maximizar alcance, estratégias eficazes">
    <meta name="author" content="NEX Marketing Digital">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="og:title" content="NEX - Marketing Digital">
    <meta name="og:description" content="Maximize o alcance da sua marca com estratégias de impulsionamento eficazes e direcionadas. Desenvolva páginas otimizadas para conversão, construa e-commerce, gerencie CRM, design gráfico e sites empresariais profissionais.">
    <meta name="og:image" content="https://www.nexmarketing.com/img/impulso.png">
    <meta name="og:url" content="https://www.nexmarketing.com">
    <meta name="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NEX - Marketing Digital">
    <meta name="twitter:description" content="Maximize o alcance da sua marca com estratégias de impulsionamento eficazes e direcionadas. Desenvolva páginas otimizadas para conversão, construa e-commerce, gerencie CRM, design gráfico e sites empresariais profissionais.">
    <meta name="twitter:image" content="https://www.nexmarketing.com/img/impulso.png">
    <meta name="twitter:site" content="@seuTwitter">

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">

    <!-- AOS (Animate On Scroll) -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Favicon -->
    <link rel="icon" href="img/impulso.png" sizes="16x16" type="image/x-icon">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style2.css">

    <script src="https://cdn.jsdelivr.net/npm/instafeed.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>


    <body>

<?php include_once "includes/header.php" ?>


<div class="container ">
    <h1 class="mb-2 text-center title3 mt51">Contato</h1>
    <p class="text-center mb52 tex mt-0">Entre em contato com nosso time de atendimento</p>

    </div>
    <img class="w-100 separator-dark mt-title" src="img/separator-bottom.svg" alt="separator">

    <div class="container">
    <div class="row mt-4 mb-5 d-flex align-items-center">
   
    <div class="col-md-6 p-5 text-center justify-content-center align-items-center">
        <img src="img/nex2.fw.png" alt="" class="img-fluid mt-0">

        <h3 class="fw-bold mt-5">Entre em contato via WhatsApp</h3>
        <button class="btn btn-primary w-100" onclick="window.open('https://wa.me/5533999022828', '_blank')">
    <i class="fab fa-whatsapp"></i> ENTRAR EM CONTATO VIA WHATSAPP
</button>
    </div>

    <div class="col-md-6">


    <form action="process_contact.php" method="post">
    <div class="form-group">
        <input type="text" class="form-control form-novo mb-4" name="name" placeholder="Nome" required>
    </div>
    <div class="form-group">
        <input type="email" class="form-control form-novo mb-4" name="email" placeholder="E-mail" required>
    </div>

    <div class="form-group">
        <input type="phone" class="form-control form-novo mb-4" name="phone" placeholder="Telefone" required>
    </div>

    <div class="form-group">
        <textarea class="form-control form-novo mb-4" name="message" placeholder="Mensagem" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-contact2 w-100">Enviar</button>
</form>

        


    </div>

<div class="text-center mt-5">
        <div id="instafeed"></div>
        </div>


<script type="text/javascript">
    var feed = new Instafeed({
        accessToken: 'IGQWRQbmRaSjBrOTNFN2puQjlVcEMydEx3NHQwaVFwRmV0ZAFI2TTlCQzRzakpjYjJUYm5CYVlPa2QzTXBaMVhvQ2s5ckFneFVEX2ZAWT0FwejlFcWdxb3NyTHhlWkplaW1rS1BMWUpVcGFCNWtENWdTbUdud2pFZAXMZD',
        limit: 6, // Número de imagens a serem exibidas
        template: '<a href="{{link}}" target="_blank"><img title="{{caption}}" src="{{image}}" /></a>'
    });
    feed.run();
</script>



    </div>

    <footer class="text-center align-items-center justify-content-center">
<img class="w-100 separator-dark mt-title" src="img/separator-top.svg" alt="separator">
    <div class="container mt-title">
            <img src="img/nex.fw.png" class="img-fluid mb-3" alt="">
            <p class="footer-text">Para transformar sua empresa ou carreira, a imagem profissional é essencial. Com a NEX Marketing Digital, você garante uma presença que transmite confiança e credibilidade, fazendo da NEX a escolha certa para o seu sucesso.</p>
    <div class="row text-center align-items-center justify-content-center">
        <div class="icon-container2 cont">
            <a href="https://www.instagram.com/nexmarketingdigital" target="_blank">
                <i class="fa-brands fa-instagram fa-2x"></i>
            </a>
        </div>
        <div class="icon-container2 cont">
            <a href="https://wa.me/5533999022828" target="_blank">
                <i class="fa-brands fa-whatsapp fa-2x"></i>
            </a>
        </div>
    </div>

    <div class="separator-animated animated-true mt--50 mb--50"></div>

    <h6 class="fw-bold mt-4">NEX Marketing Digital</h6>
    <p class="mb-4">© Copyright NEX Marketing Digital - Todos os direitos reservados.</p>
    </div>
</footer>


<script>
document.addEventListener("DOMContentLoaded", function() {
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');

    if (status === 'success') {
        Swal.fire({
            title: 'Sucesso!',
            text: 'Contato enviado com sucesso.',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    } else if (status === 'error') {
        Swal.fire({
            title: 'Erro!',
            text: 'Ocorreu um erro ao enviar o contato.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    }
});
</script>


        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
