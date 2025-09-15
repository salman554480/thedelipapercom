<?php
// Get current URL path (excluding domain)
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove the base path (/extras/delipaper/)
$basePath = '/extras/delipaper/';
if (strpos($path, $basePath) === 0) {
    $path = substr($path, strlen($basePath));
}

// Remove any trailing slash
$path = rtrim($path, '/');

// Split path parts
$parts = explode('/', $path);

$slug = '';
$category = '';
$page = 1;
$tag = '';

// Check if it's a category URL
if (count($parts) == 2 && $parts[0] === 'category') {
    $category = $parts[1];  // e.g., "delimainproducts"
} elseif (count($parts) == 2 && $parts[0] === 'tag') {
    $tag = $parts[1];       // e.g., "uses-of-wax-paper"
} elseif (count($parts) == 3 && $parts[0] === 'blog' && $parts[1] === 'page') {
    $slug = $parts[0];      // "blog"
    $page = intval($parts[2]); // page number
} elseif (count($parts) == 1) {
    $slug = $parts[0];      // e.g., "blog"
}
?>
<?php
   require_once('parts/db.php');
   if (!empty($category)) {
    $check_product = "SELECT * FROM meta where slug='$category'";
   }else{
        $check_product = "SELECT * FROM meta where slug='$slug'";
   }
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
      } else if ($slug == "blog") {
          // Pass page number to blog area
          $current_page = $page;
          require_once('parts/blog_area.php');
      } else if (!empty($tag)) {
          // Tag page logic
          require_once('parts/tag_area.php');
      } else if (!empty($category)) {
    // Category page logic
    require_once('parts/category_area.php');
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
  