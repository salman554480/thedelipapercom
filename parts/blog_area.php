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
                    // Pagination setup
                    $posts_per_page = 15;
                    $current_page = isset($current_page) ? $current_page : 1;
                    $offset = ($current_page - 1) * $posts_per_page;
                    
                    // Get total count of published posts
                    $count_query = "SELECT COUNT(*) as total FROM post WHERE post_status = 'publish'";
                    $count_result = mysqli_query($conn, $count_query);
                    $total_posts = mysqli_fetch_assoc($count_result)['total'];
                    $total_pages = ceil($total_posts / $posts_per_page);
                    
                    // Query to fetch latest published blog posts with category and admin info
                    $query = "SELECT p.post_title, p.post_url, p.post_thumbnail, p.post_date, 
                 c.category_name, a.admin_name 
          FROM post p
          LEFT JOIN category c ON p.category_id = c.category_id
          LEFT JOIN admin a ON p.admin_id = a.admin_id
          WHERE p.post_status = 'publish'
          ORDER BY p.post_date DESC
          LIMIT $posts_per_page OFFSET $offset";

                    $result = mysqli_query($conn, $query);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
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
                        echo "No blog posts found.";
                    }
                    ?>
                </div>
                
                <?php if ($total_pages > 1): ?>
                <div class="row mt-5">
                    <div class="col-xl-12">
                        <div class="d-flex justify-content-center align-items-center">
                            <ul class="d-flex justify-content-center align-items-center pagination-list">
                                <?php if ($current_page > 1): ?>
                                <li>
                                    <a href="<?php echo $website_url; ?>/blog/page/<?php echo ($current_page - 1); ?>/" class="d-flex">
                                        <i class="bx bx-chevron-left"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                                
                                <?php
                                // Calculate pagination range
                                $start_page = max(1, $current_page - 2);
                                $end_page = min($total_pages, $current_page + 2);
                                
                                // Show first page if not in range
                                if ($start_page > 1): ?>
                                <li>
                                    <a href="<?php echo $website_url; ?>/blog/" class="<?php echo ($current_page == 1) ? 'active-pagination' : ''; ?>">1</a>
                                </li>
                                <?php if ($start_page > 2): ?>
                                <li><span>...</span></li>
                                <?php endif; ?>
                                <?php endif; ?>
                                
                                <?php for ($i = $start_page; $i <= $end_page; $i++): ?>
                                <li>
                                    <?php if ($i == 1): ?>
                                        <a href="<?php echo $website_url; ?>/blog/" class="<?php echo ($current_page == 1) ? 'active-pagination' : ''; ?>"><?php echo $i; ?></a>
                                    <?php else: ?>
                                        <a href="<?php echo $website_url; ?>/blog/page/<?php echo $i; ?>/" class="<?php echo ($current_page == $i) ? 'active-pagination' : ''; ?>"><?php echo $i; ?></a>
                                    <?php endif; ?>
                                </li>
                                <?php endfor; ?>
                                
                                <?php
                                // Show last page if not in range
                                if ($end_page < $total_pages): ?>
                                <?php if ($end_page < $total_pages - 1): ?>
                                <li><span>...</span></li>
                                <?php endif; ?>
                                <li>
                                    <a href="<?php echo $website_url; ?>/blog/page/<?php echo $total_pages; ?>/" class="<?php echo ($current_page == $total_pages) ? 'active-pagination' : ''; ?>"><?php echo $total_pages; ?></a>
                                </li>
                                <?php endif; ?>
                                
                                <?php if ($current_page < $total_pages): ?>
                                <li>
                                    <a href="<?php echo $website_url; ?>/blog/page/<?php echo ($current_page + 1); ?>/" class="d-flex">
                                        <i class="bx bx-chevron-right"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
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