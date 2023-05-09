<div class="widget_home">
    <div class="container_widget_about body_width">

        <div class="main_content_blog">
            <div class="blog_content">
                <div class="breadcrumb">
                    <a href="/">Trang chủ</a>
                    <span> / </span>
                    <?php if (isset($breadcrumb) && $breadcrumb != '') { ?>
                    <a class="link_breadcrumb" href="#"><?= $breadcrumb ?></a>
                    <span> / </span>
                    <?php } ?>
                    <span class="this_breadcrumb"><?= $blog['title'] ?></span>
                </div>
                <div class="box_data_blog">
                    <div class="left_blog">
                        <h1 class="title_h1"><?= $blog['title'] ?></h1>
                        <div class="box_author">
                            <img src="/images/date.svg" alt="Ngày đăng">
                            <div class="text_author">
                                <p class="date_blog">Đăng ngày: <?= date('d-m-Y', $blog['created_at']) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sapo_top"> <?= $blog['sapo'] ?></div>
                <div class="right_detail">
                    <div class="mucluc_blog" id="mucluc_blog">
                        <p class="title_mucluc" id="title_mucluc">Mục lục [<span class="show_ml">show</span>]</p>
                        <ul class="list_mucluc" id="list_mucluc">

                        </ul>
                    </div>
                </div>
                <div class="left_detail">
                    <div class="content_blog" id="content_blog">
                        <?= $blog['content'] ?>
                    </div>
                </div>


                <div class="line_blog"></div>
                <?php if ($blog_same != null) { ?>
                <div class="blog_same">
                    <div class="list_blog_same">
                        <?php
                        foreach ($blog_same as $val) { ?>
                        <div class="this_handbook ">
                            <a class="img_item" href="/<?= $val['alias'] ?>/">
                                <img class="img_blog_same" src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                            </a>
                            <div class="data_handbook">
                                <a class="title_handbook" href="/<?= $val['alias'] ?>"><?= $val['title'] ?></a>
                                <p class="date_post">
                                    <a class="name_cate"
                                        href="/<?= $blog['alias_cate'] ?>"><?= $blog['name_cate'] ?></a>
                                    <span>
                                        <?= date('d-m-Y', $val['created_at']) ?>
                                        <span>
                                </p>
                                <div class="this_des_handbook"><?= $val['sapo'] ?></div>
                            </div>
                        </div>
                        <?php
                        } ?>
                    </div>
                </div>
                <?php } ?>
            </div>

            <div class="sidebar_content">
                <div class="sidebar_box">
                    <div class="box_heading">
                        <a href="#">Liên Kết Hữu Ích</a>
                    </div>
                    <div class="box_content">
                        <ul>
                            <li class="item_content_sidebar">
                                <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                                Chuyện
                                <strong>
                                    <a href="/chuyen-tinh-yeu/">Tình Yêu</a>
                                </strong>
                                Lãng Mạn
                            </li>
                            <li class="item_content_sidebar">
                                <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                                Chăm Sóc
                                <strong>
                                    <a href="/da-dep/">Da Đẹp</a>
                                </strong>
                                Như Sao Hàn
                            </li>
                            <li class="item_content_sidebar">
                                <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                                Giá Trị Của
                                <strong>
                                    <a href="/hon-nhan/">Hôn Nhân</a>
                                </strong>
                                Vợ Chồng
                            </li>
                            <li class="item_content_sidebar">
                                <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                                Tiêu Chuẩn
                                <strong>
                                    <a href="/dang-dep/">Dáng Đẹp</a>
                                </strong>
                                Phụ Nữ Việt
                            </li>
                            <li class="item_content_sidebar">
                                <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                                Style
                                <strong>
                                    <a href="/mac-dep/">Mặc Đẹp</a>
                                </strong>
                                Dành Cho Phái Nữ
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hot_news">
                    <div class="box_heading">
                        <a href="#">
                            <img src="/images/icons/icons8-fire-30.png" />
                            Tin Mới Nóng
                        </a>
                    </div>
                    <div class="box_content">
                        <ul>
                            <?php foreach ($hot_news as $key => $val) { ?>
                            <li class="item_hot_news">
                                <a href="/<?= $val['alias'] ?>"><?= $val['title'] ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                        <div class="see_more_news">
                            <button class="btn_see_more">
                                <a href="/">Xem Thêm</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>