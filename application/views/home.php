<div class="homeContent body_width">
    <div class="container_widget ">
        <div class="right_home">
            <div class="blog_top">
                <div class="border_blog">
                    <a class="linl_all_detail" title="<?= $blog[0]['title'] ?>" href="/<?= $blog[0]['alias'] ?>/">
                        <div class="blog_top_content blog_top_left">
                            <img src="/<?= $blog[0]['image'] ?>" alt="<?= $blog[0]['title'] ?>">
                        </div>
                        <!-- <div class="fl_date">
              <p class="date_post"><?php $cate = chuyen_muc(['id' => $blog[0]['chuyenmuc']]);
                                    echo $cate[0]['name']; ?></p>
              <p class="date_post"><?= date('d-m-Y', $blog[0]['created_at']) ?></p>
            </div> -->
                        <div class="blog_top_content blog_top_right">
                            <p class="title_blog_top"><?= $blog[0]['title'] ?></p>
                            <div class="sapo_blog"><?= $blog[0]['sapo'] ?></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="list_blog_home">
                <!-- <p class="title_left_home none_pc">TIN MỚI NHẤT</p> -->
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
            <!-- <div class="load_more">Xem thêm</div> -->
        </div>
        <div class="left_home">
            <div class="sidebar_box">
                <div class="box_heading">
                    <a href="#">Liên Kết Hữu Ích</a>
                </div>
                <div class="box_content">
                    <ul>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                            Chuyện
                            <strong>
                                <a href="/chuyen-tinh-yeu/">Tình Yêu</a>
                            </strong>
                            Lãng Mạn
                        </li>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                            Chăm Sóc
                            <strong>
                                <a href="/da-dep/">Da Đẹp</a>
                            </strong>
                            Như Sao Hàn
                        </li>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                            Giá Trị Của
                            <strong>
                                <a href="/hon-nhan/">Hôn Nhân</a>
                            </strong>
                            Vợ Chồng
                        </li>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-50.png" />
                            Tiêu Chuẩn
                            <strong>
                                <a href="/dang-dep/">Dáng Đẹp</a>
                            </strong>
                            Phụ Nữ Việt
                        </li>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-50.png" />
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
                        <img src="/images/icons/icons8-fire-30.png" />
                        Tin Mới Nóng
                    </a>
                </div>
                <div class="box_content">
                    <ul>
                        <?php foreach ($blog as $key => $val) { 
                                    if ($key > 0 && $key <= 5) { ?>
                        <li class="item_hot_news">
                            <a href="/<?= $val['alias'] ?>"><?= $val['title'] ?></a>
                        </li>
                        <?php }
                                } ?>
                    </ul>
                    <div class="see_more_news">
                        <button class="btn_more">
                            <a href="/">Xem Thêm</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="mail_box">
                <form class="form_mail">
                    <div class="content_mail">
                        <div class="mail_top">
                            <div class="logo_mail_box">
                                <img src="/images/logo.png">
                            </div>
                            <div class="content_mail_box">
                                <div class="item_cont">
                                    <img src="/images/icons/icons_mail01.webp">
                                    <p class="text_item_mail">Bách Khoa Toàn Thư Làm Đẹp A-Z</p>
                                </div>
                                <div class="item_cont">
                                    <img src="/images/icons/icons_mail02.webp">
                                    <p class="text_item_mail">100+ Mã Ưu Đãi Độc Quyền</p>
                                </div>
                                <div class="item_cont">
                                    <img src="/images/icons/icons_mail03.webp">
                                    <p class="text_item_mail">Xu Hướng Làm Đẹp Mới Nhất 2023</p>
                                </div>
                            </div>
                            <div class="content_mail_nonpc">
                                <p>Xu hướng thịnh hành, bí quyết xịn xò và ưu đãi hấp dẫn đã sẵn sàng gửi đến bạn</p>
                            </div>
                        </div>
                        <div class="mail_bot">
                            <input class="input_mail" placeholder="Nhập Email của bạn"/>
                            <button class="submit_mail">Đăng Ký Ngay</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>