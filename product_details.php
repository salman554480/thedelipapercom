<?php
require_once('admin/parts/db.php');
if (isset($_GET['product_url'])) {
    $product_url = $_GET['product_url'];
    $select_product = "SELECT * FROM product WHERE product_url='$product_url'";
    $run_product = mysqli_query($conn, $select_product);
    $row_product = mysqli_fetch_array($run_product);
    $product_id = $row_product['product_id'];
    $product_name = $row_product['product_name'];
    $product_short_description = $row_product['product_short_description'];
    $meta_title = $row_product['product_meta_title'];
    $meta_description = $row_product['product_meta_description'];
    $meta_keywords = $row_product['product_meta_keywords'];
}
?>
<?php require_once('parts/top.php'); ?>
<!-- Elevate Zoom Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
</head>

<body>
    <?php require_once('parts/navbar.php'); ?>
    <div class="website-area">
        <div class="w-90 py-5 ">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://dummyimage.com/1000x1000/aaaaaa/fff" class="w-100 product-main-image" alt="">
                </div>
                <div class="col-md-6">
                    <h1 class="card-product-title"><?php echo $product_name; ?></h1>
                    <p class="product-intro"><?php echo $product_short_description; ?></p>

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
                                <label for="customer_name">Customer Name</label>
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
                            <label for="comments">Comments</label>
                            <textarea class="form-control" id="comments" name="comments" rows="4"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="btn btn-primary primary-bg primary-border border-radius-30 custom-btn w-25">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <div>
                            <h2 class="section-heading">Affordable, premium custom printed parchment paper
                            </h2>
                            <h3 class="section-subheading">Custom printed parchment paper for cooking and serving hot
                                and
                                cold
                                food
                            </h3>
                            <p class="product-intro">Get your brand noticed, make food displays more exciting and
                                generate
                                engagement from customers with custom printed parchment paper.

                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-center font-weight-bold"><i class='bx bx-check-circle blue-tick'></i> <span>High
                                grease resistance</span>
                        </h4>
                        <h4 class="text-center font-weight-bold"><i class='bx bx-check-circle blue-tick'></i>
                            <span>Recyclable</span>
                        </h4>
                        <h4 class="text-center font-weight-bold"><i class='bx bx-check-circle blue-tick'></i> <span>FDA
                                approved
                            </span>
                        </h4>
                        <h4 class="text-center font-weight-bold"><i class='bx bx-check-circle blue-tick'></i>
                            <span>Halal certified
                            </span>
                        </h4>
                        <h4 class="text-center font-weight-bold"><i class='bx bx-check-circle blue-tick'></i> <span>Oven
                                safe up to 392°F

                            </span>
                        </h4>
                        <h4 class="text-center font-weight-bold"><i class='bx bx-check-circle blue-tick'></i>
                            <span>Freezer safe
                            </span>
                        </h4>
                        <h4 class="text-center font-weight-bold"><i class='bx bx-check-circle blue-tick'></i>
                            <span>Microwave safe
                            </span>
                        </h4>
                        <h4 class="text-center font-weight-bold"><i class='bx bx-check-circle blue-tick'></i>
                            <span>Delivery within 3 weeks
                            </span>
                        </h4>
                        <h4 class="text-center font-weight-bold"><i class='bx bx-check-circle blue-tick'></i>
                            <span>Custom sizes available up to 27.5” x 19.5”

                            </span>
                        </h4>
                        <h4 class="text-center font-weight-bold"><i class='bx bx-check-circle blue-tick'></i> <span>Free
                                shipping</span></h4>
                        <h4 class="text-center font-weight-bold"><i class='bx bx-check-circle blue-tick'></i> <span>Free
                                artwork design
                            </span></h4>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
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

        <section class="">
            <div class="container-fluid">
                <div class="row no-gutters align-items-center">



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

                    <!-- Image Column -->
                    <div class="col-md-6">
                        <img src="https://dummyimage.com/800x600/a7a7a7/000000" alt="Section Image"
                            class="section-image">
                    </div>

                </div>
            </div>
        </section>


        <section class="steps-section text-center">
            <div class="container">
                <h2>Get Started with Your Custom Food Wrap</h2>
                <p class="lead">Just three easy steps to personalized perfection</p>

                <div class="row mt-5">
                    <div class="col-md-3">
                        <div class="step-box">
                            <i class='bx bx-food-menu'></i>
                            <div class="step-title">Choose your food paper</div>
                            <p>Select the material that suits your brand and style.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="step-box">
                            <i class='bx bx-upload'></i>
                            <div class="step-title">Select your desired color</div>
                            <p>Send us your branding, and we’ll handle the rest.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="step-box">
                            <i class='bx bx-package'></i>
                            <div class="step-title">Choose your quantity</div>
                            <p>We print, pack, and ship straight to your door.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="step-box">
                            <i class='bx bx-package'></i>
                            <div class="step-title">Upload your logo or artwork</div>
                            <p>We print, pack, and ship straight to your door.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

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
                        $query_faq = "SELECT * FROM faq WHERE product_id = $product_id";
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
    </section>
    <section class="">
        <div class="w-100">

            <div class="owl-carousel owl-theme">
                <div><img src="https://dummyimage.com/600x600/a7a7a7/000000" class="carousel-image2" alt="Logo 1"></div>
                <div><img src="https://picsum.photos/600/600?random=2" class="carousel-image2" alt="Logo 2"></div>
                <div><img src="https://picsum.photos/600/600?random=3" class="carousel-image2" alt="Logo 3"></div>
                <div><img src="https://picsum.photos/600/600?random=4" class="carousel-image2" alt="Logo 4"></div>
                <div><img src="https://picsum.photos/600/600?random=5" class="carousel-image2" alt="Logo 5"></div>
                <div><img src="https://picsum.photos/600/600?random=6" class="carousel-image2" alt="Logo 6"></div>
                <div><img src="https://picsum.photos/600/600?random=7" class="carousel-image2" alt="Logo 7"></div>
            </div>
        </div>
    </section>



    <?php require_once('parts/footer.php'); ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            nav: false,
            dots: false,
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