<section class=" wax-product-section mb-5 pb-5">
    <div class="container-fluid">
        <div class="row ml-5 mr-5 pl-3 pr-3 mt-5">
            <div class="col-xl-9 flex-padding">
                <div class="col-12">
                    <div class="not-found d-none">
                        <h1 class="  text-found">Nothing Found</h1>
                        <p class="mt-5 para-found">Sorry, but nothing matched your search terms. Please try again
                            with some different keywords.</p>
                    </div>
                </div>
                <div class="row">
                <?php
                // Make sure $category exists (from webpage.php)
                if (!empty($category)) {
                
                    // 1. Get category ID from slug
                    $escaped_category_slug = mysqli_real_escape_string($conn, $category);
                    $cat_query = "SELECT category_id, category_name FROM category WHERE category_slug = '$escaped_category_slug'";
                    $cat_result = mysqli_query($conn, $cat_query);
                
                    if ($cat_result && mysqli_num_rows($cat_result) > 0) {
                        $cat_data = mysqli_fetch_assoc($cat_result);
                        $category_id = $cat_data['category_id'];
                        $category_name = htmlspecialchars($cat_data['category_name']);
                
                        // 2. Query blog posts in this category
                        $query = "SELECT p.post_title, p.post_url, p.post_thumbnail, p.post_date, 
                                         a.admin_name 
                                  FROM post p
                                  LEFT JOIN admin a ON p.admin_id = a.admin_id
                                  WHERE p.post_status = 'publish' AND p.category_id = '$category_id'
                                  ORDER BY p.post_date DESC";
                
                        $result = mysqli_query($conn, $query);
                
                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $title = htmlspecialchars($row['post_title']);
                                $url = htmlspecialchars($row['post_url']);
                                $thumbnail = htmlspecialchars($row['post_thumbnail']);
                                $date = date("F j, Y", strtotime($row['post_date']));
                                $author = htmlspecialchars($row['admin_name']);
                                $short_title = strlen($title) > 44 ? substr($title, 0, 40) . "..." : $title;
                                ?>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-6 mt-3 flex-padding-blog">
                                    <div class="position-relative blog-wrapper">
                                        <img src="<?php echo $img_path . '/' . $thumbnail; ?>" class="img-fluid blog-img" alt="">
                                    </div>
                                    <h5 class="text-blog-product mt-3">
                                        <?php echo $category_name; ?> 
                                        <span><i class="bx bxs-dot"></i></span> 
                                    </h5>
                                    <h3 class="entry-title">
                                        <a href="<?php echo $website_url;?>/<?php echo $url; ?>/"><?php echo $short_title; ?></a>
                                    </h3>
                                    <p class="para-blog-product">
                                        <span class="mr-3"><?php echo $date; ?></span> 
                                        <span>By</span> 
                                        <span class="span-paper"><?php echo $author; ?></span>
                                    </p>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<div class='col-12'>No blog posts found in this category.</div>";
                        }
                
                    } else {
                        echo "<div class='col-12'>Category not found.</div>";
                    }
                
                } else {
                    echo "<div class='col-12'>No category selected.</div>";
                }
                ?>
                </div>
            </div>
            <div class="col-xl-3 right-side-search-section">
                <?php require_once('parts/blog_sidebar.php'); ?>
            </div>
        </div>
        
    </div>
</section>    
