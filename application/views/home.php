<h1 style="display: none;">Phụ Nữ Plus</h1>
<div class="homeContent body_width">
    <div class="blog_top">
        <div class="blog_top_1">
            <?php foreach ($blog_new as $key => $val) {
                if ($key == 0) {
                    $author = author(['id' => $val['author_id']]);
                    $cate = chuyen_muc(['id' => $val['chuyenmuc']]); ?>
                    <article class="card">
                        <a href="/<?= alias_new($val['alias'], $val['id']) ?>">
                            <div class="ratio ratio_1by1 ">
                                <img class="ratio_item" src="/<?= ($val['image'] != '') ? $val['image'] : 'images/logo.png' ?>" alt="<?= $val['title'] ?>">
                            </div>
                        </a>
                        <div class="card_body">
                            <span class="text_category"><?= ($author != null) ? $author[0]['name'] : '' ?> | <?= ($cate != null) ? $cate[0]['name'] : '' ?></span>
                            <h3 class="text_title">
                                <a href="/<?= alias_new($val['alias'], $val['id']) ?>" class="text_reset"><?= $val['title'] ?></a>
                            </h3>
                        </div>
                    </article>
            <?php }
            } ?>
        </div>
        <div class="blog_top_2">
            <?php foreach ($blog_new as $key => $val) {
                if ($key > 0 && $key < 4) {
                    $author = author(['id' => $val['author_id']]);
                    $cate = chuyen_muc(['id' => $val['chuyenmuc']]); ?>
                    <article class="card card_<?= $key ?>">
                        <a href="/<?= alias_new($val['alias'], $val['id']) ?>">
                            <div class="ratio ratio_1by1 ">
                                <img class="ratio_item" src="/<?= ($val['image'] != '') ? $val['image'] : 'images/logo.png' ?>" alt="<?= $val['title'] ?>">
                            </div>
                        </a>
                        <div class="card_body">
                            <span class="text_category"><?= ($author != null) ? $author[0]['name'] : '' ?> | <?= ($cate != null) ? $cate[0]['name'] : '' ?></span>
                            <h3 class="text_title">
                                <a href="/<?= alias_new($val['alias'], $val['id']) ?>" class="text_reset"><?= $val['title'] ?></a>
                            </h3>
                        </div>
                    </article>
            <?php }
            } ?>
        </div>
    </div>
    <div class="blog_second">
        <div class="blog_second_left">
            <h2 class="text_title_heading">Xem nhiều nhất</h2>
            <div class="list_blog_second">
                <?php foreach ($blog_view as $key => $val) {
                    $author = author(['id' => $val['author_id']]);
                    $cate = chuyen_muc(['id' => $val['chuyenmuc']]); ?>
                    <article class="this_blog_second">
                        <a href="/<?= alias_new($val['alias'], $val['id']) ?>">
                            <div class="ratio ratio_13by10">
                                <img class="ratio_item" src="/<?= ($val['image'] != '') ? $val['image'] : 'images/logo.png' ?>" alt="<?= $val['title'] ?>">
                            </div>
                        </a>
                        <div class="card_body">
                            <span class="text_category"><?= ($author != null) ? $author[0]['name'] : '' ?> | <?= ($cate != null) ? $cate[0]['name'] : '' ?></span>
                            <h3 class="text_title text_title_sm">
                                <a href="/<?= alias_new($val['alias'], $val['id']) ?>" class="text_reset max_line_3"><?= $val['title'] ?></a>
                            </h3>
                        </div>
                    </article>
                <?php } ?>
            </div>
        </div>
        <div class="blog_second_right">
            <h3 class="text_title_heading">Recommend</h3>
        </div>
    </div>
    <div class="list_cate">
        <div class="this_cate">
            <a href="/yeu/">
                <h2 class="text_title_heading">Yêu</h2>
            </a>
            <?php foreach ($blog_1 as $key => $val) {
                $author = author(['id' => $val['author_id']]);
                $cate = chuyen_muc(['id' => $val['chuyenmuc']]); ?>
                <article class="blog_cate">
                    <a href="/<?= alias_new($val['alias'], $val['id']) ?>">
                        <div class="ratio ratio_13by10">
                            <img class="ratio_item" src="/<?= ($val['image'] != '') ? $val['image'] : 'images/logo.png' ?>" alt="<?= $val['title'] ?>">
                        </div>
                    </a>
                    <div class="card_body">
                        <span class="text_category"><?= ($author != null) ? $author[0]['name'] : '' ?> | <?= ($cate != null) ? $cate[0]['name'] : '' ?></span>
                        <h3 class="text_title ">
                            <a href="/<?= alias_new($val['alias'], $val['id']) ?>" class="text_reset"><?= $val['title'] ?></a>
                        </h3>
                    </div>
                </article>
            <?php } ?>
        </div>
        <div class="this_cate">
            <a href="/dep/">
                <h2 class="text_title_heading">Đẹp</h2>
            </a>
            <?php foreach ($blog_3 as $key => $val) {
                $author = author(['id' => $val['author_id']]);
                $cate = chuyen_muc(['id' => $val['chuyenmuc']]); ?>
                <article class="blog_cate">
                    <a href="/<?= alias_new($val['alias'], $val['id']) ?>">
                        <div class="ratio ratio_13by10">
                            <img class="ratio_item" src="/<?= ($val['image'] != '') ? $val['image'] : 'images/logo.png' ?>" alt="<?= $val['title'] ?>">
                        </div>
                    </a>
                    <div class="card_body">
                        <span class="text_category"><?= ($author != null) ? $author[0]['name'] : '' ?> | <?= ($cate != null) ? $cate[0]['name'] : '' ?></span>
                        <h3 class="text_title ">
                            <a href="/<?= alias_new($val['alias'], $val['id']) ?>" class="text_reset"><?= $val['title'] ?></a>
                        </h3>
                    </div>
                </article>
            <?php } ?>
        </div>
        <div class="this_cate">
            <a href="/mat-ngu/">
                <h2 class="text_title_heading">Mật Ngữ</h2>
            </a>
            <?php foreach ($blog_46 as $key => $val) {
                $author = author(['id' => $val['author_id']]);
                $cate = chuyen_muc(['id' => $val['chuyenmuc']]); ?>
                <article class="blog_cate">
                    <a href="/<?= alias_new($val['alias'], $val['id']) ?>">
                        <div class="ratio ratio_13by10">
                            <img class="ratio_item" src="/<?= ($val['image'] != '') ? $val['image'] : 'images/logo.png' ?>" alt="<?= $val['title'] ?>">
                        </div>
                    </a>
                    <div class="card_body">
                        <span class="text_category"><?= ($author != null) ? $author[0]['name'] : '' ?> | <?= ($cate != null) ? $cate[0]['name'] : '' ?></span>
                        <h3 class="text_title ">
                            <a href="/<?= alias_new($val['alias'], $val['id']) ?>" class="text_reset"><?= $val['title'] ?></a>
                        </h3>
                    </div>
                </article>
            <?php } ?>
        </div>
    </div>
    <div class="new_feed">
        <h2 class="text_title_heading text_primary ">News feed</h2>
        <div class="list_new">
            <?php foreach ($blog_new as $key => $val) {
                if ($key >= 4) {
                    $author = author(['id' => $val['author_id']]);
                    $cate = chuyen_muc(['id' => $val['chuyenmuc']]); ?>
                    <article class="this_new">
                        <a href="/<?= alias_new($val['alias'], $val['id']) ?>">
                            <div class="ratio ratio_5by3 ">
                                <img class="ratio_item" src="/<?= ($val['image'] != '') ? $val['image'] : 'images/logo.png' ?>" alt="<?= $val['title'] ?>">
                            </div>
                        </a>
                        <div class="card_body">
                            <span class="text_category"><?= ($author != null) ? $author[0]['name'] : '' ?> | <?= ($cate != null) ? $cate[0]['name'] : '' ?></span>
                            <h3 class="text_title">
                                <a href="/<?= alias_new($val['alias'], $val['id']) ?>" class="text_reset"><?= $val['title'] ?></a>
                            </h3>
                        </div>
                    </article>
            <?php }
            } ?>
        </div>
        <div class="loadmore">
            <span class="load_more" >Xem thêm</span>
        </div>
    </div>
</div>