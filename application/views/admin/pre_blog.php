<link rel="stylesheet" href="/assets/css/header.css">
<link rel="stylesheet" href="/assets/css/detail_blog.css">
<style>
    .container_widget_about {
        padding: 0px !important;
    }
</style>
<div class="widget_home">
    <div class="container_widget_about body_width">
        <div class="main_content_blog">
            <div class="blog_content">
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
        </div>
    </div>
</div>