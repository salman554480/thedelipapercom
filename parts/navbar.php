<nav>
    <div class="navbar">
        <i class='bx bx-menu'></i>
        <div class="logo"><a href="<?php echo $website_url; ?>"><img src="assets/img/logo2.png" class="main-logo"
                    alt=""></a></div>
        <div class="nav-links">
            <div class="sidebar-logo">
                <span class="logo-name"><?php echo $website_title; ?></span>
                <i class='bx bx-x'></i>
            </div>
            <ul class="links">
                <li><a href="<?php echo $website_url; ?>">HOME</a></li>
                <!-- <li>
                    <a href="#">HTML & CSS</a>
                    <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                    <ul class="htmlCss-sub-menu sub-menu">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Login Forms</a></li>
                        <li><a href="#">Card Design</a></li>
                        <li class="more">
                            <span><a href="#">More</a>
                                <i class='bx bxs-chevron-right arrow more-arrow'></i>
                            </span>
                            <ul class="more-sub-menu sub-menu">
                                <li><a href="#">Neumorphism</a></li>
                                <li><a href="#">Pre-loader</a></li>
                                <li><a href="#">Glassmorphism</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> -->
                <li>
                    <a href="#">Products</a>
                    <i class='bx bxs-chevron-down js-arrow arrow '></i>
                    <ul class="js-sub-menu sub-menu">
                        <?php

                        $select_navbar_product = "SELECT * FROM product where product_status='active'";
                        $run_navbar_product = mysqli_query($conn, $select_navbar_product);
                        while ($row_navbar_product = mysqli_fetch_array($run_navbar_product)) {

                            $navbar_product_id = $row_navbar_product['product_id'];
                            $navbar_product_name = $row_navbar_product['product_name'];
                            $navbar_product_url = $row_navbar_product['product_url'];

                        ?>
                        <li><a
                                href="<?php echo $website_url; ?>/product_details.php?product_url=<?php echo $navbar_product_url ?>"><?php echo $navbar_product_name; ?></a>
                        </li>
                        <?php } ?>
                    </ul>
                </li>
                <!-- <li>
                    <a href="#">FAQ</a>
                    <i class='bx bxs-chevron-down js-arrow arrow '></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="terms-and-condition.php">Terms & Conditions</a></li>
                    </ul>
                </li> -->
                <li><a href="<?php echo $website_url; ?>/page.php?page_url=blog">Blog</a></li>
                <li><a href="<?php echo $website_url; ?>/page.php?page_url=contact-us">CONTACT US</a></li>
            </ul>
        </div>

        <div class="search-box d-flex">
            <!-- <i data-toggle="tooltip" title="+447366426960" class='bx bxl-whatsapp js-arrow arrow '></i> -->
        </div>

    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script>
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});
</script>