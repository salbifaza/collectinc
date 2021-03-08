<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<head>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script src="https://unpkg.com/scrollreveal"></script>
</head>


<div class="py-5 text-center text-info background-info" style="">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-md-12">
                <!--- Edit disini --->
                <h1 class="mb-3 animate__animated animate__fadeInDown animate__slow" contenteditable="true">The Pioneers</h1>
                <p>Little team with big dreams behind Collect.inc</p>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <!--- Edit disini --->
            <div class="col-lg-4 col-md-6 p-4 animate__animated animate__zoomIn animate__delay-1s"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" alt="Card image cap" width="200" src="<?= base_url("img/bella.jpg") ?>">
                <h4> <b>Aulia Salsabella S.</b> </h4>
                <p class="mb-0">"A small progress is still a progress"</p>
            </div>
            <!--- Edit disini --->
            <div class="col-lg-4 col-md-6 p-4 animate__animated animate__zoomIn animate__delay-1s"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="<?= base_url("img/putri.jpeg") ?>" alt="Card image cap" width="200">
                <h4> <b>Putri Risa F.</b> </h4>
                <p class="mb-0">Co-founder</p>
            </div>
            <!--- Edit disini --->
            <div class="col-lg-4 p-4 animate__animated animate__zoomIn animate__delay-1s"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="<?= base_url("img/background.png") ?>" width="200">
                <h4> <b>Salbi Faza R.</b> </h4>
                <p class="mb-0">HR Manager</p>
            </div>
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