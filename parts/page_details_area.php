<?php

$select_page = "SELECT * FROM page WHERE page_url='$slug'";
$run_page = mysqli_query($conn, $select_page);
$row_page = mysqli_fetch_array($run_page);
$page_id = $row_page['page_id'];
$page_title = $row_page['page_title'];
$page_content = $row_page['page_content'];
$meta_title = $row_page['meta_title'];
$meta_description = $row_page['meta_description'];
$meta_keywords = $row_page['meta_keywords'];

?>


<?php if (in_array($slug, ["privacy-policy", "terms-and-conditions"])) { ?>

<section class=" quote-section">
    <div class="container-fluid">
        <div class="row pt-5 pb-5 ml-5 mr-5">
            <div class="col-md-12">
                <div class="page-content-area">
                    <?php echo $page_content; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php } else if ($slug == "contact-us") { ?>

<section class=" quote-section">
    <div class="container-fluid">
        <div class="row pt-5 pb-5 ml-5 mr-5">
            <div class="col-xl-6 col-lg-7 col-md-7 col-12 flex-padding">
                <iframe class="w-100" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    id="gmap_canvas"
                    src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=3302%20Burke%20Rd,%20Pasadena,%20TX%2077504,%20USA%20+(3302%20Burke%20Rd)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <!-- <a href='https://www.acadoo.de/leistungen/ghostwriter-doktorarbeit/'>Dissertation Coaching</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=781ad07e009303eb0f9c371938095ff5aeeec1d1'></script> -->
                <h1 class="text-contact mt-3">Contact Us</h1>
                <div class="d-flex align-items-center mt-3">
                    <i class="bx bx-map map-icon"></i>
                    <span class="text-map">&nbsp; 3302 burke rd Pasadena TX. 77504</span>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <i class="bx bxs-phone map-icon"></i>
                    <span class="text-map">&nbsp; 832-900-9245</span>
                </div>
                <div class="d-flex align-items-center mt-3">
                    <i class="bx bxs-envelope map-icon"></i>
                    <span class="text-map">&nbsp; sales@thedelipaper.com</span>
                </div>
            </div>
            <div class="col-xl-5 col-lg-7 col-md-7 col-12 flex-padding">
                <div class="contact-right-content ml-5">
                    <h5 class="text-embark-01">get in touch</h5>
                    <h1 class=" text-quote text-form-quote">We’re here for you</h1>
                    <p class="para-quote-01">Your email address will not be published. Required fields are marked *
                    </p>
                    <form action="#">
                        <div class="row justify-content-start quote-content">
                            <div class="col-xl-12 flex-padding">
                                <div class="form-group">
                                    <!-- <label for="">Name</label> -->
                                    <input type="text" class="form-control input-field-form" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-xl-12 flex-padding">
                                <div class="form-group">
                                    <!-- <label for="">Contact No.</label> -->
                                    <input type="text" class="form-control input-field-form" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-xl-12 flex-padding">
                                <div class="form-group">
                                    <!-- <label for="">Email</label> -->
                                    <input type="email" class="form-control input-field-form" placeholder="Email">
                                </div>
                            </div>



                            <div class="col-xl-12 flex-padding">
                                <div class="form-group mb-0">
                                    <!-- <label for="">For Custom size / More information</label> -->
                                    <textarea name="" class="form-control input-field-form" rows="8"
                                        placeholder="Message" id=""></textarea>
                                </div>
                            </div>
                            <div class="col-xl-8 flex-padding">
                                <div class="bg-white p-3 mb-3 mt-2" style="    border: 1px solid #d3d3d3;">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input"
                                                style="width: 28px; height: 28px;" id="exampleCheck1">
                                            <label class="form-check-label mt-2 ml-3" for="exampleCheck1">I'm not a
                                                robot</label>
                                        </div>
                                        <img src="assets/images/recaptcha.png" style="width: 70px;" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <p>By submitting your phone number, you agree to receiving texts from The Deli Paper
                                </p>
                            </div>
                            <div class="col-xl-12">
                                <button
                                    class="btn btn-send col-xl-5 col-8 d-flex justify-content-center mt-3	 m-auto">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-gradient-section pb-5">
    <div class="container-fluid">
        <div class="row ml-5 mr-5 pl-3 pr-3 pt-5 ">
            <div class="col-xl-6 pt-5 flex-padding">
                <h1 class="text-white text-contact-choose">Why choose The Deli Paper for your custom printed
                    wrapping paper ?</h1>
            </div>
            <div class="col-xl-6 pt-5 flex-padding">
                <p class="para-contact-choose d-flex justify-content-end">We take pride in delivering exceptional
                    and innovative food wrapping <br> paper solutions that not only meet, but exceed our customers’
                    <br> expectations. Trust us to create custom printed paper that truly <br> represents your
                    brand.
                </p>
            </div>
        </div>
        <div class="row ml-5 mr-5 pl-3 pr-3 pt-5 pb-5">
            <div class="col-xl-4 col-lg-6 col-md-6 col-12 flex-padding">
                <div class=" border-box">
                    <div class="box-icon">
                        <img src="assets/images/icon-img-01.png" class="img-fluid" alt="">
                    </div>
                    <h3 class="mt-4">Super Fast Ordering</h3>
                    <p>Urgent food wrapping paper order? Utilize our Super Fast Ordering system and get your order
                        processed immediately. Order now and receive your order in record time.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12 flex-padding">
                <div class=" border-box-01">
                    <div class="box-icon-01">
                        <img src="assets/images/icon-img-02.png" class="img-fluid" alt="">
                    </div>
                    <h3 class="mt-4">Free Design Support</h3>
                    <p>We offer free design support to help you create stunning food wrapping paper. Our team is
                        here to
                        assist you every step of the way.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12 flex-padding">
                <div class="border-box-02">
                    <div class="box-icon-02">
                        <img src="assets/images/icon-img-03.png" class="img-fluid" alt="">
                    </div>
                    <h3 class="mt-4">Ultimate Customization</h3>
                    <p>Choose from a wide range of sizes, materials, and printing options to create a truly
                        personalized
                        look of your food wrapping paper.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class=" product-slider-section pb-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 m-auto">
                <h1 class="text-center text-product"> Other Products</h1>
                <p class="text-center para-product">Diving deeper into our catalogue, you’ll uncover an array of
                    offerings designed to enhance your experience beyond our core range.</p>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="owl-carousel product-slide">
            <div>
                <img src="assets/images/product-img-1.jpg" alt="">
                <h2 class="text-product-slide text-center"><a href="#">PAPER BAGS</a></h2>
            </div>
            <div>
                <img src="assets/images/product-img-2.webp" alt="">
                <h2 class="text-product-slide text-center"><a href="#">FOOD WRAPPING PAPER</a></h2>
            </div>
            <div>
                <img src="assets/images/product-img-3.jpg" alt="">
                <h2 class="text-product-slide text-center"><a href="#">GIFT WRAPPING PAPER</a></h2>
            </div>
            <div>
                <img src="assets/images/product-img-4.webp" alt="">
                <h2 class="text-product-slide text-center"><a href="#">PARCHMENT PAPER</a></h2>
            </div>
            <div>
                <img src="assets/images/product-img-5.webp" alt="">
                <h2 class="text-product-slide text-center"><a href="#">WAX PAPER</a></h2>

            </div>
            <div>
                <img src="assets/images/product-img-6.jpg" alt="">
                <h2 class="text-product-slide text-center"><a href="#">BUTCHER PAPER</a></h2>
            </div>
            <!-- <div> Your Content </div> -->
        </div>
    </div>
</section>

<?php } ?>