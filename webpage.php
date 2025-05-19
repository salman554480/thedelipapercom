<?php
// Get the current URL
$currentUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
$currentUrl .= "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$slug = basename($currentUrl);
parse_str(parse_url($currentUrl, PHP_URL_QUERY), $params);
$slug = $params['slug']; // "food-wrapping-paper"
?>


<?php
require_once('admin/parts/db.php');
$check_product = "SELECT * FROM meta where slug='$slug'";
$resultcheck_product = mysqli_query($conn, $check_product);
if (mysqli_num_rows($resultcheck_product) > 0) {
   $resultcheck_meta = mysqli_fetch_array($resultcheck_product);
   $meta_title = $resultcheck_meta["meta_title"];
   $meta_description = $resultcheck_meta["meta_description"];
   $meta_keyword = $resultcheck_meta["meta_keyword"];
}
?>



<?php require_once('parts/top.php'); ?>
<!-- Elevate Zoom Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
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

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            nav: false,
            dots: false,
            autoplayTimeout: 2500,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 4
                },
                992: {
                    items: 4
                }
            }
        });
    });
    </script>

    <script>
    const realFileBtn = document.getElementById("real-file");
    const customBtn = document.getElementById("custom-button");
    const fileName = document.getElementById("file-name");

    customBtn.addEventListener("click", () => {
        realFileBtn.click();
    });

    realFileBtn.addEventListener("change", () => {
        if (realFileBtn.files.length > 0) {
            fileName.textContent = realFileBtn.files[0].name;
        } else {
            fileName.textContent = "No file chosen";
        }
    });
    </script>