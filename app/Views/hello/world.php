<?= $this->extend('layout') ?>
<?= $this->section('content') ?>



<br>
<br>
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
    <div class="row welcome text-center">
        <div class="col-12">
            <h1 class="disyplay-4">How Collect.inc Works</h1>
        </div>
    </div>
</div>
<br>

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
        <div class="col-6">

        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
        <div class="col-12">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="<?= base_url("img/fo2.png") ?>">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="<?= base_url("img/fo1.png") ?>">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img class="img-fluid" src="<?= base_url("img/fo3.png") ?>">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

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
            <img src="<?= base_url("img/part1.PNG") ?>" class="img-fluid">
            <h3>Biogas</h3>
            <p>
                Anaerobic processing of food waste into biogas can be a solution for safe management of food waste and produce electrical energy based on environmentally friendly technology.​
            </p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <img src="<?= base_url("img/part2.PNG") ?>" class="img-fluid">
            <h3>Compost</h3>
            <p>
                Organic substances in food waste can be recycled into compost which has high economic value. The resulting compost can increase soil nutrients, stabilize soil aggregates, and improve soil drainage and aeration. ​
            </p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <img src="<?= base_url("img/part3.PNG") ?>" class="img-fluid">
            <h3>Biomaterial</h3>
            <p>
                Food waste, especially vegetables can be used as a medium for microbial growth that produces microbial cellulose. This microbial cellulose is used as a biomaterial that imitates leather.​
            </p>
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
            <h1>Small action</h1>
            <h1>that the Earth</h1>
            <h1>would thank you for</h1>
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