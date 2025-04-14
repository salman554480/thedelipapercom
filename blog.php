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
                $i = 1;
                while ($i < 20) {
                ?>
                    <div class="col-6 col-md-3 mb-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">
                                    <span><?php echo $i; ?></span>
                                    <label>FEB</label>
                                </div>
                                <a href="#">
                                    <img src="https://picsum.photos/400/200?random=<?php echo $i; ?>" class="w-100" title=""
                                        alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5><a href="#">Prevent 75% of visitors from google analytics</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="btn-bar">
                                    <a href="#"
                                        class="btn btn-secondary secondary-bg secondary-border border-radius-30 custom-btn w-50">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $i++;
                } ?>

            </div>
        </div>

    </div>




    <?php require_once('parts/footer.php'); ?>