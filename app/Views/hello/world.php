<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<br>
<br>
<br>

<section id="judul">
    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-lg-6">
                <br><br><br><br><br><br><br><br>
                <h1 class="animate__animated animate__fadeInDown animate__slow">Collect your food waste</h1>
                <h1 class="animate__animated animate__fadeInDown animate__slow">Combat climate change</h1>
                <br>
                <a href="learn_more.php" class="btn btn-dark animate__animated animate__fadeIn animate__slow">Learn more</a>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url("img/1.PNG") ?>" class="img-fluid animate__animated animate__zoomIn">
            </div>
        </div>
    </div>
</section>


<br>
<hr>

<br>

<!--- Container --->
<section>
    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <div class="working">
                    <h1>How Collect.inc Works</h1>
                </div>
            </div>
        </div>
    </div>
    <br>
</section>


<div class="container-fluid padding">
    <div class="works">
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
</div>


<hr>
<br>
<br>


<br>
<!---What can i sell--->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="disyplay-4">What Can I Sell?</h1>
        </div>
    </div>
</div>
<br>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row" style="text-align:center">
                            <div class="col-md-4 mb-3 sell1">
                                <div class="card">
                                    <img class="img-fluid" src="<?= base_url("img/fo2.png") ?>">
                                    <div class="card-body">
                                        <h4 class="card-title">Unfresh Groceries</h4>
                                        <p class="card-text">Fruits and vegetables that you haven't eaten because it's either unfresh or rotten</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 sell2">
                                <div class="card">
                                    <img class="img-fluid" src="<?= base_url("img/fo1.png") ?>">
                                    <div class="card-body">
                                        <h4 class="card-title">Kitchen Waste</h4>
                                        <p class="card-text">Waste from your cooking endeavors</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3 sell3">
                                <div class="card">
                                    <img class="img-fluid" src="<?= base_url("img/fo3.png") ?>">
                                    <div class="card-body">
                                        <h4 class="card-title">Leftover Food</h4>
                                        <p class="card-text">Food that you didn't get to finish</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>

<!--- tiga Bootstrap --->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="disyplay-4">Where Will I Sell To?</h1>
        </div>
    </div>
</div>


<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class=innerimage>
                <img src="<?= base_url("img/part1.PNG") ?>" class="img-fluid">
                <h3>Biogas</h3>
                <p>
                    Anaerobic processing of food waste into biogas can be a solution for safe management of food waste and produce electrical energy based on environmentally friendly technology.​
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class=innerimage>
                <img src="<?= base_url("img/part2.PNG") ?>" class="img-fluid">
                <h3>Compost</h3>
                <p>
                    Organic substances in food waste can be recycled into compost which has high economic value. The resulting compost can increase soil nutrients, stabilize soil aggregates, and improve soil drainage and aeration. ​
                </p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class=innerimage>
                <img src="<?= base_url("img/part3.PNG") ?>" class="img-fluid">
                <h3>Biomaterial</h3>
                <p>
                    Food waste, especially vegetables can be used as a medium for microbial growth that produces microbial cellulose. This microbial cellulose is used as a biomaterial that imitates leather.​
                </p>
            </div>
        </div>
    </div>
    <hr class="my-4">
</div>

<!--- Benefits --->
<div class="container-fluid padding">
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="disyplay-4">Benefits</h1>
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
                    <h3 class="card-title">
                        Earn Money
                    </h3>
                    <p class="card-text">
                        By selling your food waste, you can earn money instead of losing them! What a win win!
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?= base_url('img/bene2.png') ?>" alt="" class="card-imd-top">
                <div class="card-body">
                    <h3 class="card-title">
                        Gain Points
                    </h3>
                    <p class="card-text">
                        Not only would you earn money for each order, but you'd also gain points that you can redeem with voucher!
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?= base_url('img/bene3.png') ?>" alt="" class="card-imd-top">
                <div class="card-body">
                    <h4 class="card-title">Save the Earth</h4>
                    <p class="card-text">
                        Every food waste you sold to us would diminish greenhouse gas emission prodused by decomposition
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
        <br><br><br><br><br><br><br><br>
            <h1>Small action that the Earth</h1>
            <h1>would thank you for</h1>
            <br>
            <a href="<?= site_url('auth/register') ?>" class="btn btn-dark btn-lg btn-block animate__animated animate__fadeIn animate__slow">I'm in!</a>
        </div>
        <div class="col-lg-6">
            <img src="<?= base_url("img/end.PNG") ?>" class="img-fluid">
        </div>
    </div>
</div>

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
<br>

<!--- Footer --->
<hr class="light">
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
            <img src="<?= base_url("img/logo_collect.PNG") ?>" class="img-fluid">
                <p>Collect your food waste</p>
                <p>Combat climate change</p>
            </div>
            <div class="col-md-4">
                <h5>Information</h5>
                <hr class="light">
                <p>About Us</p>
                <p>Coming Soon</p>
                <p>Become Our Partner</p>
            </div>
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <hr class="light">
                <p>No. Telp: 087739286151</p>
                <p>e-mail: inquiries@collect.inc</p>
                <p>Alamat: Jl. Ganesa No. 10, Bandung</p>
            </div>
            <div class="col-12">
                <hr class="light">
                <h5>&copy;Collect.inc 2021</h5>
                </hr>
            </div>
        </div>
    </div>
</footer>

<script>
    window.sr = ScrollReveal();
    sr.reveal('.navbar', {
        duration: 2000,
        origin: 'bottom'
    });
    window.sr = ScrollReveal();
    sr.reveal('.working', {
        duration: 2000,
        origin: 'bottom',
        viewFactor: 0.5
    });
    sr.reveal('.works', {
        duration: 2000,
        origin: 'left',
        viewFactor: 0.5
    });
    sr.reveal('.disyplay-4', {
        duration: 2000,
        origin: 'left',
        viewFactor: 0.5
    });
    sr.reveal('.card', {
        duration: 2000,
        origin: 'top',
        viewFactor: 0.5,
        interval: 1000
    });
    sr.reveal('.innerimage', {
        duration: 2000,
        origin: 'top',
        viewFactor: 0.5,
        interval: 1000
    });
</script>
<?= $this->endSection() ?>