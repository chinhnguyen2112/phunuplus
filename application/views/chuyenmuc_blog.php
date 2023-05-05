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
                    <div class="list_news item_left">
                        <div class="header_news header_item_left">
                        <p>Tin Mới Nhất</p>
                        </div>
                        <div class="content_news content_item_left">
                        <ul class="list_news_content">
                            <?php foreach ($blog as $key => $val) {
                            if ($key < 6) { ?>
                            <li class="item_news item">
                            <a href="/<?= $val['alias'] ?>/"><?= $val['title'] ?></a>
                            </li>
                            <?php } 
                            } ?>
                        </ul>
                        </div>
                    </div>
                    <div class="useful_links item_left">
                        <div class="header_links header_item_left">
                        <p>Liên Kết Hữu Ích</p>
                        </div>
                        <div class="content_links content_item_left">
                        <ul class="list_links">
                            <li class="item_links item">
                            <img src="/images/icons/icons8-star-50.png" />
                            <a href="#">
                                Cập nhật 
                                <strong>tin tức phụ nữ</strong>
                                mới
                                </a>
                            </li>
                            <li class="item_links item">
                            <img src="/images/icons/icons8-star-50.png" />
                            <a href="#">
                                Đọc tin
                                <strong>phụ nữ</strong>
                                mới
                                </a>
                            </li>
                            <li class="item_links item">
                            <img src="/images/icons/icons8-star-50.png" />
                            <a href="#">
                                Cập nhật 
                                <strong>tin tức phụ nữ</strong>
                                mới
                                </a>
                            </li>
                            
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input id="chuyen_muc" value="<?= isset($chuyenmuc) ? $chuyenmuc : '' ?>" hidden />
