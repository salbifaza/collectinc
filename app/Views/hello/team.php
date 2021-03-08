<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<div class="py-5 text-center text-info background-info">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-md-12 animate__animated animate__fadeInDown animate__slow">
                <!--- Edit disini --->
                <h1 class="mb-3" contenteditable="true">The Pioneers</h1>
                <p>A little team with big dreams behind Collect.inc</p>
                <br>
            </div>
        </div>
        <div class="row animate__animated animate__zoomIn animate__delay-1s">
            <!--- Edit disini --->
            <div class="col-lg-4 col-md-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" alt="Card image cap" width="200" src="<?= base_url("img/bella.jpg") ?>">
                <h4> <b>Aulia Salsabella S.</b> </h4>
                <h6>---- Oseanografi ----</h6>
                <p>"A small progress is still a progress"</p>
            </div>
            <!--- Edit disini --->
            <div class="col-lg-4 col-md-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="<?= base_url("img/putri.jpeg") ?>" alt="Card image cap" width="200">
                <h4> <b>Putri Risa F.</b> </h4>
                <h6>---- Biologi ----</h6>
                <p>"I trust my choice. I trust my decision"</p>
            </div>
            <!--- Edit disini --->
            <div class="col-lg-4 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="<?= base_url("img/salbi.jpg") ?>" width="200">
                <h4> <b>Salbi Faza R.</b> </h4>
                <h6>---- Oseanografi ----</h6>
                <p>"Everything happens for a reason"</p>
            </div>
        </div>
    </div>
</div>

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

<?= $this->endSection() ?>