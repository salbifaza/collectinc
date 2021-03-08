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
        <div class="col-6">
            <img src="<?= base_url("img/part1.PNG") ?>" class="img-fluid">
            <h3>01. More Driver</h3>
            <p>
                With greater location range as we go, we'll try to add more drivers to our team so that you can make your order at Collect.inc more easily!
            </p>
        </div>
        <div class="col-6">
            <img src="<?= base_url("img/part2.PNG") ?>" class="img-fluid">
            <h3>02. More Partner</h3>
            <p>
                To add to our three brilliant partners (biogas, compost, and biomaterial), we'll try to reach more partners who'd be able to turn your food waste into something as valuable!
            </p>
        </div>
        <div class=" col-6">
            <img src="<?= base_url("img/part3.PNG") ?>" class="img-fluid">
            <h3>03. 1 Transaction 1 Tree</h3>
            <p>
                By teaming up with local NGOs and governmental organizations, we'll try to make a "1 Transaction 1 Tree" campaign to help reduce the cause of climate change.
            </p>
        </div>
        <div class="col-6">
            <img src="<?= base_url("img/part3.PNG") ?>" class="img-fluid">
            <h3>04. More Payment Methods</h3>
            <p>
                For your convinience, we'll try to partner with more e-money companies so your payment is easy-peasy!
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