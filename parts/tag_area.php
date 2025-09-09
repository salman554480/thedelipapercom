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
                
                <?php
                // Convert tag slug back to readable format
                $tag_display = str_replace('-', ' ', $tag);
                $tag_display = ucwords($tag_display);
                ?>
                
                <div class="row mb-4">
                    <div class="col-12">
                        <h1 class="text-why">Posts tagged with: <?php echo htmlspecialchars($tag_display); ?></h1>
                        <hr>
                    </div>
                </div>
                
                <div class="row">
                    <?php
                    // Query to fetch posts with the specific tag
                    $tag_query = "SELECT p.post_title, p.post_url, p.post_thumbnail, p.post_date, p.post_tag,
                     c.category_name, a.admin_name 
              FROM post p
              LEFT JOIN category c ON p.category_id = c.category_id
              LEFT JOIN admin a ON p.admin_id = a.admin_id
              WHERE p.post_status = 'publish'
              AND p.post_tag LIKE '%$tag_display%'
              ORDER BY p.post_date DESC";

                    $tag_result = mysqli_query($conn, $tag_query);

                    if ($tag_result && mysqli_num_rows($tag_result) > 0) {
                        while ($row = mysqli_fetch_assoc($tag_result)) {
                            $title = htmlspecialchars($row['post_title']);
                            $url = htmlspecialchars($row['post_url']);
                            $thumbnail = htmlspecialchars($row['post_thumbnail']);
                            $date = date("F j, Y", strtotime($row['post_date']));
                            $category = htmlspecialchars($row['category_name']);
                            $author = htmlspecialchars($row['admin_name']);

                            // Optional: Shorten title if it's too long
                            $short_title = strlen($title) > 44 ? substr($title, 0, 40) . "..." : $title;
                    ?>

                            <div class="col-xl-4 col-lg-6 col-md-6 col-6 mt-3 flex-padding-blog">
                                <div class="position-relative blog-wrapper">
                                    <img src="<?php echo $img_path . '/' . $thumbnail; ?>" class="img-fluid blog-img" alt="">
                                </div>
                                <h5 class="text-blog-product mt-3">
                                    <?php echo htmlspecialchars($category); ?>
                                    <span><i class="bx bxs-dot"></i></span>
                                    <?php // echo $title; 
                                    ?>
                                </h5>
                                <h3 class="entry-title">
                                    <a href="<?php echo $website_url; ?>/<?php echo $url; ?>"><?php echo $short_title; ?></a>
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
                        echo '<div class="col-12"><p>No posts found for this tag.</p></div>';
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const input = document.getElementById("searchInput");
        const suggestions = document.getElementById("searchSuggestions");

        input.addEventListener("input", function() {
            const query = this.value.trim();

            if (query.length < 2) {
                suggestions.style.display = "none";
                suggestions.innerHTML = "";
                return;
            }

            fetch("search_ajax.php?q=" + encodeURIComponent(query))
                .then(response => response.json())
                .then(data => {
                    if (data.length === 0) {
                        suggestions.style.display = "none";
                        suggestions.innerHTML = "";
                        return;
                    }

                    let html = '<ul style="list-style:none; margin:0; padding:0;">';
                    data.forEach(item => {
                        html += `<li style="padding:8px; border-bottom:1px solid #eee;">
                                <a href="${item.post_url}" style="text-decoration:none; color:#333;">
                                    <strong>${item.post_title}</strong><br>
                                    <small>${item.post_date}</small>
                                </a>
                             </li>`;
                    });
                    html += '</ul>';

                    suggestions.innerHTML = html;
                    suggestions.style.display = "block";
                })
                .catch(err => {
                    console.error("Search error:", err);
                    suggestions.style.display = "none";
                });
        });

        // Hide suggestions if clicking outside
        document.addEventListener("click", function(e) {
            if (!suggestions.contains(e.target) && e.target !== input) {
                suggestions.style.display = "none";
            }
        });
    });
</script>
