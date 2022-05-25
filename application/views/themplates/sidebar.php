<div class="leftside-menu">

    <!-- LOGO -->
    <a href="<?= base_url('administrasi/dashboard/') ?>" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="<?= base_url() ?>assets/backend/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="<?= base_url() ?>assets/backend/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="<?= base_url('administrasi/dashboard/') ?>" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="<?= base_url() ?>assets/backend/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="<?= base_url() ?>assets/backend/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a href="<?= base_url('administrasi/dashboard/') ?>" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>

                    <span> Dashboards </span>
                </a>

            </li>

            <li class="side-nav-title side-nav-item">Apps</li>

            <li class="side-nav-item">
                <a href="<?= base_url('administrasi/profil/') ?>" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="mdi mdi-account-lock "></i>
                    <span> Profil </span>

                </a>
            </li>

            <li class="side-nav-item">
                <a href="<?= base_url('administrasi/katalog/') ?>" aria-expanded="false" aria-controls="katalog" class="side-nav-link">
                    <i class="mdi mdi-briefcase"></i>
                    <span> Katalog </span>

                </a>
            </li>

            <li class="side-nav-item">
                <a href="<?= base_url('administrasi/gallery/') ?>" aria-expanded="false" aria-controls="sastra" class="side-nav-link">
                    <i class="mdi mdi-image-area"></i>
                    <span> Gallery </span>

                </a>
            </li>
            <li class="side-nav-item">
                <a href="<?= base_url('administrasi/tender/') ?>" aria-expanded="false" aria-controls="sastra" class="side-nav-link">
                    <i class="mdi mdi-book-edit"></i>
                    <span> Tender </span>

                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="mdi mdi-monitor-cellphone"></i>
                    <span> Web </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="<?= base_url('administrasi/artikel/') ?>">Artikel</a>
                        </li>
                        <li>
                            <a href="<?= base_url('wilayahAdministrasi') ?>">Testimoni</a>
                        </li>
                        <li>
                            <a href="apps-ecommerce-products-details.html">Message</a>
                        </li>

                    </ul>
                </div>
            </li>



        </ul>

        <div class="clearfix"></div>

    </div>


</div>