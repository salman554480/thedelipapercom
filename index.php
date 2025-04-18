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
                    <h2 class="cover-heading">Branded food paper</h2>
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-6 col-md-3 feature-box">
                                <i class='bx bx-check-circle'></i>
                                <span>Eco Friendly</span>
                            </div>
                            <div class="col-6 col-md-3 feature-box">
                                <i class='bx bx-check-circle'></i>
                                <span>Food Safe</span>
                            </div>
                            <div class="col-6 col-md-3 feature-box">
                                <i class='bx bx-check-circle'></i>
                                <span>FDA Approved</span>
                            </div>
                        </div>
                    </div>
                    <p class="cover-text">Custom printed food papers, perfect for restaurants, delis and bars across the
                        US, Mexico and Canada.

                    </p>
                    <a href="#" class="btn btn-primary primary-bg primary-border border-radius-30 custom-btn">SHOP
                        NOW</a>

                    <div class="row justify-content-start mt-3">
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
                    </div>
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

                    ?>
                    <div class="col-md-6 col-12 mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="https://dummyimage.com/1000x1000/a7a7a7/000000" alt="Product"
                                    class="product-img w-100 mb-3">
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                <div>
                                    <h5 class="mb-2 card-product-title"><?php echo $product_name; ?></h5>
                                    <p class="my-3 card-product-text">Suitable for oven cooking, microwaving, and
                                        freezing,
                                        versatile for any
                                        kitchen.</p>
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
                        <img src="https://dummyimage.com/800x600/a7a7a7/000000" alt="Section Image"
                            class="section-image">
                    </div>

                    <!-- Text Content Column -->
                    <div class="col-md-6 p-3">
                        <div class="section-content">

                            <h2 class="mb-3 section-heading ">wide range of premium branded greaseproof paper</h2>
                            <h5 class=" mb-3 section-subheading">promote your brand and improve your food presentation
                            </h5>
                            <p class="mb-4 product-intro">
                                Custom printed food paper has a host of features and benefits that add to the dining
                                experience, not just for sit-in restaurants, but also for food trucks, takeouts,
                                bakeries, bars, coffee shops, and more. <br><br>

                                Not all greaseproof paper is created equal—what sets our high-quality branded
                                greaseproof paper apart? <br><br>

                                Our paper is food-safe, vegan-friendly, and Halal-certified. We offer extensive
                                customization options, a free design service and free shipping. Versatile for any
                                kitchen, our paper is microwavable, ovenproof, and freezeproof, suitable for both hot
                                and cold food. <br>
                            </p>
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
                    <div class="col-6 col-md-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">
                                    <span>04</span>
                                    <label>FEB</label>
                                </div>
                                <a href="#">
                                    <img src="https://dummyimage.com/400x200/a7a7a7/000000" title="" alt="">
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

                    <div class="col-6 col-md-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">
                                    <span>04</span>
                                    <label>FEB</label>
                                </div>
                                <a href="#">
                                    <img src="https://picsum.photos/400/200?random=2" title="" alt="">
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

                    <div class="col-6 col-md-4">
                        <div class="blog-grid">
                            <div class="blog-img">
                                <div class="date">
                                    <span>04</span>
                                    <label>FEB</label>
                                </div>
                                <a href="#">
                                    <img src="https://picsum.photos/400/200?random=3" title="" alt="">
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

                            <!-- FAQ 1 -->
                            <div class="card faq-item">
                                <div class="card-header" id="faqHeading1">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link faq-question" data-toggle="collapse"
                                            data-target="#faqCollapse1" aria-expanded="true"
                                            aria-controls="faqCollapse1">
                                            What is your refund policy?
                                        </button>
                                    </h5>
                                </div>
                                <div id="faqCollapse1" class="collapse show" aria-labelledby="faqHeading1"
                                    data-parent="#faqAccordion">
                                    <div class="card-body">
                                        We offer a full refund within the first 30 days of purchase—no questions asked!
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="card faq-item">
                                <div class="card-header" id="faqHeading2">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed faq-question" data-toggle="collapse"
                                            data-target="#faqCollapse2" aria-expanded="false"
                                            aria-controls="faqCollapse2">
                                            Can I upgrade my plan later?
                                        </button>
                                    </h5>
                                </div>
                                <div id="faqCollapse2" class="collapse" aria-labelledby="faqHeading2"
                                    data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Absolutely! You can upgrade or downgrade your plan at any time from your
                                        dashboard.
                                    </div>
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="card faq-item">
                                <div class="card-header" id="faqHeading3">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed faq-question" data-toggle="collapse"
                                            data-target="#faqCollapse3" aria-expanded="false"
                                            aria-controls="faqCollapse3">
                                            Do you offer support?
                                        </button>
                                    </h5>
                                </div>
                                <div id="faqCollapse3" class="collapse" aria-labelledby="faqHeading3"
                                    data-parent="#faqAccordion">
                                    <div class="card-body">
                                        Yes, we offer 24/7 email support and live chat during business hours.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>



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