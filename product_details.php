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
                    <h1 class="card-product-title">Custom Printed Paper</h1>
                    <p class="product-intro">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat
                        distinctio illo, autem, quam magni, blanditiis id corporis facere ut labore magnam earum natus
                        delectus iste assumenda tempore quia incidunt dolores.</p>

                    <form>
                        <!-- Size Section -->
                        <div class="section-title">Choose Size</div>
                        <div class="custom-radio-block d-flex flex-wrap">
                            <div class="p-1 mr-1">
                                <input type="radio" id="size4x4" name="size" value="1x2">
                                <label for="size4x4">4x4</label>
                            </div>
                            <div class="p-1 mr-1">
                                <input type="radio" id="size6x6" name="size" value="1x3">
                                <label for="size6x6">6x6</label>
                            </div>
                            <div class="p-1 mr-1">
                                <input type="radio" id="size7x5" name="size" value="1x4">
                                <label for="size7x5">7x5</label>
                            </div>
                            <div class="p-1 mr-1">
                                <input type="radio" id="size8x6" name="size" value="1x2">
                                <label for="size8x6">8x6</label>
                            </div>
                            <div class="p-1 mr-1">
                                <input type="radio" id="size10x6" name="size" value="1x3">
                                <label for="size10x6">10x6</label>
                            </div>
                            <div class="p-1 mr-1">
                                <input type="radio" id="size10x8" name="size" value="1x4">
                                <label for="size10x8">10x8</label>
                            </div>
                            <div class="p-1 mr-1">
                                <input type="radio" id="size10x10" name="size" value="1x2">
                                <label for="size10x10">10x10</label>
                            </div>
                            <div class="p-1 mr-1">
                                <input type="radio" id="size1x2" name="size" value="1x2">
                                <label for="size12x9">12x9</label>
                            </div>
                            <div class="p-1 mr-1">
                                <input type="radio" id="size12x12" name="size" value="1x2">
                                <label for="size12x12">12x12</label>
                            </div>
                            <div class="p-1 mr-1">
                                <input type="radio" id="size13x10" name="size" value="1x2">
                                <label for="size13x10">13x10</label>
                            </div>
                            <div class="p-1 mr-1">
                                <input type="radio" id="size13x13" name="size" value="1x2">
                                <label for="size13x13">13x13</label>
                            </div>
                            <div class="p-1 mr-1">
                                <input type="radio" id="size16x12" name="size" value="1x2">
                                <label for="size16x12">16x12</label>
                            </div>
                            <div class="p-1 mr-1">
                                <input type="radio" id="size17x12" name="size" value="1x2">
                                <label for="size17x12">17x12</label>
                            </div>
                            <div class="p-1 mr-1">
                                <input type="radio" id="size18x12" name="size" value="1x2">
                                <label for="size18x12">18x12</label>
                            </div>
                            <div class="p-1 mr-1">
                                <input type="radio" id="size20x10" name="size" value="1x2">
                                <label for="size20x10">20x10</label>
                            </div>
                            <div class="p-1 mr-1">
                                <input type="radio" id="size20x13" name="size" value="1x2">
                                <label for="size20x13">20x13</label>
                            </div>
                        </div>

                        <!-- Paper Type Section -->
                        <div class="section-title">Choose Paper Type</div>
                        <div class="custom-radio-block row">
                            <div class="col-md-6">
                                <input type="radio" id="paper1" name="paper" value="papertype1">
                                <label for="paper1">Kraft (Brown) 40gsm </label>
                            </div>
                            <div class="col-md-6">
                                <input type="radio" id="paper2" name="paper" value="papertype2">
                                <label for="paper2">White 38gsm</label>
                            </div>
                        </div>

                        <!-- Color Section -->
                        <div class="section-title">Choose Color</div>
                        <div class="custom-radio-block row">
                            <div class="col-md-4">
                                <input type="radio" id="color1" name="color" value="1color">
                                <label for="color1">1 color Print</label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" id="color2" name="color" value="2color">
                                <label for="color2">2 color Print</label>
                            </div>
                            <div class="col-md-4">
                                <input type="radio" id="color4" name="color" value="4color">
                                <label for="color4">4 color Print</label>
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
                            <input type="file" id="real-file" hidden>
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

                        <!-- FAQ 1 -->
                        <div class="card faq-item">
                            <div class="card-header" id="faqHeading1">
                                <h5 class="mb-0">
                                    <button class="btn btn-link faq-question" data-toggle="collapse"
                                        data-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
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
                                        data-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
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
                                        data-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
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