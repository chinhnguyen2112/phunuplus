<?php
$ft1 = chuyen_muc(['parent' => 1]);
$ft2 = chuyen_muc(['parent' => 3]);
$ft3 = chuyen_muc(['parent' => 5]);
$ft4 = chuyen_muc(['parent' => 7]);
$ft5 = chuyen_muc(['parent' => 10]);
?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v17.0"
    nonce="wmm40zXP"></script>
<div class="footer">
    <div class="footer_content body_width">
        <div class="ft_top item_ft">
            <div class="item_ft_top ft_top_01">
                <p>GÓC NHÌN ĐA CHIỀU PHỤ NỮ VIỆT NAM</p>
                <div class="all_menu_ft">
                    <div class="list_item_menu_ft list_left">
                        <?php $menu_cate_parent = chuyen_muc(['parent' => 0]);
                        foreach ($menu_cate_parent as $key => $val) {
                            if ($key <= 4) { ?>
                        <li class="item_menu_ft">
                            <a href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a>
                        </li>
                        <?php }
                        } ?>
                    </div>
                    <div class="list_item_menu_ft list_right">
                        <?php $menu_cate_parent = chuyen_muc(['parent' => 0]);
                        foreach ($menu_cate_parent as $key => $val) {
                            if ($key > 4) { ?>
                        <li class="item_menu_ft">
                            <a href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a>
                        </li>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
            <div class="line_ft_top"></div>
            <div class="item_ft_top ft_top_02">
                <a href="/">
                    <img src="/images/logo.png" alt="logo">
                </a>
                <p>All rights reserved © Phụ Nữ Plus</p>
                <p><b>Phụ Nữ Plus</b> Web chia sẻ kiến thức và kinh nghiệm hữu ích cho phụ nữ về nhiều lĩnh vực đời sống về Yêu, Làm đẹp, Vào bếp, Sức khỏe, Tiêu dùng, Phóng sự.</p>
            </div>
            <div class="line_ft_top line_nonpc"></div>
            <div class="item_ft_top ft_top_03">
                <div class="fanpage_fb">
                    <div class="fb-page" data-href="https://www.facebook.com/phunutre.vn" data-tabs="" data-width="482"
                        data-height="" data-small-header="false" data-adapt-container-width="true"
                        data-hide-cover="false" data-show-facepile="false">
                        <blockquote cite="https://www.facebook.com/phunutre.vn" class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/phunutre.vn">Phụ Nữ News</a></blockquote>
                    </div>
                </div>
                <div class="list_contact">
                    <img class="qr_code" src="/images/icons/qrcode-new.png" alt="qr code">
                    <div class="app">
                        <a href="#">
                            <img src="/images/icons/googleplay.png" alt="google play">
                        </a>
                        <a href="#">
                            <img src="/images/icons/appstore.png" alt="app store">
                        </a>
                    </div>
                    <div class="mxh">
                        <a href="#">
                            <img class="icon_fb" src="/images/icons/icon_fb_ft.png" alt="icon facebook">
                        </a>
                        <a href="#">
                            <img class="icon_yt" src="/images/icons/icon_yt_ft.png" alt="icon youtube">
                        </a>
                        <a href="#">
                            <img class="icon_tt" src="/images/icons/icon_tt_ft.png" alt="icon tiktok">
                        </a>
                        <a href="#">
                            <img class="icon_ins" src="/images/icons/icon_ins_ft.png" alt="icon instagram">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ft_bot item_ft">
            <div class="item_ft_bot ft_bot_01">
                <p><b>Hợp tác nội dung:</b> PhuNuPlus</p>
                <p><b>Hợp tác thương mại:</b> PhuNuPlus</p>
            </div>
            <div class="item_ft_bot ft_bot_02">
                <p><b>Chịu trách nhiệm nội dung:</b> Cao Minh Tuệ</p>
                <p><b>Điện thoại:</b> 0328 39 635</p>
            </div>
            <div class="item_ft_bot ft_bot_03">
                <p><b>Trụ sở chính:</b> Số 111 đường Mễ Trì - Quận Nam Từ Liêm - Hà Nội.</p>
                <p><b>Email:</b> cs.phunuplus@gmail.com</p>
            </div>
        </div>
    </div>
</div>