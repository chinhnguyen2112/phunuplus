<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <?php if (isset($index) && $index == 1) { ?>
    <meta name="robots" content="index,follow" />
  <?php } else { ?>
    <meta name="robots" content="noindex,nofollow" />
  <?php } ?>
  <title><?= isset($meta_title) ? $meta_title : '' ?></title>
  <meta content="<?= isset($meta_des) ? $meta_des : '' ?>" name="description">
  <meta content="<?= isset($meta_title) ? $meta_title : '' ?>" name="msvalidate.01">
  <meta name="keywords" content="<?= isset($meta_key) ? $meta_key : '' ?>" />
  <link rel="canonical" href="<?= (isset($canonical)) ? $canonical : "" ?>" />
  <meta property="og:locale" content="vi_VN" />
  <meta proprety="og:type" content="website" />
  <meta property="og:url" content="<?= (isset($canonical)) ? $canonical : "" ?>" />
  <meta property="og:title" content="<?= isset($meta_title) ? $meta_title : '' ?>" />
  <meta property="og:site_name" content="Phụ nữ  plus" />
  <meta property="og:description" content="<?= isset($meta_des) ? $meta_des : '' ?>" />
  <meta property="og:image:secure_url" content="<?= base_url() ?><?= (isset($meta_img) ? $meta_img : 'images/logo.png') ?>" />
  <meta property="og:image" content="<?= base_url() ?><?= (isset($meta_img) ? $meta_img : 'images/logo.png') ?>" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="<?= isset($meta_des) ? $meta_des : '' ?>" />
  <meta name="twitter:title" content="<?= isset($meta_title) ? $meta_title : '' ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="<?= base_url() ?>images/favicon.png">
  <link data-n-head="ssr" rel="icon" type="image/png" href="<?= base_url() ?>images/favicon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/css/font.css?v=1">
  <link rel="stylesheet" href="/assets/css/reset.css">
  <link rel="stylesheet" href="/assets/css/header.css?v=1">
  <link rel="stylesheet" href="/assets/css/footer.css">
  <link rel="stylesheet" href="/assets/css/sweetalert.css">
  <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="/assets/js/sweetalert.min.js"></script>

  <?php if (isset($list_css)) {
    foreach ($list_css as $css) { ?>
      <link rel="stylesheet" href="/assets/css/<?= $css ?>?v=1">
      </link>
  <?php  }
  } ?>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-GP45ZZPN4X"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-GP45ZZPN4X');
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NewsMediaOrganization",
      "name": "Phụ Nữ Plus",
      "alternateName": "Phụ Nữ Plus",
      "url": "https://phunuplus.vn/",
      "logo": "https://phunuplus.vn/images/logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "0328395635",
        "contactType": "",
        "areaServed": "VN",
        "availableLanguage": "Vietnamese"
      },
      "sameAs": [
        "https://twitter.com/phunupluss",
        "https://www.youtube.com/@phunupluss/about",
        "https://www.pinterest.com/phunuplus/",
        "https://phunupluss.tumblr.com/",
        "https://phunuplus.vn/"
      ]
    }
  </script>

</head>

<body>
  <?php
  $this->load->view("includes/header");


  if (isset($content)) {
    $this->load->view($content);
  }

  $this->load->view("includes/footer");
  ?>
  <?php
  if (isset($list_js)) {
    foreach ($list_js as $js) { ?>
      <script type="text/javascript" src="/assets/js/<?= $js ?>"></script>
  <?php  }
  } ?>
  <script type="text/javascript" src="/assets/js/header.js"></script>
</body>

</html>