<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="robots" content="noodp,noindex,nofollow" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>404 Page Not Found</title>
	<link rel="stylesheet" href="/assets/css/font.css">
	<link rel="stylesheet" href="/assets/css/reset.css">
	<link rel="stylesheet" href="/assets/css/header.css">
	<link rel="stylesheet" href="/assets/css/footer.css">
	<link rel="stylesheet" href="/assets/css/sweetalert.css">
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/sweetalert.min.js"></script>
	<style>
		.error_main {
			display: flex;
			align-items: center;
			margin-top: 112px;
			/* background-image: url(/images/404/bg_404.jpg); */
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
			height: 876px;
		}

		.error404 {
			display: flex;
			width: 100%;
			margin: 0 auto;
			text-align: center;
			height: 100%;
			justify-content: flex-end;
			align-items: center;
		}

		.img_error img {
			width: 480px;
		}

		.content_error h3 {
			color: #30425B;
			font-size: 48px;
			font-weight: 500;
			line-height: 57px;
			max-width: 460px;
		}

		.list_contact {
			display: flex;
			justify-content: center;
		}

		.item_contact {
			margin: 0 10px;
		}

		.item_contact p {
			color: #666;
			font-size: 12px;
			line-height: 17px;
			margin-bottom: 5px;
		}

		.item_contact a {
			background: #2a5b84;
			font-size: 16px;
			font-weight: bold;
			padding: 5px 0;
			border-radius: 20px;
			justify-content: center;
			text-align: center;
			display: flex;
			align-items: center;
			width: 205px;
			text-decoration: none;
			color: #fff;
			height: 30px;
		}

		.item_contact img {
			width: 20px;
			background: #fff;
			border-radius: 50%;
		}

		.text_back {
			color: #fff !important;
			padding: 0 !important;
			margin: 0 0 0 5px !important;
			font-size: 16px !important;
			font-weight: bold;
		}

		.search_404>img {
			width: 400px;
		}

		.main_404 {
			float: right;
		}

		h1 {
			font-size: 40px;
			font-weight: 700;
			line-height: 58px;
			color: rgb(88, 87, 92);
			margin: 8px 0 16px 0;
			text-transform: uppercase;
		}

		.box_search_404 {
			background: #ffffff;
			display: flex;
			transition: .2s;
			overflow: hidden;
			border: 0 solid transparent;
			border-radius: 20px;
			height: 41px;
		}

		.box_search_404 img {
			padding: 9px 9px;
		}

		.box_search_404 input {
			border: none;
			width: -webkit-fill-available;
		}

		.list_bnt_404 a {
			display: flex;
			margin: 0;
			padding: 0;
			border-style: solid;
			border-width: 1px;
			border-color: #ff2b80;
			border-radius: 30px;
			width: 150px;
			align-items: center;
			justify-content: center;
			height: 40px;
			color: #ff2b80;
		}

		.list_bnt_404 {
			display: flex;
			justify-content: center;
			gap: 15px;
			padding-top: 30px;
		}

		.back_home {
			background-color: #ff2b80;
			border-style: solid;
			border-width: 1px;
			border-color: #ff2b80;
			border-radius: 30px;
			color: #fff !important;
		}

		.blog_new {
			display: flex;
			gap: 24px;
			flex-wrap: wrap;
		}

		.this_new {
			display: flex;
			width: calc((100% - 48px) / 3);
			flex-direction: column;
		}

		.card_body {
			padding: 15px;
			border: 1px solid #eaeaea;
			border-top: 0;
			height: auto;
			-webkit-box-flex: 1;
			-ms-flex: 1 1 auto;
			flex: 1 1 auto;
		}

		.text_category {
			display: block;
			font-size: .75rem;
			color: #ea1717;
			margin-bottom: 5px;
			line-height: 1.6;
			line-height: 19px;
			font-weight: 600;
		}

		.text_reset {
			font-size: 20px;
			line-height: 1.3;
			font-weight: 700;
			color: #000;
		}

		.title_list {
			color: #000;
			font-size: 32px;
			font-weight: 700;
			line-height: 1.5;
			margin-bottom: 10px;
		}

		.list_blog {
			margin-top: 20px;
			padding-bottom: 30px;
		}

		@media only screen and (max-width: 1024px) {

			.error_main {
				margin-top: 60px;
			}
		}

		@media only screen and (max-width: 768px) {
			.error404 {
				flex-direction: column;
				padding: 40px 20px 30px;
				text-align: center;
			}

			.img_error img {
				width: 280px;
			}

			.content_error h3 {
				color: #30425B;
				font-size: 20px;
				font-weight: 500;
				line-height: 24px;
				margin: 20px auto;
				max-width: 250px;
			}

			.error_main {
				height: 500px;
			}

			.main_404 {
				width: 100%;
			}

			.list_blog.body_width {
				padding: 30px 10px;
				padding-top: 0;
				width: auto;
			}

			.title_list {
				font-size: 24px;
			}
		}

		@media only screen and (max-width: 540px) {
			.error_main {
				min-height: auto;
			}

			.error404 {
				padding: 40px 0 30px;
			}

			.item_contact a {
				width: 140px;
				font-size: 12px;
				padding: 2px 5px;
			}

			.text_back {
				font-size: 12px !important;
			}

			.this_new {
				width: 100%;
			}

			.search_404 {
				padding: 0 10px;
			}

			h1 {
				font-size: 32px;
				line-height: 1.4;
			}
		}
	</style>
</head>

<body>
	<?php
	include('./application/views/includes/header.php') ?>
	<div class="error_main">
		<div class="error404 ">
			<div class="content_error body_width">
				<div class="main_404">
					<div class="search_404">
						<img src="/images/404/404.png" alt="404">
						<h1>trang không có nội dung</h1>
						<div class="box_search_404">
							<img src="/images/icons/icons8-search-20.png" alt="tìm kiếm">
							<input id="elementor-search-form-4e148ec" placeholder="Tìm kiếm..." class="elementor-search-form__input" type="search" name="s" value="">
						</div>
						<div class="list_bnt_404">
							<a href="#">Back</a>
							<a class="back_home" href="/">Trang chủ</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="list_blog body_width">
		<p class="title_list">Xem thêm bài viết về chủ đề:</p>
		<div class="blog_new">

			<?php
			$CI = &get_instance();
			$time = time();
			$select = "SELECT id,title,alias,image,created_at,author_id,chuyenmuc FROM blogs WHERE index_blog = 1 AND type = 0 AND time_post <= $time ";
			$blog_new = $CI->Madmin->query_sql($select . " ORDER BY created_at DESC LIMIT 9");
			foreach ($blog_new as $key => $val) {
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
			<?php } ?>
		</div>
	</div>
	<?php
	include('./application/views/includes/footer.php') ?>
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/js/header.js"></script>
</body>

</html>