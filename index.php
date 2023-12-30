<?php

$title="Home";

?>
<head>
    <?php include_once("./layout/head.php"); ?>
</head>

<body>
    <!-- header -->
    <header>
        <?php include_once("./layout/header.php"); ?>
    </header>

    <!-- main -->
    <main>
        <!-- Landing page -->
        <section>
            <div id="carouselExampleCaptions" class="carousel slide ">
                <!-- indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <!-- inner -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/landing/slide-1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/landing/slide-2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/landing/slide-1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <!-- next prev -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </section>

        <!-- Category slide -->
        <section class="mt-3" id="category">
            <h2 class="text-center">Category</h2>
            <div class="container shadow rounded mt-3 p-3 bg-danger-subtle">

            </div>
        </section>
    </main>

    <!-- footer -->
    <footer class="bg-body-tertiary text-center text-lg-start mt-4" >
        <?php include_once("./layout/footer.php"); ?>
    </footer>
