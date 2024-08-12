<input id="chuyen_muc" value="<?= isset($chuyenmuc) ? $chuyenmuc : '' ?>" hidden>
<h1 style="display: none;"><?= $name_page ?></h1>
<div class="homeContent body_width">
    <div class="breadcrumb">
        <div class="breadcrumb_cate">
            <div class="breadcrumb_home">
                <a href="/" class="this_breadcrumb">
                    <svg class="sc-cJSrbW kFhJXo" xmlns="http://www.w3.org/2000/svg" width="17.1" height="16" viewBox="0 0 17.067 16">
                        <path fill="rgb(247, 141, 3)" d="M8.533 0l8.533 8.533h-2.133V16h-4.266v-5.333H6.4V16H2.133V8.533H0z"></path>
                    </svg>
                </a>
                <div class="breadcrumb_after breadcrumb_after_home"></div>
            </div>
            <div class="breadcrumb_page">
                <div class="_4q7jo">
                    <a href="#" class="this_breadcrumb"><span class="_1Pu8x">Chủ đề: <?= $name_page ?></span></a>
                    <div class="breadcrumb_after"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container_widget ">
        <div class="right_home">
            <div class="list_blog_home">
                <?php foreach ($blog as $key => $val) {?>
                    <div class="this_content_right">
                        <a title="<?= $val['title'] ?>" href="/<?= alias_new($val['alias'], $val['id']) ?>">
                            <p class="title_blog only_mobile"><?= $val['title'] ?></p>
                        </a>
                        <a class="linl_all_detail link_fl" title="<?= $val['title'] ?>" href="/<?= alias_new($val['alias'], $val['id']) ?>">
                            <img src="/<?= ($val['image'] != '') ? $val['image'] : 'images/logo.png' ?>" alt="<?= $val['title'] ?>">
                            <div class="box_content_blog">
                                <p class="title_blog"><?= $val['title'] ?></p>
                                <div class="fl_date">
                                    <p class="cate_post"><?php $cate = author(['id' => $val['author_id']]); echo (( $cate != null)?$cate[0]['name']: ''); ?></p>
                                    <span class="dot_item"></span>
                                    <p class="date_post"><?= date('d-m-Y', $val['created_at']) ?></p>
                                </div>
                                <div class="des_post"><?= $val['sapo'] ?> </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
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