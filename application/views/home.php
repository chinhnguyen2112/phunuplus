<h1 style="display: none;">Phụ Nữ Plus</h1>
<div class="homeContent body_width">
    <div class="blog_top">
        <div class="left_blog_top">
            <div class="blog_1">
                <a class="linl_all_detail" title="<?= $blog[0]['title'] ?>" href="/<?= alias_new($blog[0]['alias'], $blog[0]['id']) ?>">
                    <div class="blog_top_content blog_top_left">
                        <img src="/<?= ($blog[0]['image'] != '') ? $blog[0]['image'] : 'images/logo.png' ?>" alt="<?= $blog[0]['title'] ?>">
                        <div class="bg_image"></div>
                    </div>
                    <div class="blog_top_content blog_top_right">
                        <p class="title_blog_top"><?= $blog[0]['title'] ?></p>
                    </div>
                </a>
            </div>
            <div class="blog_2">
                <?php foreach ($blog as $key => $val) {
                    if ($key > 0 && $key < 4) { ?>
                        <div class="blog_content_2">
                            <a title="<?= $val['title'] ?>" href="/<?= alias_new($val['alias'], $val['id']) ?>">
                                <p class="title_blog only_mobile"><?= $val['title'] ?></p>
                            </a>
                            <a class="linl_all_detail link_fl" title="<?= $val['title'] ?>" href="/<?= alias_new($val['alias'], $val['id']) ?>">
                                <img src="/<?= ($val['image'] != '') ? $val['image'] : 'images/logo.png' ?>" alt="<?= $val['title'] ?>">
                                <div class="bg_image"></div>
                                <div class="box_content_blog">
                                    <p class="title_blog"><?= $val['title'] ?></p>
                                    <div class="fl_date only_mobile">
                                        <p class="cate_post only_mobile"><?php $cate = author(['id' => $val['author_id']]);
                                                                            echo $cate[0]['name']; ?></p>
                                        <span class="dot_item"></span>
                                        <p class="date_post"><?= date('d-m-Y', $val['created_at']) ?></p>
                                    </div>
                                    <div class="des_post"><?= $val['sapo'] ?> </div>
                                </div>
                            </a>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
    <div class="container_widget ">
        <div class="right_home">
            <div class="list_blog_home">
                <div class="tab_home">
                    <div class="list_tab">
                        <?php
                        $tab = chuyen_muc(['parent' => 0]);
                        foreach ($tab as $val) { ?>
                            <a class="this_tab" href="/<?= $val['alias'] ?>/">
                                <span class="img_tab"></span>
                                <p class="name_tab"><?= $val['name'] ?></p>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <?php foreach ($blog as $key => $val) {
                    if ($key >= 4) { ?>
                        <div class="this_content_right">
                            <a title="<?= $val['title'] ?>" href="/<?= alias_new($val['alias'], $val['id']) ?>">
                                <p class="title_blog only_mobile"><?= $val['title'] ?></p>
                            </a>
                            <a class="linl_all_detail link_fl" title="<?= $val['title'] ?>" href="/<?= alias_new($val['alias'], $val['id']) ?>">
                                <img src="/<?= ($val['image'] != '') ? $val['image'] : 'images/logo.png' ?>" alt="<?= $val['title'] ?>">
                                <div class="box_content_blog">
                                    <p class="title_blog"><?= $val['title'] ?></p>
                                    <div class="fl_date">
                                        <p class="cate_post"><?php $cate = author(['id' => $val['author_id']]);
                                                                echo $cate[0]['name']; ?></p>
                                        <span class="dot_item"></span>
                                        <p class="date_post"><?= date('d-m-Y', $val['created_at']) ?></p>
                                    </div>
                                    <div class="des_post"><?= $val['sapo'] ?> </div>
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
        <?php include('includes/sidebar.php')
        ?>
    </div>
</div>