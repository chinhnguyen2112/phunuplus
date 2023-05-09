<div class="content">
    <div class="content_about body_width">
        <div class="banner_blog">
            <div class="breadcrumb">
                <a href="/">Trang chủ</a>
                <span> / </span>
                <span class="this_breadcrumb"><?= $title_page ?></span>
            </div>
        </div>
        <?php if (isset($content_tag) && $content_tag != '') { ?>
        <div class="blog_content">
            <div class="right_detail">
                <div class="mucluc_blog" id="mucluc_blog">
                    <p class="title_mucluc" id="title_mucluc">Mục lục</p>
                    <ul class="list_mucluc" id="list_mucluc">

                    </ul>
                </div>
            </div>
            <div class="left_detail">
                <div class="content_blog" id="content_blog">
                    <?= $content_tag ?>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="train_content">
            <div class="top_blog">
                <div class="top_left">
                    <div class="left_blog">
                        <div class="blog_top">
                            <?php foreach ($blog as $key => $val) {
                                if ($key == 0) { ?>
                            <a class="linl_all_detail" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                <div class="blog_top_content blog_top_left">
                                    <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                </div>
                                <div class="blog_top_content blog_top_right">
                                    <p class="title_blog_top"><?= $val['title'] ?></p>
                                    <div class="sapo_blog"><?= $val['sapo'] ?></div>
                                </div>
                            </a>
                            <?php }
                            } ?>
                        </div>
                    </div>
                    <div class="list_blog">
                        <?php foreach ($blog as $key => $val) {
                            if ($key > 0) { ?>
                        <div class="this_train">
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
                                    <div class="des_blog"><?= $val['sapo'] ?></div>
                                </div>
                            </a>
                        </div>
                        <?php }
                        } ?>
                        <div class="load_more">
                            <button class="btn_see_more">
                                <span>Hiển thị thêm tin</span>
                                <i class="icon_arrow_down"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="top_right">
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
                                <?php foreach ($blog as $key => $val) { 
                                    if ($key > 0 && $key <= 5) { ?>
                                <li class="item_hot_news">
                                    <a href="/<?= $val['alias'] ?>"><?= $val['title'] ?></a>
                                </li>
                                <?php }
                                } ?>
                            </ul>
                            <div class="see_more_news">
                                <button class="btn_more">
                                    <a href="/">Xem Thêm</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input id="chuyen_muc" value="<?= isset($chuyenmuc) ? $chuyenmuc : '' ?>" hidden />