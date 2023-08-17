<?php echo $this->extend('index'); ?>
<?php echo $this->section('content'); ?>

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="img/img1.avif" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/img2.avif" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/img3.avif" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

<?php echo $this->endSection(); ?>
