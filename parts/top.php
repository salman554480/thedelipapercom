<?php require_once('parts/db.php');
require_once('parts/path.php');

$select_setting = "SELECT * FROM setting ";
$run_setting = mysqli_query($conn, $select_setting);
$row_setting = mysqli_fetch_array($run_setting);

$setting_id = $row_setting['setting_id'];
$website_title = $row_setting['website_title'];
$website_url = $row_setting['website_url'];

// Override for localhost development
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    $website_url = 'http://localhost/extras/delipaper';
}

$website_logo = $row_setting['website_logo'];
$website_favicon = $row_setting['website_favicon'];
$website_head_code = $row_setting['website_head_code'];
$ad_code_one = $row_setting['ad_code_one'];
$ad_code_two = $row_setting['ad_code_two'];
$ad_code_three = $row_setting['ad_code_three'];

$footer_text = $row_setting['footer_text'];
$facebook = $row_setting['facebook'];
$twitter = $row_setting['twitter'];
$instagram = $row_setting['instagram'];
$pinterest = $row_setting['pinterest'];


$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$currentUrl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title><?php echo $meta_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <meta name="author" content="Your Name or Company">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $currentUrl; ?>">

    <!-- Open Graph Meta Tags (for social media sharing, especially Facebook) -->
    <meta property="og:title" content="<?php echo $meta_title; ?>">
    <meta property="og:description" content="<?php echo $meta_description; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $currentUrl; ?>">
    <meta property="og:image" content="https://thedelipaper.com/assets/img/1748238542_2249_delipaper-icon.png">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $meta_title; ?>">
    <meta name="twitter:description" content="<?php echo $meta_description; ?>.">
    <meta name="twitter:image" content="https://thedelipaper.com/assets/img/1748238542_2249_delipaper-icon.png">
    <meta name="twitter:site" content="@<?php echo $website_title; ?>">


    <!-- site Favicon -->
    <link rel="icon" href="https://thedelipaper.com/assets/images/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="https://thedelipaper.com/assets/images/favicon.png" />
    <meta name="msapplication-TileImage" content="https://thedelipaper.com/assets/images/favicon.png" />


    <link rel="shortcut icon" href="<?php echo $website_url; ?>/assets/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo $website_url; ?>/assets/bootstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo $website_url; ?>/assets/bootstrap/fontawesome-free-5.13.0-web/css/all.min.css	">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- Owl Carousel Theme -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />


    <link rel="stylesheet" href="<?php echo $website_url; ?>/assets/css/style.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LF2BTYQH2S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-LF2BTYQH2S');
    </script>