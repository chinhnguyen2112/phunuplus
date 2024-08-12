<link rel="stylesheet" href="/assets/css/sidebar.css">
<div class="sidebar_content">
    <div class="sidebar_box">
        <div class="box_linkout">
            <p>LIÊN KẾT HỮU ÍCH</p>
        </div>
        <div class="box_content_link">
            <ul>
                <li>
                    <a target="_blank" rel="dofollow" href="https://vnesports.art/"> <b>VnEsports</b></a>
                </li>
                <li style="color:#f7f7f7">
                    <a rel="dofollow" style="color:#f7f7f7" target="_blank" href="https://mitomtv.onl/"  ><b>mitomtv</b></a>
                </li> 
                <li style="color:#f7f7f7">
                    <a rel="dofollow" style="color:#f7f7f7" target="_blank" href="https://good88.best"  ><b>good88</b></a>
                </li> 
                <li style="color:#f7f7f7">
                    <a rel="dofollow" style="color:#f7f7f7" target="_blank" href="https://helo88.bet"  ><b>hello88</b></a>
                </li> 
            </ul>
        </div>
    </div>
    <div class="hot_news">
        <div class="box_heading">
            <a href="#">
                <img src="/images/icons/icons8-fire-30.png" alt="icon fire">
                Tin Tức Mới Nóng
            </a>
        </div>
        <div class="box_content">
            <ul>
                <?php foreach ($blog_new as $key => $val) { ?>
                    <li class="item_hot_news">
                        <a href="/<?= alias_new($val['alias'], $val['id']) ?>">
                            <?= $val['title'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="hot_news">
        <div class="box_heading">
            <a href="#">
                <img src="/images/icons/icon_layer.png" alt="icon layer">
                Đọc Nhiều Nhất
            </a>
        </div>
        <div class="box_content">
            <ul>
                <?php foreach ($blog_view as $key => $val) { ?>
                    <li class="item_hot_news">
                        <a href="/<?= alias_new($val['alias'], $val['id']) ?>">
                            <?= $val['title'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>

</div>