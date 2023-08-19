<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title><?= $website->metaTitle; ?></title>
    <meta name="keywords" content="<?= $website->metaKeywords; ?>">
    <meta name="description" content="<?= $website->metaDescription; ?>">

    <meta name="format-detection" content="telephone=no">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $website->metaTitle; ?>" />
    <meta property="og:description" content="<?= $website->metaDescription; ?>" />
    <meta property="og:url" content="https://ptanascemerlangabadi.com" />
    <meta property="og:image" content="<?= base_url(); ?>assets/img/og-image.png" />

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(); ?>assets/img/icon-url.png" sizes="32x32" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/lib/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/swiper.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/whatsapp_chat.css" rel="stylesheet" />
</head>

<body class="bg-white" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Navbar & Hero Start -->
    <header class="container-fluid position-relative p-0">
        <div class="top_menu py-4 bg-green d-none d-lg-block">
            <div class="container">

                <div class="d-flex">
                    <div class="telp d-flex me-3">
                        <?php
                        $number = $website->phone;
                        $n1 = substr($number, 0, 4);
                        $n2 = substr($number, 4, 4);
                        $n3 = substr($number, 8, 4);
                        $wa = $n1 . '-' . $n2 . '-' . $n3;
                        ?>
                        <img src="assets/img/v-telp.svg" class="img-fluid me-2" alt="">
                        <p class="fw-bold"><?= $wa; ?></p>
                    </div>
                    <div class="email ms-5">
                        <p class="fw-bold"><?= $website->email; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light px-0 px-lg-5 py-2">
            <div class="container">
                <a href="" class="navbar-brand d-flex align-items-center d-lg-none">
                    <!-- <h1 class="m-0">FitApp</h1> -->
                    <img class="img-fluid"
                        src="https://admin103.ptanascemerlangabadi.com/upload/<?= $website->image; ?>" alt="Logo" />
                    <p><?= $website->name; ?></p>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav py-0">
                        <a href="#home" class="nav-item nav-link click-scroll">BERANDA</a>
                        <a href="#about" class="nav-item nav-link click-scroll">TENTANG KAMI</a>
                        <a href="#visi" class="nav-item nav-link click-scroll">VISI - MISI</a>
                        <a href="#bisnis" class="nav-item nav-link click-scroll">BISNIS KAMI</a>
                        <a href="#lokasi" class="nav-item nav-link click-scroll">LOKASI KAMI</a>
                    </div>
                    <div class="contact d-block d-lg-none">
                        <div class="d-block d-lg-flex">
                            <div class="telp d-flex me-lg-3">
                                <img src="assets/img/v-telp.svg" class="img-fluid me-2" alt="">
                                <p class="fw-bold"><?= $wa; ?></p>
                            </div>
                            <div class="email ms-lg-5">
                                <p class="fw-bold"><?= $website->email; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex ms-auto top-social align-items-center">
                        <?php foreach ($sosmed as $s) { ?>
                        <a class="btn btn-outline-light btn-social" href="<?= $s->link; ?>" title="<?= $s->name; ?>"><i
                                class="<?= $s->icon; ?>"></i></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </nav>

    </header>