<?php
$ft1 = chuyen_muc(['parent' => 1]);
$ft2 = chuyen_muc(['parent' => 3]);
$ft3 = chuyen_muc(['parent' => 5]);
$ft4 = chuyen_muc(['parent' => 7]);
$ft5 = chuyen_muc(['parent' => 10]);
?>
<div class="footer">
    <div class="footer_logo">
        <div class="logo_ft body_width ">
            <img src="/images/logo.png" alt="Logo" class="img_logo_ft">
        </div>
    </div>
    <!-- <div class="footer_top">
        <div class="content_footer_top body_width">
            <div class="ft_box_cat">
                <p class="ft_name_cat">Yêu</p>
                <ul>
                    <?php foreach ($ft1 as $val) { ?>
                        <li><a class="ft_link_cat" href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="ft_box_cat">
                <p class="ft_name_cat">Đẹp</p>
                <ul>
                    <?php foreach ($ft2 as $val) { ?>
                        <li><a class="ft_link_cat" href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="ft_box_cat">
                <p class="ft_name_cat">Khỏe</p>
                <ul>
                    <?php foreach ($ft3 as $val) { ?>
                        <li><a class="ft_link_cat" href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="ft_box_cat">
                <p class="ft_name_cat">Bếp</p>
                <ul>
                    <?php foreach ($ft4 as $val) { ?>
                        <li><a class="ft_link_cat" href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="ft_box_cat">
                <p class="ft_name_cat">Nuôi</p>
                <ul>
                    <?php foreach ($ft5 as $val) { ?>
                        <li><a class="ft_link_cat" href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div> -->
    <!-- <div class="footer_tag">
        <div class="content_footer_tag body_width">
            <a href="#" class="this_tag_ft">Thể theo 24h</a>
            <a href="#" class="this_tag_ft">Công nghệ</a>
        </div>
    </div> -->
    <div class="footer_bottom">
        <div class="content_footer_top body_width">
            <div class="ft_app">
                <p class="ft_title_app">APP Mobile</p>
                <ul class="list_app_ft">
                    <li><a href="#"><img src="/images/icons/apple.png" alt="tải xuống ios"></a></li>
                    <li><a href="#"><img src="/images/icons/android.png" alt="tải xuống android"></a></li>
                </ul>
            </div>
            <div class="ft_lh">
                <p class="ft_title_app">Liên Hệ</p>
                <ul class="list_lh_ft">
                    <li><a href="/gioi-thieu-phu-nu-plus/">Giới thiệu</a></li>
                    <li><a href="/lien-he/">Liên hệ</a></li>
                    <li><a href="/chinh-sach-bao-mat/">Chính sách bảo mật</a></li>
                </ul>
            </div>
            <div class="ft_social">
                <p class="ft_title_app">Social</p>
                <ul class="list_lh_ft list_social_ft">
                    <li><a href="#"><img src="/images/icons/ytb.png" alt="Youtube"> Youtube</a></li>
                    <li><a href="#"><img src="/images/icons/zalo.png" alt="Zalo"> Zalo</a></li>
                    <li><a href="#"><img src="/images/icons/fb.png" alt="Facebook"> Facebook</a></li>
                    <li><a href="#"><img src="/images/icons/tw.png" alt="Twitter"> Twitter</a></li>
                    <li><a href="#"><img src="/images/icons/rss.png" alt="RSS"> RSS</a></li>
                    <li><a href="#"><img src="/images/icons/tt.png" alt="Tiktok"> Tiktok</a></li>
                </ul>
            </div>
            <div class="ft_data">
                <p><b>Phụ Nữ Plus</b> là trang web chia sẻ kiến thức và kinh nghiệm hữu ích cho phụ nữ về nhiều lĩnh vực đời sống như tình yêu, làm đẹp, váo bếp, sức khỏe, du lịch.</p>
                <p>Các bài viết chia sẻ bí quyết và cẩm nang giúp phụ nữ cải thiện cuộc sống và sức khỏe. <b>Phụ nữ Plus</b> mong muốn trở thành người bạn đồng hành đáng tin cậy và thông tin hữu ích cho phụ nữ.</p>
                <p><b>Điện thoại:</b> 0328 39 635 / <b>Email:</b> cs.phunuplus@gmail.com</p>
                <p><b>Trụ sở chính:</b> Số 111 đường Mễ Trì - Quận Nam Từ Liêm - Hà Nội</p>
            </div>
        </div>
    </div>
</div>