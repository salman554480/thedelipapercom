<?php

$select_product = "SELECT * FROM product WHERE product_url='$slug'";
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
?>
<section class="wax-product-section sticky-product-section">
    <div class="container-fluid">
        <div class="row pt-5 pb-5 ml-5 mr-5">
            <div class="col-xl-6 col-lg-6 col-md-6 col-12 flex-padding">
                <div class="sticky-image-container">
                    <img src="<?php echo $img_path; ?>/<?php echo $product_thumbnail; ?>"
                        class="img-fluid sticky-product-image" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-12 flex-padding">
                <div class="ml-5 wax-right-content scrollable-content">
                    <h1 class="text-wax"><?php echo $product_name; ?></h1>
                    <div class="para-wax">
                        <?php echo $product_short_description; ?>
                    </div>

                    <h4 class="text-follow mt-3">Get a Quote</h4>
                    <?php require_once('quote_form.php'); ?>




                    <!-- <button class="btn-slide-loop btn-get-qoute"><span>Get a Quote</span></button>
                        <h3 class="text-follow mt-3">Follow Us</h3>
                        <div class="social-media-link">
                            <a href="https://www.instagram.com/the.delipaper/"><i
                                    class="bx bxl-instagram rounded-pill"></i></a>
                            <a href="https://www.linkedin.com/company/the-deli-paper/"><i
                                    class="bx bxl-linkedin-square rounded-pill"></i></a>
                            <a href="https://www.facebook.com/thedelipaper"><i
                                    class="bx bxl-facebook rounded-pill"></i></a>
                            <a href="https://www.pinterest.com/thedelip/"><i
                                    class="bx bxl-pinterest rounded-pill"></i></a>
                        </div>-->
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.sticky-product-section {
    position: relative;
    min-height: 100vh;
}

.sticky-image-container {
    position: sticky;
    top: 20px;
    height: fit-content;
}

.sticky-product-image {
    width: 100%;
    height: auto;
    max-height: 80vh;
    object-fit: contain;
    border-radius: 8px;
/*    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);*/
}

.scrollable-content {
    padding-bottom: 2rem;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .sticky-image-container {
        position: static;
        margin-bottom: 2rem;
    }
    
    .sticky-product-image {
        max-height: 50vh;
    }
    
    .wax-right-content {
        margin-left: 0 !important;
    }
}

@media (max-width: 576px) {
    .sticky-product-section .row {
        margin-left: 1rem !important;
        margin-right: 1rem !important;
    }
}
</style>

<section class="work-section work-column-section">
    <div class="container-fluid">
        <div class="row mt-5 pt-5 ml-5 mr-5">
            <div class="col-md-12 flex-padding">
                <div class="d-flex justify-content-between flex-product-items flex-wrap">
                    <div class="product-item">
                        <div class="icon-img rounded-circle">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fab-uncharted two_elementor_element"
                                viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M171.73,232.813A5.381,5.381,0,0,0,176.7,229.5,48.081,48.081,0,0,1,191.6,204.244c1.243-.828,1.657-2.484,1.657-4.141a4.22,4.22,0,0,0-2.071-3.312L74.429,128.473,148.958,85a9.941,9.941,0,0,0,4.968-8.281,9.108,9.108,0,0,0-4.968-8.281L126.6,55.6a9.748,9.748,0,0,0-9.523,0l-100.2,57.966a9.943,9.943,0,0,0-4.969,8.281V236.954a9.109,9.109,0,0,0,4.969,8.281L39.235,258.07a8.829,8.829,0,0,0,4.968,1.242,9.4,9.4,0,0,0,6.625-2.484,10.8,10.8,0,0,0,2.9-7.039V164.5L169.66,232.4A4.5,4.5,0,0,0,171.73,232.813ZM323.272,377.73a12.478,12.478,0,0,0-4.969,1.242l-74.528,43.062V287.882c0-2.9-2.9-5.8-6.211-4.555a53.036,53.036,0,0,1-28.984.414,4.86,4.86,0,0,0-6.21,4.555V421.619l-74.529-43.061a8.83,8.83,0,0,0-4.969-1.242,9.631,9.631,0,0,0-9.523,9.523v26.085a9.107,9.107,0,0,0,4.969,8.281l100.2,57.553A8.829,8.829,0,0,0,223.486,480a11.027,11.027,0,0,0,4.969-1.242l100.2-57.553a9.941,9.941,0,0,0,4.968-8.281V386.839C332.8,382.285,328.24,377.73,323.272,377.73ZM286.007,78a23,23,0,1,0-23-23A23,23,0,0,0,286.007,78Zm63.627-10.086a23,23,0,1,0,23,23A23,23,0,0,0,349.634,67.914ZM412.816,151.6a23,23,0,1,0-23-23A23,23,0,0,0,412.816,151.6Zm-63.182-9.2a23,23,0,1,0,23,23A23,23,0,0,0,349.634,142.4Zm-63.627,83.244a23,23,0,1,0-23-23A23,23,0,0,0,286.007,225.648Zm-62.074,36.358a23,23,0,1,0-23-23A23,23,0,0,0,223.933,262.006Zm188.883-82.358a23,23,0,1,0,23,23A23,23,0,0,0,412.816,179.648Zm0,72.272a23,23,0,1,0,23,23A23,23,0,0,0,412.816,251.92Z"
                                    class="two_elementor_element"></path>
                            </svg>
                        </div>
                        <h3>Free At Work</h3>
                    </div>
                    <div class="product-item">
                        <div class="icon-img rounded-circle">
                            <svg aria-hidden="true"
                                class="e-font-icon-svg e-fab-acquisitions-incorporated two_elementor_element"
                                viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M357.45 468.2c-1.2-7.7-1.3-7.6-9.6-7.6-99.8.2-111.8-2.4-112.7-2.6-12.3-1.7-20.6-10.5-21-23.1-.1-1.6-.2-71.6-1-129.1-.1-4.7 1.6-6.4 5.9-7.5 12.5-3 24.9-6.1 37.3-9.7 4.3-1.3 6.8-.2 8.4 3.5 4.5 10.3 8.8 20.6 13.2 30.9 1.6 3.7.1 4.4-3.4 4.4-10-.2-20-.1-30.4-.1v27h116c-1.4-9.5-2.7-18.1-4-27.5-7 0-13.8.4-20.4-.1-22.6-1.6-18.3-4.4-84-158.6-8.8-20.1-27.9-62.1-36.5-89.2-4.4-14 5.5-25.4 18.9-26.6 18.6-1.7 37.5-1.6 56.2-2 20.6-.4 41.2-.4 61.8-.5 3.1 0 4-1.4 4.3-4.3 1.2-9.8 2.7-19.5 4-29.2.8-5.3 1.6-10.7 2.4-16.1L23.75 0c-3.6 0-5.3 1.1-4.6 5.3 2.2 13.2-.8.8 6.4 45.3 63.4 0 71.8.9 101.8.5 12.3-.2 37 3.5 37.7 22.1.4 11.4-1.1 11.3-32.6 87.4-53.8 129.8-50.7 120.3-67.3 161-1.7 4.1-3.6 5.2-7.6 5.2-8.5-.2-17-.3-25.4.1-1.9.1-5.2 1.8-5.5 3.2-1.5 8.1-2.2 16.3-3.2 24.9h114.3v-27.6c-6.9 0-33.5.4-35.3-2.9 5.3-12.3 10.4-24.4 15.7-36.7 16.3 4 31.9 7.8 47.6 11.7 3.4.9 4.6 3 4.6 6.8-.1 42.9.1 85.9.2 128.8 0 10.2-5.5 19.1-14.9 23.1-6.5 2.7-3.3 3.4-121.4 2.4-5.3 0-7.1 2-7.6 6.8-1.5 12.9-2.9 25.9-5 38.8-.8 5 1.3 5.7 5.3 5.7 183.2.6-30.7 0 337.1 0-2.5-15-4.4-29.4-6.6-43.7zm-174.9-205.7c-13.3-4.2-26.6-8.2-39.9-12.5a44.53 44.53 0 0 1-5.8-2.9c17.2-44.3 34.2-88.1 51.3-132.1 7.5 2.4 7.9-.8 9.4 0 9.3 22.5 18.1 60.1 27 82.8 6.6 16.7 13 33.5 19.7 50.9a35.78 35.78 0 0 1-3.9 2.1c-13.1 3.9-26.4 7.5-39.4 11.7a27.66 27.66 0 0 1-18.4 0z"
                                    class="two_elementor_element"></path>
                            </svg>
                        </div>
                        <h3>Custom Size</h3>
                    </div>
                    <div class="product-item">
                        <div class="icon-img rounded-circle">
                            <svg aria-hidden="true" class="e-font-icon-svg e-far-clock two_elementor_element"
                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"
                                    class="two_elementor_element"></path>
                            </svg>
                        </div>
                        <h3>Fastest Turn Around</h3>
                    </div>
                    <div class="product-item">
                        <div class="icon-img rounded-circle">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-recycle two_elementor_element"
                                viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M184.561 261.903c3.232 13.997-12.123 24.635-24.068 17.168l-40.736-25.455-50.867 81.402C55.606 356.273 70.96 384 96.012 384H148c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12H96.115c-75.334 0-121.302-83.048-81.408-146.88l50.822-81.388-40.725-25.448c-12.081-7.547-8.966-25.961 4.879-29.158l110.237-25.45c8.611-1.988 17.201 3.381 19.189 11.99l25.452 110.237zm98.561-182.915l41.289 66.076-40.74 25.457c-12.051 7.528-9 25.953 4.879 29.158l110.237 25.45c8.672 1.999 17.215-3.438 19.189-11.99l25.45-110.237c3.197-13.844-11.99-24.719-24.068-17.168l-40.687 25.424-41.263-66.082c-37.521-60.033-125.209-60.171-162.816 0l-17.963 28.766c-3.51 5.62-1.8 13.021 3.82 16.533l33.919 21.195c5.62 3.512 13.024 1.803 16.536-3.817l17.961-28.743c12.712-20.341 41.973-19.676 54.257-.022zM497.288 301.12l-27.515-44.065c-3.511-5.623-10.916-7.334-16.538-3.821l-33.861 21.159c-5.62 3.512-7.33 10.915-3.818 16.536l27.564 44.112c13.257 21.211-2.057 48.96-27.136 48.96H320V336.02c0-14.213-17.242-21.383-27.313-11.313l-80 79.981c-6.249 6.248-6.249 16.379 0 22.627l80 79.989C302.689 517.308 320 510.3 320 495.989V448h95.88c75.274 0 121.335-82.997 81.408-146.88z"
                                    class="two_elementor_element"></path>
                            </svg>
                        </div>
                        <h3>Recycle Paper</h3>
                    </div>
                    <div class="product-item">
                        <div class="icon-img rounded-circle">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-leaf two_elementor_element"
                                viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M546.2 9.7c-5.6-12.5-21.6-13-28.3-1.2C486.9 62.4 431.4 96 368 96h-80C182 96 96 182 96 288c0 7 .8 13.7 1.5 20.5C161.3 262.8 253.4 224 384 224c8.8 0 16 7.2 16 16s-7.2 16-16 16C132.6 256 26 410.1 2.4 468c-6.6 16.3 1.2 34.9 17.5 41.6 16.4 6.8 35-1.1 41.8-17.3 1.5-3.6 20.9-47.9 71.9-90.6 32.4 43.9 94 85.8 174.9 77.2C465.5 467.5 576 326.7 576 154.3c0-50.2-10.8-102.2-29.8-144.6z"
                                    class="two_elementor_element"></path>
                            </svg>
                        </div>
                        <h3>Plant Base Material</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tab-section">
    <div class="container-fluid">
        <div class="row ml-5 mr-5 mt-5 pt-5">
            <div class="col-xl-8 flex-padding mt-3">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Specifications</a>
                    </li>
                    <!-- <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li> -->
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="content-area">
                            <?php echo $product_content; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="table-responsive mt-3">
                            <table class="table table-bordered">
                                <!-- <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead> -->
                                <tbody>
                                    <tr>
                                        <th>Paper Type </th>
                                        <td>White Paper</td>
                                        <td>Product Name</td>
                                        <td><?php echo $product_name ?></td>
                                    </tr>
                                    <tr>
                                        <th>Coating</th>
                                        <td>Uncoated</td>
                                        <td>Compatible Printing </td>
                                        <td>Offset Printing</td>
                                    </tr>
                                    <tr>
                                        <th>Feature</th>
                                        <td>Greaseproof</td>
                                        <td>Material</td>
                                        <td>Plant Based Material</td>
                                    </tr>
                                    <tr>
                                        <th>Pulp Style</th>
                                        <td>Recycled</td>
                                        <td>Color print</td>
                                        <td>Custom Printing. 1 , 2 , 4 Color</td>
                                    </tr>
                                    <tr>
                                        <th>Safety</th>
                                        <td>non-hazardous</td>
                                        <td>Usage</td>
                                        <td>Food wrapping, Non-stick surface, Crafts or DIY projects</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
            <div class="col-xl-4 flex-padding mt-3">
                <img src="<?php echo $img_path ?>/<?php echo $product_image1; ?>" class="img-fluid tab-img" alt="">
                <img src="<?php echo $img_path ?>/<?php echo $product_image2; ?>" class="img-fluid tab-img mt-3 mb-3" alt="">
                <!--<div class="position-relative">
                    <div class="overlay-img">
                        <div class="d-flex justify-content-center align-items-center flex-column  p-1"
                            style="height: -webkit-fill-available;">
                            <h1 class="text-center text-white text-offer">Contact Now To Get 20% Off</h1>
                            <button class="btn btn-order mt-3">Order Now</button>
                        </div>
                    </div>
                    <img src="<?php echo $img_path ?>/tab-img-03.webp" class="img-fluid tab-img" alt="">
                </div>-->
            </div>
        </div>
    </div>
</section>
<section class="standard-section">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 text-center flex-padding">
                <h1 class="text-faq">Frequently Asked Questions</h1>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row ml-5 mr-5 mt-5">
            <?php
            // Query to fetch FAQs for the product
            $sql = "SELECT faq_question, faq_answer FROM faq WHERE product_id = $product_id";
            $result = mysqli_query($conn, $sql);

            // Check if any FAQs found
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>


                    <div class="col-xl-6 col-lg-8 col-md-8 col-12 flex-padding">
                        <div class="accordion-wrapper mt-3">
                            <div class="accordion-text d-flex justify-content-between align-items-center">
                                <h3><?php echo htmlspecialchars($row['faq_question']); ?></h3>
                                <i class="bx bx-chevron-right right-icon"></i>
                            </div>
                            <p class="accordion-para d-none"><?php echo htmlspecialchars($row['faq_answer']); ?></p>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<p>No FAQs available for this product.</p>";
            }
            ?>


        </div>
    </div>
</section>

<?php include 'client_section.php'; ?>

<?php require_once('product_slider.php'); ?>

<!-- Sliding Form Panel -->
<div class="form-slide-panel shadow-lg">
    <div class="" style="
  border: 3px solid #8c30f5;
        ">
        <div class="form-header d-flex justify-content-end align-items-center">
            <!-- <h5 class="mb-0">Get a Quote</h5> -->
            <button class="btn btn-sm btn-link text-dark close-form" style="font-size: 45px; line-height: normal;">&times;</button>
        </div>
        <div class="form-body pl-3 pr-3 pb-5 pt-0">
            <!-- Your form fields go here -->
            <?php require_once('quote_form.php'); ?>
        </div>
    </div>
</div>