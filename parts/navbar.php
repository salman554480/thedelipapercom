<button class="btn btn-quote" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Get A Free
Quote</button>

<div class="ticker-wrapper">
    <div class="ticker-content">
        <div class="ticker-item"><span class="star">✻</span>FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <!-- Duplicate for seamless loop -->
        <div class="ticker-item"><span class="star">✻</span>FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
        <div class="ticker-item">FREE SHIPPING ON ALL ORDERS <span class="star">✻</span></div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand d-flex align-items-center logo-text" href="<?php echo $website_url ?>"><img
            src="<?php echo $website_url ?>/assets/images/logo-img.png" height="40px" alt=""> &nbsp; The Deli
        Paper

    </a>
    <button class="navbar-toggler" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav list-navbar m-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $website_url;?>">Home</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="<?php echo $website_url ?>/" id="navbarDropdown" role="button"
                    aria-expanded="false">
                    Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <?php

                 $select_navbar_product = "SELECT * FROM product where product_status='active'";
                $run_navbar_product = mysqli_query($conn, $select_navbar_product);
                while ($row_navbar_product = mysqli_fetch_array($run_navbar_product)) {

                    $navbar_product_id = $row_navbar_product['product_id'];
                    $navbar_product_name = $row_navbar_product['product_name'];
                    $navbar_product_url = $row_navbar_product['product_url'];

                    ?>
                    <a class="dropdown-item" href="<?php echo $website_url; ?>/<?php echo $navbar_product_url ?>"><?php echo $navbar_product_name;?></a>
                     <?php } ?>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?php echo $website_url ?>/get-a-quote">Get a Quote</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?php echo $website_url ?>/blog">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?php echo $website_url ?>/contact-us">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?php echo $website_url ?>/portfolio">Portfolio</a>
            </li>
        </ul>
                <!--Email Address and Contact Number-->        
                <div class="d-flex justify-content-end align-items-center ">

                    <a href="mailto:sales@thedelipaper.com" class="d-flex w-100 align-items-center font-weight-bold"><i class="bx bx-envelope"></i> sales@thedelipaper.com</a>
                    <a href="tel:832-900-9245" class="d-flex w-100 align-items-center ml-3 font-weight-bold"><i class="bx bxs-phone"></i> 832-900-9245</a>
                </div>
    </div>
</nav>

<!-- sidebar-mobile-Nav Start -->
<div class="sidebar">
    <i class="bx bx-x close-sidebar"></i>
    <a class="navbar-brand d-flex align-items-center logo-text" href="index.php"><img
            src="<?php echo $website_url ?>/assets/images/logo-img.png" class="img-fluid" alt=""> &nbsp; The Deli
        Paper

    </a>
    <ul class="navbar-nav m-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo $website_url ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo $website_url ?>/" id="navbarDropdown" role="button"
                aria-expanded="false">
                Products
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php

                 $select_navbar_product = "SELECT * FROM product where product_status='active'";
                $run_navbar_product = mysqli_query($conn, $select_navbar_product);
                while ($row_navbar_product = mysqli_fetch_array($run_navbar_product)) {

                    $navbar_product_id = $row_navbar_product['product_id'];
                    $navbar_product_name = $row_navbar_product['product_name'];
                    $navbar_product_url = $row_navbar_product['product_url'];

                    ?>
                <a class="dropdown-item"
                    href="<?php echo $website_url; ?>/<?php echo $navbar_product_url ?>"><?php echo $navbar_product_name; ?></a>
                <?php } ?>
            </div>
        </li>
       <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo $website_url ?>/get-quote">Get a Quote</a>
        </li>-->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $website_url ?>/blog">Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $website_url ?>/contact-us">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $website_url ?>/portfolio">Portfolio</a>
        </li>
    </ul>
    <div class="social-link-icon">
        <a href="https://www.instagram.com/thedelipaper/"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/company/thedelipaper/"><i class="bx bxl-linkedin-square"></i></a>
        <a href="https://www.facebook.com/thedelipaper/"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.pinterest.com/thedelipaper/"><i class="bx bxl-pinterest"></i></a>
       
    </div>
</div>
<!-- sidebar-mobile-Nav End -->