<?php require_once('parts/top.php'); ?>
<!-- Elevate Zoom Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
</head>

<body>
    <?php require_once('parts/navbar.php'); ?>
    <div class="website-area">
        <div class="w-90 py-5 ">
            <h1 class="section-heading text-center">Blogs</h1>
            <div class="row my-3">
                <?php

                $select_post = "SELECT * FROM post where post_status='publish' ORDER BY post_id DESC";
                $run_post = mysqli_query($conn, $select_post);
                while ($row_post = mysqli_fetch_array($run_post)) {

                    $post_id = $row_post['post_id'];
                    $post_title = $row_post['post_title'];
                    $post_status = $row_post['post_status'];
                    $post_thumbnail = $row_post['post_thumbnail'];
                    $post_url = $row_post['post_url'];
                    $post_content = $row_post['post_content'];



                ?>
                <div class="col-6 col-md-3 mb-4">
                    <div class="blog-grid">
                        <div class="blog-img">
                            <div class="date">
                                <span>4</span>
                                <label>FEB</label>
                            </div>
                            <a href="#">
                                <img src="<?php echo $website_url; ?>/admin/assets/img/<?php echo $post_thumbnail; ?>"
                                    class="w-100" title="" alt="">
                            </a>
                        </div>
                        <div class="blog-info">
                            <h5><a href="#"><?php echo $post_title; ?></a></h5>
                            <p><?php echo $post_content; ?></p>
                            <div class="btn-bar">
                                <a href="<?php echo $website_url; ?>/blog_details.php?post_url=<?php echo $post_url ?>"
                                    class="btn btn-secondary secondary-bg secondary-border border-radius-30 custom-btn w-50">
                                    <span>Read More</span>
                                    <i class="arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                } ?>

            </div>
        </div>

    </div>




    <?php require_once('parts/footer.php'); ?>