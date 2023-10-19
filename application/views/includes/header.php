<div class="main_header ">
    <div id="nav">
        <div class="logo body_width" id="logo">
            <div class="top_header">
                <div class="header_left">
                    <a href="/">
                        <img src="/images/logo.png" alt="logo" class="img_logo_bot_header">
                    </a>
                </div>
                <div class="header_right">
                    <div class="fan_page">
                        <a href="https://www.facebook.com/phunutre.vn/" rel="nofollow">Fanpage Phụ Nữ News</a>
                    </div>
                    <div class="weather">
                        <a href="#" class="weather_link">
                            <img class="img_weather" src="/images/icons/icons_weather.png" alt="icon weather">
                            <div class="content_weather">
                                <p class="name_city">Hà Nội</p>
                                <p class="temperature">25°C</p>
                            </div>
                        </a>
                    </div>
                    <div class="search_only_pc">
                        <form class="search_pc" id="search_pc" method="get" action="/search">
                            <img class="img_search_pc" id="img_search_pc" src="/images/icons/icons8-search-20.png" alt="icon search" />
                            <input class="input_pc" id="search_input" type="text" autocomplete="off" name="search" placeholder="Tìm kiếm" />
                        </form>
                    </div>
                    <div class="noti">
                        <img src="/images/icons/icon_bell_noti.png" alt="icon notification">
                    </div>
                    <div class="sub_menu_top">
                        <div class="btn_submenu_top" id="btn_submenu_top" onclick="show_menu(this,1)">
                            <span id="line_span"></span>
                        </div>
                        <div class="list_item_submenu">
                            <div class="search_sub">
                                <form class="form_sub" id="search" method="get" action="/search">
                                    <img class="img_seach_sub" id="img_search_sub" src="/images/icons/icons8-search-20.png" alt="tìm kiếm" />
                                    <input class="input_sub" id="search_input_sub" type="text" autocomplete="off" name="search" placeholder="Tìm kiếm" />
                                </form>
                            </div>
                            <div class="btn_header">
                                <div class="item_btn night_mode">
                                    <span class="span"></span>
                                    <p>Chế độ tối</p>
                                </div>
                                <div class="item_btn">
                                    <span>
                                        <img src="/images/icons/icon_eyes.png" alt="icon đã xem">
                                    </span>
                                    <p>Tin đã xem</p>
                                </div>
                                <div class="item_btn">
                                    <span>
                                        <img src="/images/icons/icon_save.png" alt="icon cài đặt">
                                    </span>
                                    <p>Cài đặt APP</p>
                                </div>
                            </div>
                            <ul class="list_item_sub">
                                <?php $menu_cate_parent = chuyen_muc('parent = 0 AND id != 42 AND id != 41');
                                foreach ($menu_cate_parent as $val) {
                                    $menu_cate = chuyen_muc(['parent' => $val['id']]); ?>
                                    <li class="this_menu_sub">
                                        <div class="big_item_menu_sub" onclick="show_submenu(this,1)">
                                            <a class="item_menu_sub" href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a>
                                        </div>
                                        <?php if ($menu_cate != null) { ?>
                                            <ul class="menu_con_sub">
                                                <div class="row_sub">
                                                    <?php foreach ($menu_cate as $val1) { ?>
                                                        <li>
                                                            <span class="dot_header_sub"></span>
                                                            <a href="/<?= $val1['alias'] ?>/"><?= $val1['name'] ?></a>
                                                        </li>
                                                    <?php } ?>
                                                </div>
                                            </ul>
                                        <?php } ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_bot body_width">
            <div class="header_bg">
                <div class="header_menu">
                    <div class="list_menu" id="list_menu">
                        <a href="/">
                            <img src="/images/icons/icons8-home-50.png" alt="trang chủ">
                        </a>
                        <ul class="list_item_menu">
                            <?php $menu_cate_parent = chuyen_muc('parent = 0 AND id != 42 AND id != 41');
                            foreach ($menu_cate_parent as $val) {
                                $menu_cate = chuyen_muc(['parent' => $val['id']]); ?>
                                <li class="this_menu">
                                    <div class="big_item_menu" onclick="big_item_menu(this,1)">
                                        <a class="item_menu" href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a>
                                    </div>
                                    <?php if ($menu_cate != null) { ?>
                                        <ul class="menu_con">
                                            <div class="row">
                                                <?php foreach ($menu_cate as $val1) { ?>
                                                    <li>
                                                        <!-- <i class="icon_arrow_left"></i> -->
                                                        <span class="dot_header"></span>
                                                        <a href="/<?= $val1['alias'] ?>/"><?= $val1['name'] ?></a>
                                                    </li>
                                                <?php } ?>
                                            </div>
                                        </ul>
                                    <?php } ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main_content">