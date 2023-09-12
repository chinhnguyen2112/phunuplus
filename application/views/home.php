<?php if ($hots_week == null) { ?>
    <style>
        .sidebar_box {
            margin-bottom: 20px !important;
        }
    </style>
<?php } ?>
<h1 style="width:0;height:0 ; display:none;"><?= $meta_title ?></h1>

<div class="homeContent body_width">
    <div class="container_widget ">
        <div class="right_home">
            <div class="blog_top">
                <div class="border_blog">
                    <a class="linl_all_detail" title="<?= $blog[0]['title'] ?>" href="/<?= $blog[0]['alias'] ?>/">
                        <div class="blog_top_content blog_top_left">
                            <img src="/<?= $blog[0]['image'] ?>" alt="<?= $blog[0]['title'] ?>">
                        </div>
                        <div class="blog_top_content blog_top_right">
                            <div class="bg_gradient"></div>
                            <div class="bg_gray">
                                <h3 class="title_blog_top"><?= $blog[0]['title'] ?></h3>
                                <div class="sapo_blog"><?= $blog[0]['sapo'] ?></div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <?php if ($hots_week != null) { ?>
                <div class="hots_week">
                    <div class="title_hots">
                        <h2>Tiêu Điểm Tuần</h2>
                        <div class="border_dotted"></div>
                    </div>
                    <div class="slider_hots_week">
                        <?php foreach ($hots_week as $key => $val) { ?>
                            <div class="item_slide_hots">
                                <a title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                    <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                </a>
                                <p class="name_cate_hots"><?= $val['name_cate'] ?></p>
                                <p class="title_item_hots"><?= $val['title'] ?></p>
                            </div>
                        <?php  } ?>
                    </div>
                </div>
            <?php } ?>
            <div class="list_blog_home">
                <?php foreach ($blog as $key => $val) {
                    if ($key > 0) { ?>
                        <div class="this_content_right">
                            <a title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                <h3 class="title_blog only_mobile"><?= $val['title'] ?></h3>
                            </a>
                            <a class="linl_all_detail link_fl" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                <div class="box_content_blog">
                                    <p class="title_blog"><?= $val['title'] ?></p>
                                    <div class="fl_date">
                                        <p class="cate_post"><?= $val['name_cate'] ?></p>
                                        <span class="dot_item"></span>
                                        <p class="date_post"><?= date('d-m-Y', $val['created_at']) ?></p>
                                    </div>
                                    <span class="des_post"><?= $val['sapo'] ?>

                                    </span>
                                </div>
                            </a>
                        </div>
                <?php }
                } ?>
            </div>
            <div class="all_cate">
                <?php if ($yeu != null) { ?>
                    <div class="item_cate">
                        <a href="/yeu/" class="title_item_cate">
                            <span class="bg_color"></span>
                            <h2>Yêu</h2>
                        </a>
                        <div class="content_item_cate">
                            <a class="first_item_cate" title="<?= $yeu[0]['title'] ?>" href="/<?= $yeu[0]['alias'] ?>/">
                                <img src="/<?= $yeu[0]['image'] ?>" alt="<?= $yeu[0]['title'] ?>">
                                <h3 class="title_blog_cate"><?= $yeu[0]['title'] ?></h3>
                                <!-- <div class="sapo_item_cate"><?= $yeu[0]['sapo'] ?></div> -->
                            </a>
                            <div class="list_blog_child">
                                <?php foreach ($yeu as $key => $val) {
                                    if ($key > 0 && $key < 6) { ?>
                                        <a class="item_blog_child" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_cate_child"><?= $val['title'] ?></p>
                                        </a>
                                <?php }
                                }  ?>
                            </div>
                        </div>
                    </div>

                <?php }
                if ($dep != null) { ?>
                    <div class="item_cate">
                        <a href="/dep/" class="title_item_cate">
                            <span class="bg_color"></span>
                            <h2>Đẹp</h2>
                        </a>
                        <div class="content_item_cate">
                            <a class="first_item_cate" title="<?= $dep[0]['title'] ?>" href="/<?= $dep[0]['alias'] ?>/">
                                <img src="/<?= $dep[0]['image'] ?>" alt="<?= $dep[0]['title'] ?>">
                                <h3 class="title_blog_cate"><?= $dep[0]['title'] ?></h3>
                                <!-- <div class="sapo_item_cate"><?= $dep[0]['sapo'] ?></div> -->
                            </a>
                            <div class="list_blog_child">
                                <?php foreach ($dep as $key => $val) {
                                    if ($key > 0 && $key < 6) { ?>
                                        <a class="item_blog_child" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_cate_child"><?= $val['title'] ?></p>
                                        </a>
                                <?php }
                                }  ?>
                            </div>
                        </div>
                    </div>

                <?php }
                if ($khoe != null) { ?>
                    <div class="item_cate">
                        <a href="/khoe/" class="title_item_cate">
                            <span class="bg_color"></span>
                            <h2>Khoẻ</h2>
                        </a>
                        <div class="content_item_cate">
                            <a class="first_item_cate" title="<?= $khoe[0]['title'] ?>" href="/<?= $khoe[0]['alias'] ?>/">
                                <img src="/<?= $khoe[0]['image'] ?>" alt="<?= $khoe[0]['title'] ?>">
                                <h3 class="title_blog_cate"><?= $khoe[0]['title'] ?></h3>
                                <!-- <div class="sapo_item_cate"><?= $khoe[0]['sapo'] ?></div> -->
                            </a>
                            <div class="list_blog_child">
                                <?php foreach ($khoe as $key => $val) {
                                    if ($key > 0 && $key < 6) { ?>
                                        <a class="item_blog_child" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_cate_child"><?= $val['title'] ?></p>
                                        </a>
                                <?php }
                                }  ?>
                            </div>
                        </div>
                    </div>

                <?php }
                if ($bep != null) { ?>
                    <div class="item_cate">
                        <a href="/bep/" class="title_item_cate">
                            <span class="bg_color"></span>
                            <h2>Bếp</h2>
                        </a>
                        <div class="content_item_cate">
                            <a class="first_item_cate" title="<?= $bep[0]['title'] ?>" href="/<?= $bep[0]['alias'] ?>/">
                                <img src="/<?= $bep[0]['image'] ?>" alt="<?= $bep[0]['title'] ?>">
                                <h3 class="title_blog_cate"><?= $bep[0]['title'] ?></h3>
                                <!-- <div class="sapo_item_cate"><?= $bep[0]['sapo'] ?></div> -->
                            </a>
                            <div class="list_blog_child">
                                <?php foreach ($bep as $key => $val) {
                                    if ($key > 0 && $key < 6) { ?>
                                        <a class="item_blog_child" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_cate_child"><?= $val['title'] ?></p>
                                        </a>
                                <?php }
                                }  ?>
                            </div>
                        </div>
                    </div>

                <?php }
                if ($lam_me != null) { ?>
                    <div class="item_cate">
                        <a href="lam-me" class="title_item_cate">
                            <span class="bg_color"></span>
                            <h2>Làm Mẹ</h2>
                        </a>
                        <div class="content_item_cate">
                            <a class="first_item_cate" title="<?= $lam_me[0]['title'] ?>" href="/<?= $lam_me[0]['alias'] ?>/">
                                <img src="/<?= $lam_me[0]['image'] ?>" alt="<?= $lam_me[0]['title'] ?>">
                                <h3 class="title_blog_cate"><?= $lam_me[0]['title'] ?></h3>
                                <!-- <div class="sapo_item_cate"><?= $lam_me[0]['sapo'] ?></div> -->
                            </a>
                            <div class="list_blog_child">
                                <?php foreach ($lam_me as $key => $val) {
                                    if ($key > 0 && $key < 6) { ?>
                                        <a class="item_blog_child" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_cate_child"><?= $val['title'] ?></p>
                                        </a>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>

                <?php }
                if ($life_style != null) { ?>
                    <div class="item_cate">
                        <a href="/lifestyle/" class="title_item_cate">
                            <span class="bg_color"></span>
                            <h2>LifeStyle</h2>
                        </a>
                        <div class="content_item_cate">
                            <a class="first_item_cate" title="<?= $life_style[0]['title'] ?>" href="/<?= $life_style[0]['alias'] ?>/">
                                <img src="/<?= $life_style[0]['image'] ?>" alt="<?= $life_style[0]['title'] ?>">
                                <h3 class="title_blog_cate"><?= $life_style[0]['title'] ?></h3>
                                <!-- <div class="sapo_item_cate"><?= $life_style[0]['sapo'] ?></div> -->
                            </a>
                            <div class="list_blog_child">
                                <?php foreach ($life_style as $key => $val) {
                                    if ($key > 0 && $key < 6) { ?>
                                        <a class="item_blog_child" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_cate_child"><?= $val['title'] ?></p>
                                        </a>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>

                <?php }
                if ($tam != null) { ?>
                    <div class="item_cate">
                        <a href="/tam/" class="title_item_cate">
                            <span class="bg_color"></span>
                            <h2>Tâm</h2>
                        </a>
                        <div class="content_item_cate">
                            <a class="first_item_cate" title="<?= $tam[0]['title'] ?>" href="/<?= $tam[0]['alias'] ?>/">
                                <img src="/<?= $tam[0]['image'] ?>" alt="<?= $tam[0]['title'] ?>">
                                <h3 class="title_blog_cate"><?= $tam[0]['title'] ?></h3>
                                <!-- <div class="sapo_item_cate"><?= $tam[0]['sapo'] ?></div> -->
                            </a>
                            <div class="list_blog_child">
                                <?php foreach ($tam as $key => $val) {
                                    if ($key > 0 && $key < 6) { ?>
                                        <a class="item_blog_child" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_cate_child"><?= $val['title'] ?></p>
                                        </a>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                <?php }
                if ($tieu_dung != null) { ?>
                    <div class="item_cate">
                        <a href="/tieu-dung/" class="title_item_cate">
                            <span class="bg_color"></span>
                            <h2>Tiêu Dùng</h2>
                        </a>
                        <div class="content_item_cate">
                            <a class="first_item_cate" title="<?= $tieu_dung[0]['title'] ?>" href="/<?= $tieu_dung[0]['alias'] ?>/">
                                <img src="/<?= $tieu_dung[0]['image'] ?>" alt="<?= $tieu_dung[0]['title'] ?>">
                                <h3 class="title_blog_cate"><?= $tieu_dung[0]['title'] ?></h3>
                                <!-- <div class="sapo_item_cate"><?= $tieu_dung[0]['sapo'] ?></div> -->
                            </a>
                            <div class="list_blog_child">
                                <?php foreach ($tieu_dung as $key => $val) {
                                    if ($key > 0 && $key < 6) { ?>
                                        <a class="item_blog_child" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_cate_child"><?= $val['title'] ?></p>
                                        </a>
                                <?php }
                                }  ?>
                            </div>
                        </div>
                    </div>

                <?php }
                if ($giai_tri != null) { ?>
                    <div class="item_cate">
                        <a href="/giai-tri/" class="title_item_cate">
                            <span class="bg_color"></span>
                            <h2>Giải Trí</h2>
                        </a>
                        <div class="content_item_cate">
                            <a class="first_item_cate" title="<?= $giai_tri[0]['title'] ?>" href="/<?= $giai_tri[0]['alias'] ?>/">
                                <img src="/<?= $giai_tri[0]['image'] ?>" alt="<?= $giai_tri[0]['title'] ?>">
                                <h3 class="title_blog_cate"><?= $giai_tri[0]['title'] ?></h3>
                                <!-- <div class="sapo_item_cate"><?= $giai_tri[0]['sapo'] ?></div> -->
                            </a>
                            <div class="list_blog_child">
                                <?php foreach ($giai_tri as $key => $val) {
                                    if ($key > 0 && $key < 6) { ?>
                                        <a class="item_blog_child" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_cate_child"><?= $val['title'] ?></p>
                                        </a>
                                <?php }
                                }  ?>
                            </div>
                        </div>
                    </div>

                <?php }
                if ($mat_ngu != null) { ?>
                    <div class="item_cate">
                        <a href="/mat-ngu/" class="title_item_cate">
                            <span class="bg_color"></span>
                            <h2>Mật Ngữ</h2>
                        </a>
                        <div class="content_item_cate">
                            <a class="first_item_cate" title="<?= $mat_ngu[0]['title'] ?>" href="/<?= $mat_ngu[0]['alias'] ?>/">
                                <img src="/<?= $mat_ngu[0]['image'] ?>" alt="<?= $mat_ngu[0]['title'] ?>">
                                <h3 class="title_blog_cate"><?= $mat_ngu[0]['title'] ?></h3>
                                <!-- <div class="sapo_item_cate"><?= $mat_ngu[0]['sapo'] ?></div> -->
                            </a>
                            <div class="list_blog_child">
                                <?php foreach ($mat_ngu as $key => $val) {
                                    if ($key > 0 && $key < 6) { ?>
                                        <a class="item_blog_child" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_cate_child"><?= $val['title'] ?></p>
                                        </a>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>

                <?php }
                if ($phong_su != null) { ?>
                    <div class="item_cate">
                        <a href="/phong-su/" class="title_item_cate">
                            <span class="bg_color"></span>
                            <h2>Phóng Sự</h2>
                        </a>
                        <div class="content_item_cate">
                            <a class="first_item_cate" title="<?= $phong_su[0]['title'] ?>" href="/<?= $phong_su[0]['alias'] ?>/">
                                <img src="/<?= $phong_su[0]['image'] ?>" alt="<?= $phong_su[0]['title'] ?>">
                                <h3 class="title_blog_cate"><?= $phong_su[0]['title'] ?></h3>
                                <!-- <div class="sapo_item_cate"><?= $phong_su[0]['sapo'] ?></div> -->
                            </a>
                            <div class="list_blog_child">
                                <?php foreach ($phong_su as $key => $val) {
                                    if ($key > 0 && $key < 6) { ?>
                                        <a class="item_blog_child" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_cate_child"><?= $val['title'] ?></p>
                                        </a>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>

                <?php }
                if ($ban_doc != null) { ?>
                    <div class="item_cate">
                        <a href="/ban-doc/" class="title_item_cate">
                            <span class="bg_color"></span>
                            <h2>Bạn Đọc</h2>
                        </a>
                        <div class="content_item_cate">
                            <a class="first_item_cate" title="<?= $ban_doc[0]['title'] ?>" href="/<?= $ban_doc[0]['alias'] ?>/">
                                <img src="/<?= $ban_doc[0]['image'] ?>" alt="<?= $ban_doc[0]['title'] ?>">
                                <h3 class="title_blog_cate"><?= $ban_doc[0]['title'] ?></h3>
                                <!-- <div class="sapo_item_cate"><?= $ban_doc[0]['sapo'] ?></div> -->
                            </a>
                            <div class="list_blog_child">
                                <?php foreach ($ban_doc as $key => $val) {
                                    if ($key > 0 && $key < 6) { ?>
                                        <a class="item_blog_child" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_cate_child"><?= $val['title'] ?></p>
                                        </a>
                                <?php }
                                }  ?>
                            </div>
                        </div>
                    </div>

                <?php }
                if ($yolo != null) { ?>
                    <div class="item_cate">
                        <a href="/gioi-tre/" class="title_item_cate">
                            <span class="bg_color"></span>
                            <h2>YOLO</h2>
                        </a>
                        <div class="content_item_cate">
                            <a class="first_item_cate" title="<?= $yolo[0]['title'] ?>" href="/<?= $yolo[0]['alias'] ?>/">
                                <img src="/<?= $yolo[0]['image'] ?>" alt="<?= $yolo[0]['title'] ?>">
                                <h3 class="title_blog_cate"><?= $yolo[0]['title'] ?></h3>
                                <!-- <div class="sapo_item_cate"><?= $yolo[0]['sapo'] ?></div> -->
                            </a>
                            <div class="list_blog_child">
                                <?php foreach ($yolo as $key => $val) {
                                    if ($key > 0 && $key < 6) { ?>
                                        <a class="item_blog_child" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_cate_child"><?= $val['title'] ?></p>
                                        </a>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                <?php }
                if ($nhac != null) { ?>
                    <div class="item_cate">
                        <a href="/am-nhac/" class="title_item_cate">
                            <span class="bg_color"></span>
                            <h2>Nhạc</h2>
                        </a>
                        <div class="content_item_cate">
                            <a class="first_item_cate" title="<?= $nhac[0]['title'] ?>" href="/<?= $nhac[0]['alias'] ?>/">
                                <img src="/<?= $nhac[0]['image'] ?>" alt="<?= $nhac[0]['title'] ?>">
                                <h3 class="title_blog_cate"><?= $nhac[0]['title'] ?></h3>
                                <!-- <div class="sapo_item_cate"><?= $nhac[0]['sapo'] ?></div> -->
                            </a>
                            <div class="list_blog_child">
                                <?php foreach ($nhac as $key => $val) {
                                    if ($key > 0 && $key < 6) { ?>
                                        <a class="item_blog_child" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <p class="title_blog_cate_child"><?= $val['title'] ?></p>
                                        </a>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php include('includes/sidebar.php') ?>
    </div>
    <div class="container_widget container_widget_2">

    </div>
</div>