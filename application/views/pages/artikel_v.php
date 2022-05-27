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


<div class="container-fluid bg-secondary py-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Artikel</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-outline-primary" href="">Home</a>
                    <i class="fas fa-angle-double-right text-primary mx-2"></i>
                    <a class="btn btn-outline-primary disabled" href="">Artikel</a>

                </div>
            </div>
        </div>
    </div>
</div>






<div class="container py-5">
    <div class="row pt-5">
        <div class="col-lg-8">



            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col text-center mb-4">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Blog</h6>
                    <h1 class="mb-4">Artikel Post</h1>
                </div>
            </div>
            <div class="row pb-3">

                <?php foreach ($artikel as $blog) : ?>
                    <?php $text = $blog->konten;
                    $limitext = word_limiter($text, 30);
                    ?>
                    <?php $id = $blog->artikel_id;
                    $visitartikel = $this->db->query("SELECT * FROM section_visit WHERE artikel_id='" . $id . "'")->num_rows(); ?>
                    <div class="col-md-6 mb-4">
                        <div class="card border-0 mb-2">
                            <img class="card-img-top" src="<?= base_url() ?>assets/upload/artikel/<?= $blog->foto ?>" alt="">
                            <div class="card-body bg-white p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <a class="btn btn-primary" href="<?= base_url() ?>artikel/single/<?= $blog->slug ?>/<?= $blog->artikel_id ?>"><i class="fa fa-link"></i></a>
                                    <a href="<?= base_url() ?>artikel/single/<?= $blog->slug ?>/<?= $blog->artikel_id ?>">
                                        <h5 class="m-0 ml-3 text-truncate"><?= $blog->judul_artikel ?></h5>
                                    </a>
                                </div>
                                <p><?= $limitext ?></p>
                                <div class="d-flex">
                                    <small class="mr-3"><i class="fa fa-user text-primary"></i> <?= $blog->penerbit ?></small>
                                    <small class="mr-3"><i class="fa fa-eye text-primary"></i> <?= $visitartikel ?></small>
                                    <small class="mr-3"><i class="fa fa-clock text-primary"></i> <?= waktu_lalu($blog->date_post) ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

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