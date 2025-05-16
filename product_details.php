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
    $product_image1 = $row_product['product_image1'];
    $product_image2 = $row_product['product_image2'];
    $product_short_description = $row_product['product_short_description'];
    $product_content = $row_product['product_content'];
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
                    <img src="admin/assets/img/<?php echo $product_thumbnail; ?>" class="w-100 product-main-image"
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
                    <h3 class="my-3">Request a Quote</h3>
                    <?php require_once('parts/quote.php'); ?>
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


        <div class="container-fluid">
            <!-- Nav tabs -->
            <ul class="nav nav-pills" id="productTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#description" role="tab"
                        aria-controls="description" aria-selected="true">Description</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="spec-tab" data-toggle="tab" href="#specification" role="tab"
                        aria-controls="specification" aria-selected="false">Specification</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content border border-0 p-3" id="productTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="desc-tab">
                    <div class="row no-gutters align-items-center">

                        <!-- Image Column -->
                        <div class="col-md-6">
                            <img src="admin/assets/img/<?php echo $product_image1; ?>" alt="Section Image"
                                class="section-image">
                        </div>

                        <!-- Text Content Column -->
                        <div class="col-md-6 p-3">
                            <div class="section-content">
                                <!-- <h2 class="mb-3 section-heading ">wide range of premium branded greaseproof paper</h2>
        <h5 class=" mb-3 section-subheading">promote your brand and improve your food presentation
        </h5> -->
                                <div class="mb-4 product-intro">
                                    <?php echo $product_content; ?>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="specification" role="tabpanel" aria-labelledby="spec-tab">
                    <!-- <h2 class="mb-3 section-heading">Specifications</h2> -->
                    <div class="container">
                        <table class="table table-bordered table-striped  table-responsive">
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
                                        <p><span style="font-weight: 400;"><?php echo $product_name; ?></span></p>
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
            </div>
        </div>



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
                <div class="col-md-12  mb-4 mb-md-0">
                    <!-- <img src="assets/img/faq.gif" class="d-block mx-auto my-3" alt=""> -->
                    <div class="faq-left">
                        <h2 class="mb-3 section-heading text-center">Frequently Asked Questions</h2>
                        <p class="mb-4 product-intro text-center">Have a question? We've got answers to some of the most
                            common
                            questions below.</p>

                    </div>
                </div>

                <!-- Right Column: FAQs -->
                <div class="col-md-12">
                    <div id="faqAccordion">

                        <?php
                        // Fetch FAQs for the product
                        $query_faq = "SELECT * FROM faq WHERE product_id = $product_id";
                        $result_faq = mysqli_query($conn, $query_faq);

                        if (mysqli_num_rows($result_faq) > 0) {
                            $faq_count = 0;
                            echo '<div class="accordion">';

                            while ($row_faq = mysqli_fetch_assoc($result_faq)) {
                                $question = htmlspecialchars($row_faq['faq_question']);
                                $answer = htmlspecialchars($row_faq['faq_answer']);
                                $collapseId = "faqCollapse" . $faq_count;
                                $headingId = "faqHeading" . $faq_count;
                                $showClass = '';
                                $collapsedClass = 'collapsed';
                                $ariaExpanded = 'false';

                                // Open new row every 2 FAQs
                                if ($faq_count % 2 == 0) {
                                    echo '<div class="row">';
                                }

                                echo '
            <div class="col-md-6 mb-3">
                <div class="card faq-item">
                    <div class="card-header" id="' . $headingId . '">
                        <h5 class="mb-0">
                            <button style="text-align:left;" class="btn btn-link ' . $collapsedClass . ' faq-question" data-toggle="collapse"
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
                </div>
            </div>';

                                // Close row every 2 FAQs or at the end
                                if ($faq_count % 2 == 1) {
                                    echo '</div>'; // close row
                                }

                                $faq_count++;
                            }

                            // Close last row if it wasn't closed
                            if ($faq_count % 2 != 0) {
                                echo '</div>';
                            }

                            echo '</div>'; // close accordion
                        } else {
                            echo "<p>No FAQs available for this product.</p>";
                        }
                        ?>
                    </div>


                </div>
            </div>
    </section>
    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12  mb-4 mb-md-0">
                    <!-- <img src="assets/img/faq.gif" class="d-block mx-auto my-3" alt=""> -->
                    <div class="faq-left">
                        <h2 class="mb-3 section-heading text-center">Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <?php

                        $select_related_product = "SELECT * FROM product where product_status='active' ";
                        $run_related_product = mysqli_query($conn, $select_related_product);
                        while ($row_related_product = mysqli_fetch_array($run_related_product)) {

                            $related_product_id = $row_related_product['product_id'];
                            $related_product_name = $row_related_product['product_name'];
                            $related_product_url = $row_related_product['product_url'];
                            $related_product_thumbnail = $row_related_product['product_thumbnail'];

                        ?>
                        <a href="product_details.php?product_url=<?php echo $related_product_url ?>">
                            <div class="card">
                                <img src="admin/assets/img/<?php echo $related_product_thumbnail; ?>"
                                    class="carousel-image2" alt="<?php echo $related_product_name; ?>">
                                <div class="card-body">
                                    <h5 class="text-center my-2 font-weight-bold secondary-color">
                                        <?php echo $related_product_name; ?></h5>
                                    <p class="my-3 card-text text-dark text-center">
                                        <?php echo substr($product_short_description, 0, 140); ?>...</p>
                                </div>
                            </div>

                        </a>
                        <?php } ?>
                    </div>
                </div>
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
            margin: 20,
            autoplay: true,
            nav: false,
            dots: false,
            autoplayTimeout: 2500,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
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