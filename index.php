<?php
$title = "Página Inicial";
include_once "header.php";
?>

<main>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/1140/400/?1" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/1140/400/?2" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/1140/400/?3" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>


    <div class="container py-5">
        <h2 class="pb-2 border-bottom">Ícones em Destaque</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">

                <div>
                    <h3 class="fs-2 text-body-emphasis">Título Principal</h3>
                    <p>Este é um breve texto explicativo. Aqui você pode descrever mais detalhes sobre esta seção.</p>
                    <a href="#" class="btn btn-primary">
                        Saiba Mais
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">

                <div>
                    <h3 class="fs-2 text-body-emphasis">Funcionalidade Extra</h3>
                    <p>Adicione uma breve descrição para explicar a funcionalidade e sua importância para o usuário.</p>
                    <a href="#" class="btn btn-primary">
                        Ver Mais
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">

                <div>
                    <h3 class="fs-2 text-body-emphasis">Ferramentas Úteis</h3>
                    <p>Descrição breve sobre a importância dessas ferramentas para melhorar a experiência do usuário.</p>
                    <a href="#" class="btn btn-primary">
                        Descubra
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>

</main>

<?php
include_once "footer.php";
?>