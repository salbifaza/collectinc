<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<br>
<br>
<br>
<div class="row">
    <div class="mx-auto col-md-12">
        <!--- Edit disini --->
        <h1 class="mb-3 animate__animated animate__fadeInDown animate__slow" contenteditable="true">What's to come from Collect.inc</h1>
        <p>We're always developing Collect.inc to be better and to accomodate greater cause for climate change. These are
            a few things that's underway, which excites you the most?
        </p>
    </div>
</div>

<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-sm-6">
            <img src="<?= base_url("img/part1.PNG") ?>" class="img-fluid">
            <h3>01. More Driver</h3>
            <p>
                Anaerobic processing of food waste into biogas can be a solution for safe management of food waste and produce electrical energy based on environmentally friendly technology.​
            </p>
        </div>
        <div class="col-sm-6">
            <img src="<?= base_url("img/part2.PNG") ?>" class="img-fluid">
            <h3>02. More Partner</h3>
            <p>
                Organic substances in food waste can be recycled into compost which has high economic value. The resulting compost can increase soil nutrients, stabilize soil aggregates, and improve soil drainage and aeration. ​
            </p>
        </div>
        <div class=" col-sm-6">
            <img src="<?= base_url("img/part3.PNG") ?>" class="img-fluid">
            <h3>Biomaterial</h3>
            <p>
                Food waste, especially vegetables can be used as a medium for microbial growth that produces microbial cellulose. This microbial cellulose is used as a biomaterial that imitates leather.​
            </p>
        </div>
        <div class="col-sm-6">
            <img src="<?= base_url("img/part3.PNG") ?>" class="img-fluid">
            <h3>Biomaterial</h3>
            <p>
                Food waste, especially vegetables can be used as a medium for microbial growth that produces microbial cellulose. This microbial cellulose is used as a biomaterial that imitates leather.​
            </p>
        </div>
    </div>
    <hr class="my-4">
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