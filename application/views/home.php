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
                            <p class="title_blog_top"><?= $blog[0]['title'] ?></p>
                            <div class="sapo_blog"><?= $blog[0]['sapo'] ?></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="list_blog_home">
                <?php foreach ($blog as $key => $val) {
                    if ($key > 0) { ?>
                        <div class="this_content_right">
                            <a title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                <p class="title_blog only_mobile"><?= $val['title'] ?></p>
                            </a>
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
                <div class="load_more">
                    <button class="btn_see_more">
                        <span>Hiển thị thêm tin</span>
                        <i class="icon_arrow_down"></i>
                    </button>
                </div>
            </div>
        </div>
        <?php include('includes/sidebar.php') ?>
    </div>
</div>