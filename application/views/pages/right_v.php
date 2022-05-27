<div class="col-lg-4 mt-5 mt-lg-0">

    <div class="mb-5">
        <h3 class="mb-4 section-title">Categories</h3>
        <ul class="list-group">



            <?php $c = 'Canopy';
            $canopy = $this->db->query("SELECT * FROM ref_produk WHERE kategori='" . $c . "'")->num_rows(); ?>
            <?php $t = 'Tangga';
            $tangga = $this->db->query("SELECT * FROM ref_produk WHERE kategori='" . $t . "'")->num_rows(); ?>
            <?php $p = 'Pagar';
            $pagar = $this->db->query("SELECT * FROM ref_produk WHERE kategori='" . $p . "'")->num_rows(); ?>
            <?php $t = 'Tralis';
            $tralis = $this->db->query("SELECT * FROM ref_produk WHERE kategori='" . $t . "'")->num_rows(); ?>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                Canopy
                <span class="badge badge-primary badge-pill"><?= $canopy ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Raling Tangga
                <span class="badge badge-primary badge-pill"><?= $tangga ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Pagar Tralis
                <span class="badge badge-primary badge-pill"><?= $pagar ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Tralis
                <span class="badge badge-primary badge-pill"><?= $tralis ?></span>
            </li>

        </ul>
    </div>
    <div class="mb-5">
        <img src="<?= base_url() ?>assets/upload/poto/<?= $foto ?>" alt="" class="img-fluid">
    </div>
    <div class="mb-5">
        <h3 class="mb-4 section-title">Recent Produk</h3>

        <?php foreach ($produklimit as $produk) : ?>
            <?php $id = $produk->produk_id;
            $visitproduk  = $this->db->query("SELECT * FROM section_visit WHERE produk_id='" . $id . "'")->num_rows(); ?>
            <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                <img class="img-fluid" src="<?= base_url() ?>assets/upload/gallery/<?= $produk->foto ?>" style="width: 80px; height: 80px;" alt="">
                <div class="d-flex flex-column pl-3">
                    <a class="text-dark mb-2" href="<?= base_url() ?>katalog/detailproduk/<?= $produk->slug ?>/<?= $produk->produk_id ?>"><?= $produk->nama_produk ?></a>
                    <div class="d-flex">
                        <small class="mr-3"><i class="fa fa-eye text-primary"></i> <?= $visitproduk ?></small>
                        <small class="mr-3"><i class="fa fa-folder text-primary"></i> <?= $produk->kategori ?></small>
                        <small class="mr-3"><i class="fa fa-clock text-primary"></i> <?= waktu_lalu($produk->date_post) ?></small>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>



    <div class="mb-5">
        <h3 class="mb-4 section-title">Recent Post</h3>

        <?php foreach ($artikellimit as $art) : ?>
            <?php $id = $art->artikel_id;
            $visitart  = $this->db->query("SELECT * FROM section_visit WHERE artikel_id='" . $id . "'")->num_rows(); ?>
            <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                <img class="img-fluid" src="<?= base_url() ?>assets/upload/artikel/<?= $art->foto ?>" style="width: 80px; height: 80px;" alt="">
                <div class="d-flex flex-column pl-3">
                    <a class="text-dark mb-2" href="<?= base_url() ?>artikel/single/<?= $art->slug ?>/<?= $art->artikel_id ?>"><?= $art->judul_artikel ?></a>
                    <div class="d-flex">
                        <small class="mr-3"><i class="fa fa-user text-primary"></i> <?= $art->penerbit ?></small>
                        <small class="mr-3"><i class="fa fa-eye text-primary"></i> <?= $visitart ?></small>
                        <small class="mr-3"><i class="fa fa-clock text-primary"></i> <?= waktu_lalu($art->date_post) ?></small>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <!-- <div>
        <h3 class="mb-4 section-title">Plain Text</h3>
        Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea est aliquyam dolor et. Et no consetetur eos labore ea erat voluptua et. Et aliquyam dolore sed erat. Magna sanctus sed eos tempor rebum dolor, tempor takimata clita sit et elitr ut eirmod.
    </div> -->
</div>