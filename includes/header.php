<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand me-auto" href="index">
            <img src="img/nex2.fw.png" alt="Logo" width="150" height="auto" class="d-inline-block align-text-top">
        </a>

        <!-- Botão para mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links de Navegação -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Logo no topo do menu expandido -->
            <div class="navbar-logo d-lg-none text-center mb-3">
                <a class="navbar-brand" href="index">
                    <img src="img/nex2.fw.png" alt="Logo" width="250" height="auto">
                </a>
            </div>

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index">INÍCIO</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="precos">PREÇOS & PLANOS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="clientes">NOSSOS CLIENTES</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="contatos">CONTATO</a>
                </li>
            </ul>
        </div>

        <!-- Número de telefone no desktop -->
        <div class="d-none d-lg-block ms-auto">
            <a href="tel:+5533999022828" class="nav-link text-white"><i class="fa-solid fa-phone fa-fw"></i> (33) 9 9902-2828</a>
        </div>

    </div>
</nav>


<script>
// Obtém a URL da página atual
const currentLocation = location.href;

// Seleciona todos os links de navegação
const menuItems = document.querySelectorAll('.nav-link');

// Itera sobre cada item de menu para adicionar a classe 'active' ao link correspondente
menuItems.forEach(item => {
    if (item.href === currentLocation) {
        item.classList.add('active');
    } else {
        item.classList.remove('active');
    }
});
</script>

<style>

/* Estilos gerais do navbar */
.navbar {
    height: 90px;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    background-color: #070710 !important;
}

.navbar-brand {
    display: flex;
    align-items: center;
}

.nav-link {
    font-size: 18px;
    padding-top: 28px;
    color: #ffffff; /* Cor padrão dos links */
    padding-bottom: 25px; /* Ajustando o padding para alinhar com a borda da navbar */
    transition: border-color 0.3s ease;
}

.nav-link .fa-phone {
    font-size: 13px;
    margin-right: 6px;
}

.nav-link.active {
    border-bottom: 2px solid #ff00ff; /* Borda rosa embaixo do link ativo */
    color: #ffffff; /* Cor do link ativo */
}

.nav-link:hover {
    border-bottom: 2px solid #ff00ff; /* Borda rosa ao passar o mouse */
}

.bg-dark {
    background-color: #141421;
}

/* Estilos específicos para dispositivos móveis */
@media (max-width: 991px) {
    .navbar-collapse {
        height: 100vh; /* Faz o menu ocupar toda a altura da tela no mobile */
        width: 100vw; /* Faz o menu ocupar toda a largura da tela */
        background-color: #141480; /* Cor de fundo para combinar com o tema escuro */
        position: fixed; /* Fixa o menu na tela */
        top: 0;
        left: 0;
        z-index: 1050; /* Assegura que o menu fique acima de outros elementos */
        display: flex;
        flex-direction: column;
        justify-content: center; /* Alinha verticalmente o conteúdo */
        transition: none !important; /* Remove a transição para que a expansão seja instantânea */
    }

    .navbar-logo {
        display: block; /* Mostra a logo no mobile */
    }

    .navbar-nav {
        display: flex;
        flex-direction: column;
        align-items: center; /* Centraliza horizontalmente os itens do menu */
        width: 100%; /* Faz com que a lista de navegação ocupe toda a largura do menu */
    }

    .d-lg-none {
        display: block; /* Mostra o número de telefone no mobile */
    }

    .d-lg-block {
        display: none; /* Esconde o número de telefone no desktop */
    }
}


</style>
