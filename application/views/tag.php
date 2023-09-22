<div class="content">
    <div class="content_about body_width">
        <div class="train_content">
            <div class="top_blog">
                <div class="top_left">
                    <div class="breadcrumb">
                        <span class="span_tag">TAG</span>
                        <span class="this_breadcrumb"><?= $title_page ?></span>
                    </div>
                    <?php if (isset($content_tag) && $content_tag != '') { ?>
                        <h1 class="h1_tag"><?= $meta_title ?></h1>
                        <div class="blog_content">
                            <div class="left_detail">
                                <div class="content_blog" id="content_blog">
                                    <?= $content_tag ?>
                                </div>
                                <div class="hide_show_content">
                                    <p class="hide_show_text">Xem thêm</p>
                                    <div class="list_img_arrow">
                                        <img src="/images/arrow.svg" alt="xem thêm">
                                        <img src="/images/arrow.svg" alt="xem thêm">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="left_blog">
                        <div class="blog_top">
                            <?php foreach ($blog as $key => $val) {
                                if ($key == 0) { ?>
                                    <a class="linl_all_detail" title="<?= $val['title'] ?>" href="/<?= alias_new($val['alias'], $val['id']) ?>">
                                        <div class="blog_top_content blog_top_left">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                        </div>
                                        <div class="blog_top_content blog_top_right">
                                            <p class="title_blog_top"><?= $val['title'] ?></p>
                                            <div class="sapo_blog"><?= $val['sapo'] ?>

                                            </div>
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
                                    <a href="/<?= alias_new($val['alias'], $val['id']) ?>">
                                        <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                        <div class="box_right_data">
                                            <p class="title_blog"><?= $val['title'] ?></p>
                                            <p class="date_post"><span><?= date('d-m-Y', $val['created_at']) ?></span></p>
                                            <div class="des_blog"><?= $val['sapo'] ?></div>
                                        </div>
                                    </a>
                                </div>
                        <?php }
                        } ?>
                        <div class="load_more">
                            <div class="div_bgr_load">
                                <span>Hiển thị thêm tin</span>
                                <img src="/images/arrow_loadmore.svg" alt="xem thêm">
                            </div>
                        </div>
                    </div>
                </div>
                <?php include('includes/sidebar.php') ?>
            </div>
        </div>
    </div>
</div>
<input id="chuyen_muc" value="<?= isset($tag_id) ? $tag_id : 0 ?>" hidden />
<input id="name_page" value="tag" hidden />