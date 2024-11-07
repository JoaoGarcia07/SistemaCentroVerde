<?php
$title = "HOME";
include "includes/header.php";
?>

<div class="main">
    <div class="home-navbar">
        <?php
        include "includes/navbar.php";
        ?>
    </div>
    <div class="home">
        <div class="home-content">
            <div class="home-text">
                <h1>Centro Verde</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic .</p>
                <button>Ver Mais</button>
            </div>
            <div class="home-img">
                <img src="" alt="">
            </div>
        </div>
    </div>
    <hr>
    <div class="home-parques">
        <div class="home-parques-content">
            <h2>Busca por Parques populares</h2>
            <?php
            include "parque.php";
            ?>
        </div>
    </div>
    <hr>
    <div class="home-sobre">
        <div class="home-sobre-content">
            <?php
            include "sobre.php";
            ?>
        </div>
    </div>
    <hr>
    <div class="home-sugestao">
        <div class="home-sugestao-content">
            <h2>Sugestões</h2>
            <?php
            include "sugestao.php";
            ?>
        </div>
    </div>
</div>

<?php
include "includes/footer.php";
?>