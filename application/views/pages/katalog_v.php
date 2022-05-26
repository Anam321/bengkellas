<!-- Page Header Start -->
<div class="container-fluid bg-secondary py-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Katalog</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-outline-primary" href="">Home</a>
                    <i class="fas fa-angle-double-right text-primary mx-2"></i>
                    <a class="btn btn-outline-primary disabled" href="">Katalog</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->


<!-- Blog Start -->
<div class="container-fluid bg-light pt-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Katalog</h6>
                <h1 class="mb-4">Katalog</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li onclick="listproduk()" class="btn btn-outline-primary m-1 active" data-filter="*">All</li>
                    <?php foreach ($kategori as $kategori) : ?>
                        <li onclick="orderby('<?= $kategori->kategori ?>')" class="btn btn-outline-primary m-1"><?= $kategori->kategori ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
        <div class="row pb-3" id="listkatalog">

        </div>
    </div>
</div>