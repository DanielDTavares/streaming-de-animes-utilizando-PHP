<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Streaming</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsivel.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!--incio do cabecalho de streaming-->
    <header>
        <div class="nav conteiner">
            <!--incio da logo do sie de streaming-->
            <a href="index.php" class="logo" title="streaming animes">
                ANIME<span>Flix</span>
            </a>
            <!--fim da logo do site de streaming-->

            <!--incio busca do site de streaming-->
            <div class="busca-site">
                <input type="search" id="busca-input" placeholder="Buscar Animes">
                <i class="bx bx-search"></i>
            </div>
            <!--fim busca do site de streaming-->

            <!--incio do usuario do site de streaming-->
            <a class="user">
                <img onclick="clickMenu()" src="./img/anime-foto-perfil.png" alt="Esse é um Exemplo" class="user-img">
            </a>
            <div class="icon-container" id="iconContainer">
                <a href="https://www.instagram.com/dan1eltav/" target="_blank"><i class='bx bxl-instagram'></i></a>
                <a href="https://wa.me/63991389543" target="_blank"><i class='bx bxl-whatsapp'></i></a>
                <a href="#"><i class='bx bxl-facebook-circle'></i></a>
            </div>
            <!--fim do usuario do site de streaming-->

            <!--incio do menu principal do site de streaming-->
            <div class="navbar">
                <a href="index.php" class="nav-link">
                    <i class="bx bx-home"></i>
                    <span class="nav-link-title">Home</span>
                </a>

                <a href="#popular" class="nav-link">
                    <i class="bx bxs-hot"></i>
                    <span class="nav-link-title">Em Alta</span>
                </a>

                <a href="#animes" class="nav-link">
                    <i class="bx bx-compass"></i>
                    <span class="nav-link-title">Explore</span>
                </a>

                <a href="animes.php" class="nav-link">
                    <i class="bx bx-tv"></i>
                    <span class="nav-link-title">Animes</span>
                </a>

                <a href="#home" class="nav-link">
                    <i class="bx bx-heart"></i>
                    <span class="nav-link-title">Favoritos</span>
                </a>
            </div>
            <!--fim do menu principal do site de streaming-->

        </div>
    </header>
    <!--fim do cabecalho de streaming-->

         <!--inicio animes-->
    <section class="filmes conteiner" id="movies">

<!--inicio topo animes-->
<div class="topoFilmes">
    <h2 class="topoTitulo"> Animes</h2>
</div>
<!--fim topo animes-->

<!--inicio corpo animes-->
<div class="filmes-content">
    <div class="filme-box">
        <img src="./img/clover.jpg" alt="" class="filme-box-img">
        <div class="box-titulo">
            <h2 class="titulo-filme">Black Clover</h2>
            <span class="categoria-filme">Ação</span>
            <a href="episodes.php" class="ver-btn play-btn">
                <i class='bx bx-right-arrow'></i>
            </a>
        </div>
    </div>
    <!-- fim box filme -->
    <div class="filme-box">
        <img src="./img/chainsawman.jpg" alt="" class="filme-box-img">
        <div class="box-titulo">
            <h2 class="titulo-filme">Chainsawman</h2>
            <span class="categoria-filme">Ação</span>
            <a href="episodes.php" class="ver-btn play-btn">
                <i class='bx bx-right-arrow'></i>
            </a>
        </div>
    </div>
    <!-- fim box filme -->
    <div class="filme-box">
        <img src="./img/baki.jpg" alt="" class="filme-box-img">
        <div class="box-titulo">
            <h2 class="titulo-filme">Baki Hama</h2>
            <span class="categoria-filme">Ação</span>
            <a href="episodes.php" class="ver-btn play-btn">
                <i class='bx bx-right-arrow'></i>
            </a>
        </div>
    </div>
    <!-- fim box filme -->
    <div class="filme-box">
        <img src="./img/hell.jpeg" alt="" class="filme-box-img">
        <div class="box-titulo">
            <h2 class="titulo-filme">Hell's Paradise</h2>
            <span class="categoria-filme">Ação</span>
            <a href="episodes.php" class="ver-btn play-btn">
                <i class='bx bx-right-arrow'></i>
            </a>
        </div>
    </div>
    <!-- fim box filme -->
    <div class="filme-box">
        <img src="./img/naruto.jpg" alt="" class="filme-box-img">
        <div class="box-titulo">
            <h2 class="titulo-filme">Naruto</h2>
            <span class="categoria-filme">Ação</span>
            <a href="episodes.php" class="ver-btn play-btn">
                <i class='bx bx-right-arrow'></i>
            </a>
        </div>
    </div>
    <!-- fim box filme -->
    <div class="filme-box">
        <img src="./img/nanatsu.png" alt="" class="filme-box-img">
        <div class="box-titulo">
            <h2 class="titulo-filme">Nanatsu no Taisai</h2>
            <span class="categoria-filme">Ação</span>
            <a href="episodes.php" class="ver-btn play-btn">
                <i class='bx bx-right-arrow'></i>
            </a>
        </div>
    </div>
    <!-- fim box filme -->
    <div class="filme-box">
        <img src="./img/jojo.jpeg" alt="" class="filme-box-img">
        <div class="box-titulo">
            <h2 class="titulo-filme">Jojo's Bizarre Adiventure</h2>
            <span class="categoria-filme">Ação</span>
            <a href="episodes.php" class="ver-btn play-btn">
                <i class='bx bx-right-arrow'></i>
            </a>
        </div>
    </div>
    <!-- fim box filme -->
    <div class="filme-box">
        <img src="./img/piece.jpeg" alt="" class="filme-box-img">
        <div class="box-titulo">
            <h2 class="titulo-filme">One Piece</h2>
            <span class="categoria-filme">Ação</span>
            <a href="episodes.php" class="ver-btn play-btn">
                <i class='bx bx-right-arrow'></i>
            </a>
        </div>
    </div>
    <!-- fim box filme -->

    <!-- fim box filme -->
</div>
<!--fim corpo animes-->
</section>
<!--fim animes-->


    <!--inicio do rodape do site-->
    <footer class="direitos">
        <a href="https://www.instagram.com/dan1eltav/" target="_blank">
            <p>&#169; Todos os Direitos Reservados a LwisTECH</p>
        </a>
    </footer>
    <!--fim do rodape do site-->


    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="./js/scripts.js"></script>
    <script src="./js/swiper-bundle.min.js"></script>
    <script>
        function clickMenu() {
            const iconContainer = document.getElementById('iconContainer');
            iconContainer.classList.toggle('show');
        }
    </script>


</body>

</html>