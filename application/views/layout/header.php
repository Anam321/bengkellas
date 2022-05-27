<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $judul ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="<?= base_url() ?>assets/frontend/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url() ?>assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/frontend/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>assets/frontend/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <style>
        .note-editor .dropdown-toggle::after {
            all: unset;

        }

        .note-editor .note-dropdown-menu {
            box-sizing: content-box;
        }

        .note-editor .note-modal-footer {
            box-sizing: content-box;
        }


        .cs-demo-switcher {
            position: fixed;
            display: block;
            top: 50%;
            right: 1rem;
            z-index: 100;
        }

        .cs-demo-switcher-inner {
            width: 3rem;
            height: 3rem;
            border: 1px solid #e5e8ed;
            border-radius: 50%;
            background-color: #fff;
            color: #1e212c;
            font-size: 1.25rem;
            line-height: 3rem;
            text-align: center;
            text-decoration: none;
            box-shadow: 0px 10px 15px 0px rgba(30, 33, 44, 0.10);
        }
    </style>
</head>

<body>

    <a onclick="whatsappTracking()" href="https://api.whatsapp.com/send?phone=+62<?= $whatsap ?>&text=Halo%20<?= $perusahaan ?>%20Mohon%20informasi%20produk%20produk%20dan%20pemesanan" target="_blank" class="cs-demo-switcher">
        <div class="cs-demo-switcher-inner bg-primary" data-toggle="tooltip" data-placement="left" title="Hubungi ahh..">
            <img src="<?= base_url('assets/frontend/iconwa.png'); ?>" alt="">
        </div>
    </a>

    <script>
        function whatsappTracking() {
            $.ajax({
                url: "<?php echo site_url('home/whatsappTracking') ?>",
                type: "POST",
            });

        }
    </script>