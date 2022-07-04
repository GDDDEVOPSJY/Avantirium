<!DOCTYPE html>
<html lang="en">

<?php include("partials/html-head.php"); ?>

<body>
    <div class="wrapper">

        <!-- NAV HEADER -->
        <?php include("partials/nav-header.php"); ?>

        <style>
            section {
                height: 600px;
            }
        </style>
        <section id="home">
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="images/logo1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/logo1.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/logo1.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <div class="carousel-icons">
                            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                        </div>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <div class="carousel-icons">
                            <span class="carousel-control-next-icon" aria-hidden="false"></span>
                        </div>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>

        <section id="about">

        </section>

        <section id="services">

        </section>

        <section id="why-us">

        </section>

        <section id="gallery">

        </section>

        <section id="contact">

        </section>
    </div>
    <!-- FOOTER -->
    <?php include("partials/footer.php"); ?>

    <!-- ESSENTIAL SCRIPTS -->
    <?php include("partials/scripts.php"); ?>
</body>

</html>