<?= $this->extend('layout') ?>
<?= $this->section('content') ?>


<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<br>
<br>
<div class="row text-center">
    <div class="mx-auto col-md-12">
        <!--- Edit disini --->
        <h1 class="mb-3 animate__animated animate__fadeInDown animate__slow" contenteditable="true">What's to come from Collect.inc</h1>
        <p class="animate__animated animate__fadeIn animate__slow">We're always developing Collect.inc to be better and to accomodate greater cause for climate change. These are
            a few things that's underway, which excites you the most?
        </p>
    </div>
</div>
<br>

<div class="row">
  <div class="col text-center">
    <img src="<?= base_url("img/coms1.PNG") ?>" class="img-fluid animate__animated animate__zoomIn animate__delay-1s">
            <h2 class="img-fluid animate__animated animate__slideInDown animate__delay-1s">01.</h2>
            <h4 class="img-fluid animate__animated animate__slideInDown animate__delay-1s">More Drivers</h4>
            <p class="text-justify animate__animated animate__fadeIn animate__delay-1s"> 
                With greater location range as we go, we'll try to add more drivers to our team so that you can make your order at Collect.inc more easily!
            </p>
  </div>
  <div class="col text-center">
     <img src="<?= base_url("img/coms2.PNG") ?>" class="img-fluid animate__animated animate__zoomIn animate__delay-2s">
            <h2 class="img-fluid animate__animated animate__slideInDown animate__delay-2s">02.</h2>
            <h4 class="img-fluid animate__animated animate__slideInDown animate__delay-2s">More Partners</h4>
            <p class="text-justify animate__animated animate__fadeIn animate__delay-2s"> 
                To add to our three partners (biogas, compost, and biomaterial), we'll try to reach more partners who'd be able to turn your food waste into something as valuable!
            </p>
  </div>
  <div class="col text-center">
            <img src="<?= base_url("img/coms3.PNG") ?>" class="img-fluid animate__animated animate__zoomIn animate__delay-3s">
            <h2 class="img-fluid animate__animated animate__slideInDown animate__delay-3s">03.</h2>
            <h4 class="img-fluid animate__animated animate__slideInDown animate__delay-3s">1 Transaction 1 Tree</h4>
            <p class="text-justify animate__animated animate__fadeIn animate__delay-3s"> 
                By teaming up with local NGOs and governmental organizations, we'll try to make a "1 Transaction 1 Tree" campaign to help reduce the cause of climate change.
            </p>
  </div>
  <div class="col text-center">
            <img src="<?= base_url("img/coms4.PNG") ?>" class="img-fluid animate__animated animate__zoomIn animate__delay-4s">
            <h2 class="img-fluid animate__animated animate__slideInDown animate__delay-4s">04.</h2>
            <h4 class="img-fluid animate__animated animate__slideInDown animate__delay-4s">New Payment Methods</h4>
            <p class="text-justify animate__animated animate__fadeIn animate__delay-4s"> 
                For your convinience, we'll try to partner with more e-money companies so your payment is easy-peasy!
            </p>
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
    sr.reveal('.innerimage', {
        duration: 2000,
        origin: 'top',
        viewFactor: 0.5,
        interval: 1000
    });
</script>

<?= $this->endSection() ?>