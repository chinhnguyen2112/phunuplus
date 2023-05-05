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
                                    <!-- <a class="linl_all_detail" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                        <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                        <p class="title_blog_top"><?= $val['title'] ?></p>
                                        <div class="fl_date">
                                            <p class="date_post"><?= date('d-m-Y', $val['created_at']) ?></p>
                                        </div>
                                        <div class="sapo_blog_top"><?= $val['sapo'] ?></div>
                                    </a> -->

                                    <a class="linl_all_detail" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                        <div class="blog_top_content blog_top_left">
                                            <img src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                        </div>
                                        <!-- <div class="fl_date">
                                            <p class="date_post"><?php $cate = chuyen_muc(['id' => $val['chuyenmuc']]);
                                                                echo $cate[0]['name']; ?></p>
                                            <p class="date_post"><?= date('d-m-Y', $blog[0]['created_at']) ?></p>
                                        </div> -->
                                        <div class="blog_top_content blog_top_right">
                                            <p class="title_blog_top"><?= $val['title'] ?></p>
                                            <div class="sapo_blog"><?= $val['sapo'] ?> 
                                            <p>Để cải thiện sắc vóc và có được một thân hình hoàn hảo trong mơ, rất nhiều người quan tâm tới chủ đề cách dáng người quả lê giảm cân. Làm thế nào để cải thiện dáng quả lê là điều không hề khó nếu bạn học biết về những bài tập và xây dựng chế độ ăn uống hiệu quả. Còn nếu chưa biết, bạn hãy tham khảo bài viết dưới đây của Phụ Nữ Plus nhé!</p>
                                            </div>
                                        </div>
                                    </a>
                            <?php }
                            } ?>
                        </div>
                    </div>
                    <!-- <div class="right_blog">
                        <?php foreach ($blog as $key => $val) {
                            if ($key < 4 && $key > 0) { ?>
                                <div class="this_train_right">
                                    <a class="linl_all_detail" title="<?= $val['title'] ?>" href="/<?= $val['alias'] ?>/">
                                        <p class="title_blog"><?= $val['title'] ?></p>
                                        <div class="des_blog_top"><?= $val['sapo'] ?></div>
                                    </a>
                                </div>
                        <?php }
                        } ?>
                    </div> -->
                </div>
                <div class="top_right">
                    <div class="slick_banner">
                        <img class="img_banner_slick" src="/images/banner/pic5.gif" alt="banner" />
                    </div>
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
                                    <p class="date_post"><span><?= date('d-m-Y', $val['created_at']) ?></span></p>
                                    <div class="des_blog"><?= $val['sapo'] ?>Để cải thiện sắc vóc và có được một thân hình hoàn hảo trong mơ, rất nhiều người quan tâm tới chủ đề cách dáng người quả lê giảm cân. Làm thế nào để cải thiện dáng quả lê là điều không hề khó nếu bạn học biết về những bài tập và xây dựng chế độ ăn uống hiệu quả. Còn nếu chưa biết, bạn hãy tham khảo bài viết dưới đây của Phụ Nữ Plus nhé!</div>
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
    </div>
</div>
<input id="chuyen_muc" value="<?= isset($chuyenmuc) ? $chuyenmuc : '' ?>" hidden />
