<h4 class="text-search">Search</h4>
<form id="searchForm" action="#" method="get" autocomplete="off">
   <div class="form-group position-relative mt-3">
      <input type="text" id="searchInput" name="q" class="form-control input-field-blog rounded-pill" placeholder="Search...">
      <i class="bx bx-search search-icon"></i>
   </div>
   <div id="searchSuggestions" style="position: absolute; background: white; width: 100%; max-height: 200px; overflow-y: auto; border: 1px solid #ddd; display:none; z-index: 999;"></div>
</form>
<h4 class="text-category pb-4">Blog categories</h4>
<?php
// Query to get categories with count of published posts
$category_query = "
    SELECT c.category_id, c.category_name, c.category_slug, COUNT(p.post_id) AS post_count
    FROM category c
    LEFT JOIN post p ON c.category_id = p.category_id AND p.post_status = 1
    GROUP BY c.category_id, c.category_name, c.category_slug
    ORDER BY c.category_name ASC
";

$category_result = mysqli_query($conn, $category_query);

if ($category_result && mysqli_num_rows($category_result) > 0) {
    echo '<ul class="list-category pl-0">';
    
    // Optional: Add a general "Blog" item with total published posts count
    $total_posts_query = "SELECT COUNT(*) AS total_count FROM post WHERE post_status = 'publish'";
    $total_posts_result = mysqli_query($conn, $total_posts_query);
    $total_posts = 0;
    if ($total_posts_result) {
        $total_posts_row = mysqli_fetch_assoc($total_posts_result);
        $total_posts = (int)$total_posts_row['total_count'];
    }
    echo '<li>
            <a href="' . $website_url . '/blog" class="d-flex justify-content-between align-items-center">
                Blog <span class="txt-count">' . $total_posts . '</span>
            </a>
          </li>';
    
    // Loop through each category
    while ($category = mysqli_fetch_assoc($category_result)) {
        $cat_name = htmlspecialchars($category['category_name']);
        $cat_slug = htmlspecialchars($category['category_slug']);
        $cat_post_count = (int)$category['post_count'];

        echo '<li class="mt-3">
                <a href="' . $website_url . '/category/' . $cat_slug . '" class="d-flex justify-content-between align-items-center">'
                    . $cat_name . ' <span class="txt-count">' . $cat_post_count . '</span>
                </a>
              </li>';
    }
    echo '</ul>';
} else {
    echo '<p>No categories found.</p>';
}
?>

<h4 class="text-category mt-5 pt-4">Recent posts</h4>
<div class="right-side-blog-recent mt-3">
   <?php
      $recent_posts_query = "
          SELECT post_title, post_url, post_thumbnail, post_date 
          FROM post 
          WHERE post_status = 'publish' 
          ORDER BY post_date DESC 
          LIMIT 5
      ";
      
      $recent_posts_result = mysqli_query($conn, $recent_posts_query);
      
      if ($recent_posts_result && mysqli_num_rows($recent_posts_result) > 0) {
          while ($recent_post = mysqli_fetch_assoc($recent_posts_result)) {
              $recent_post_title = htmlspecialchars($recent_post['post_title']);
              $recent_post_url = htmlspecialchars($recent_post['post_url']);
              $recent_post_thumbnail = htmlspecialchars($recent_post['post_thumbnail']);
              $recent_post_date = date("F j, Y", strtotime($recent_post['post_date']));
              
              // Shorten title if too long
              $display_title = (strlen($recent_post_title) > 40) ? substr($recent_post_title, 0, 37) . "..." : $recent_post_title;
              ?>
   <div class="d-flex align-items-center mb-3">
      <img src="<?php echo $img_path . '/' . $recent_post_thumbnail; ?>" class="img-fluid thumbnail-img" alt="<?php echo $display_title; ?>">
      <div class="detail-blog-recent ml-3">
         <h5><a href="<?php echo $website_url?>/<?php echo $recent_post_url; ?>"><?php echo $display_title; ?></a></h5>
         <p class="mb-0"><?php echo $recent_post_date; ?></p>
      </div>
   </div>
   <?php
      }
      } else {
      echo "<p>No recent posts found.</p>";
      }
      ?>
</div>

<h4 class="text-category mt-5 pt-4">Popular tags</h4>
<div class="popular-tags mt-3">
   <?php
   // Query to get all unique tags from published posts
   $tags_query = "
       SELECT DISTINCT post_tag 
       FROM post 
       WHERE post_status = 'publish' 
       AND post_tag IS NOT NULL 
       AND post_tag != ''
       ORDER BY post_tag ASC
   ";
   
   $tags_result = mysqli_query($conn, $tags_query);
   
   if ($tags_result && mysqli_num_rows($tags_result) > 0) {
       $all_tags = array();
       
       // Collect all tags from all posts
       while ($tag_row = mysqli_fetch_assoc($tags_result)) {
           $post_tags = explode(',', $tag_row['post_tag']);
           foreach ($post_tags as $tag) {
               $tag = trim($tag);
               if (!empty($tag)) {
                   $all_tags[] = $tag;
               }
           }
       }
       
       // Count tag frequency and get unique tags
       $tag_counts = array_count_values($all_tags);
       arsort($tag_counts); // Sort by frequency
       
       // Display tags (limit to top 20 most popular)
       $tag_count = 0;
       foreach ($tag_counts as $tag => $count) {
           if ($tag_count >= 20) break; // Limit to 20 tags
           
           $tag_slug = strtolower(str_replace(' ', '-', $tag));
           $tag_slug = preg_replace('/[^a-z0-9\-]/', '', $tag_slug);
           ?>
           <a href="<?php echo $website_url; ?>/tag/<?php echo $tag_slug; ?>/" class="tag-link">
               <?php echo htmlspecialchars($tag); ?>
           </a>
           <?php
           $tag_count++;
       }
   } else {
       echo "<p>No tags found.</p>";
   }
   ?>
</div>

<img src="assets/images/banner-offer-ad-img.png" class="img-fluid mt-4" alt="">