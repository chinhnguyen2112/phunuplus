<link rel="stylesheet" href="/assets/css/sidebar.css">
<div class="sidebar_content">
    <div class="mail_box">
        <div class="form_mail">
            <div class="content_mail">
                <div class="mail_top">
                    <div class="logo_mail_box">
                        <img src="/images/logo.png" alt="logo">
                    </div>
                    <div class="content_mail_box">
                        <div class="item_cont">
                            <img src="/images/icons/icons_mail01.webp" alt="icon bách khoa a-z">
                            <p class="text_item_mail">Bách Khoa Toàn Thư Làm Đẹp A-Z</p>
                        </div>
                        <div class="item_cont">
                            <img src="/images/icons/icons_mail02.webp" alt="icon mã ưu đãi">
                            <p class="text_item_mail">100+ Mã Ưu Đãi Độc Quyền</p>
                        </div>
                        <div class="item_cont">
                            <img src="/images/icons/icons_mail03.webp" alt="icon xu hướng">
                            <p class="text_item_mail">Xu Hướng Làm Đẹp Mới Nhất 2023</p>
                        </div>
                    </div>
                    <div class="content_mail_nonpc">
                        <p>Xu hướng thịnh hành, bí quyết xịn xò và ưu đãi hấp dẫn đã sẵn sàng gửi đến bạn</p>
                    </div>
                </div>
                <div class="mail_bot">
                    <input class="input_mail" name="input_mail" id="input_mail" type="email" placeholder="Nhập Email của bạn" />
                    <button class="submit_mail">Đăng Ký Ngay</button>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_box">
        <div class="box_linkout">
            <h2>LIÊN KẾT HỮU ÍCH</h2>
        </div>
        <div class="box_content_link">
            <ul>
                <li>
                    Xem
                    <a target="_blank" rel="dofollow" href="https://ketquabongda.io/"> <b>kết quả bóng đá</b></a>
                </li>
            </ul>
        </div>
    </div>

    <!-- <div class="outstanding">
        <ul class="content_outs">
            <article class="flex">
                <span>1</span>
                <a href="/huynh-tran-y-nhi/">Huỳnh Trần Ý Nhi</a>
            </article>
            <article class="flex">
                <span>2</span>
                <a href="/mai-phuong-thuy/">Mai Phương Thuý</a>
            </article>
            <article class="flex">
                <span>3</span>
                <a href="/phuong-oanh/">Phương Oanh</a>
            </article>
            <article class="flex">
                <span>4</span>
                <a href="/vietnam-idol/">Vietnam Idol</a>
            </article>
            <article class="flex">
                <span>5</span>
                <a href="/miss-world-vietnam/">Miss World Vietnam</a>
            </article>
        </ul>
    </div> -->
    <div class="hot_news">
        <div class="box_heading">
            <a href="#">
                <img src="/images/icons/icons8-fire-30.png" alt="icon fire" />
                Tin Tức Mới Nóng
            </a>
        </div>
        <div class="box_content">
            <ul>
                <?php foreach ($blog_new as $key => $val) { ?>
                    <li class="item_hot_news">
                        <a href="/<?= $val['alias'] ?>"><?= $val['title'] ?></a>
                    </li>
                <?php } ?>
            </ul>
            <!-- <div class="see_more_news">
                <button class="btn_more">
                    <a href="/">Xem Thêm</a>
                </button>
            </div> -->
        </div>
    </div>
    <div class="hot_news">
        <div class="box_heading">
            <a href="#">
                <img src="/images/icons/icon_layer.png" alt="icon layer" />
                Đọc Nhiều Nhất
            </a>
        </div>
        <div class="box_content">
            <ul>
                <?php foreach ($blog_view as $key => $val) { ?>
                    <li class="item_hot_news">
                        <a href="/<?= $val['alias'] ?>"><?= $val['title'] ?></a>
                    </li>
                <?php } ?>
            </ul>
            <!-- <div class="see_more_news">
                <button class="btn_more">
                    <a href="/">Xem Thêm</a>
                </button>
            </div> -->
        </div>
    </div>

</div>