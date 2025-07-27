<?php
// Get the current full URL
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
$currentUrl .= "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Parse the path from the URL
$path = parse_url($currentUrl, PHP_URL_PATH);

// Get the last part of the path (the slug)
echo $slug = trim(basename($path), '/');
?>


<?php
require_once('parts/db.php');
echo $check_product = "SELECT * FROM meta where slug='$slug'";
$resultcheck_product = mysqli_query($conn, $check_product);
if (mysqli_num_rows($resultcheck_product) > 0) {
    $resultcheck_meta = mysqli_fetch_array($resultcheck_product);
    $meta_title = $resultcheck_meta["meta_title"];
    $meta_description = $resultcheck_meta["meta_description"];
    $meta_keyword = $resultcheck_meta["meta_keyword"];
}
?>


<?php require_once('parts/top.php'); ?>

</head>

<body>
    <?php require_once('parts/navbar.php'); ?>


    <!-- Check product -->
    <?php
    $check_product = "SELECT * FROM product where product_url='$slug'";
    $resultcheck_product = mysqli_query($conn, $check_product);
    if (mysqli_num_rows($resultcheck_product) > 0) {

        require_once('parts/product_details_area.php');
    } else {
        $check_post = "SELECT * FROM post where post_url='$slug'";
        $resultcheck_post = mysqli_query($conn, $check_post);
        if (mysqli_num_rows($resultcheck_post) > 0) {
            require_once('parts/blog_details_area.php');
        } else {
            $check_page = "SELECT * FROM page where page_url='$slug'";
            $resultcheck_page = mysqli_query($conn, $check_page);
            if (mysqli_num_rows($resultcheck_page) > 0) {

                require_once('parts/page_details_area.php');
            }
        }
    }
    ?>








    <?php require_once('parts/footer.php'); ?>

    <script>
    $(document).ready(function() {
        $('.btn-get-qoute').on('click', function() {
            $('body').addClass('body-darkened'); // dark background
            $('.form-slide-panel').addClass('open'); // show panel
            // $('body').css('overflow', 'hidden');
            // sdsdsdsds///                  // optional: prevent scroll
        });

        $('.close-form').on('click', function() {
            $('.form-slide-panel').removeClass('open'); // hide panel
            $('body').removeClass('body-darkened'); // remove dark bg
            // $('body').css('overflow', 'auto');                    // restore scroll
        });
    });
    </script>

    <script>
    $('.product-slide').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        navText: [
            '<span class="custom-prev"><i class="bx bx-chevron-left"></i></span>',
            '<span class="custom-next"><i class="bx bx-chevron-right"></i></span></span>'
        ],
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 4,
                nav: true,
                loop: false
            }
        }
    })
    </script>