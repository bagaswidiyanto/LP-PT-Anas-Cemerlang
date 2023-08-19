<!-- Footer Start -->
<footer class="container-fluid footer" id="lokasi">
    <div class="container px-0">
        <div class="maps position-relative py-0 py-md-5">
            <div class="location wow fadeInUp" data-wow-delay="0.3s">
                <h4>LOKASI KAMI</h4>
                <?= $website->description; ?>
                <div class="address pt-3 pt-lg-5">
                    <div class="row gy-4">
                        <div class="col-1">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="col-11">
                            <?= $website->address; ?>
                        </div>

                        <div class="col-1">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="col-11">
                            <?php
                            $number = $website->phone;
                            $n1 = substr($number, 0, 4);
                            $n2 = substr($number, 4, 4);
                            $n3 = substr($number, 8, 4);
                            $wa = $n1 . '-' . $n2 . '-' . $n3;
                            ?>
                            <p><?= $wa; ?></p>
                        </div>

                        <div class="col-1">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="col-11">
                            <p><?= $website->email; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <?= $website->map; ?>
        </div>
    </div>
    <div class="container px-lg-5">
        <div class="copyright">

            <div class="row d-flex justify-content-center  text-center mt-4">
                <div class="col-xl-4 col-lg-6 col-md-7 col-sm-9 col-12">
                    <p>Copyright © 2023 - <a href="https://progimedia.com/">PROGIMEDIA</a> All Rights Reserved.
                        Powered by Digitalindo</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


<?php
date_default_timezone_set('ASIA/JAKARTA');
$curr_time     = date('H:i:s');
?>
<div class="whatsapp-chat-section">
    <div class="icon-section">
        <img src="<?= base_url(); ?>assets/whatsapp/ic_wa.png" id="whatsapp_chat" onclick="chatWhatsApp();">
    </div>
    <div id="whatsapp-chat-popup" class="animated bounceOutDown" style="z-index: 999999; display: none;">
        <div id="list-chat-section" class="list-chat-section animated fadeIn" style="display: block;">
            <div class="header-section" style="background: linear-gradient(180deg, #FDE400 -14.6%, rgba(0, 153, 67, 0.73) 93.43%, #999300 100%);">
                <img class="close-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_close_btn.png" onclick="closechatWhatsApp();">
                <div class="header-avatar-section">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa order by id asc")->result() as $sec1) { ?>
                        <div class="avatar">
                            <img class="avatar" style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;" src="https://admin103.ptanascemerlangabadi.com/upload/wa_image/<?= $sec1->image; ?>">
                        </div>
                    <? } ?>
                </div>
                <div class="header-desc-section" style="margin-top: 15px;">
                    <p>Kami siap membantu Anda, Silahkan chat dengan customer service kami. </p>
                </div>
            </div>
            <div class="chat-section">
                <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa")->result() as $sec2) { ?>
                    <div class="cs-section" onclick="chatCustomer(<?= $sec2->id; ?>);">
                        <div class="avatar">
                            <img class="avatar" src="https://admin103.ptanascemerlangabadi.com/upload/wa_image/<?= $sec2->image; ?>">
                        </div>
                        <div class="profile">
                            <p class="position">Customer Service </p>
                            <h3 class="name"><?= strtoupper($sec2->nama); ?></h3>
                            <?php if (($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)) { ?>
                                <small class="status">Online <span class="online"><i class="fa fa-circle "></i></span>
                                </small>
                            <? } else { ?>
                                <small class="status">Offline <span class="offline"><i class="fa fa-circle "></i></span>
                                </small>
                            <? } ?>
                        </div>
                    </div>
                <? } ?>
            </div>
        </div>
        <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa")->result() as $sec3) { ?>
            <div class="chat-section animated fadeIn" id="customer_chat_<?= $sec3->id; ?>" style="display: none;">
                <div class="header-section" style="background:linear-gradient(180deg, #FDE400 -14.6%, rgba(0, 153, 67, 0.73) 93.43%, #999300 100%);">
                    <img class="back-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_back_btn.png" onclick="backListChat(<?= $sec3->id; ?>);">
                    <div class="header-avatar-section">
                        <div class="avatar">
                            <img class="avatar" style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;" src="https://admin103.ptanascemerlangabadi.com/upload/wa_image/<?= $sec3->image; ?>">
                        </div>
                    </div>
                    <div class="header-desc-section">
                        <h3><?= $sec3->nama; ?></h3>
                        <?php
                        $phone_split = implode(" ", str_split('+62' . $sec3->phone, 4)) . " ";
                        ?>
                        <p><i class="fa fa-phone"></i> <?php echo $phone_split; ?></p>
                    </div>
                </div>
                <div class="inside-chat-section">
                    <div class="chat">
                        <div class="inside-chat">
                            <span>Halo saya <?= ucwords(strtolower($sec3->nama)); ?>, dari PT Anas Cemerlang Abadi.</span>
                        </div>
                        <div class="time">
                            <span><?php echo date('H:i'); ?><img src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                        </div>
                    </div>
                    <div class="chat">
                        <div class="inside-chat">
                            <span>Ada yang bisa saya bantu ?</span>
                        </div>
                        <div class="time">
                            <span><?php echo date('H:i'); ?><img src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                        </div>
                    </div>
                </div>
                <div class="box-chat-section">
                    <div class="text">
                        <input type="hidden" id="telp_wa_<?= $sec3->id; ?>" name="telp_wa_<?= $sec3->id; ?>" value="<?= $sec3->phone; ?>">
                        <input type="text" class="input-message-whatsapp" id="chat_wa_<?= $sec3->id; ?>" name="chat_wa_<?= $sec3->id; ?>" onchange="textChatWhatsapp(<?= $sec3->id; ?>);" onclick="textChatWhatsapp(<?= $sec3->id; ?>);" onmouseover="textChatWhatsapp(<?= $sec3->id; ?>);" onmouseout="textChatWhatsapp(<?= $sec3->id; ?>);" onkeydown="textChatWhatsapp(<?= $sec3->id; ?>);" value="" placeholder="Type a message">
                    </div>
                    <div class="button-send">
                        <a href="" id="btn_wa_<?= $sec3->id; ?>" target="_blank"><img src="<?= base_url(); ?>assets/whatsapp/ic_send_message.png"></a>
                    </div>
                </div>
            </div>
        <? } ?>
    </div>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.shorten.js"></script>

<script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/counterup/counterup.min.js"></script>
<script src="<?= base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
<!-- <script src="<?= base_url(); ?>assets/lib/swiper/swiper-bundle.min.js"></script> -->
<script src="<?= base_url(); ?>assets/lib/glightbox/js/glightbox.min.js"></script>


<!-- Template Javascript -->
<script src="<?= base_url(); ?>assets/js/swiper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/main.js"></script>
<script src="<?= base_url(); ?>assets/js/click-scroll.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $(".comment").shorten().shorten({
            chars: 500
        });

        // $(".comment-small").shorten({
        //     showChars: 10
        // });

    });

    function chatWhatsApp() {
        var cek_class = document.getElementById('whatsapp-chat-popup');
        if (cek_class.classList.contains('bounceOutDown')) {
            cek_class.classList.remove("bounceOutDown");
            cek_class.classList.add("bounceInUp");
            cek_class.style.display = "block";
        } else {
            cek_class.classList.remove("bounceInUp");
            cek_class.classList.add("bounceOutDown");
        }
    }

    function chatCustomer(id) {
        var list_chat = document.getElementById("list-chat-section");
        var chat = document.getElementById('customer_chat_' + id);

        if (id != 0 && id != '') {
            list_chat.style.display = "none";
            chat.style.display = "block";
        }
    }

    function closechatWhatsApp() {
        var cek_class = document.getElementById('whatsapp-chat-popup');
        if (cek_class.classList.contains('bounceInUp')) {
            cek_class.classList.remove("bounceInUp");
            cek_class.classList.add("bounceOutDown");
        }
    }

    function backListChat(id) {
        var list_chat = document.getElementById("list-chat-section");
        var chat = document.getElementById('customer_chat_' + id);
        if (id != 0 && id != '') {
            chat.style.display = "none";
            list_chat.style.display = "block";
            $("#chat_wa_" + id).val('');
        }
    }

    function textChatWhatsapp(id) {
        var link_wa = 'https://api.whatsapp.com/send?';
        if (id != 0 && id != '') {
            var telp = $("#telp_wa_" + id).val();
            var chat = $("#chat_wa_" + id).val();
            var link = 'https://api.whatsapp.com/send?phone=62' + telp + '&text=' + chat;
            var btn = document.getElementById("btn_wa_" + id);
            btn.setAttribute("href", link);
        }
    }
</script>

</body>

</html>