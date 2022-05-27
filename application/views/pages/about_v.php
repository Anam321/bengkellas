<?php
function waktu_lalu($timestamp)
{
    $selisih = time() - strtotime($timestamp);
    $detik = $selisih;
    $menit = round($selisih / 60);
    $jam = round($selisih / 3600);
    $hari = round($selisih / 86400);
    $minggu = round($selisih / 604800);
    $bulan = round($selisih / 2419200);
    $tahun = round($selisih / 29030400);
    if ($detik <= 60) {
        $waktu = $detik . ' detik yang lalu';
    } else if ($menit <= 60) {
        $waktu = $menit . ' menit yang lalu';
    } else if ($jam <= 24) {
        $waktu = $jam . ' jam yang lalu';
    } else if ($hari <= 7) {
        $waktu = $hari . ' hari yang lalu';
    } else if ($minggu <= 4) {
        $waktu = $minggu . ' minggu yang lalu';
    } else if ($bulan <= 12) {
        $waktu = $bulan . ' bulan yang lalu';
    } else {
        $waktu = $tahun . ' tahun yang lalu';
    }
    return $waktu;
}
?>

<!-- Page Header Start -->
<div class="container-fluid bg-secondary py-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-primary text-uppercase">About Us</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-outline-primary" href="">Home</a>
                    <i class="fas fa-angle-double-right text-primary mx-2"></i>
                    <a class="btn btn-outline-primary disabled" href="">About Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->


<!-- About Start -->
<div class="container py-5">
    <div class="row pt-5">
        <div class="col-lg-8">
            <div class="col-lg-12">
                <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                    <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                    <h4 class="display-3 mb-3">25+</h4>
                    <h1 class="m-0">Years Experience</h1>
                </div>
            </div>
            <div class="col-lg-12 m-0 my-lg-12 pt-5 pb-8 pb-lg-4 pl-lg-8">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Learn About Us</h6>
                <h1 class="mb-4 section-title">Jasa Bengkel Las Terbaik Untuk Rumah Anda</h1>
                <p><?= $deskripsi ?></p>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-house font-weight-normal text-primary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Pembuatan Dan Perbaiakan Canopy</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-stairs font-weight-normal text-primary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Pembuatan Dan Perbaiakan Raling Tangga</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Pembuatan Dan Perbaiakan Pagar Tralis</h5>
                        </div>
                    </div>

                </div>
            </div>


            <div class="mb-5 mx-n3">
                <h3 class="mb-4 ml-3 section-title">Related Produk</h3>
                <div class="owl-carousel service-carousel position-relative">

                    <?php foreach ($B_produk as $prod) : ?>
                        <?php $text = $prod->deskripsi;
                        $limitext = word_limiter($text, 30);
                        ?>
                        <?php $id = $prod->produk_id;
                        $visitproduk = $this->db->query("SELECT * FROM section_visit WHERE produk_id='" . $id . "'")->num_rows(); ?>
                        <div class="card border-0 mx-3">
                            <img class="card-img-top" src="<?= base_url() ?>assets/upload/gallery/<?= $prod->foto ?>" alt="">
                            <div class="card-body bg-light p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <a class="btn btn-primary" href="<?= base_url() ?>katalog/detailproduk/<?= $prod->slug ?>/<?= $prod->produk_id ?>"><i class="fa fa-link"></i></a>
                                    <a href="<?= base_url() ?>katalog/detailproduk/<?= $prod->slug ?>/<?= $prod->produk_id ?>">
                                        <h5 class="m-0 ml-3 text-truncate"><?= $prod->nama_produk ?></h5>
                                    </a>
                                </div>
                                <p><?= $limitext ?></p>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-eye text-primary"></i> <?= $visitproduk ?></small>
                                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> <?= $prod->kategori ?></small>
                                    <small class="mr-3"><i class="fa fa-clock text-primary"></i> <?= waktu_lalu($prod->date_post) ?></small>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>


        <?php $this->load->view('pages/right_v') ?>
    </div>
</div>

<!-- About End -->

<!-- 
<div class="container-fluid bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Why Choose Us?</h6>
                <h1 class="mb-4 section-title">25+ Years Experience In The Interior Design Industry</h1>
                <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                <ul class="list-inline">
                    <li>
                        <h5><i class="far fa-check-square text-primary mr-3"></i>25+ Years Experience</h5>
                    </li>
                    <li>
                        <h5><i class="far fa-check-square text-primary mr-3"></i>Best Interior Design</h5>
                    </li>
                    <li>
                        <h5><i class="far fa-check-square text-primary mr-3"></i>Customer Satisfaction</h5>
                    </li>
                </ul>
                <a href="" class="btn btn-primary mt-3 py-2 px-4">View More</a>
            </div>
            <div class="col-lg-5">
                <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                    <img class="h-100" src="img/feature.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div> -->