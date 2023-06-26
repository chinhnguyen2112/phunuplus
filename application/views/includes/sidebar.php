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
        <div class="box_heading">
            <a href="#">Liên Kết Hữu Ích</a>
        </div>
        <div class="box_content">
            <ul>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons/icons8-star-50.png" alt="icon star" />
                    Chuyện
                    <strong>
                        <a href="/chuyen-tinh-yeu/">Tình Yêu</a>
                    </strong>
                    Lãng Mạn
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons/icons8-star-50.png" alt="icon star" />
                    Chăm Sóc
                    <strong>
                        <a href="/da-dep/">Da Đẹp</a>
                    </strong>
                    Như Sao Hàn
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons/icons8-star-50.png" alt="icon star" />
                    Giá Trị Của
                    <strong>
                        <a href="/hon-nhan/">Hôn Nhân</a>
                    </strong>
                    Vợ Chồng
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons/icons8-star-50.png" alt="icon star" />
                    Tiêu Chuẩn
                    <strong>
                        <a href="/dang-dep/">Dáng Đẹp</a>
                    </strong>
                    Phụ Nữ Việt
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons/icons8-star-50.png" alt="icon star" />
                    Style
                    <strong>
                        <a href="/mac-dep/">Mặc Đẹp</a>
                    </strong>
                    Dành Cho Phái Nữ
                </li>
            </ul>
        </div>
    </div>
    <div class="hot_news">
        <div class="box_heading">
            <a href="#">
                <img src="/images/icons/icons8-fire-30.png" alt="icon fire" />
                Tin Mới Nóng
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
            <div class="see_more_news">
                <button class="btn_more">
                    <a href="/">Xem Thêm</a>
                </button>
            </div>
        </div>
    </div>
</div>