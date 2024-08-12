<div class="main_header">
    <div class="content_header body_width">
        <div class="top_menu">
            <a href="/"><img class="logo_header" src="/images/logo.png" alt="Logo"></a>
            <div class="btn_menu_mb">
                <div role="presentation" style="font-size: 34px;">
                    <svg class="svg_open" xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 18 13">
                        <g id="Group_5873" data-name="Group 5873" transform="translate(-330 -14)">
                            <g id="Group_5324" data-name="Group 5324" transform="translate(0 -2)">
                                <rect id="Rectangle_3412" data-name="Rectangle 3412" width="20" height="2" rx="0.5" transform="translate(330 16)" fill="#fff"></rect>
                                <rect id="Rectangle_3413" data-name="Rectangle 3413" width="20" height="2" rx="0.5" transform="translate(330 22)" fill="#fff"></rect>
                                <rect id="Rectangle_3414" data-name="Rectangle 3414" width="20" height="2" rx="0.5" transform="translate(330 28)" fill="#fff"></rect>
                            </g>

                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="list_menu_pc">
            <div class="menu_parent">
                <a href="/">Trang chủ</a>
            </div>
            <?php $menu = chuyen_muc('id = 1 OR id = 3 OR id = 5 OR id = 7 OR id = 23 OR id = 46');
            foreach ($menu as $val) {
                $menu_child = chuyen_muc(['parent' => $val['id']]); ?>
                <div class="menu_parent">
                    <a href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a>
                    <?php if ($menu_child != null) { ?>
                        <div class="list_child">
                            <?php foreach ($menu_child as $val1) { ?>
                                <a href="/<?= $val1['alias'] ?>/" class="menu_child"><span><?= $val1['name'] ?></span></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php }
            ?>
            <div class="list_bnt_menu">
                <span>ĐĂNG NHẬP</span>
                <span>ĐĂNG KÝ</span>
            </div>
        </div>
    </div>
</div>
<div class="main_content">