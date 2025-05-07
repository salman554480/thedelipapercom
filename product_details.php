<?php
require_once('admin/parts/db.php');
if (isset($_GET['product_url'])) {
    $product_url = $_GET['product_url'];
    $select_product = "SELECT * FROM product WHERE product_url='$product_url'";
    $run_product = mysqli_query($conn, $select_product);
    $row_product = mysqli_fetch_array($run_product);
    $product_id = $row_product['product_id'];
    $product_name = $row_product['product_name'];
    $product_thumbnail = $row_product['product_thumbnail'];
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
                    <img src="admin/assets/img/<?php echo $product_thumbnail;?>" class="w-100 product-main-image"
                        alt="">
                    <div class="mt-5">
                        <div class="row ">
                            <div class="col-6 col-md-4 feature-box2 ">
                                <i class='bx bx-shape-square'></i>
                                <span>Custom Sizes</span>
                            </div>

                            <div class="col-6 col-md-4 feature-box2">
                                <i class='bx bxs-tree'></i>
                                <span>Plant Base Material </span>
                            </div>

                            <div class="col-6 col-md-4 feature-box2">
                                <i class='bx bx-timer'></i>
                                <span>Fastest Turn Around</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="card-product-title"><?php echo $product_name; ?></h1>
                    <p class="product-intro"><?php echo $product_short_description; ?></p>

                    <form action="quote-form.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="size">Size:</label>
                                <select class="form-control" id="size" name="size">
                                    <option value="NaN">Select Size</option>
                                    <option value="4x4">4″ x 4″</option>
                                    <option value="5x5">5″ x 5″</option>
                                    <option value="6x5">6″ x 5″</option>
                                    <option value="6x6">6″ x 6″</option>
                                    <option value="7x5">7″ x 5″</option>
                                    <option value="7x7">7″ x 7″</option>
                                    <option value="8x5">8″ x 5″</option>
                                    <option value="8x6">8″ x 6″</option>
                                    <option value="8x8">8″ x 8″</option>
                                    <option value="8.5x11">8.5″ x 11″</option>
                                    <option value="9x5">9″ x 5″</option>
                                    <option value="9x6">9″ x 6″</option>
                                    <option value="9x9">9″ x 9″</option>
                                    <option value="10x5">10″ x 5″</option>
                                    <option value="10x6">10″ x 6″</option>
                                    <option value="10x8">10″ x 8″</option>
                                    <option value="10x10">10″ x 10″</option>
                                    <option value="10.75x10">10.75″ x 10″</option>
                                    <option value="12x6">12″ x 6″</option>
                                    <option value="12x8">12″ x 8″</option>
                                    <option value="12x9">12″ x 9″</option>
                                    <option value="12x10">12″ x 10″</option>
                                    <option value="12x12">12″ x 12″</option>
                                    <option value="13x6">13″ x 6″</option>
                                    <option value="13x9">13″ x 9″</option>
                                    <option value="13x10">13″ x 10″</option>
                                    <option value="13x13">13″ x 13″</option>
                                    <option value="14x12">14″ x 12″</option>
                                    <option value="15x9">15″ x 9″</option>
                                    <option value="15x10.75">15″ x 10.75″</option>
                                    <option value="15x12">15″ x 12″</option>
                                    <option value="15x13">15″ x 13″</option>
                                    <option value="16x12">16″ x 12″</option>
                                    <option value="17x11">17″ x 11″</option>
                                    <option value="18x10">18″ x 10″</option>
                                    <option value="18x12">18″ x 12″</option>
                                    <option value="18x13">18″ x 13″</option>
                                    <option value="20x10">20″ x 10″</option>
                                    <option value="20x12">20″ x 12″</option>
                                    <option value="20x13">20″ x 13″</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="size">Paper Type:</label>
                                <select class="form-control" id="type" name="type">
                                    <option>White</option>
                                    <option>Brown</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="size">Printing:</label>
                                <select class="form-control" id="color" name="color">
                                    <option value="1color">1 Color</option>
                                    <option value="2color">2 Color</option>
                                    <option value="4color">4 Color</option>
                                </select>
                            </div>
                        </div>

                        <!-- Customer Info Section -->
                        <div class="section-title">Customer Information</div>
                        <div class="form-row mt-3">
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
                            <button type="button" id="custom-button"><i class='bx bx-cloud-upload'></i> Upload your
                                Artwork</button>
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

        <!-- <section class="py-4">
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
        </section> -->

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

                            <h2 class="mb-3 section-heading">Specifications</h2>
                            <table class="table table-bordered table-striped  small">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p><b>Paper Type</b></p>
                                        </td>
                                        <td>
                                            <p><span style="font-weight: 400;">White Paper</span></p>
                                        </td>
                                        <td>
                                            <p><b>Product Name</b></p>
                                        </td>
                                        <td>
                                            <p><span style="font-weight: 400;">Wax Paper</span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><b>Coating</b></p>
                                        </td>
                                        <td>
                                            <p><span style="font-weight: 400;">Uncoated</span></p>
                                        </td>
                                        <td>
                                            <p><b>Compatible Printing</b></p>
                                        </td>
                                        <td>
                                            <p><span style="font-weight: 400;">Offset Printing</span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><b>Feature</b></p>
                                        </td>
                                        <td>
                                            <p><span style="font-weight: 400;">Greaseproof</span></p>
                                        </td>
                                        <td>
                                            <p><b>Material</b></p>
                                        </td>
                                        <td>
                                            <p><span style="font-weight: 400;">Plant Based Material</span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><b>Pulp Style</b></p>
                                        </td>
                                        <td>
                                            <p><span style="font-weight: 400;">Recycled</span></p>
                                        </td>
                                        <td>
                                            <p><b>Color print</b></p>
                                        </td>
                                        <td>
                                            <p><span style="font-weight: 400;">Custom Printing. 1 , 2 , 4 Color</span>
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><b>Safety</b></p>
                                        </td>
                                        <td>
                                            <p><span style="font-weight: 400;">non-hazardous</span></p>
                                        </td>
                                        <td>
                                            <p><b>Usage</b></p>
                                        </td>
                                        <td>
                                            <p>Food wrapping, Non-stick surface, Crafts or DIY projects</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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