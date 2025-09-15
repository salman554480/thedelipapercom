<section class=" product-slider-section pb-5">
    <div class="container">
        <div class="row mt-5 pt-5">
            <div class="col-md-12 m-auto">
                <h1 class="text-center other-products-heading"> Other Products</h1>
                <p class="text-center para-product">Diving deeper into our catalogue, you’ll uncover an array of
                    offerings designed to enhance your experience beyond our core range.</p>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="owl-carousel product-slide">
            <?php
            // Fetch other products excluding the current one
            $query = "SELECT product_id, product_name, product_url, product_thumbnail 
                      FROM product 
                       
                      "; // Adjust the LIMIT as needed

            $result = mysqli_query($conn, $query);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $name = htmlspecialchars($row['product_name']);
                    $url = htmlspecialchars($row['product_url']);
                    $thumbnail = htmlspecialchars($row['product_thumbnail']);
            ?>
                    <div>
                        <img src="<?php echo $img_path . '/' . $thumbnail; ?>" alt="">
                        <h2 class="text-product-slide text-center">
                            <a href="<?php echo $url; ?>"><?php echo $name; ?></a>
                        </h2>
                    </div>
            <?php
                }
            } else {
                echo "No other products found.";
            }
            ?>

            <!-- <div> Your Content </div> -->
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.product-slide').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            margin: 10,
            responsiveClass: true,
            navText: [
                '<span class="custom-prev"><i class="bx bx-chevron-left"></i></span>',
                '<span class="custom-next"><i class="bx bx-chevron-right"></i></span></span>'
            ],
            responsive: {
                0: {
                    items: 2,
                    nav: true,
                    margin: 10
                },
                480: {
                    items: 2,
                    nav: true,
                    margin: 15
                },
                768: {
                    items: 3,
                    nav: true,
                    margin: 15
                },
                1000: {
                    items: 4,
                    nav: true,
                    margin: 20
                },
                1200: {
                    items: 5,
                    nav: true,
                    margin: 20
                }
            }
        });
    });
</script>