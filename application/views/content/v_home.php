<?php
$numberAPI = $website->phone;
$n1API = substr($numberAPI, 1);
$apiWa = $n1API;

$waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20PT%20Anas%20Cemerlang%20Abadi..%21%0ASaya%20tertarik%20dengan%20penawaran%20yang%20Anda%20berikan,%0Amohon%20informasi%20lebih%20lanjut.%20Terimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
?>
<section class="container-fluid hero-header" id="home">
    <!-- <div class=""> -->
    <div class="container">
        <div class="row justify-content-between gy-5 gy-lg-0">
            <div class="col-lg-6">
                <div class="content-hero position-relative text-center text-lg-start">
                    <div class="d-block d-sm-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-md-4 wow fadeInDown" data-wow-delay="0.3s">
                        <img src="https://admin103.ptanascemerlangabadi.com/upload/<?= $website->image; ?>" class="img-fluid me-3" alt="">
                        <h2><?= $website->name; ?></h2>
                    </div>
                    <h3 class="display-6 wow zoomIn" data-wow-delay="0.3s"><?= $homeweb->caption; ?></h3>
                    <div class="info mt-5 wow fadeInLeft" data-wow-delay="0.3s">
                        <a href="<?= $waLink; ?>" target="_blank" class="px-4 py-3 bg-green fw-bold">Info
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="evaluation position-relative">
                    <div class="row">
                        <?php foreach ($evaluasi as $e) { ?>
                            <div class="col-md-4 col-lg-12">
                                <div class="box wow fadeInRight" data-wow-delay="0.3s">
                                    <h3><?= $e->angka; ?>+</h3>
                                    <p><?= $e->title; ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="privilege">
            <div class="row gy-5 gy-md-0">
                <?php foreach ($keunggulan as $k) { ?>
                    <div class="col-md-4">
                        <div class="box wow fadeInUp" data-wow-delay="0.3s">
                            <div class="img">
                                <img src="https://admin103.ptanascemerlangabadi.com/upload/keunggulan/<?= $k->icon; ?>" class="img-fluid" alt="">
                            </div>
                            <div class="title">
                                <p><?= $k->title; ?></p>
                            </div>
                            <div class="text">
                                <p><?= $k->deskripsi; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- </div> -->

</section>

<section class="container-xxl about-us" id="about">
    <div class="container py-5">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-5 col-lg-3">
                <div class="img wow fadeInUp" data-wow-delay="0.3s">
                    <img src="https://admin103.ptanascemerlangabadi.com/upload/about_us/<?= $about->image; ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-7 col-lg-9">
                <div class="caption">
                    <div class="row align-items-center mb-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="col-3 col-lg-2">
                            <div class="img text-center">
                                <img src="https://admin103.ptanascemerlangabadi.com/upload/<?= $website->image; ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-9 col-lg-10">
                            <div class="header-title">
                                <h2 class="mb-4"><?= $about->title; ?></h2>
                                <p class="fw-bold"><?= $about->caption; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-text d-none d-sm-block wow fadeInUp" data-wow-delay="0.3s">
                        <?= $about->deskripsi; ?>
                    </div>
                    <div class="card-text d-block d-sm-none">
                        <div class="comment">
                            <?= $about->deskripsi; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="provide mt-4 mt-lg-5">
            <div class="row gy-5 gy-md-0">
                <div class="col-md-5 col-lg-3">
                    <div class="header-title wow fadeInUp" data-wow-delay="0.3s">
                        <h3 class="fw-bold"><?= $al->title; ?></h3>
                    </div>
                    <div class="info mt-5 wow fadeInUp" data-wow-delay="0.3s">
                        <a href="<?= $waLink; ?>" target="_blank" class="px-4 py-3 bg-green fw-bold">Info
                            Selengkapnya</a>
                    </div>
                </div>
                <div class="col-md-7 col-lg-9">
                    <div class="caption">
                        <div class="heading mb-4">
                            <p><?= $al->caption; ?></p>
                        </div>
                        <div class="card-text">
                            <div class="row gy-4 gy-lg-0">
                                <?php
                                //string yang akan dipecah
                                $teks = "$al->deskripsi";
                                //pecah string berdasarkan string "," 
                                $pecah = explode(".", $teks);
                                //mencari element array 0
                                $hasil0 = $pecah[0];
                                $hasil1 = $pecah[1];
                                ?>
                                <div class="col-lg-6">
                                    <?= $hasil0; ?>
                                </div>
                                <div class="col-lg-6">
                                    <?= $hasil1; ?>
                                </div>
                            </div>
                        </div>
                        <div class="d-block d-sm-flex mt-3 wow fadeInUp" data-wow-delay="0.3s">
                            <?php
                            $number = $website->phone;
                            $n1 = substr($number, 0, 4);
                            $n2 = substr($number, 4, 4);
                            $n3 = substr($number, 8, 4);
                            $wa = $n1 . '-' . $n2 . '-' . $n3;
                            ?>
                            <div class="telp bb position-relative d-flex me-0 me-sm-3">
                                <img src="<?= base_url(); ?>assets/img/v-telp.svg" class="img-fluid me-0 me-sm-2" alt="">
                                <p class="fw-bold"><?= $wa; ?></p>
                            </div>
                            <div class="email bb position-relative ms-0 ms-sm-3">
                                <p class="fw-bold"><?= $website->email; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid visi bg-green px-0" id="visi">
    <div class="container-1558 ps-md-0 pb-5 pb-lg-0">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-6 col-md-5 col-lg-4">
                <div class="heading position-relative">
                    <!-- <img src="<?= base_url(); ?>assets/img/img-visi.png" class="img-fluid bg" alt=""> -->
                    <div class="row position-relative">
                        <div class="col-lg-12">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 text-center text-lg-start">
                                    <div class="ic wow fadeInUp" data-wow-delay="0.3s">
                                        <img src="https://admin103.ptanascemerlangabadi.com/upload/<?= $website->image; ?>" class="img-fluid" alt="">
                                    </div>
                                    <div class="header-text pt-5 pb-3 wow fadeInUp" data-wow-delay="0.3s">
                                        <p>Leading The Way In Service Excellence</p>
                                    </div>
                                    <div class="info mt-5 wow fadeInUp" data-wow-delay="0.3s">
                                        <a href="<?= $waLink; ?>" target="_blank" class="px-4 py-3 fw-bold bg-white text-dark">Info Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 ps-md-5">
                <div class="visi-1">
                    <div class="caption py-5">
                        <div class="header-title mb-5 text-center text-sm-start wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="text-white">VISI PERUSAHAAN</h2>
                        </div>
                        <div class="row align-items-center gy-4 gy-sm-0 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="col-sm-2 d-block d-sm-none">
                                <div class="ic text-center">
                                    <img src="https://admin103.ptanascemerlangabadi.com/upload/visi/<?= $visi1->icon; ?>" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="card-text">
                                    <p><?= $visi1->deskripsi; ?></p>
                                </div>
                            </div>
                            <div class="col-sm-2 d-none d-sm-block">
                                <div class="ic">
                                    <img src="https://admin103.ptanascemerlangabadi.com/upload/visi/<?= $visi1->icon; ?>" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visi-2 position-relative wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row align-items-center position-relative gy-4 gy-sm-0">
                        <div class="col-sm-2">
                            <div class="ic text-center">
                                <img src="https://admin103.ptanascemerlangabadi.com/upload/visi/<?= $visi2->icon; ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-text">
                                <p><?= $visi2->deskripsi; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-xxl misi">
    <div class="container pt-5 py-lg-5 ">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <div class="header-title mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <h2 class="text-uppercase"><?= $deskMisi->title; ?></h2>
                </div>
                <div class="card-text wow fadeInUp" data-wow-delay="0.3s">
                    <p><?= $deskMisi->deskripsi; ?></p>
                </div>
            </div>
        </div>
        <div class="caption mt-4">
            <div class="row">
                <div class="col-lg-4 px-0 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="box">
                        <div class="img top position-relative">
                            <img src="https://admin103.ptanascemerlangabadi.com/upload/misi/<?= $misi1->image; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <?= $misi1->title; ?>
                            </div>
                            <div class="card-text">
                                <?= $misi1->deskripsi; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 px-0 d-block d-lg-none wow fadeInUp" data-wow-delay="0.3s">
                    <div class="box">
                        <div class="img top position-relative">
                            <img src="https://admin103.ptanascemerlangabadi.com/upload/misi/<?= $misi2->image; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <?= $misi2->title; ?>
                            </div>
                            <div class="card-text">
                                <?= $misi2->deskripsi; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 px-0 d-none d-lg-block wow fadeInUp" data-wow-delay="0.3s">
                    <div class="box">
                        <div class="card-body">
                            <div class="card-title">
                                <?= $misi2->title; ?>
                            </div>
                            <div class="card-text">
                                <?= $misi2->deskripsi; ?>
                            </div>
                        </div>
                        <div class="img bottom position-relative">
                            <img src="https://admin103.ptanascemerlangabadi.com/upload/misi/<?= $misi2->image; ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 px-0 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="box">
                        <div class="img top position-relative">
                            <img src="https://admin103.ptanascemerlangabadi.com/upload/misi/<?= $misi3->image; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <?= $misi3->title; ?>
                            </div>
                            <div class="card-text">
                                <?= $misi3->deskripsi; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid bg-grey">
    <section class="container-xxl general-contractor" id="bisnis">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-4">
                    <div class="heading mb-3 mb-md-5 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center">
                            <h1 class="display-3 fw-normal">01</h1>
                            <p>General Contractor <b>and Supplier</b></p>
                        </div>
                    </div>
                    <p class="d-none d-md-block">Mencakup Pada :</p>
                </div>
                <div class="col-md-8">
                    <div class="desk mb-4 mb-md-0 wow fadeInUp" data-wow-delay="0.3s">
                        <p><?= $gk->deskripsi; ?></p>
                    </div>
                    <p class="d-block d-md-none wow fadeInUp" data-wow-delay="0.3s">Mencakup Pada :</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <ul class="nav nav-tabs border-0" id="myTab wow fadeInUp" data-wow-delay="0.3s">
                        <?php foreach ($master_persediaan as $mp) { ?>
                            <li class="nav-item">
                                <a href="#tab-<?= $mp->id ?>" class="nav-link <?php
                                                                                if ($mp->id != "") {
                                                                                    if ($mp->id == 1) {
                                                                                        echo "active";
                                                                                    }
                                                                                } else {
                                                                                    if ($mp->id == "") {
                                                                                        echo "active";
                                                                                    }
                                                                                }
                                                                                ?>" data-bs-toggle="tab">
                                    <div class="d-flex align-items-center">
                                        <img src="https://admin103.ptanascemerlangabadi.com/upload/master_kontraktor/<?= $mp->icon; ?>" class="img-fluid" alt="">
                                        <p><?= $mp->title; ?> <i class="fas fa-chevron-right"></i></p>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
                        <div class="d-none d-md-block">
                            <div class="heading-nav">
                                <p>Experience the Best in Construction and Supply</p>
                            </div>
                            <div class="info mt-5">
                                <a href="<?= $waLink; ?>" target="_blank" class="px-4 py-3 bg-green fw-bold">Info
                                    Selengkapnya</a>
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="tab-content position-relative pt-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="tab-pane fade show active" id="tab-1">
                            <div class="owl-carousel tabs-1-slider">
                                <?php foreach ($persediaan1 as $p1) { ?>
                                    <div class="d-flex justify-content-center">
                                        <div class="box">
                                            <div class="box-img">
                                                <div class="img">
                                                    <a href="https://admin103.ptanascemerlangabadi.com/upload/persediaan/<?= $p1->image; ?>" data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                                                        <img src="https://admin103.ptanascemerlangabadi.com/upload/persediaan/thumbnail/<?= $p1->image; ?>" class="img-fluid" alt="">
                                                    </a>

                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><?= $p1->title; ?></h5>
                                            </div>
                                            <div class="card-text">
                                                <p><?= $p1->deskripsi; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-2">
                            <div class="owl-carousel tabs-2-slider">
                                <?php foreach ($persediaan2 as $p2) { ?>
                                    <div class="d-flex justify-content-center">
                                        <div class="box">
                                            <div class="box-img">
                                                <div class="img">
                                                    <a href="https://admin103.ptanascemerlangabadi.com/upload/persediaan/<?= $p2->image; ?>" data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                                                        <img src="https://admin103.ptanascemerlangabadi.com/upload/persediaan/thumbnail/<?= $p2->image; ?>" class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><?= $p2->title; ?></h5>
                                            </div>
                                            <div class="card-text">
                                                <p><?= $p2->deskripsi; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-3">
                            <div class="owl-carousel tabs-3-slider">
                                <?php foreach ($persediaan3 as $p3) { ?>
                                    <div class="d-flex justify-content-center">
                                        <div class="box">
                                            <div class="box-img">
                                                <div class="img">
                                                    <a href="https://admin103.ptanascemerlangabadi.com/upload/persediaan/<?= $p3->image; ?>" data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                                                        <img src="https://admin103.ptanascemerlangabadi.com/upload/persediaan/thumbnail/<?= $p3->image; ?>" class="img-fluid" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-title">
                                                <h5><?= $p3->title; ?></h5>
                                            </div>
                                            <div class="card-text">
                                                <p><?= $p3->deskripsi; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                    <div class="d-block d-md-none">
                        <div class="heading-nav wow fadeInUp" data-wow-delay="0.3s">
                            <h1>Experience the Best in Construction and Supply</h1>
                        </div>
                        <div class="info mt-5 wow fadeInUp" data-wow-delay="0.3s">
                            <a href="<?= $waLink; ?>" target="_blank" class="px-4 py-3 bg-green fw-bold">Info
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-xxl video-yt">
        <div class="container pb-5">
            <div class="row gy-4 gy-md-0">
                <div class="col-md-2 position-relative d-block d-md-none">
                    <div class="card-title wow fadeInUp" data-wow-delay="0.3s">
                        <h2>VIDEO <br>DOKUMENTASI</h2>
                    </div>
                </div>
                <?php foreach ($yt1 as $yt1) { ?>
                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.3s">
                        <?= $yt1->link_yt; ?>
                    </div>
                <?php } ?>

                <div class="col-md-2 position-relative d-none d-md-block wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card-title ">
                        <h2>VIDEO <br>DOKUMENTASI</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container-fluid bg-grey-b">
    <section class="container-xxl training-service">
        <div class="container py-5">
            <div class="row justify-content-between pb-4">
                <div class="col-lg-4">
                    <div class="header-title mb-4 mb-lg-0">
                        <div class="heading mb-4 wow fadeInUp" data-wow-delay="0.3s">
                            <h4>Consulting & <br>
                                <h3><b>Training Service</b></h3>
                            </h4>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay="0.3s"><?= $konsul->caption; ?></p>
                    </div>
                </div>
                <div class="col-lg-6 position-relative text-end wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-3 fw-normal">02</h1>
                    <div class="heading-side">
                        <p><?= $konsul->deskripsi; ?></p>
                    </div>
                </div>
            </div>
            <div class="box-service">
                <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-lg-11">
                        <div class="slider-container">
                            <div class="swiper-container training-service-slider px-3">
                                <div class="swiper-wrapper">
                                    <?php foreach ($service as $s) { ?>
                                        <div class="swiper-slide">
                                            <div class="box">
                                                <div class="title">
                                                    <p><?= $s->title; ?></p>
                                                </div>
                                                <p><?= $s->deskripsi; ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-xxl training-service-full">
        <div class="container">
            <div class="row justify-content-between align-items-center gy-4 gy-lg-0 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-8">
                    <div class="slider-container">
                        <div class="swiper-container training-service-full-slider px-3">
                            <div class="swiper-wrapper">
                                <?php foreach ($kegiatan as $k) { ?>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <div class="img">
                                                <a href="https://admin103.ptanascemerlangabadi.com/upload/kegiatan/<?= $k->image; ?>" data-gallery="portfolioGallery" class="kegiatan-lightbox" title="">
                                                    <img src="https://admin103.ptanascemerlangabadi.com/upload/kegiatan/thumbnail/<?= $k->image; ?>" class="img-fluid" alt="">
                                                </a>
                                            </div>
                                            <div class="card-title">
                                                <?= $k->title; ?>
                                            </div>
                                            <div class="card-text">
                                                <?= $k->deskripsi; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="heading pb-4 wow fadeInUp" data-wow-delay="0.3s">
                        <h3>Transforming Challenges into Opportunities</h3>
                    </div>
                    <div class="info mt-5 wow fadeInUp" data-wow-delay="0.3s">
                        <a href="<?= $waLink; ?>" target="_blank" class="px-4 py-3 bg-green fw-bold">Info
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-xxl video-yt-bottom">
        <div class="container py-5">
            <div class="row gy-4 gy-lg-0">
                <div class="col-md-2 position-relative">
                    <div class="card-title wow fadeInUp" data-wow-delay="0.3s">
                        <h2>VIDEO <br>DOKUMENTASI</h2>
                    </div>
                </div>
                <?php foreach ($yt2 as $yt2) { ?>
                    <div class="col-md-5 wow fadeInUp" data-wow-delay="0.3s">
                        <?= $yt2->link_yt; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>

<section class="container-xxl help">
    <div class="container py-5">
        <div class="row justify-content-between gy-4 gy-md-0">
            <div class="col-md-4">
                <div class="img wow fadeInUp" data-wow-delay="0.3s">
                    <img src="https://admin103.ptanascemerlangabadi.com/upload/deskripsi_content/<?= $deskHelp->image; ?>" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-8 ps-0 ps-md-5">
                <div class="row">
                    <div class="col-md-9">
                        <div class="header-title wow fadeInUp" data-wow-delay="0.3s">
                            <h2><?= $deskHelp->title; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="card-text my-4 wow fadeInUp" data-wow-delay="0.3s">
                    <?= $deskHelp->deskripsi; ?>
                </div>
                <div class="form-box wow fadeInUp" data-wow-delay="0.3s">
                    <div id="alert-form"></div>
                    <form id="help">
                        <div class="mb-3">
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap Anda" required>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input type="text" name="telp" id="telp" class="form-control" placeholder="No Handphone Anda" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input type="text" name="jenis_pekerjaan" id="jenis_pekerjaan" class="form-control" placeholder="Jenis Pekerjaan Proyek" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <textarea rows="5" name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsikan Project Request Anda" required></textarea>
                        </div>
                        <button type="submit" class="bg-green px-3 py-2 border-0 ">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<script>
    $(document).ready(function() {
        $('input#telp').bind("change keyup", function(event) {
            // skip for arrow keys
            if (event.which >= 37 && event.which <= 40) {
                event.preventDefault();
            }

            $(this).val(function(index, value) {
                return value
                    .replace(/\D/g, "")
                    .replace(/([0-9])$/, '$1')
                    /*.replace(/([0-9])([0-9]{3})$/, '$1.$2') //pakai sen dibelakangnya  */
                    .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, "");
            });

        });
    });

    $(document).ready(function() {
        base_url = '<?= base_url() ?>';

        $("#help").submit(function() {
            $(".btn").attr("disabled", true);

            var data = {
                nama: $("#nama").val(),
                telp: $("#telp").val(),
                jenis_pekerjaan: $("#jenis_pekerjaan").val(),
                deskripsi: $("#deskripsi").val()
            }

            $.ajax({
                type: "POST",
                url: base_url + "bantuan",
                data: data,

                success: function(response) {
                    $('.success').fadeIn(1000);
                    $("#help .btn").attr("disabled", false);
                    $('#alert-form').html(
                        '<div class="alert alert-success">Terima Kasih, Pesan anda akan kami proses secepatnya.</div>'
                    );
                    setInterval(function() {
                        window.location = base_url;
                    }, 2000)
                },
                error: function() {
                    $(".error").fadeIn(1000);
                    $("#help .btn").attr("disabled", false);
                }
            });
            return false;
        });
    });
</script>