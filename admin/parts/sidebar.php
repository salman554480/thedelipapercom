     <div id="layoutSidenav_nav">
         <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
             <div class="sb-sidenav-menu">
                 <div class="nav">
                     <?php
                            if ($admin_role == "admin") {
                            ?>
                     <a class="nav-link" href="index.php">
                         <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                         Dashboard
                     </a>
                     <?php }?>
                     <!--Admin-->
                     <ul class="navbar-nav p-3 btn ">
                         <?php
                            if ($admin_role == "admin") {
                            ?>
                         <li class="nav-item  dropdown">
                             <a class="nav-link <?php if ($page == "admin") {
                                                        echo "active";
                                                    } ?> dropdown " id="navbarDropdown" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">Admin<div
                                     class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                             <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                 <li><a class="dropdown-item" href="admin_add.php">New Add</a></li>
                                 <li><a class="dropdown-item" href="admin_view.php">View Record</a></li>
                                 <li><a class="dropdown-item" href="admin_trash.php">Trash</a></li>
                             </ul>
                         </li>


                         <li class="nav-item dropdown">
                             <a class="nav-link <?php if ($page == "product") {
                                                        echo "active";
                                                    } ?> dropdown " id="navbarDropdown" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">Products<div
                                     class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                             <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                 <li><a class="dropdown-item" href="product_add.php">Add Record</a></li>
                                 <li><a class="dropdown-item" href="product_view.php">View Record</a></li>
                             </ul>
                         </li>

                         <li class="nav-item dropdown">
                             <a class="nav-link <?php if ($page == "page") {
                                                        echo "active";
                                                    } ?> dropdown " id="navbarDropdown" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">Page<div
                                     class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                             <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                 <li><a class="dropdown-item" href="page_view.php">View Record</a></li>
                                 <li><a class="dropdown-item" href="page_add.php">Add Record</a></li>
                             </ul>
                         </li>

                         <?php } ?>


                         <!--Blog-->
                         <li class="nav-item dropdown">
                             <a class="nav-link <?php if ($page == "post") {
                                                    echo "active";
                                                } ?> dropdown" id="navbarDropdown" href="#" role="button"
                                 data-bs-toggle="dropdown" aria-expanded="false">Blog<div
                                     class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div></a>
                             <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                 <li><a class="dropdown-item" href="post_add.php">New Post</a></li>
                                 <li><a class="dropdown-item" href="post_view.php">View Record</a></li>
                             </ul>
                         </li>
                         <!--End Category-->

                     </ul>
                     <a class="nav-link <?php if ($page == "image") {
                                            echo "active";
                                        } ?>" href="image_add.php">
                         <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                         Images
                     </a>
                     <?php
                        if ($admin_role == "admin") {
                        ?>
                     <a class="nav-link <?php if ($page == "faq") {
                                                echo "active";
                                            } ?>" href="faq.php">
                         <div class="sb-nav-link-icon"><i class="fas fa-info"></i></div>
                         FAQs
                     </a>
                     <a class="nav-link <?php if ($page == "setting") {
                                                echo "active";
                                            } ?>" href="setting.php">
                         <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                         Settings
                     </a>

                     <a class="nav-link" href="../index.php">
                         <div class="sb-nav-link-icon"><i class="fas fa-info"></i></div>
                         Website
                     </a>
                     <?php } ?>

                 </div>
             </div>
             <div class="sb-sidenav-footer">
                 <div class="small">Logged in as:</div>
                 <?php echo ucfirst($admin_name); ?>
             </div>
         </nav>
     </div>