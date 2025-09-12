<?php require_once('parts/db.php');

  require_once('parts/path.php');

 $select_setting = "SELECT * FROM setting ";
 $run_setting = mysqli_query($conn, $select_setting);
 $row_setting = mysqli_fetch_array($run_setting);

 $setting_id = $row_setting['setting_id'];
 $website_title = $row_setting['website_title'];
 $website_url = $row_setting['website_url'];
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


 $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https:" : "http:";
 $currentUrl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Deli Paper- Custom Printed Wrapping Paper</title>

    <!-- SEO Meta Tags -->
    <title>The Deli Paper- Custom Printed Wrapping Paper</title>
    <meta name="description"
        content="Your destination for sustainable Food Packaging Wax paper, butcher paper, Gift/Food wrapping paper ,parchment Paper and paper bags provided by The Deli Paper.">
    <meta name="keywords" content="Deli Paper">
    <meta name="author" content="Your Name or Company">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $website_url ?>/">

    <!-- Open Graph Meta Tags (for social media sharing, especially Facebook) -->
    <meta property="og:title" content="The Deli Paper- Custom Printed Wrapping Paper">
    <meta property="og:description"
        content="Your destination for sustainable Food Packaging Wax paper, butcher paper, Gift/Food wrapping paper ,parchment Paper and paper bags provided by The Deli Paper.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $website_url ?>/">
    <meta property="og:image" content="<?php echo $website_url ?>/assets/images/favicon.png">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="The Deli Paper- Custom Printed Wrapping Paper">
    <meta name="twitter:description"
        content="Your destination for sustainable Food Packaging Wax paper, butcher paper, Gift/Food wrapping paper ,parchment Paper and paper bags provided by The Deli Paper..">
    <meta name="twitter:image" content="<?php echo $website_url ?>/assets/images/favicon.png">



    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/bootstrap/fontawesome-free-5.13.0-web/css/all.min.css	">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- Owl Carousel Theme -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />


    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
    
    </style>
</head>

<body>

    <button class="btn btn-quote" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Get A Free
        Quote</button>


    <div id="scrollUp">
        <i class="bx bx-chevron-up"></i>
    </div>

    

   <?php require_once('parts/navbar.php'); ?>

    <!-- hero-section 
    <section class="hero-section"></section>-->
  <img src="admin/assets/img/1756266783_3411_deli-paper-new-banners.jpg" class="img-fluid">

    <!-- hero-section -->

    <!-- section -->
    <section class="work-section">
        <div class="container-fluid">
            <div class="row mt-5 pt-5 ml-5 mr-5">
                <div class="col-md-12 flex-padding">
                    <div class="d-flex justify-content-between flex-product-items flex-wrap">
                        <div class="product-item">
                            <div class="icon-img rounded-circle">
                                <svg aria-hidden="true" class="e-font-icon-svg e-fab-uncharted two_elementor_element"
                                    viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M171.73,232.813A5.381,5.381,0,0,0,176.7,229.5,48.081,48.081,0,0,1,191.6,204.244c1.243-.828,1.657-2.484,1.657-4.141a4.22,4.22,0,0,0-2.071-3.312L74.429,128.473,148.958,85a9.941,9.941,0,0,0,4.968-8.281,9.108,9.108,0,0,0-4.968-8.281L126.6,55.6a9.748,9.748,0,0,0-9.523,0l-100.2,57.966a9.943,9.943,0,0,0-4.969,8.281V236.954a9.109,9.109,0,0,0,4.969,8.281L39.235,258.07a8.829,8.829,0,0,0,4.968,1.242,9.4,9.4,0,0,0,6.625-2.484,10.8,10.8,0,0,0,2.9-7.039V164.5L169.66,232.4A4.5,4.5,0,0,0,171.73,232.813ZM323.272,377.73a12.478,12.478,0,0,0-4.969,1.242l-74.528,43.062V287.882c0-2.9-2.9-5.8-6.211-4.555a53.036,53.036,0,0,1-28.984.414,4.86,4.86,0,0,0-6.21,4.555V421.619l-74.529-43.061a8.83,8.83,0,0,0-4.969-1.242,9.631,9.631,0,0,0-9.523,9.523v26.085a9.107,9.107,0,0,0,4.969,8.281l100.2,57.553A8.829,8.829,0,0,0,223.486,480a11.027,11.027,0,0,0,4.969-1.242l100.2-57.553a9.941,9.941,0,0,0,4.968-8.281V386.839C332.8,382.285,328.24,377.73,323.272,377.73ZM286.007,78a23,23,0,1,0-23-23A23,23,0,0,0,286.007,78Zm63.627-10.086a23,23,0,1,0,23,23A23,23,0,0,0,349.634,67.914ZM412.816,151.6a23,23,0,1,0-23-23A23,23,0,0,0,412.816,151.6Zm-63.182-9.2a23,23,0,1,0,23,23A23,23,0,0,0,349.634,142.4Zm-63.627,83.244a23,23,0,1,0-23-23A23,23,0,0,0,286.007,225.648Zm-62.074,36.358a23,23,0,1,0-23-23A23,23,0,0,0,223.933,262.006Zm188.883-82.358a23,23,0,1,0,23,23A23,23,0,0,0,412.816,179.648Zm0,72.272a23,23,0,1,0,23,23A23,23,0,0,0,412.816,251.92Z"
                                        class="two_elementor_element"></path>
                                </svg>
                            </div>
                            <h3>Free At Work</h3>
                        </div>
                        <div class="product-item">
                            <div class="icon-img rounded-circle">
                                <svg aria-hidden="true"
                                    class="e-font-icon-svg e-fab-acquisitions-incorporated two_elementor_element"
                                    viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M357.45 468.2c-1.2-7.7-1.3-7.6-9.6-7.6-99.8.2-111.8-2.4-112.7-2.6-12.3-1.7-20.6-10.5-21-23.1-.1-1.6-.2-71.6-1-129.1-.1-4.7 1.6-6.4 5.9-7.5 12.5-3 24.9-6.1 37.3-9.7 4.3-1.3 6.8-.2 8.4 3.5 4.5 10.3 8.8 20.6 13.2 30.9 1.6 3.7.1 4.4-3.4 4.4-10-.2-20-.1-30.4-.1v27h116c-1.4-9.5-2.7-18.1-4-27.5-7 0-13.8.4-20.4-.1-22.6-1.6-18.3-4.4-84-158.6-8.8-20.1-27.9-62.1-36.5-89.2-4.4-14 5.5-25.4 18.9-26.6 18.6-1.7 37.5-1.6 56.2-2 20.6-.4 41.2-.4 61.8-.5 3.1 0 4-1.4 4.3-4.3 1.2-9.8 2.7-19.5 4-29.2.8-5.3 1.6-10.7 2.4-16.1L23.75 0c-3.6 0-5.3 1.1-4.6 5.3 2.2 13.2-.8.8 6.4 45.3 63.4 0 71.8.9 101.8.5 12.3-.2 37 3.5 37.7 22.1.4 11.4-1.1 11.3-32.6 87.4-53.8 129.8-50.7 120.3-67.3 161-1.7 4.1-3.6 5.2-7.6 5.2-8.5-.2-17-.3-25.4.1-1.9.1-5.2 1.8-5.5 3.2-1.5 8.1-2.2 16.3-3.2 24.9h114.3v-27.6c-6.9 0-33.5.4-35.3-2.9 5.3-12.3 10.4-24.4 15.7-36.7 16.3 4 31.9 7.8 47.6 11.7 3.4.9 4.6 3 4.6 6.8-.1 42.9.1 85.9.2 128.8 0 10.2-5.5 19.1-14.9 23.1-6.5 2.7-3.3 3.4-121.4 2.4-5.3 0-7.1 2-7.6 6.8-1.5 12.9-2.9 25.9-5 38.8-.8 5 1.3 5.7 5.3 5.7 183.2.6-30.7 0 337.1 0-2.5-15-4.4-29.4-6.6-43.7zm-174.9-205.7c-13.3-4.2-26.6-8.2-39.9-12.5a44.53 44.53 0 0 1-5.8-2.9c17.2-44.3 34.2-88.1 51.3-132.1 7.5 2.4 7.9-.8 9.4 0 9.3 22.5 18.1 60.1 27 82.8 6.6 16.7 13 33.5 19.7 50.9a35.78 35.78 0 0 1-3.9 2.1c-13.1 3.9-26.4 7.5-39.4 11.7a27.66 27.66 0 0 1-18.4 0z"
                                        class="two_elementor_element"></path>
                                </svg>
                            </div>
                            <h3>Custom Size</h3>
                        </div>
                        <div class="product-item">
                            <div class="icon-img rounded-circle">
                                <svg aria-hidden="true" class="e-font-icon-svg e-far-clock two_elementor_element"
                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                        class="two_elementor_element"></path>
                                </svg>
                            </div>
                            <h3>Fastest Turn Around</h3>
                        </div>
                        <div class="product-item">
                            <div class="icon-img rounded-circle">
                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-recycle two_elementor_element"
                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M184.561 261.903c3.232 13.997-12.123 24.635-24.068 17.168l-40.736-25.455-50.867 81.402C55.606 356.273 70.96 384 96.012 384H148c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12H96.115c-75.334 0-121.302-83.048-81.408-146.88l50.822-81.388-40.725-25.448c-12.081-7.547-8.966-25.961 4.879-29.158l110.237-25.45c8.611-1.988 17.201 3.381 19.189 11.99l25.452 110.237zm98.561-182.915l41.289 66.076-40.74 25.457c-12.051 7.528-9 25.953 4.879 29.158l110.237 25.45c8.672 1.999 17.215-3.438 19.189-11.99l25.45-110.237c3.197-13.844-11.99-24.719-24.068-17.168l-40.687 25.424-41.263-66.082c-37.521-60.033-125.209-60.171-162.816 0l-17.963 28.766c-3.51 5.62-1.8 13.021 3.82 16.533l33.919 21.195c5.62 3.512 13.024 1.803 16.536-3.817l17.961-28.743c12.712-20.341 41.973-19.676 54.257-.022zM497.288 301.12l-27.515-44.065c-3.511-5.623-10.916-7.334-16.538-3.821l-33.861 21.159c-5.62 3.512-7.33 10.915-3.818 16.536l27.564 44.112c13.257 21.211-2.057 48.96-27.136 48.96H320V336.02c0-14.213-17.242-21.383-27.313-11.313l-80 79.981c-6.249 6.248-6.249 16.379 0 22.627l80 79.989C302.689 517.308 320 510.3 320 495.989V448h95.88c75.274 0 121.335-82.997 81.408-146.88z"
                                        class="two_elementor_element"></path>
                                </svg>
                            </div>
                            <h3>Recycle Paper</h3>
                        </div>
                        <div class="product-item">
                            <div class="icon-img rounded-circle">
                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-leaf two_elementor_element"
                                    viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M546.2 9.7c-5.6-12.5-21.6-13-28.3-1.2C486.9 62.4 431.4 96 368 96h-80C182 96 96 182 96 288c0 7 .8 13.7 1.5 20.5C161.3 262.8 253.4 224 384 224c8.8 0 16 7.2 16 16s-7.2 16-16 16C132.6 256 26 410.1 2.4 468c-6.6 16.3 1.2 34.9 17.5 41.6 16.4 6.8 35-1.1 41.8-17.3 1.5-3.6 20.9-47.9 71.9-90.6 32.4 43.9 94 85.8 174.9 77.2C465.5 467.5 576 326.7 576 154.3c0-50.2-10.8-102.2-29.8-144.6z"
                                        class="two_elementor_element"></path>
                                </svg>
                            </div>
                            <h3>Plant Base Material</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section -->

    <section class="product-img-section">
        <div class="container-fluid">
            <div class="row ml-5 mr-5 mt-5 pt-5 justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-8 col-12 mt-3 flex-padding">
                    <div class="d-flex align-items-center gap-img">
                        <img src="admin/assets/img/1756266678_1548_wax_(2).jpg" class="img-fluid w-50 img-01"
                            alt="">
                        <div class="left-content-side">
                            <!-- <h1>Wax Paper</h1> -->
                            <h2>Wax Paper</h2>
                            <p>Whether you need patty paper, branded wax paper, or personalized wax paper.</p>
                            <a href="<?php echo $website_url ?>/wax-paper" class="btn btn-view"><span>View
                                    Product</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8 col-12 mt-3 flex-padding">
                    <div class="d-flex align-items-center gap-img">
                        <img src="admin/assets/img/1756266609_8571_parchant_(5).jpg" class="img-fluid w-50 img-01"
                            alt="">
                        <div class="left-content-side">
                            <!-- <h1>Wax Paper</h1> -->
                            <h2>Parchment Paper</h2>
                            <p>Elevate your baking game with Deli Paper, especially our premium Parchment Paper. </p>
                            <a href="<?php echo $website_url ?>/parchment-paper" class="btn btn-view"><span>View
                                    Product</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8 col-12 mt-3 flex-padding">
                    <div class="d-flex align-items-center gap-img">
                        <img src="admin/assets/img/1756266212_2042_04.jpg" class="img-fluid w-50 img-01"
                            alt="">
                        <div class="left-content-side">
                            <!-- <h1>Wax Paper</h1> -->
                            <h2>Butcher Paper</h2>
                            <p>Our butcher paper is also popular among BBQ enthusiasts for wrapping and smoking meat.</p>
                            <a href="<?php echo $website_url ?>/butcher-paper" class="btn btn-view"><span>View
                                    Product</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8 col-md-8 col-12 mt-3 flex-padding">
                    <div class="d-flex align-items-center gap-img">
                        <img src="admin/assets/img/1756266350_9698_foodwrapping_(2).jpg" class="img-fluid w-50 img-01"
                            alt="">
                        <div class="left-content-side">
                            <!-- <h1>Wax Paper</h1> -->
                            <h2>Food Wrapping Paper</h2>
                            <p>From the kitchen to the gift table, our wrapping papers are designed to impress and protect </p>
                            <a href="<?php echo $website_url ?>/food-wrapping-paper" class="btn btn-view"><span>View
                                    Product</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="deli-paper-section">
        <div class="container">
            <div class="row mt-5 pt-5">
                <div class="col-md-12 m-auto text-center flex-padding">
                    <h1 class="text-paper fs-50">The Deli Paper</h1>
                    <h3 class="para-paper">Get Your Own Custom Greaseproof Deli Paper in 3 Simple Steps.</h4>
                    <p class="mt-4 para-discover">Discover the ultimate in branding with our Eco-Friendly Custom
                        Greaseproof Deli
                        Paper. Tailor made to fit your needs, our paper is not only versatile in size but also champions
                        sustainability with recyclable and plant based materials. Fast turnaround, free artwork, and a
                        simple 3-step design tool transform your packaging into a statement piece. Choose from our
                        premium selection Butcher, Parchment, Wax Paper, or Deli Paper and make your brand
                        unforgettable.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center ml-5 mr-5 mt-5 pt-5">
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="d-flex align-items-start flex-icons-01">
                        <svg aria-hidden="true" class="e-font-icon-svg e-far-share-square two_elementor_element_01"
                            viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M561.938 158.06L417.94 14.092C387.926-15.922 336 5.097 336 48.032v57.198c-42.45 1.88-84.03 6.55-120.76 17.99-35.17 10.95-63.07 27.58-82.91 49.42C108.22 199.2 96 232.6 96 271.94c0 61.697 33.178 112.455 84.87 144.76 37.546 23.508 85.248-12.651 71.02-55.74-15.515-47.119-17.156-70.923 84.11-78.76V336c0 42.993 51.968 63.913 81.94 33.94l143.998-144c18.75-18.74 18.75-49.14 0-67.88zM384 336V232.16C255.309 234.082 166.492 255.35 206.31 376 176.79 357.55 144 324.08 144 271.94c0-109.334 129.14-118.947 240-119.85V48l144 144-144 144zm24.74 84.493a82.658 82.658 0 0 0 20.974-9.303c7.976-4.952 18.286.826 18.286 10.214V464c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h132c6.627 0 12 5.373 12 12v4.486c0 4.917-2.987 9.369-7.569 11.152-13.702 5.331-26.396 11.537-38.05 18.585a12.138 12.138 0 0 1-6.28 1.777H54a6 6 0 0 0-6 6v340a6 6 0 0 0 6 6h340a6 6 0 0 0 6-6v-25.966c0-5.37 3.579-10.059 8.74-11.541z"
                                class="two_elementor_element"></path>
                        </svg>
                        <div class="left-content ml-3">
                            <h3><span>SUBMIT YOUR LOGO</span></h3>
                            <p>Upload vector image file – .pdf, .png, <br> .jpg, or .eps vector graphic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="d-flex align-items-start flex-icons-01">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none"
                            class="two_elementor_element_01">
                            <path
                                d="M46.141 13.3688L58.0009 9.9558L57.1262 6.87233L43.5656 10.7748L33.861 1L10.0293 25.0041L31.4615 46.5914C32.9653 48.1061 34.9636 48.9399 37.0904 48.9399C39.2161 48.9399 41.2155 48.1061 42.7183 46.5914L55.2932 33.9255C58.3963 30.7999 58.3963 25.7139 55.2932 22.5873L46.141 13.3688ZM33.861 5.53552L40.0633 11.7827L31.7784 14.167L32.6531 17.2505L42.6387 14.3768L53.0422 24.8557L51.4832 23.2854H16.2387L33.861 5.53552Z"
                                fill="#2757FF" class="two_elementor_element"></path>
                            <path
                                d="M10.5208 39.6436L8.99585 37.0273L7.47087 39.6436C7.41619 39.7373 6.11857 41.9675 4.79951 44.5815C2.29021 49.5537 2 51.3458 2 52.2611C2 55.9768 5.13834 58.9998 8.99585 58.9998C12.8534 58.9998 15.9917 55.9768 15.9917 52.2611C15.9917 51.3458 15.7015 49.5537 13.1922 44.5816C11.8731 41.9676 10.5755 39.7373 10.5208 39.6436Z"
                                fill="#F865DC" class="two_elementor_element"></path>
                        </svg>
                        <div class="left-content ml-3">
                            <h3><span>ARTWORK APPROVAL</span></h3>
                            <p>Review and confirm the finalized design..</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="d-flex align-items-start flex-icons-01">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none"
                            class="two_elementor_element_02">
                            <path
                                d="M54.0074 37.3491C51.6742 36.3442 49.0155 36.5835 46.896 37.9894C45.0878 39.1888 43.0284 39.8071 40.9231 39.8071C40.0974 39.8071 39.2646 39.7119 38.4371 39.5194C35.4999 38.8362 33.0367 37.0211 31.5011 34.4085L28.6563 29.5683L20.3101 21.1624C18.0331 18.8693 16.6565 15.9111 16.3584 12.7227C13.3461 14.701 10.7784 17.3149 8.84364 20.4013C8.59146 20.8036 8.35188 21.2124 8.12366 21.6268L16.7541 25.0438C21.5061 26.9252 24.3119 31.9666 23.4255 37.0311L23.1707 38.4876C22.8068 40.5668 23.3387 42.7132 24.6303 44.3762C25.9217 46.0392 27.8618 47.0763 29.9533 47.2216C33.3605 47.4582 36.4864 49.3339 38.3152 52.239L40.9716 56.4588C43.425 55.2501 45.6895 53.6284 47.6775 51.6263C51.4905 47.7861 53.9191 42.9238 54.7132 37.6529L54.0074 37.3491Z"
                                fill="#2757FF" class="two_elementor_element_02"></path>
                            <path
                                d="M32.1187 28.7874L34.4051 32.6775C35.4659 34.4824 37.1676 35.7362 39.1967 36.2081C41.2255 36.6802 43.3009 36.3046 45.0402 35.1511C48.0065 33.1835 51.7024 32.7947 54.9968 34.0859C54.9977 33.9981 55 33.9106 55 33.8226C55 29.0541 53.6709 24.4132 51.1562 20.4015C49.2215 17.315 46.6537 14.701 43.6414 12.7227C43.3432 15.9111 41.9667 18.8693 39.6897 21.1624L32.1187 28.7874Z"
                                fill="#2757FF" class="two_elementor_element_02"></path>
                            <path
                                d="M29.9999 59.001C32.6881 59.001 35.3112 58.5759 37.7943 57.7585L35.4654 54.0589C34.2092 52.0632 32.0618 50.7747 29.7213 50.6122C26.677 50.4007 23.8525 48.891 21.9725 46.47C20.0924 44.0491 19.318 40.9247 19.8477 37.8979L20.1026 36.4414C20.7114 32.9623 18.784 29.4992 15.5196 28.2067L6.68876 24.7103C5.57679 27.5968 5 30.682 5 33.8226C5 40.548 7.6004 46.8708 12.3224 51.6264C17.044 56.3819 23.3222 59.001 29.9999 59.001Z"
                                fill="#2757FF" class="two_elementor_element_02"></path>
                            <path
                                d="M19.6699 11.4027C19.6699 14.1814 20.7443 16.7938 22.6952 18.7584L29.9989 26.1142L37.3026 18.7584C39.2535 16.7938 40.3278 14.1814 40.3278 11.4027C40.3278 5.66662 35.6944 1 29.9989 1C24.3034 1 19.6699 5.66662 19.6699 11.4027ZM29.9989 5.24499C33.3703 5.24499 36.1131 8.00746 36.1131 11.4028C36.1131 14.7982 33.3703 17.5608 29.9989 17.5608C26.6274 17.5608 23.8846 14.7983 23.8846 11.403C23.8846 8.00758 26.6274 5.24499 29.9989 5.24499Z"
                                fill="#F865DC" class="two_elementor_element_02"></path>
                            <path
                                d="M29.9989 14.1624C31.5121 14.1624 32.7388 12.9269 32.7388 11.403C32.7388 9.87897 31.5121 8.64354 29.9989 8.64354C28.4857 8.64354 27.259 9.87897 27.259 11.403C27.259 12.9269 28.4857 14.1624 29.9989 14.1624Z"
                                fill="#F865DC" class="two_elementor_element_02"></path>
                        </svg>
                        <div class="left-content ml-3">
                            <h3><span>PRINTING & SHIPPING </span></h3>
                            <p>
                                Transforming your approved design into tangible products and delivering them to your
                                doorstep. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="deli-paper-section">
        <div class="container">
            <div class="row mt-5 pt-5">
                <div class="col-md-12 m-auto text-center flex-padding">
                    <div class="text-embark">Embark On Your</div>
                    <h2 class="text-paper text-create">Creative Journey With Us</h2>
                    <p class="mt-4 para-discover">Your vision deserves the best execution, and we’re here to make it a
                        reality. If you’re curious about the complexities of our printing techniques, the art of file
                        preparation, the specifics of pricing structures, or the flexibility of order volumes, we’re all
                        ears. Contact us by phone or email, and we’ll work together to create excellence</p>
                </div>
            </div>
        </div>

    </section>
    <section class="testimonial-section">
        <div class="container">
            <div class="row mt-5 pt-5 mb-5 pb-5">
                <div class="col-xl-5 col-lg-5 col-md-5 col-12">
                    <div class="owl-carousel owl-theme custom-carousel">
                        <img src="<?php echo $website_url ?>/assets/images/slide-img-01.jpg" alt="">
                        <img src="<?php echo $website_url ?>/assets/images/slide-img-02.jpg" alt="">
                        <img src="<?php echo $website_url ?>/assets/images/slide-img-03.jpg" alt="">
                        <img src="<?php echo $website_url ?>/assets/images/slide-img-04.jpg" alt="">
                        <img src="<?php echo $website_url ?>/assets/images/slide-img-05.jpg" alt="">
                    </div>
                    <a href="mailto:sales@thedelipaper.com"
                        class="btn btn-email d-flex w-100 align-items-center mt-3"><i class="bx bx-envelope"></i>
                        sales@thedelipaper.com</a>
                    <a href="tel:832-900-9245" class="btn btn-email d-flex w-100 align-items-center mt-3"><i
                            class="bx bxs-phone"></i>
                        832-900-9245</a>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                    <h2 class="text-center text-quote">Get A Quote</h2>
                    <?php require_once('parts/quote_form.php');?>
                </div>
            </div>
        </div>
    </section>
    <section class="greaseproof-section">
        <div class="container-fluid">
            <div class="row mt-5 ml-5 mr-5">
                <div class="col-xl-6 flex-padding">
                    <p class="text-why mb-5" style="color: #2757FF;">Why Greaseproof paper</p>
                    <p class="para-grease"><a href="<?php echo $website_url ?>/"> Greaseproof paper </a> offers the
                        advantage of no art plate or
                        setup costs.Delivery time: 2 <br> to 3 weeks.</p>
                    <ul class="pl-0 list-grease">
                        <li>
                            <a href="<?php echo $website_url ?>/"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="custom-check-icon"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" class="two_elementor_element"></path></svg> &nbsp; Free shipping to
                                the
                                United States, Canada,
                                and Mexico.</a>
                        </li>
                        <li>
                            <a href="<?php echo $website_url ?>/"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="custom-check-icon"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" class="two_elementor_element"></path></svg> &nbsp; Process printing in
                                1, 2, or 4 colors.</a>
                        </li>
                        <li>
                            <a href="<?php echo $website_url ?>/"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="custom-check-icon"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" class="two_elementor_element"></path></svg> &nbsp; Full ink coverage
                                is
                                possible.</a>
                        </li>
                        <li>
                            <a href="<?php echo $website_url ?>/"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="custom-check-icon"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" class="two_elementor_element"></path></svg> &nbsp; All are available
                                in
                                both standard and
                                customized sizes.</a>
                        </li>
                        <li>
                            <a href="<?php echo $website_url ?>/"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="custom-check-icon"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" class="two_elementor_element"></path></svg> &nbsp; The product is 100%
                                compostable and
                                recyclable.</a>
                        </li>
                        <li>
                            <a href="<?php echo $website_url ?>/"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="custom-check-icon"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" class="two_elementor_element"></path></svg> &nbsp; Paper stocks are
                                available in white or Kraft
                                brown.</a>
                        </li>
                        <li>
                            <a href="<?php echo $website_url ?>/"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="custom-check-icon"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" class="two_elementor_element"></path></svg> &nbsp; Microwave-safe
                                heating.</a>
                        </li>
                        <li>
                            <a href="<?php echo $website_url ?>/"><svg aria-hidden="true" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="custom-check-icon"><path d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z" class="two_elementor_element"></path></svg> &nbsp; Freezer-friendly
                                storage</a>
                        </li>
                    </ul>
                    <button class="btn-slide-loop mb-10 d-flex align-items-center	"><span>Get a Quote <i
                                class="bx bx-chevron-right"></i></span></button>
                </div>
                <div class="col-xl-6 flex-padding">
                    <img src="<?php echo $website_url ?>/assets/images/greaseproof-paper.jpg"
                        class="img-fluid paper-img" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="product-highlight">
        <div class="container-fluid">
            <div class="row pt-5 mt-5">
                <div class="col-xl-12">
                    <h2 class="text-why text-center mb-4 mt-20">PRODUCT HIGHLIGHTS</h2>
                    <hr>
                </div>
            </div>
            <div class="row align-items-center mt-2">
                <div class="col-md-6 mt-2">
                    <ul class="pl-0 list-grease">
                        <li>
                            <a href="<?php echo $website_url ?>/"><img src="assets/images/tick.png" alt="" height="20" width="23"> &nbsp; Approved as safe
                                for
                                contact directly with
                                meals.</a>
                        </li>
                        <li>
                            <a href="<?php echo $website_url ?>/"><img src="assets/images/tick.png" alt="" height="20" width="23"> &nbsp;
                                Ideal for meals that are both hot and cold.</a>
                        </li>
                        <li>
                            <a href="<?php echo $website_url ?>/"><img src="assets/images/tick.png" alt="" height="20" width="23"> &nbsp;
                                The paper has multiple uses.</a>
                        </li>
                        <li>
                            <a href="<?php echo $website_url ?>/"><img src="assets/images/tick.png" alt="" height="20" width="23"> &nbsp; High quality, high
                                wet strength multipurpose
                                paper.</a>
                        </li>
                        <li>
                            <a href="<?php echo $website_url ?>/"><img src="assets/images/tick.png" alt="" height="20" width="23"> &nbsp; Ceases using oily
                                foods.</a>
                        </li>
                        <li>
                            <a href="<?php echo $website_url ?>/"><img src="assets/images/tick.png" alt="" height="20" width="23"> &nbsp; Manufactured
                                organically without the use of
                                coatings.</a>
                        </li>
                        <li>
                            <a href="<?php echo $website_url ?>/"><img src="assets/images/tick.png" alt="" height="20" width="23"> &nbsp; Printer ink made
                                from vegetables.</a>
                        </li>
                        <li>
                            <a href="<?php echo $website_url ?>/"><img src="assets/images/tick.png" alt="" height="20" width="23"> &nbsp; Safe to use in the
                                oven, microwave, and
                                freezer.</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 mt-2">
                    <img src="<?php echo $website_url ?>/assets/images/Deli-Paper.jpg" class="img-fluid deli-paper"
                        alt="">

                </div>
            </div>
        </div>
    </section>
    <section class="standard-section">
        <div class="container-fluid">
            <div class="row ml-5 mr-5 mt-5 pt-5">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 flex-padding">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 p-1">
                            <img src="<?php echo $website_url ?>/assets/images/img-001.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 p-1">
                            <img src="<?php echo $website_url ?>/assets/images/img-002.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 p-1">
                            <img src="<?php echo $website_url ?>/assets/images/img-003.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 p-1">
                            <img src="<?php echo $website_url ?>/assets/images/img-004.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 p-1">
                            <img src="<?php echo $website_url ?>/assets/images/img-005.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 p-1">
                            <img src="<?php echo $website_url ?>/assets/images/img-006.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <h2 class="text-standard mt-5">Standard Sizes</h2>
                    <div class="row mt-5">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-4 pt-10">
                            <div class="pl-0 mb-0 list-count">
                                <p class="mb-0">
                                    4″ x 4″
                                </p>
                                <p class="mb-0">
                                    5″ x 5″
                                </p>
                                <p class="mb-0">
                                    6” x 5”
                                </p>
                                <p class="mb-0">
                                    6″ x 6″
                                </p>
                                <p class="mb-0">
                                    7” x 5”
                                </p>
                                <p class="mb-0">
                                    7” x 7”
                                </p>
                                <p class="mb-0">
                                    8” x 5”
                                </p>
                                <p class="mb-0">
                                    8” x 6”
                                </p>
                                <p class="mb-0">
                                    8” x 8”
                                </p>
                                <p class="mb-0">
                                    8.5” x 11”
                                </p>
                                <p class="mb-0">
                                    9″ x 5″
                                </p>
                                <p class="mb-0">
                                    9″ x 6″
                                </p>
                                <p class="mb-0">
                                    9″ x 9″
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-4 pt-10">
                            <div class="pl-0 mb-0 list-count">
                                <p class="mb-0">
                                    10″ x 5″
                                </p>
                                <p class="mb-0">
                                    10″ x 6″
                                </p>
                                <p class="mb-0">
                                    10″ x 8″
                                </p>
                                <p class="mb-0">
                                    10″ x 10″
                                </p>
                                <p class="mb-0">
                                    10.75″ x 10″
                                </p>
                                <p class="mb-0">
                                    12″ x 6″
                                </p>
                                <p class="mb-0">
                                    12″ x 8″
                                </p>
                                <p class="mb-0">
                                    12″ x 9″
                                </p>
                                <p class="mb-0">
                                    12″ x 10″
                                </p>
                                <p class="mb-0">
                                    12″ x 12″
                                </p>
                                <p class="mb-0">
                                    13″ x 6″
                                </p>
                                <p class="mb-0">
                                    13″ x 9″
                                </p>
                                <p class="mb-0">
                                    13″ x 10″
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-4 pt-10">
                            <div class="pl-0 mb-0 list-count">
                                <p class="mb-0">
                                    13″ x 13″
                                </p>
                                <p class="mb-0">
                                    14” x 12”
                                </p>
                                <p class="mb-0">
                                    15″ x 9″
                                </p>
                                <p class="mb-0">
                                    15″ x 10.75″
                                </p>
                                <p class="mb-0">
                                    15″ x 12″
                                </p>
                                <p class="mb-0">
                                    15″ x 13″
                                </p>
                                <p class="mb-0">
                                    16” x 12”
                                </p>
                                <p class="mb-0">
                                    17” x 11″
                                </p>
                                <p class="mb-0">
                                    18” x 10”
                                </p>
                                <p class="mb-0">
                                    18” x 12”
                                </p>
                                <p class="mb-0">
                                    18” x 13”
                                </p>
                                <p class="mb-0">
                                    20″ x 10″
                                </p>
                                <p class="mb-0">
                                    20” x 12”
                                </p>
                                <p class="mb-0">
                                    20″ x 13″
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="standard-section mb-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 text-center flex-padding">
                    <h2 class="text-find">Find an answer to all your questions below.</h2>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-6 col-12 m-auto">
                    <p class="text-quick">Quick answers to questions you may have. Can’t find what you’re looking for?
                        Check out our full documentation.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row ml-5 mr-5 mt-5">
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 flex-padding">
                    <div class="accordion-wrapper mt-3">
                        <div class="accordion-text d-flex justify-content-between align-items-center">
                            <div class="accordion-text d-flex justify-content-between align-items-center">What types of wrapping paper does The Deli Paper Company offer?</div>
                            <i class="bx bx-chevron-right right-icon"></i>
                        </div>
                        <p class="accordion-para d-none">We offer a wide range of wrapping paper, including options for
                            Christmas, floral designs, and personalized options for any occasion. Our selection includes
                            gift wrap and bulk options for businesses.</p>
                    </div>
                    <div class="accordion-wrapper mt-3">
                        <div class="accordion-text d-flex justify-content-between align-items-center">
                            <div class="accordion-text d-flex justify-content-between align-items-center">Can I get wrapping paper that's suitable for items <br> like sandwiches or flowers?</div>
                            <i class="bx bx-chevron-right right-icon"></i>
                        </div>
                        <p class="accordion-para d-none">Our website features a detailed guide on each type of paper we
                            offer. Plus, our customer service team is always ready to help you make the perfect choice.
                        </p>
                    </div>
                    <div class="accordion-wrapper mt-3">
                        <div class="accordion-text d-flex justify-content-between align-items-center">
                            <div class="accordion-text d-flex justify-content-between align-items-center">What are the advantages of using parchment paper from The Deli Paper Company?</div>
                            <i class="bx bx-chevron-right right-icon"></i>
                        </div>
                        <p class="accordion-para d-none">Our <a href="<?php echo $website_url ?>/">parchment paper </a>
                            is ideal for all your
                            baking needs, available in sheets or rolls, and comes in bleached or unbleached varieties.
                            It’s perfect for non-stick baking and cooking, and we also offer custom-printed options.</p>
                        <p class="accordion-para d-none"> The Deli paper provides free shipping on all orders across the
                            United States. There are no minimum purchase requirements, so you can enjoy our products
                            delivered to your doorstep at no extra cost</p>
                    </div>
                    <div class="accordion-wrapper mt-3">
                        <div class="accordion-text d-flex justify-content-between align-items-center">
                            <div class="accordion-text d-flex justify-content-between align-items-center">How does custom packaging benefit my business?</div>
                            <i class="bx bx-chevron-right right-icon"></i>
                        </div>

                        <p class="accordion-para d-none"> Custom packaging with your branding can significantly enhance
                            your product’s appeal, provide better protection, and contribute to a memorable unboxing
                            experience for your customers. </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12 flex-padding">
                    <div class="accordion-wrapper mt-3">
                        <div class="accordion-text d-flex justify-content-between align-items-center">
                            <div class="accordion-text d-flex justify-content-between align-items-center">Can I order custom sizes or designs?</d>
                            <i class="bx bx-chevron-right right-icon"></i>
                        </div>
                        <p class="accordion-para d-none">Absolutely! We understand that one size doesn’t fit all.
                            Contact us with your specifications, and we’ll tailor our paper to your unique requirements.
                        </p>
                    </div>
                    </div>
                    <div class="accordion-wrapper mt-3">
                        <div class="accordion-text d-flex justify-content-between align-items-center">
                            <div class="accordion-text d-flex justify-content-between align-items-center">Does The Deli Paper Company offer butcher paper?</div>
                            <i class="bx bx-chevron-right right-icon"></i>
                        </div>
                        <p class="accordion-para d-none">Absolutely! We understand that one size doesn’t fit all.
                            Contact us with your specifications, and we’ll tailor our paper to your unique requirements.
                        </p>
                    </div>
                    <div class="accordion-wrapper mt-3">
                        <div class="accordion-text d-flex justify-content-between align-items-center">
                            <div class="accordion-text d-flex justify-content-between align-items-center">Can I order custom sizes or designs?</div>
                            <i class="bx bx-chevron-right right-icon"></i>
                        </div>
                        <p class="accordion-para d-none">Yes, we supply high-quality butcher wrapping paper in various
                            sizes, including 24-inch and 36-inch rolls. Whether you’re barbecuing or freezing meat, our
                            butcher paper has you covered.
                        </p>
                        <p class="accordion-para d-none">Absolutely! We understand that one size doesn’t fit all.
                            Contact us with your specifications, and we’ll tailor our paper to your unique requirements.
                        </p>
                    </div>
                    <div class="accordion-wrapper mt-3">
                        <div class="accordion-text d-flex justify-content-between align-items-center">
                            <div class="accordion-text d-flex justify-content-between align-items-center">How can I get in touch for more questions?</div>
                            <i class="bx bx-chevron-right right-icon"></i>
                        </div>
                        <p class="accordion-para d-none">We’re here for you! Reach out to us via our <a
                                href="<?php echo $website_url ?>/">
                                contact page, </a> and we’ll get back to you as soon as possible
                        </p>

                    </div>
                    <div class="accordion-wrapper mt-3">
                        <div class="accordion-text d-flex justify-content-between align-items-center">
                            <div class="accordion-text d-flex justify-content-between align-items-center">why should I choose it for my business?</div>
                            <i class="bx bx-chevron-right right-icon"></i>
                        </div>
                        <p class="accordion-para d-none">Custom Deli Paper is a versatile, eco-friendly packaging
                            solution tailored to your brand. Made from recyclable and compostable materials, it’s ideal
                            for wrapping food items while maintaining sustainability. With no setup costs, full ink
                            coverage, and customizable designs, it provides an excellent opportunity to showcase your
                            branding. Perfect for both hot and cold meals, it’s safe for use in ovens, microwaves, and
                            freezers.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'parts/client_section.php'; ?>

    <section class="blog-section pb-5">
        <div class="container">
            <div class="row mt-5 pt-5">
                <div class="col-md-6 text-center m-auto">
                    <h2 class="text-blog">Our Blog</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center ml-5 mr-5 mt-5">
                <?php
                  require_once('parts/db.php');
            
                  $select_blog = "SELECT * FROM post ORDER BY post_id ASC LIMIT 4";
                  $run_blog = mysqli_query($conn, $select_blog);
                  while ($row_blog = mysqli_fetch_array($run_blog)) {
            
                      $post_id = $row_blog['post_id'];
                      $post_title = $row_blog['post_title'];
                      $post_content = $row_blog['post_content'];
                      $post_thumbnail = $row_blog['post_thumbnail'];
                      $post_url = $row_blog['post_url'];
            
            
                  ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-6 mt-3 flex-padding-01">
                    <div class="card-wrapper border">
                        <div class="card-img position-relative">
                            <div class="overlay">
                                <div class="d-flex justify-content-center align-items-center arrow-icon">
                                    <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
                                </div>
                            </div>
                            <img src="<?php echo $img_path; ?>/<?php echo $post_thumbnail;?>" class="img-fluid w-100"
                                alt="">
                        </div>
                        <div class="card-body">
                            <h2><?php echo $post_title;?></h4>
                            <p class="mb-0"><?php echo substr($post_content,0,70);?>... </p>
                            <a href="<?php echo $website_url ?>/<?php echo $post_url;?>" class="text-read">Read More</a>
                        </div>
                    </div>
                </div>
                <?php
                   }
                ?>
                
            </div>
        </div>
    </section>
<section>
     <?php require_once('parts/footer.php'); ?>
  

    <script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            navText: [
                '<span class="custom-prev"><i class="bx bx-chevron-left"></i></span>',
                '<span class="custom-next"><i class="bx bx-chevron-right"></i></span></span>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    });
    </script>
</body>

</html>