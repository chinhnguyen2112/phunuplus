<div class="widget_home">
    <div class="container_widget_about body_width">
        <div class="main_content_blog">
            <div class="blog_content">
                <div class="breadcrumb">
                    <span>
                        <img src="/images/icons/icons8-home-20.png" alt="icon home small">
                    </span>
                    <span>
                        <img src="/images/icons/icons8-arrow-right-10.png" alt="icon arrow right">
                    </span>
                    <?php if (isset($cate_1) && $cate_1 != null) { ?>
                        <a class="link_breadcrumb" href="/<?= $cate_1['alias'] ?>/"><?= $cate_1['name'] ?></a>
                        <span>
                            <img src="/images/icons/icons8-arrow-right-10.png" src="icon arrow right">
                        </span>
                    <?php }
                    if (isset($cate) && $cate != null) { ?>
                        <a class="link_breadcrumb" href="/<?= $cate['alias'] ?>/"><?= $cate['name'] ?></a>

                    <?php } ?>
                </div>
                <div class="box_data_blog">
                    <div class="left_blog">
                        <h1 class="title_h1"><?= $blog['title'] ?></h1>
                        <div class="box_author">
                            <div class="box_date">
                                <p class="date_blog"><?= replace_date($blog['created_at']) ?></p>
                            </div>
                            <a rel="nofollow" class="follow_ggnew" target="_blank" href="https://news.google.com/publications/CAAqBwgKMK2v0Asw7MrnAw?hl=vi&gl=VN&ceid=VN:vi">Theo dõi Phunuplus trên <img src="/images/googlelogo.svg" alt=""> News</a>
                        </div>
                    </div>
                </div>
                <div class="sapo_top"> <?= $blog['sapo'] ?></div>
                <div class="right_detail">
                    <div class="mucluc_blog" id="mucluc_blog">
                        <div class="box_title_ml">
                            <p class="title_mucluc" id="title_mucluc"><img class="img_ml" src="/images/icons/mucluc.png" alt="mục lục"> Mục lục</p>
                            <img src="/images/icon_arrow_bold.webp" class="img_show_ml" alt="mục lục">
                        </div>
                        <ul class="list_mucluc" id="list_mucluc">

                        </ul>
                    </div>
                </div>
                <div class="left_detail">
                    <div class="content_blog" id="content_blog">
                        <?= $blog['content'] ?>
                    </div>
                </div>
                <?php if (isset($author) && $author != null) { ?>
                    <div class="text_author">
                        <a class="name_author" href="/<?= $author['alias'] ?>/"><?= $author['name'] ?></a>
                    </div>
                <?php } ?>
                <?php
                if ($blog['tag'] != '') {
                    $tag = explode(',', $blog['tag']); ?>
                    <div class="box_tag">
                        <p class="title_tag"><img src="/images/icons/icon-chu-de.svg" alt="Chủ đề"> Chủ đề:</p>
                        <?php foreach ($tag as $key_tag => $val) {
                            $this_tag = tag(['id' => $val]);
                            echo '<a href="/' . $this_tag[0]['alias'] . '/" class="this_tag">' . $this_tag[0]['name'] . '</a>';
                        } ?>
                    </div>
                <?php } ?>
                <div class="sidebar_mid">
                    <?php include('includes/sidebar.php') ?>
                </div>

                <div class="podcast_box">
                    <div class="box_layout">
                        <div class="box_header">
                            <a class="link_home" href="/">
                                <img src="/images/36.png" alt="logo">
                            </a>
                            <div class="box_header_tag">
                                <a class="item_header_tag" href="/chuyen-tinh-yeu/">
                                    <img src="/images/icons/icons8-heart-30.png" alt="icon heart">
                                    <span>Tình Yêu</span>
                                </a>
                                <a class="item_header_tag" href="/toc-dep/">
                                    <img src="/images/icons/icons8-hair-30.png" alt="icon hair">
                                    <span>Tóc Đẹp</span>
                                </a>
                                <a class="item_header_tag" href="/dia-diem-an-uong/">
                                    <img src="/images/icons/icons8-mom-30.png" alt="icon mom">
                                    <span>Địa Điểm Ăn Uống</span>
                                </a>
                                <a class="item_header_tag" href="/me-thong-thai/">
                                    <img src="/images/icons/icons8-address-30.png">
                                    <span>Mẹ Thông Thái</span>
                                </a>
                            </div>
                        </div>
                        <div class="box_middle">
                            <?php foreach ($blog_same as $key => $val) {
                                if ($key == 0) { ?>
                                    <div class="this_content_right content_no_border middle_left">
                                        <a class="linl_all_detail link_fl" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                            <div class="box_content_blog">
                                                <p class="title_blog"><?= $val['title'] ?></p>
                                                <div class="fl_date">
                                                    <p class="cate_post"><?php $cate = chuyen_muc(['id' => $val['chuyenmuc']]);
                                                                            echo $cate[0]['name']; ?></p>
                                                    <span class="dot_item"></span>
                                                    <p class="date_post"><?= date('d-m-Y', $val['created_at']) ?></p>
                                                </div>
                                                <span class="des_post"><?= $val['sapo'] ?></span>
                                            </div>
                                        </a>
                                    </div>
                            <?php }
                            } ?>
                            <div class="middle_right">
                                <?php foreach ($blog_same as $key => $val) {
                                    if ($key > 0 && $key < 3) { ?>
                                        <div class="this_content_right content_no_border content_right_podcast">
                                            <a class="linl_all_detail link_fl" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                                <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                                <div class="box_content_blog">
                                                    <p class="title_blog"><?= $val['title'] ?></p>
                                                    <div class="fl_date">
                                                        <p class="cate_post"><?php $cate = chuyen_muc(['id' => $val['chuyenmuc']]);
                                                                                echo $cate[0]['name']; ?></p>
                                                        <span class="dot_item"></span>
                                                        <p class="date_post"><?= date('d-m-Y', $val['created_at']) ?></p>
                                                    </div>
                                                    <span class="des_post"><?= $val['sapo'] ?></span>
                                                </div>
                                            </a>
                                        </div>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if ($blog_same != null) { ?>
                    <div class="blog_same">
                        <div class="list_blog_same">
                            <?php
                            foreach ($blog_same as $val) { ?>
                                <div class="this_train">
                                    <a title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                        <p class="title_blog only_mobile"><?= $val['title'] ?></p>
                                    </a>
                                    <a href="/<?= $val['alias'] ?>/">
                                        <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                        <div class="box_right_data">
                                            <p class="title_blog"><?= $val['title'] ?></p>
                                            <div class="fl_date">
                                                <p class="cate_post"><?php $cate = chuyen_muc(['id' => $val['chuyenmuc']]);
                                                                        echo $cate[0]['name']; ?></p>
                                                <span class="dot_item"></span>
                                                <p class="date_post"><?= date('d-m-Y', $val['created_at']) ?></p>
                                            </div>
                                            <div class="des_blog"><?= $val['sapo'] ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="sidebar_bot">
                <?php include('includes/sidebar.php') ?>
            </div>
        </div>
    </div>
</div>