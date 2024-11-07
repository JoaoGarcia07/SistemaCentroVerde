<?php
$title = "HOME";
include "includes/header.php";
?>

<div class="main">
    <div class="sugestao-content">
        <div class="sugestao-container">
            <div class="sugestao-text">
                <p>Tem um parque favorito ou conhece uma área verde que merece destaque? Indique aqui! Sua sugestão pode ajudar a enriquecer nosso site com novas opções de lazer e natureza para todos aproveitarem."</p>
            </div>
            <div class="sugestao-form">
                <img src="" alt="">
                <form action="">
                    <h1>Nome:</h1>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome..." required>
                    <h1>Cidade:</h1>
                    <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade..." required>
                    <h1>Estado:</h1>
                    <input type="text" id="estado" name="estado" placeholder="Digite seu estado..." required>
                    <h1>Mensagem:</h1>
                    <textarea name="message" id="message" placeholder="Digite sua sugestão..." required></textarea>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include "includes/footer.php";
?>