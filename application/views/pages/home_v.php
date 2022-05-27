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
<!-- Carousel Start -->


<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <?php foreach ($slide as $hero) : ?>
                <div class="carousel-item <?= $hero->class ?>">

                    <img class="w-100" src="<?= base_url() ?>assets/upload/gallery/<?= $hero->foto ?>" alt="Image" height="850">


                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            <h4 class="text-primary text-uppercase font-weight-normal mb-md-3"><?= $hero->paragraf ?></h4>
                            <h3 class="display-3 text-white mb-md-4"><?= $hero->judul ?></h3>
                            <a href="<?= $hero->link ?>" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">Learn More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-primary" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-primary" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->


<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 pr-lg-5">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Awesome Services</h6>
                <h1 class="mb-4 section-title">
                    Jasa Bengkel Las Terbaik Untuk Rumah Anda</h1>
                <p><?= $deskripsi ?></p>
                <a href="" class="btn btn-primary mt-3 py-2 px-4">View More</a>
            </div>
            <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                <div class="owl-carousel service-carousel position-relative">
                    <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                        <h3 class=" display-3 font-weight-normal text-primary mb-3"> <i class="fas fa-university"></i></h3>
                        <h5 class="mb-3">Las Canopy</h5>
                        <p class="m-0">Menerima Pembuatan dan Design Canopy</p>
                    </div>
                    <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                        <h3 class=" display-3 font-weight-normal text-primary mb-3"> <i class="fas fa-gopuram"></i></h3>
                        <h5 class="mb-3">Raling Tangga</h5>
                        <p class="m-0">Jasa Pembuatan Raling Tangga</p>
                    </div>
                    <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                        <h3 class=" display-3 font-weight-normal text-primary mb-3"> <i class="fas fa-warehouse"></i></h3>
                        <h5 class="mb-3">Pagar Tralis</h5>
                        <p class="m-0">Jasa Pembuatan Pagar Tralis dengan Bahan Yang Brkualitas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Features Katalog -->
<div class="container-fluid bg-light pt-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Katalog</h6>
                <h1 class="mb-4">Pilih Design Yang Anda Sukai yang Pas Untuk Rumah Anda</h1>
            </div>
        </div>


        <div class="row pb-3">
            <?php foreach ($dataKatalog as $katalog) : ?>
                <?php $id = $katalog->produk_id;
                $visitorprod = $this->db->query("SELECT * FROM section_visit WHERE produk_id='" . $id . "'")->num_rows(); ?>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 mb-2">
                        <img class="card-img-top" src="<?= base_url() ?>assets/upload/gallery/<?= $katalog->foto ?>" alt="">
                        <div class="card-body bg-white p-4">
                            <div class="d-flex align-items-center mb-3">
                                <a class="btn btn-primary" href="<?= base_url() ?>katalog/detailproduk/<?= $katalog->slug ?>/<?= $katalog->produk_id ?>"><i class="fa fa-link"></i></a>

                                <a href="<?= base_url() ?>katalog/detailproduk/<?= $katalog->slug ?>/<?= $katalog->produk_id ?>">
                                    <h5 class="m-0 ml-3 text-truncate"><?= $katalog->nama_produk ?></h5>
                                </a>
                            </div>
                            <!-- <p>Diam amet eos at no eos sit, amet rebum ipsum clita stet, diam sea est diam eos, sit vero stet justo</p> -->
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-eye text-primary"></i> <?= $visitorprod ?></small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> <?= $katalog->kategori ?></small>
                                <small class="mr-3"><i class="fa fa-clock text-primary"></i> <?= waktu_lalu($katalog->date_post) ?></small>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach ?>
        </div>

        <div class="row pb-3">

            <div class="col-md-4 mb-4">

                <div class="d-flex align-items-center mb-3">
                    <a class="btn btn-primary" href="<?= base_url() ?>katalog">
                        <h5 class=" m-0 ml-3 text-truncate">Lihat Lainya </h5> <i class="fa fa-arrow-right "></i>
                    </a>

                </div>


            </div>

        </div>

    </div>

</div>
</div>
<!-- Features End -->


<!-- Projects Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Gallery</h6>
                <h1 class="mb-4">Gallery</h1>
            </div>
        </div>

        <div class="row mx-1 portfolio-container">

            <?php foreach ($gallery as $row) : ?>
                <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item <?= $row->nama_foto ?>">
                    <div class="position-relative overflow-hidden">
                        <div class="portfolio-img d-flex align-items-center justify-content-center">
                            <img class="img-fluid" src="<?= base_url() ?>assets/upload/gallery/<?= $row->foto ?>" alt="">
                        </div>
                        <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                            <h4 class="text-white mb-4"><?= $row->nama_foto ?></h4>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-outline-primary m-1" href="javascript:void(0);">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="btn btn-outline-primary m-1" href="<?= base_url() ?>assets/upload/gallery/<?= $row->foto ?>" data-lightbox="portfolio">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

        </div>

        <div class="row pb-3 mt-5">
            <div class="col-md-4 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <a class="btn btn-primary" href="<?= base_url() ?>gallery">
                        <h5 class=" m-0 ml-3 text-truncate">Lihat Lainya </h5> <i class="fa fa-arrow-right "></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->


<!-- Team Start -->
<div class="container-fluid bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
                    <h6 class="text-white font-weight-normal text-uppercase mb-3">Produk</h6>
                    <h1 class="mb-0 text-center">Best Produk</h1>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 p-0 py-sm-5">
                <div class="owl-carousel team-carousel position-relative p-0 py-sm-5">

                    <?php foreach ($bsproduk as $bs) : ?>

                        <div class="team d-flex flex-column text-center mx-3">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="<?= base_url() ?>assets/upload/gallery/<?= $bs->foto ?>" alt="">
                                <!-- <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div> -->
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <a href="<?= base_url() ?>katalog/detailproduk/<?= $bs->slug ?>/<?= $bs->produk_id ?>">
                                    <h5 class="text-white"><?= $bs->nama_foto ?></h5>
                                </a>
                                <p class="m-0"><?= $bs->kategori ?></p>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-7 py-5 pr-md-5">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3 pt-5">Testimonial</h6>
                <button onclick="addtesti()" class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Masukan Testimoni</button>
                <h1 class="mb-4 section-title">Apa yang dikatan Client Kami</h1>
                <div class="owl-carousel testimonial-carousel position-relative pb-5 mb-md-5">

                    <?php foreach ($testimoni as $testi) : ?>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="<?= base_url() ?>assets/upload/poto/<?= $testi->foto ?>" style="width: 60px; height: 60px;" alt="">
                                <div class="ml-3">
                                    <h5><?= $testi->nama ?></h5>
                                    <i><?= $testi->email ?></i>
                                </div>
                            </div>
                            <p><?= $testi->testi ?></p>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                    <img class="h-100" src="<?= base_url() ?>assets/upload/poto/<?= $foto ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<div class="modal fade" id="modaltesti" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form" action="">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="validationServer01" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" required>

                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationServer01" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>

                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationServer01" class="form-label">Foto</label>
                            <input type="file" class="form-control" name="foto" required>

                        </div>
                        <div class="mb-3">
                            <label for="validationTextarea" class="form-label">Textarea</label>
                            <textarea class="form-control" name="testi" placeholder="Required example textarea" required></textarea>

                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="btnSave" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Blog Start -->
<div class="container-fluid bg-light pt-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col text-center mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Blog</h6>
                <h1 class="mb-4">Artikel Terbaru</h1>
            </div>
        </div>
        <div class="row pb-3">

            <?php foreach ($artikel as $blog) : ?>
                <?php $text = $blog->konten;
                $limitext = word_limiter($text, 25);
                ?>
                <?php $id = $blog->artikel_id;
                $visitartik = $this->db->query("SELECT * FROM section_visit WHERE artikel_id='" . $id . "'")->num_rows(); ?>
                <div class="col-md-4 mb-4">
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
                                <small class="mr-3"><i class="fa fa-eye text-primary"></i> <?= $visitartik ?></small>
                                <small class="mr-3"><i class="fa fa-clock text-primary"></i> <?= waktu_lalu($blog->date_post) ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>



<script>
    function showAlert(type, msg) {

        toastr.options.closeButton = true;
        toastr.options.progressBar = true;
        toastr.options.extendedTimeOut = 1000; //1000

        toastr.options.timeOut = 3000;
        toastr.options.fadeOut = 250;
        toastr.options.fadeIn = 250;

        toastr.options.positionClass = 'toast-top-center';
        toastr[type](msg);
    }

    function fileValidation() {
        var fileInput = document.getElementById('file');
        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
        if (!allowedExtensions.exec(filePath)) {
            alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
            fileInput.value = '';
            return false;
        } else {
            //Image preview
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imagePreview').innerHTML = '<img style="max-width:350px;" src="' + e.target
                        .result + '"/>';
                };
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    }

    function addtesti() {

        $('#form')[0].reset();
        // $('#imagePreview').html('');

        $('#modaltesti').modal('show');
        $('.modal-title').text('Tambah Testimoni Anda');
    }


    $('#form').submit(function(e) {
        e.preventDefault();
        var form = $('#form')[0];
        var data = new FormData(form);

        if ($('[name="foto"]').val() == '') {
            alert('Pilih Foto Produk Yang Akan di Upload !');
            return false;
        }

        $('#btnSave').text('Sedang Proses, Mohon tunggu...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable
        $.ajax({
            url: "<?php echo site_url('home/inputtesti/') ?>",
            type: "POST",
            //contentType: 'multipart/form-data',
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            data: data,
            dataType: "JSON",

            success: function(data) {
                if (data.status == '00') {
                    showAlert(data.type, data.mess);
                    $('#modaltesti').modal('hide');
                    $('#form')[0].reset();
                } else {
                    showAlert(data.type, data.mess);
                }
                $('#btnSave').text('Simpan'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable
            },
            error: function(jqXHR, textStatus, errorThrown) {
                type = 'error';
                msg = 'Error adding / update data';
                showAlert(type, msg); //utk show alert
                $('#btnSave').text('Simpan'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable
            }
        });

    });
</script>