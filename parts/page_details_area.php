<?php
   $select_page = "SELECT * FROM page WHERE page_url='$slug'";
   $run_page = mysqli_query($conn, $select_page);
   $row_page = mysqli_fetch_array($run_page);
   $page_id = $row_page['page_id'];
   $page_title = $row_page['page_title'];
   $page_content = $row_page['page_content'];
   @$meta_title = $row_page['meta_title'];
   @$meta_description = $row_page['meta_description'];
   @$meta_keywords = $row_page['meta_keywords'];
   
   ?>
<?php if (in_array($slug, ["privacy-policy", "terms-and-conditions"])) { ?>
<section class=" quote-section">
   <div class="container-fluid">
      <h1 class="text-paper text-center"><?php echo $page_title;?></h1>
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
<link rel="stylesheet" href="assets/css/contact-us.css">
<section class=" quote-section">
   <div class="container-fluid">
      <div class="row pt-5 mt-5 pb-5 ml-5 mr-5">
         <div class="col-xl-6 col-lg-7 col-md-7 col-12 flex-padding">
            
            <!-- <a href='https://www.acadoo.de/leistungen/ghostwriter-doktorarbeit/'>Dissertation Coaching</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=781ad07e009303eb0f9c371938095ff5aeeec1d1'></script> -->
            <h2 class="text-contact mt-3">Contact Us</h2>
            <div class="d-flex align-items-center mt-3">
               <i class="bx bx-map map-icon"></i>
               <span class="text-map">&nbsp; Houston Texas</span>
            </div>
            <div class="d-flex align-items-center mt-3">
               <i class="bx bxs-phone map-icon"></i>
               <span class="text-map">&nbsp; 832-900-9245</span>
            </div>
            <div class="d-flex align-items-center mt-3">
               <i class="bx bxs-envelope map-icon"></i>
               <span class="text-map">&nbsp; sales@thedelipaper.com</span>
            </div>

            <img src="<?php echo $website_url;?>/admin/assets/img/1755924834_8915_waxpaper_(3).jpg" alt="" class="w-100 mt-3">
         </div>
         <div class="col-xl-6 col-lg-7 col-md-7 col-12 flex-padding">
            <div class="contact-right-content">
               <div class="text-embark-01">get in touch</div>
               <h1 class=" text-quote text-form-quote">We’re here for you</h1>
               <p class="para-quote-01">Your email address will not be published. Required fields are marked * </p>
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
                    
                     <div class="col-xl-12 mt-3">
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
               wrapping paper ?
            </h1>
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
                  <img src="<?php echo $assets_path;?>/assets/images/icon-img-01.png" class="img-fluid" alt="">
               </div>
               <h3 class="mt-4">Super Fast Ordering</h3>
               <p>Urgent food wrapping paper order? Utilize our Super Fast Ordering system and get your order
                  processed immediately. Order now and receive your order in record time.
               </p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-md-6 col-12 flex-padding">
            <div class=" border-box-01">
               <div class="box-icon-01">
                  <img src="<?php echo $assets_path;?>/assets/images/icon-img-02.png" class="img-fluid" alt="">
               </div>
               <h3 class="mt-4">Free Design Support</h3>
               <p>We offer free design support to help you create stunning food wrapping paper. Our team is here to assist you every step of the way.</p>
            </div>
         </div>
         <div class="col-xl-4 col-lg-6 col-md-6 col-12 flex-padding">
            <div class="border-box-02">
               <div class="box-icon-02">
                  <img src="<?php echo $assets_path;?>/assets/images/icon-img-03.png" class="img-fluid" alt="">
               </div>
               <h3 class="mt-4">Ultimate Customization</h3>
               <p>Choose from a wide range of sizes, materials, and printing options to create a truly personalized look of your food wrapping paper.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<?php require_once('product_slider.php'); ?>

<?php } else if ($slug == "get-a-quote") { ?>
<link rel="stylesheet" href="assets/css/get-quote.css">
<section class="testimonial-section quote-section">
   <div class="container">
      <div class="row pt-5 pb-5">
         <div class="col-xl-10 col-lg-7 col-md-7 col-12 m-auto flex-padding">
            <div data-aos="fade-up" data-aos-duration="3000">
               <h2 class="text-center text-quote text-form-quote">Get A Quote</h2>
               <p class="text-center para-quote mt-3">Let’s get started! Simply fill out the form below, and
                  one of our
                  dedicated team members will reach out to you shortly with a personalized quote tailored to
                  your
                  specific needs.
               </p>
            </div>
            <?php require_once('quote_form.php'); ?>
         </div>
      </div>
   </div>
</section>
<section class="testimonial-section choose-section">
   <img src="<?php echo $assets_path;?>/assets/images/dots-img.png" class="img-fluid dots-img" alt="">
   <div class="container">
      <div class="row">
         <div class="col-xl-6 m-auto">
            <h2 class="text-center text-choose">Why Choose The Deli Paper</h2>
         </div>
         <div class="col-xl-10 m-auto">
            <p class="text-center para-choose">Discover The Deli Paper Company difference, where 24/7 support,
               superior print quality, secure transactions, and sustainable practices come together to provide
               an unparalleled service experience. We’re not just in the business of paper; we’re crafting a
               legacy of excellence and environmental responsibility. Join us in our journey to make a
               difference, one innovative sheet at a time.
            </p>
         </div>
      </div>
   </div>
   <div class="container">
   <div class="row justify-content-center pb-5">
      <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
         <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-10 col-md-10 col-12 flex-padding">
               <div class="bg-white round-clock mt-3">
                  <svg aria-hidden="true" class="e-font-icon-svg e-far-clock" viewBox="0 0 512 512"
                     xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z">
                     </path>
                  </svg>
                  <h3 class="mt-4">Round-the-Clock Assistance</h3>
                  <p class="mb-0">Any time, day or night, Deli Paper Company is here to assist you. If you
                     need
                     assistance, contact our support staff around-the-clock
                  </p>
               </div>
            </div>
            <div class="col-xl-5 col-lg-10 col-md-10 col-12 flex-padding">
               <div class="bg-white round-clock mt-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                     fill="none">
                     <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M21.0408 4.58065C22.5892 3.80645 24.4118 3.80645 25.9602 4.58065L40.5936 11.8974C43.1733 13.1872 43.1733 16.8685 40.5936 18.1584L25.9602 25.4751C24.4118 26.2493 22.5892 26.2493 21.0408 25.4751L6.40741 18.1584C3.82773 16.8685 3.82775 13.1872 6.40741 11.8974L21.0408 4.58065Z"
                        fill="#2757FF"></path>
                     <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                        d="M4.12966 34.4185C4.46611 33.6615 5.35256 33.3205 6.10958 33.657L22.485 40.935C23.1314 41.2223 23.8693 41.2223 24.5157 40.935L40.8912 33.657C41.6482 33.3205 42.5346 33.6615 42.8711 34.4185C43.2075 35.1755 42.8666 36.062 42.1096 36.3984L25.7341 43.6764C24.312 44.3085 22.6887 44.3085 21.2666 43.6764L4.89117 36.3984C4.13414 36.062 3.7932 35.1755 4.12966 34.4185Z"
                        fill="#2757FF"></path>
                     <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                        d="M4.12966 25.4185C4.46611 24.6615 5.35256 24.3205 6.10958 24.657L22.485 31.935C23.1314 32.2223 23.8693 32.2223 24.5157 31.935L40.8912 24.657C41.6482 24.3205 42.5346 24.6615 42.8711 25.4185C43.2075 26.1755 42.8666 27.062 42.1096 27.3984L25.7341 34.6764C24.312 35.3085 22.6887 35.3085 21.2666 34.6764L4.89117 27.3984C4.13414 27.062 3.7932 26.1755 4.12966 25.4185Z"
                        fill="#2757FF"></path>
                  </svg>
                  <h3 class="mt-4">Outstanding Print Making</h3>
                  <p class="mb-0">At Deli Paper Company, producing high-quality printing is not just our
                     business; it is our passion. Our exceptional print solutions are our specialty
                  </p>
                  <!-- <p class="mb-0">&nbsp;</p> -->
               </div>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <div class="row justify-content-center">
               <div class="col-xl-5 col-lg-10 col-md-10 col-12 flex-padding">
                  <div class="bg-white round-clock mt-3">
                     <svg aria-hidden="true" class="e-font-icon-svg e-fab-paypal" viewBox="0 0 384 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4.7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9.7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z">
                        </path>
                     </svg>
                     <h3 class="mt-4">Reliable Payment Processing</h3>
                     <p class="mb-0">Your comfort is our top priority at Deli Paper Company. Your
                        experience will be flawless thanks to our reliable and safe payment processing
                     </p>
                     <!-- <p class="mb-0">&nbsp;</p> -->
                  </div>
               </div>
               <div class="col-xl-5 col-lg-10 col-md-10 col-12 flex-padding">
                  <div class="bg-white round-clock mt-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                        fill="none">
                        <path
                           d="M43 12.7869C43 9.39559 41.6304 6.1432 39.1924 3.74519C36.7544 1.34719 33.4478 0 30 0C26.5522 0 23.2456 1.34719 20.8076 3.74519C18.3696 6.1432 17 9.39559 17 12.7869V18.6885H9V56.0656C9 57.1091 9.42143 58.1098 10.1716 58.8476C10.9217 59.5855 11.9391 60 13 60H47C48.0609 60 49.0783 59.5855 49.8284 58.8476C50.5786 58.1098 51 57.1091 51 56.0656V18.6885H43V12.7869ZM19 12.7869C19 9.91733 20.1589 7.1653 22.2218 5.13622C24.2847 3.10714 27.0826 1.96721 30 1.96721C32.9174 1.96721 35.7153 3.10714 37.7782 5.13622C39.8411 7.1653 41 9.91733 41 12.7869V18.6885H19V12.7869ZM44 39.3443C44 42.0678 43.1789 44.7302 41.6406 46.9947C40.1022 49.2593 37.9157 51.0243 35.3576 52.0665C32.7994 53.1088 29.9845 53.3815 27.2687 52.8502C24.553 52.3188 22.0584 51.0073 20.1005 49.0815C18.1426 47.1556 16.8092 44.702 16.269 42.0308C15.7288 39.3595 16.0061 36.5908 17.0657 34.0745C18.1253 31.5583 19.9197 29.4076 22.222 27.8945C24.5243 26.3814 27.2311 25.5738 30 25.5738C33.713 25.5738 37.274 27.0246 39.8995 29.6071C42.525 32.1895 44 35.6921 44 39.3443Z"
                           fill="#2757FF"></path>
                        <path
                           d="M20.3396 34.9456C20.3396 34.9456 19.5875 39.6779 22.0684 42.1359C23.2592 43.1854 24.7746 43.8031 26.3661 43.8876C26.3661 43.6263 26.2977 43.1714 26.2879 42.5714C25.2786 41.2836 24.4414 39.8719 23.7972 38.3714C24.7299 38.8382 25.6133 39.3958 26.4345 40.0359C26.575 38.8251 26.9045 37.6433 27.4112 36.5327C24.9303 34.2392 20.3396 34.9456 20.3396 34.9456Z"
                           fill="#F865DC"></path>
                        <path
                           d="M30.4 35.6327C28.4465 37.5682 28.2024 40.694 28.2414 42.4747C29.9998 40.4904 32.1464 38.8805 34.5512 37.7424C33.3959 40.1234 31.7643 42.2471 29.7554 43.9843C31.5624 43.9843 34.6391 43.7618 36.5926 41.8359C39.4545 39.0101 38.6633 33.6295 38.6633 33.6295C38.6633 33.6295 33.2619 32.7972 30.4 35.6327Z"
                           fill="#F865DC"></path>
                     </svg>
                     <h3 class="mt-4">Environmentally Sustainable Innovation</h3>
                     <p class="mb-0">Sustainability is a top priority for Deli Paper Company. Our
                        creative method blends environmentally friendly materials.
                     </p>
                     <!-- <p class="mb-0">&nbsp;</p> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <img src="<?php echo $assets_path;?>/assets/images/dots-img.png" class="img-fluid dots-img-01" alt="">
</section>
<?php require_once('client_section.php'); ?>
<?php require_once('product_slider.php'); ?>


<?php } else if ($slug == "about-us") { ?>

<section class="quote-section">
   <div class="container">
   <div class="row pt-5 pb-5">
      <div class="col-xl-10 col-lg-7 col-md-7 col-12 m-auto flex-padding">
         <h2 class="text-center text-quote text-about"><a href="#">Welcome to The Deli Paper</a></h2>
         <h2 class="para-about text-center">Where Every Sheet Tells a Story</h2>
         <p class="text-center para-about-01 mt-3">We are committed to making the packaging industry more
            sustainable and digital. Join our motivated team to contribute to rapid growth and
            sustainability goals that really make a difference!.And every wrap is a warm embrace for your
            cherished items. In the heart of our bustling world, we found a simple truth: the finest moments
            often come wrapped in paper. Be it the crisp fold encasing a morning bagel or the rustle of a
            gift being unveiled, paper is more than a material; it’s a medium of connection, a silent
            witness to joyous occasions and everyday delights.At The Deli Paper Company, we craft more than
            just paper. We weave threads of care and consideration into every fiber, creating a tapestry of
            products that hold your food and gifts as gently as you would. Our variety speaks volumes – from
            the sturdy, oil-resistant sheets that keep your sandwiches snug, to the delicate, patterned
            wraps that dress your presents in mystery and anticipation.Our commitment to you is unwavering.
            We promise to provide you with a diverse range of papers that not only meet your needs but also
            echo your values. Sustainability isn’t just a buzzword for us; it’s a pledge to future
            generations. So, whether you’re wrapping a sandwich or a surprise, know that with The Deli
            Paper, you’re not just choosing a product. You’re choosing a partner who understands the art of
            presentation, the joy of giving, and the beauty of savoring each moment. Because here, we don’t
            just sell paper.
         </p>
      </div>
   </div>
   </div>
</section>
<section class="about-section">
   <div class="container-fluid">
      <div class="row ml-5 mr-5 pl-4 pr-4">
         <div class="col-xl-8 col-lg-8 col-md-7 col-12 flex-padding">
            <img src="<?php echo $assets_path;?>/assets/images/about-img.jpg" class="img-fluid w-100 h-450" alt="">
         </div>
         <div class="col-xl-3 col-lg-4 col-md-5  col-12 flex-padding">
            <div class="bg-white  about-text-right">
               <h3>Sustainable Wraps</h3>
               <div class="elementor-widget-container">
                  <div class="elementor-divider">
                     <span class="elementor-divider-separator">
                     </span>
                  </div>
               </div>
               <p class="mt-3 mb-0">We sell experiences, wrapped in love and sealed with the promise of quality.Your moments, our paper – together, let’s make every unwrapping unforgettable.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="testimonial-section">
   <!-- <img src="<?php echo $assets_path;?>/assets/images/dots-img.png" class="img-fluid dots-img" alt=""> -->
   <div class="container">
      <div class="row">
         <div class="col-xl-10 m-auto">
            <!-- <h2 class="text-center text-choose">Why Choose The Deli Paper</h2> -->
            <h2 class="text-center text-excellence mt-5"><a href="#">Paper Excellence</a></h2>
            <h2 class="text-center text-print">Printed Perfection Delivered</h2>
         </div>
         <div class="col-xl-7 m-auto">
            <p class="text-center para-choose-01">Discover The Deli Paper Company difference, where 24/7 support, superior print quality, secure transactions, and sustainable practices come together to provide an unparalleled service experience. We’re not just in the business of paper; we’re crafting a legacy of excellence and environmental responsibility. Join us in our journey to make a difference, one innovative sheet at a time. </p>
         </div>
      </div>
   </div>
   <div class="container">
   <div class="row justify-content-center pb-5">
      <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
         <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10 col-md-10 col-12">
               <div class="bg-white round-clock mt-3">
                  <svg aria-hidden="true" class="e-font-icon-svg e-far-clock" viewBox="0 0 512 512"
                     xmlns="http://www.w3.org/2000/svg">
                     <path
                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z">
                     </path>
                  </svg>
                  <h3 class="mt-4">Round-the-Clock Assistance</h3>
                  <p class="mb-0">Any time, day or night, Deli Paper Company is here to assist you. If you
                     need
                     assistance, contact our support staff around-the-clock
                  </p>
               </div>
            </div>
            <div class="col-xl-6 col-lg-10 col-md-10 col-12">
               <div class="bg-white round-clock mt-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48"
                     fill="none">
                     <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M21.0408 4.58065C22.5892 3.80645 24.4118 3.80645 25.9602 4.58065L40.5936 11.8974C43.1733 13.1872 43.1733 16.8685 40.5936 18.1584L25.9602 25.4751C24.4118 26.2493 22.5892 26.2493 21.0408 25.4751L6.40741 18.1584C3.82773 16.8685 3.82775 13.1872 6.40741 11.8974L21.0408 4.58065Z"
                        fill="#2757FF"></path>
                     <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                        d="M4.12966 34.4185C4.46611 33.6615 5.35256 33.3205 6.10958 33.657L22.485 40.935C23.1314 41.2223 23.8693 41.2223 24.5157 40.935L40.8912 33.657C41.6482 33.3205 42.5346 33.6615 42.8711 34.4185C43.2075 35.1755 42.8666 36.062 42.1096 36.3984L25.7341 43.6764C24.312 44.3085 22.6887 44.3085 21.2666 43.6764L4.89117 36.3984C4.13414 36.062 3.7932 35.1755 4.12966 34.4185Z"
                        fill="#2757FF"></path>
                     <path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd"
                        d="M4.12966 25.4185C4.46611 24.6615 5.35256 24.3205 6.10958 24.657L22.485 31.935C23.1314 32.2223 23.8693 32.2223 24.5157 31.935L40.8912 24.657C41.6482 24.3205 42.5346 24.6615 42.8711 25.4185C43.2075 26.1755 42.8666 27.062 42.1096 27.3984L25.7341 34.6764C24.312 35.3085 22.6887 35.3085 21.2666 34.6764L4.89117 27.3984C4.13414 27.062 3.7932 26.1755 4.12966 25.4185Z"
                        fill="#2757FF"></path>
                  </svg>
                  <h3 class="mt-4">Outstanding Print Making</h3>
                  <p class="mb-0">At Deli Paper Company, producing high-quality printing is not just our
                     business; it is our passion. Our exceptional print solutions are our specialty
                  </p>
                  <!-- <p class="mb-0">&nbsp;</p> -->
               </div>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <div class="row justify-content-center">
               <div class="col-xl-6 col-lg-10 col-md-10 col-12">
                  <div class="bg-white round-clock mt-3">
                     <svg aria-hidden="true" class="e-font-icon-svg e-fab-paypal" viewBox="0 0 384 512"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                           d="M111.4 295.9c-3.5 19.2-17.4 108.7-21.5 134-.3 1.8-1 2.5-3 2.5H12.3c-7.6 0-13.1-6.6-12.1-13.9L58.8 46.6c1.5-9.6 10.1-16.9 20-16.9 152.3 0 165.1-3.7 204 11.4 60.1 23.3 65.6 79.5 44 140.3-21.5 62.6-72.5 89.5-140.1 90.3-43.4.7-69.5-7-75.3 24.2zM357.1 152c-1.8-1.3-2.5-1.8-3 1.3-2 11.4-5.1 22.5-8.8 33.6-39.9 113.8-150.5 103.9-204.5 103.9-6.1 0-10.1 3.3-10.9 9.4-22.6 140.4-27.1 169.7-27.1 169.7-1 7.1 3.5 12.9 10.6 12.9h63.5c8.6 0 15.7-6.3 17.4-14.9.7-5.4-1.1 6.1 14.4-91.3 4.6-22 14.3-19.7 29.3-19.7 71 0 126.4-28.8 142.9-112.3 6.5-34.8 4.6-71.4-23.8-92.6z">
                        </path>
                     </svg>
                     <h3 class="mt-4">Reliable Payment Processing</h3>
                     <p class="mb-0">Your comfort is our top priority at Deli Paper Company. Your
                        experience will be flawless thanks to our reliable and safe payment processing
                     </p>
                     <!-- <p class="mb-0">&nbsp;</p> -->
                  </div>
               </div>
               <div class="col-xl-6 col-lg-10 col-md-10 col-12">
                  <div class="bg-white round-clock mt-3">
                     <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                        fill="none">
                        <path
                           d="M43 12.7869C43 9.39559 41.6304 6.1432 39.1924 3.74519C36.7544 1.34719 33.4478 0 30 0C26.5522 0 23.2456 1.34719 20.8076 3.74519C18.3696 6.1432 17 9.39559 17 12.7869V18.6885H9V56.0656C9 57.1091 9.42143 58.1098 10.1716 58.8476C10.9217 59.5855 11.9391 60 13 60H47C48.0609 60 49.0783 59.5855 49.8284 58.8476C50.5786 58.1098 51 57.1091 51 56.0656V18.6885H43V12.7869ZM19 12.7869C19 9.91733 20.1589 7.1653 22.2218 5.13622C24.2847 3.10714 27.0826 1.96721 30 1.96721C32.9174 1.96721 35.7153 3.10714 37.7782 5.13622C39.8411 7.1653 41 9.91733 41 12.7869V18.6885H19V12.7869ZM44 39.3443C44 42.0678 43.1789 44.7302 41.6406 46.9947C40.1022 49.2593 37.9157 51.0243 35.3576 52.0665C32.7994 53.1088 29.9845 53.3815 27.2687 52.8502C24.553 52.3188 22.0584 51.0073 20.1005 49.0815C18.1426 47.1556 16.8092 44.702 16.269 42.0308C15.7288 39.3595 16.0061 36.5908 17.0657 34.0745C18.1253 31.5583 19.9197 29.4076 22.222 27.8945C24.5243 26.3814 27.2311 25.5738 30 25.5738C33.713 25.5738 37.274 27.0246 39.8995 29.6071C42.525 32.1895 44 35.6921 44 39.3443Z"
                           fill="#2757FF"></path>
                        <path
                           d="M20.3396 34.9456C20.3396 34.9456 19.5875 39.6779 22.0684 42.1359C23.2592 43.1854 24.7746 43.8031 26.3661 43.8876C26.3661 43.6263 26.2977 43.1714 26.2879 42.5714C25.2786 41.2836 24.4414 39.8719 23.7972 38.3714C24.7299 38.8382 25.6133 39.3958 26.4345 40.0359C26.575 38.8251 26.9045 37.6433 27.4112 36.5327C24.9303 34.2392 20.3396 34.9456 20.3396 34.9456Z"
                           fill="#F865DC"></path>
                        <path
                           d="M30.4 35.6327C28.4465 37.5682 28.2024 40.694 28.2414 42.4747C29.9998 40.4904 32.1464 38.8805 34.5512 37.7424C33.3959 40.1234 31.7643 42.2471 29.7554 43.9843C31.5624 43.9843 34.6391 43.7618 36.5926 41.8359C39.4545 39.0101 38.6633 33.6295 38.6633 33.6295C38.6633 33.6295 33.2619 32.7972 30.4 35.6327Z"
                           fill="#F865DC"></path>
                     </svg>
                     <h3 class="mt-4">Environmentally Sustainable Innovation</h3>
                     <p class="mb-0">Sustainability is a top priority for Deli Paper Company. Our
                        creative method blends environmentally friendly materials.
                     </p>
                     <!-- <p class="mb-0">&nbsp;</p> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- <img src="<?php echo $assets_path;?>/assets/images/dots-img.png" class="img-fluid dots-img-01" alt=""> -->
</section>
<?php include 'client_section.php'; ?>
<?php require_once('product_slider.php'); ?>

<?php } else if ($slug == "portfolio") { ?>

<link rel="stylesheet" href="<?php echo $website_url;?>/assets/css/portfolio.css">
    <section class=" wax-product-section">
        <div class="container-fluid">
            <div class="row pt-5 pb-5 ml-5 mr-5">
                <div class="col-xl-6 col-lg-8 col-md-8 col-12 m-auto text-center flex-padding">
                    <div class="ml-5 wax-right-content">
                        <h1 class="text-portfolio">PORTFOLIO</h1>
                        <p class="para-portfolio">
                            Welcome to our portfolio page! Explore our range of high-quality products, including deli
                            paper, paper bags, gift wrapping paper, butcher paper, food wrapping paper, wax paper, and
                            parchment paper. Each item is crafted with precision and care to meet your unique needs.
                            From packaging solutions to elegant gift wraps, our portfolio showcases our commitment to
                            quality and innovation. Dive in and discover the perfect paper products for every occasion!
                        </p>

                    </div>
                </div>

            </div>
            <div class="row ml-5 mr-5 pl-3 pr-3 popup-gallery">
                <div class="col-xl-12 flex-padding">
                    <h2 class="text-paper text-center">Wax Paper</h2>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-1.jpg" title="Wax Paper 01">
                        <img src="<?php echo $assets_path?>/assets/images/img-1.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-2.jpg" title="Wax Paper 02">
                        <img src="<?php echo $assets_path?>/assets/images/img-2.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-3.jpg" title="Wax Paper 03">
                        <img src="<?php echo $assets_path?>/assets/images/img-3.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
            </div>
            <div class="row ml-5 mr-5 pl-3 pr-3 popup-gallery">
                <div class="col-xl-12 flex-padding">
                    <h2 class="text-paper text-center mt-5">Food Wrapping Paper</h2>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-4.jpg" title="Food Wrapping Paper 01">
                        <img src="<?php echo $assets_path?>/assets/images/img-4.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-5.jpg" title="Food Wrapping Paper 02">
                        <img src="<?php echo $assets_path?>/assets/images/img-5.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-6.jpg" title="Food Wrapping Paper 03">
                        <img src="<?php echo $assets_path?>/assets/images/img-6.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
            </div>
            <div class="row ml-5 mr-5 pl-3 pr-3 popup-gallery">
                <div class="col-xl-12 flex-padding">
                    <h2 class="text-paper text-center mt-5">Gift Wrapping Paper</h2>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-7.jpg" title="Gift Wrapping Paper 01">
                        <img src="<?php echo $assets_path?>/assets/images/img-7.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-8.jpg" title="Gift Wrapping Paper 02">
                        <img src="<?php echo $assets_path?>/assets/images/img-8.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-9.webp" title="Gift Wrapping Paper 03">
                        <img src="<?php echo $assets_path?>/assets/images/img-9.webp" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
            </div>
            <div class="row ml-5 mr-5 pl-3 pr-3 popup-gallery">
                <div class="col-xl-12 flex-padding">
                    <h2 class="text-paper text-center mt-5">Butcher Paper</h2>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-10.jpg" title="Butcher Paper 01">
                        <img src="<?php echo $assets_path?>/assets/images/img-10.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-11.jpg" title="Butcher Paper 02">
                        <img src="<?php echo $assets_path?>/assets/images/img-11.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-12.jpg" title="Butcher Paper 03">
                        <img src="<?php echo $assets_path?>/assets/images/img-12.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
            </div>
            <div class="row ml-5 mr-5 pl-3 pr-3 popup-gallery">
                <div class="col-xl-12 flex-padding">
                    <h2 class="text-paper text-center mt-5">Paper Bags</h2>
                </div>
                <div class=" col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-13.jpg" title="Paper Bags 01">
                        <img src="<?php echo $assets_path?>/assets/images/img-13.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
                <div class=" col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-14.jpg" title="Paper Bags 02">
                        <img src="<?php echo $assets_path?>/assets/images/img-14.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
                <div class=" col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-15.jpg" title="Paper Bags 03">
                        <img src="<?php echo $assets_path?>/assets/images/img-15.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
            </div>
            <div class="row ml-5 mr-5 pl-3 pr-3 popup-gallery">
                <div class="col-xl-12 flex-padding">
                    <h2 class="text-paper text-center mt-5">Parchment Paper</h2>
                </div>
                <div class=" col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-16.jpg" title="Parchment Paper 01">
                        <img src="<?php echo $assets_path?>/assets/images/img-16.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
                <div class=" col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-17.jpg" title="Parchment Paper 02">
                        <img src="<?php echo $assets_path?>/assets/images/img-17.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
                <div class=" col-xl-4 col-lg-6 col-md-6 col-4 mt-3 flex-portfolio-imgs">
                    <a href="assets/images/img-18.jpg" title="Parchment Paper 03">
                        <img src="<?php echo $assets_path?>/assets/images/img-18.jpg" class="img-fluid wax-paper-img" alt="">
                    </a>
                </div>
            </div>
        </div>

    </section>
    <?php require_once('product_slider.php'); ?>
    <?php } ?>