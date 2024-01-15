<div class="widget_home">
    <div class="container_widget_about body_width">
        <div class="breadcrumb">
            <div class="breadcrumb_cate">
                <div class="breadcrumb_home">
                    <a href="/" class="this_breadcrumb">
                        <svg class="sc-cJSrbW kFhJXo" xmlns="http://www.w3.org/2000/svg" width="17.1" height="16"
                            viewBox="0 0 17.067 16">
                            <path fill="rgb(247, 141, 3)"
                                d="M8.533 0l8.533 8.533h-2.133V16h-4.266v-5.333H6.4V16H2.133V8.533H0z"></path>
                        </svg>
                    </a>
                    <div class="breadcrumb_after breadcrumb_after_home"></div>
                </div>
                <div class="breadcrumb_page">
                    <div class="_4q7jo">
                        <a href="/<?= $cate['alias'] ?>/" class="this_breadcrumb"><span class="_1Pu8x">Chủ đề:
                                <?= $cate['name'] ?></span></a>
                        <div class="breadcrumb_after"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_content_blog">
            <div class="blog_content">
                <div class="box_bg">
                    <div class="box_data_blog">
                        <div class="left_blog">
                            <h1 class="title_h1"><?= $blog['title'] ?></h1>
                            <div class="box_author">
                                <div class="box_date">
                                    <p class="date_blog"><?= replace_date($blog['created_at']) ?></p>
                                </div>
                                <a rel="nofollow" class="follow_ggnew" target="_blank"
                                    href="https://news.google.com/publications/CAAqBwgKMK2v0Asw7MrnAw?hl=vi&gl=VN&ceid=VN:vi">Theo
                                    dõi Phụ Nữ Plus trên <img src="/images/googlelogo.svg" alt=""> News</a>
                            </div>
                        </div>
                    </div>
                    <div class="sapo_top"> <?= $blog['sapo'] ?></div>
                    <div class="right_detail">
                        <div class="mucluc_blog" id="mucluc_blog">
                            <div class="box_title_ml">
                                <p class="title_mucluc" id="title_mucluc"><img class="img_ml"
                                        src="/images/icons/mucluc.png" alt="mục lục"> Mục lục</p>
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
                </div>
                <?php if ($blog_same != null) { ?>
                <div class="blog_same">
                    <div class="list_blog_same">
                        <?php
                            foreach ($blog_same as $val) { ?>
                        <div class="this_train">
                            <a title="<?= $val['title'] ?>" href="/<?= alias_new($val['alias'], $val['id']) ?>">
                                <p class="title_blog only_mobile"><?= $val['title'] ?></p>
                            </a>
                            <a href="/<?= alias_new($val['alias'], $val['id']) ?>">
                                <img src="/<?= ($val['image'] != '') ? $val['image'] : 'images/logo.png' ?>"
                                    alt="<?= $val['title'] ?>">
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