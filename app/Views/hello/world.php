<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<br>

<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-lg-6">
            <h1>Collect your food waste</h1>
            <h1>Combat climate change</h1>
        </div>
        <div class="col-lg-6">
            <img src="<?= base_url("img/1.PNG") ?>" class="img-fluid">
        </div>
    </div>
</div>

<br>
<hr>

<br>

<!--- Container --->
<div class="container-fluid padding">
    <div id="slides" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url("img/step1.jpg") ?>" alt="First slide" class="img-fluid">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url("img/step2.jpg") ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url("img/step3.jpg") ?>" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url("img/step4.jpg") ?>" alt="Fourth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url("img/step5.jpg") ?>" alt="Fifth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url("img/step6.jpg") ?>" alt="Sixth slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<hr>
<br>

<div class="container text-center">
    <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
            <div class="carousel-inner w-100" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="http://placehold.it/380?text=1">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="http://placehold.it/380?text=2">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="http://placehold.it/380?text=3">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="http://placehold.it/380?text=4">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="http://placehold.it/380?text=5">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="http://placehold.it/380?text=6">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <hr class="my-5">
</div>

<!--- tiga Bootstrap --->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-bold"></i>
            <h3>BOOTSTRAP</h3>
            <p>Built with the latest version of Bootstrap</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-bold"></i>
            <h3>BOOTSTRAP</h3>
            <p>Built with the latest version of Bootstrap</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-bold"></i>
            <h3>BOOTSTRAP</h3>
            <p>Built with the latest version of Bootstrap</p>
        </div>
    </div>
    <hr class="my-4">
</div>

<!--- Benefits --->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="disyplay-4">BENEFITS</h1>
        </div>
    </div>
</div>
<br>

<!--- Cards --->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img src="<?= base_url('img/bene1.png') ?>" alt="" class="card-imd-top">
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <p class="card-text">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro rem sapiente dolorum veniam voluptates dicta similique sed numquam incidunt? Eum dignissimos beatae numquam magni architecto ducimus quae rerum eligendi! Ut!
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?= base_url('img/bene2.png') ?>" alt="" class="card-imd-top">
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <p class="card-text">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro rem sapiente dolorum veniam voluptates dicta similique sed numquam incidunt? Eum dignissimos beatae numquam magni architecto ducimus quae rerum eligendi! Ut!
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?= base_url('img/bene3.png') ?>" alt="" class="card-imd-top">
                <div class="card-body">
                    <h4 class="card-title"></h4>
                    <p class="card-text">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro rem sapiente dolorum veniam voluptates dicta similique sed numquam incidunt? Eum dignissimos beatae numquam magni architecto ducimus quae rerum eligendi! Ut!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>


<!--- Akhiran --->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-lg-6">
            <h2>If you built it...</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore repudiandae deserunt dolores odio cumque ut debitis earum ratione veniam eius fugit vitae laborum, reprehenderit corporis reiciendis repellendus dolorem enim. Incidunt?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa non corrupti rem temporibus, maxime perspiciatis soluta, magnam est maiores quidem aspernatur pariatur laborum! Iusto dignissimos doloribus nisi voluptate, architecto obcaecati.</p>
        </div>
        <div class="col-lg-6">
            <img src="<?= base_url("img/background.png") ?>" class="img-fluid">
        </div>
    </div>
</div>

<br>
<br>

<!--- Connect --->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect</h2>
        </div>
        <div class="col-12 social padding">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>

<!--- Footer --->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <img src="<?= base_url("img/logo.png") ?> " alt="">
                <hr class="light">
                <p>No. Telp</p>
                <p>e-mail</p>
                <p>Alamat</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Our Hour</h5>
                <hr class="light">
                <p>Monday: 9am - 5pm</p>
                <p>Saturday: 10am - 5pm</p>
                <p>Sunday: closed</p>
            </div>
            <div class="col-md-4">
                <hr class="light">
                <h5>Our Hour</h5>
                <hr class="light">
                <p>Alamat</p>
                <p>Alamat</p>
                <p>Alamat</p>
            </div>
            <div class="col-12">
                <hr class="light">
                <h5>&copy;Collect.inc 2021</h5>
                </hr>
            </div>
        </div>
    </div>
</footer>
<?= $this->endSection() ?>