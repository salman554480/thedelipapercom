<?php require_once('parts/top.php'); ?>
</head>

<body>
    <?php require_once('parts/navbar.php'); ?>
    <div class="website-area">
        <!-- Full Width Section -->
        <div class="container-fluid">
            <div class="row cover-area">
                <!-- Left Section: Text and Button -->
                <div class="col-md-6 left-section">
                    <h2 class="cover-heading text-center">Branded food paper</h2>
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-6 col-md-4 feature-box">
                                <i class='bx bx-shape-square'></i>
                                <span>Custom Sizes</span>
                            </div>
                            <div class="col-6 col-md-4 feature-box">
                                <i class='bx bx-timer'></i>
                                <span>Fastest Turn Around</span>
                            </div>
                            <div class="col-6 col-md-4 feature-box">
                                <i class='bx bxs-tree'></i>
                                <span>Plant Base Material </span>
                            </div>
                        </div>
                    </div>
                    <p class="cover-text my-4">Custom printed food papers, perfect for restaurants, delis and bars
                        across the
                        US, Mexico and Canada.

                    </p>
                    <a href="#" data-toggle="modal" data-target="#myModal"
                        class="btn btn-primary primary-bg primary-border border-radius-30 custom-btn">Get a
                        Quote</a>

                    <!-- <div class="row justify-content-start mt-3">
                        <div class="col-auto">
                            <i class="fab fa-apple-pay payment-icon"></i>
                        </div>
                        <div class="col-auto">
                            <i class="fab fa-google-pay payment-icon"></i>
                        </div>
                        <div class="col-auto">
                            <i class="fab fa-cc-mastercard payment-icon"></i>
                        </div>
                        <div class="col-auto">
                            <i class="fab fa-cc-visa payment-icon"></i>
                        </div>
                        <div class="col-auto">
                            <i class="fab fa-cc-amex payment-icon"></i>
                        </div>
                    </div> -->
                </div>

                <!-- Right Section: Full Cover Image -->
                <div class="col-md-6 right-section">
                    <!-- Image will be styled by CSS for full cover -->
                </div>
            </div>
        </div>

        <div class="center-wrapper py-4">
            <div class="ti-widget-container">
                <div class="ti-small-logo">
                    <img src="assets/img/google.svg" alt="Google">
                </div>
                <div class="ti-stars d-flex align-items-center">
                    <img src="assets/img/star.svg" alt="Star">
                    <img src="assets/img/star.svg" alt="Star">
                    <img src="assets/img/star.svg" alt="Star">
                    <img src="assets/img/star.svg" alt="Star">
                    <img src="assets/img/star.svg" alt="Star">
                </div>
                <div class="ti-review-count">
                    20 reviews
                </div>
            </div>
        </div>

        <section class="my-4">
            <div class="w-90">
                <div class="row my-4">
                    <?php

                    $select_product = "SELECT * FROM product where product_status='active'";
                    $run_product = mysqli_query($conn, $select_product);
                    while ($row_product = mysqli_fetch_array($run_product)) {

                        $product_id = $row_product['product_id'];
                        $product_name = $row_product['product_name'];
                        $product_url = $row_product['product_url'];
                        $product_thumbnail = $row_product['product_thumbnail'];
                        $product_short_description = $row_product['product_short_description'];

                    ?>
                    <div class="col-md-6 col-12 mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="product_details.php?product_url=<?php echo $product_url; ?>">
                                    <img src="admin/assets/img/<?php echo $product_thumbnail;?>" alt="Product"
                                        class="product-img w-100 mb-3">
                                </a>

                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <div>
                                    <h5 class="mb-2 card-product-title"><?php echo $product_name; ?></h5>
                                    <p class="my-3 card-product-text">
                                        <?php echo substr($product_short_description,0,115);?>...</p>
                                    <a href="product_details.php?product_url=<?php echo $product_url; ?>"
                                        class="btn btn-primary secondary-bg secondary-border border-radius-30 custom-btn">Shop
                                        Now</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php } ?>


                </div>

            </div>
        </section>

        <section class="steps-section text-center">
            <div class="container">
                <h2>Get Started with Your Custom Food Wrap</h2>
                <p class="lead">Just three easy steps to personalized perfection</p>

                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="step-box">
                            <i class='bx bx-food-menu'></i>
                            <div class="step-title">Choose your food paper</div>
                            <p>Select the material that suits your brand and food style.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step-box">
                            <i class='bx bx-upload'></i>
                            <div class="step-title">Upload your logo</div>
                            <p>Send us your branding, and we’ll handle the rest.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step-box">
                            <i class='bx bx-package'></i>
                            <div class="step-title">Await your delivery</div>
                            <p>We print, pack, and ship straight to your door.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="custom-products-section">
            <div class="w-90">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="product-box">
                            <img src="https://brandedfoodwraps.com/wp-content/uploads/2024/08/top-view-burger-parchment.jpg"
                                alt="Product 1" class="product-cover">
                            <h4 class="card-product-title text-center">RESTAURANTS & DINERS
                            </h4>
                            <p class="product-intro my-2 text-center">Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit.
                                Dolores maiores debitis aperiam voluptatum aliquam voluptas et.</p>

                            <center> <button
                                    class="btn btn-primary primary-bg primary-border border-radius-30 custom-btn w-50">Shop
                                    Now</button></center>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="product-box">
                            <img src="https://brandedfoodwraps.com/wp-content/uploads/2024/09/BFW-website-8-of-9-1024x1024.jpg"
                                alt="Product 1" class="product-cover">
                            <h4 class="card-product-title text-center">cafés & coffee shops
                            </h4>
                            <p class="product-intro my-2 text-center">Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit.
                                Dolores maiores debitis aperiam voluptatum aliquam voluptas et.</p>

                            <center> <button
                                    class="btn btn-primary primary-bg primary-border border-radius-30 custom-btn w-50">Shop
                                    Now</button></center>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="product-box">
                            <img src="https://brandedfoodwraps.com/wp-content/uploads/2024/08/chicken-on-custom-food-paper.jpg"
                                alt="Product 1" class="product-cover">
                            <h4 class="card-product-title text-center">Street food, Delis & food trucks
                            </h4>
                            <p class="product-intro my-2 text-center">Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit.
                                Dolores maiores debitis aperiam voluptatum aliquam voluptas et.</p>

                            <center> <button
                                    class="btn btn-primary primary-bg primary-border border-radius-30 custom-btn w-50">Shop
                                    Now</button></center>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->



        <section class="section-two-column bg-light">
            <div class="container-fluid">
                <div class="row no-gutters align-items-center">

                    <!-- Image Column -->
                    <div class="col-md-6">
                        <img src="admin/assets/img/1745740714_9661_Premium Branded Greasproof Paper (800 x 600).jpg
" alt="Section Image" class="section-image">
                    </div>

                    <!-- Text Content Column -->
                    <div class="col-md-6 p-3">
                        <div class="section-content">

                            <h2 class="mb-3 section-heading ">Why Greaseproof paper</h2>
                            <p class=" mb-3 font-weight-bold">Experience the unparalleled benefits of Deli Paper’s
                                greaseproof paper and elevate your packaging solutions with innovation and excellence.
                                <br>
                                Greaseproof paper offers the advantage of no art plate or setup costs.Delivery time: 2
                                to 3 weeks.
                                </h5>
                            <p><i class='bx bx-badge-check'></i> Deal for microwave cooking safety.</p>
                            <p><i class='bx bx-badge-check'></i> Ideal for keeping frozen meals fresh.</p>
                            <p><i class='bx bx-badge-check'></i> Materials are 100% biodegradable and recyclable.</p>
                            <p><i class='bx bx-badge-check'></i> There are no limitations on visuals or design layouts.
                            </p>
                            <p><i class='bx bx-badge-check'></i> Durable and long lasting, perfect for heavy-duty food
                                packaging.</p>
                            <p><i class='bx bx-badge-check'></i> It prevents greasy foods from spilling, ensuring
                                freshness.</p>
                            <p><i class='bx bx-badge-check'></i> Elegant texture and appearance, adding a touch of
                                sophistication to any use.</p>
                            <p><i class='bx bx-badge-check'></i> Ensures food safety with its high hygiene standards.
                            </p>
                            <p><i class='bx bx-badge-check'></i> Customised to increase your brand's visibility and
                                appeal.</p>
                            <p><i class='bx bx-badge-check'></i> Easy to use and handle, making it ideal for everyday
                                tasks.</p>
                            <p><i class='bx bx-badge-check'></i> Reusable and recyclable materials result in long-term
                                cost reductions.</p>

                            <a href="#"
                                class="btn btn-primary primary-bg primary-border border-radius-30 custom-btn w-25 custom-btn">Get
                                a
                                Quote</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <h2 class="section-heading text-center">Our Latest Blogs</h2>
                <p class="text-center product-intro">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero autem
                    non libero porro incidunt tenetur.</p>

                <div class="row">
                    <?php
          
          $select_post = "SELECT * FROM post where post_status='publish' ORDER BY post_id DESC LIMIT 3";
          $run_post = mysqli_query($conn, $select_post);
          while ($row_post= mysqli_fetch_array($run_post)) {

              $post_id = $row_post['post_id'];
              $post_title = $row_post['post_title'];
              $post_url = $row_post['post_url'];
              $post_status = $row_post['post_status'];
              $post_thumbnail = $row_post['post_thumbnail'];
              $post_content = $row_post['post_content'];
              $post_date = $row_post['post_date'];

              $day = date('d', strtotime($post_date));      // "27"
              $month = date('M', strtotime($post_date));    // "Apr"

          ?>
                    <div class="col-6 col-md-4 mb-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">
                                    <span><?php echo $day;?></span>
                                    <label><?php echo $month;?></label>
                                </div>
                                <a href="blog_details.php?post_url=<?php echo $post_url ?>">
                                    <img src="admin/assets/img/<?php echo $post_thumbnail;?>" class="w-100" title=""
                                        alt="">
                                </a>
                            </div>
                            <div class="blog-info">
                                <h5><a
                                        href="blog_details.php?post_url=<?php echo $post_url ?>"><?php echo $post_title;?></a>
                                </h5>
                                <p><?php echo substr($post_content,0,150);?>...</p>
                                <div class="btn-bar">
                                    <a href="blog_details.php?post_url=<?php echo $post_url ?>"
                                        class="btn btn-secondary secondary-bg secondary-border border-radius-30 custom-btn w-50">
                                        <span>Read More</span>
                                        <i class="arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section class="showcase-section">
            <div class="container">
                <div class="row">

                    <!-- Left Column: Features -->
                    <div class="col-md-6 ">
                        <h2 class="section-heading"> Sample Showcase for our Products</h2>
                        <p class="product-intro">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga
                            ipsam esse laudantium dicta doloribus eligendi voluptatum exercitationem, doloremque
                            consequatur sed porro id aliquid non commodi explicabo ea sit distinctio consequuntur.
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="row">

                                <div class="col-6 col-md-4 p-2">
                                    <!-- Feature Items -->
                                    <div class="display-box" data-image="https://dummyimage.com/600x600/a7a7a7/000000">
                                        <div class="feature-title">Sample 1</div>
                                        <div class="feature-text">Description for sample one.</div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4 p-2">
                                    <div class=" display-box" data-image="https://dummyimage.com/600x600/a7a7a7/000000">
                                        <div class="feature-title">Sample 2</div>
                                        <div class="feature-text">Description for sample two.</div>
                                    </div>
                                </div>


                                <div class="col-6 col-md-4 p-2">
                                    <div class="display-box" data-image="https://dummyimage.com/600x600/a7a7a7/000000">
                                        <div class="feature-title">Sample 3</div>
                                        <div class="feature-text">Description for sample three.</div>
                                    </div>
                                </div>


                                <div class="col-6 col-md-4 p-2">
                                    <div class=" display-box" data-image="https://dummyimage.com/600x600/a7a7a7/000000">
                                        <div class="feature-title">Sample 4</div>
                                        <div class="feature-text">Description for sample four.</div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4 p-2">
                                    <div class="display-box" data-image="https://dummyimage.com/600x600/a7a7a7/000000">
                                        <div class="feature-title">Sample 5</div>
                                        <div class="feature-text">Description for sample five.</div>
                                    </div>
                                </div>


                                <div class="col-6 col-md-4 p-2">
                                    <div class=" display-box" data-image="https://dummyimage.com/600x600/a7a7a7/000000">
                                        <div class="feature-title">Sample 6</div>
                                        <div class="feature-text">Description for sample six.</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Image Preview -->
                    <div class="col-md-6 image-wrapper">
                        <img id="preview-image" src="https://dummyimage.com/600x600/a7a7a7/000000" alt="Preview"
                            class="image-preview">
                    </div>

                </div>
            </div>
        </section>



        <section class="carousel-section text-center">
            <div class="container">
                <h2 class="mb-3 section-heading">Our Trusted Partners</h2>
                <p class="mb-5 product-intro text-center">We proudly collaborate with industry leaders and innovators
                    around the world.</p>

                <div class="owl-carousel owl-theme">
                    <div><img src="https://dummyimage.com/300x300/a7a7a7/000000" class="carousel-image" alt="Logo 1">
                    </div>
                    <div><img src="https://picsum.photos/300/300?random=2" class="carousel-image" alt="Logo 2"></div>
                    <div><img src="https://picsum.photos/300/300?random=3" class="carousel-image" alt="Logo 3"></div>
                    <div><img src="https://picsum.photos/300/300?random=4" class="carousel-image" alt="Logo 4"></div>
                    <div><img src="https://picsum.photos/300/300?random=5" class="carousel-image" alt="Logo 5"></div>
                    <div><img src="https://picsum.photos/300/300?random=6" class="carousel-image" alt="Logo 6"></div>
                    <div><img src="https://picsum.photos/300/300?random=7" class="carousel-image" alt="Logo 7"></div>
                </div>
            </div>
        </section>

        <section class="faq-section bg-white">
            <div class="container">
                <div class="row">

                    <!-- Left Column: Heading and CTA -->
                    <div class="col-md-5 mb-4 mb-md-0">
                        <img src="assets/img/faq.gif" class="d-block mx-auto my-3" alt="">
                        <div class="faq-left">
                            <h2 class="mb-3 section-heading">Frequently Asked Questions</h2>
                            <p class="mb-4 product-intro">Have a question? We've got answers to some of the most common
                                questions below.</p>
                            <a href="#"
                                class="btn btn-primary primary-bg primary-border border-radius-30 custom-btn w-50">Contact
                                Support</a>
                        </div>
                    </div>

                    <!-- Right Column: FAQs -->
                    <div class="col-md-7">
                        <div id="faqAccordion">

                            <?php

                            // Fetch FAQs for the product
                            $query_faq = "SELECT * FROM faq WHERE product_id = 0";
                            $result_faq = mysqli_query($conn, $query_faq);

                            // Start FAQ accordion
                            echo '<div class="accordion" id="faqAccordion">';

                            $faq_count = 1;

                            if (mysqli_num_rows($result_faq) > 0) {
                                while ($row_faq = mysqli_fetch_assoc($result_faq)) {
                                    $question = htmlspecialchars($row_faq['faq_question']);
                                    $answer = htmlspecialchars($row_faq['faq_answer']);
                                    $collapseId = "faqCollapse" . $faq_count;
                                    $headingId = "faqHeading" . $faq_count;
                                    $showClass = ($faq_count == 1) ? 'show' : '';
                                    $collapsedClass = ($faq_count == 1) ? '' : 'collapsed';
                                    $ariaExpanded = ($faq_count == 1) ? 'true' : 'false';

                                    echo '
                                        <div class="card faq-item">
                                            <div class="card-header" id="' . $headingId . '">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link ' . $collapsedClass . ' faq-question" data-toggle="collapse"
                                                        data-target="#' . $collapseId . '" aria-expanded="' . $ariaExpanded . '" aria-controls="' . $collapseId . '">
                                                        ' . $question . '
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="' . $collapseId . '" class="collapse ' . $showClass . '" aria-labelledby="' . $headingId . '"
                                                data-parent="#faqAccordion">
                                                <div class="card-body">
                                                    ' . $answer . '
                                                </div>
                                            </div>
                                        </div>';
                                    $faq_count++;
                                }
                            } else {
                                echo "<p>No FAQs available for this product.</p>";
                            }

                            // End FAQ accordion
                            echo '</div>';

                            ?>

                        </div>
                    </div>

                </div>
            </div>
        </section>



    </div>


    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Get a Quote</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="quote-form.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="size">Size:</label>
                                <select class="form-control" id="size" name="size">
                                    <option value="size">Size</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="size">Type:</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="type">Type</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="size">Color:</label>
                                <select class="form-control" id="color" name="color">
                                    <option value="color">Color</option>
                                </select>
                            </div>
                        </div>

                        <!-- Customer Info Section -->
                        <div class="section-title">Customer Information</div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="customer_name"> Name</label>
                                <input type="text" class="form-control" id="customer_name" name="customer_name"
                                    placeholder="Enter name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter email">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="contact">Contact</label>
                                <input type="tel" class="form-control" id="contact" name="contact"
                                    placeholder="Enter phone number">
                            </div>
                        </div>

                        <!-- File Upload -->
                        <div class="file-upload">
                            <input type="file" id="real-file" name="file" hidden>
                            <button type="button" id="custom-button"><i class='bx bx-cloud-upload'></i> Choose
                                File</button>
                            <span id="file-name">No file chosen</span>
                        </div>

                        <!-- Comments Section -->
                        <div class="form-group">
                            <label for="comments">Message</label>
                            <textarea class="form-control" id="comments" name="comments" rows="4"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="btn btn-primary primary-bg primary-border border-radius-30 custom-btn w-25">Submit</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>



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
            autoplayTimeout: 2500,
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 5
                }
            }
        });
    });
    </script>


    <script>
    $(document).ready(function() {
        $('.display-box').hover(function() {
            const newImage = $(this).attr('data-image');
            $('#preview-image').css('opacity', '0');
            setTimeout(function() {
                $('#preview-image').attr('src', newImage).css('opacity', '1');
            }, 200);
        });
    });
    </script>