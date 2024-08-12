</div>
<footer id="colophon" class="site-footer">
    <div class="footer-widgets body_width">
        <div class="content_footer">
            <div class="ft_left">
                <img class="logo_ft" src="/images/logo.png" alt="logo footer">
                <div class="widget">
                    <p class="title_widget">GÓC NHÌN ĐA CHIỀU PHỤ NỮ VIỆT NAM</p>
                    <div class="contact_infor">
                        <ul class="list_contact">
                            <li style="width:100%">
                                <img src="/images/icons/icon_address.png" alt="icon address">
                                <p>Số 111 đường Mễ Trì - Quận Nam Từ Liêm - Hà Nội.</p>
                            </li>
                            <li>
                                <img src="/images/icons/icon_website.png" alt="icon website">
                                <p>phunuplus.vn -</p>
                            </li>
                            <li style="margin-left:3px;width:51%">
                                <img src="/images/icons/icon_mail.png" alt="icon email">
                                <p>cs.phunuplus@gmail.com</p>
                            </li>
                            <li>
                                <img src="/images/icons/icon_facebook.png" alt="icon facebook">
                                <p>fb.com/phunuplus.vn</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ft_right">
                <div class="r_01">
                    <p class="title_r">CHUYÊN MỤC</p>
                    <div class="list_links">
                        <?php $menu_cate_parent = chuyen_muc('parent = 0 AND id != 42 AND id != 41');
                        foreach ($menu_cate_parent as $val) {
                            $menu_cate = chuyen_muc(['parent' => $val['id']]); ?>
                        <div class="item_link_ft">
                            <span onclick="big_item_menu(this,1)">
                                <a href="/<?= $val['alias'] ?>/">
                                    <img src="/images/icons/icon_ar.png" alt="icon arrow footer">
                                    <?= $val['name'] ?>
                                </a>
                            </span>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="r_02">
                    <p class="title_r">ĐĂNG KÝ NHẬN TIN</p>
                    <form class="form_email" id="newsletter">
                        <p><strong>Đăng ký nhận bản tin</strong> , bài viết tư vấn câp nhật hằng ngày.</p>
                        <input class="input_text" type="email" name="email" placeholder="Email Address" required>
                        <input class="btn_submit_form" value="SIGN UP" type="submit">
                    </form>
                    <a target="_blank" style="display:block;margin-top:15px" rel="nofollow"
                        href="https://www.dmca.com/r/4x3w11z" title="DMCA.com Protection Status" class="dmca-badge"><img
                            width="120" height="21" loading="lazy"
                            src="https://images.dmca.com/Badges/dmca_protected_sml_120b.png?ID=f936b4b7-f675-4399-9627-694869ab0664"
                            alt="DMCA.com Protection Status"></a>
                    <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="content_copy body_width">
            <div class="site-info"> © 2022 Phụ Nữ Plus</div>
            <div class="list_link_bottom">
                <ul>
                    <li>
                        <a href="/gioi-thieu/">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="/lien-he/">Liên hệ</a>
                    </li>
                    <li>
                        <a href="#">Chính sách</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
