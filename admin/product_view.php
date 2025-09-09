<?php
$page = "product";
require_once('parts/top.php'); ?>
<?php 
if($admin_role != "admin"){
    	echo "<script>window.open('post_view.php','_self');</script>";
}
?>
</head>

<body class="sb-nav-fixed">

    <?php require_once('parts/navbar.php'); ?>

    <div id="layoutSidenav">

        <?php require_once('parts/sidebar.php'); ?>

        <div id="layoutSidenav_content" class="">
            <main class="">
                <div class="container-fluid  px-4">

                    <div class="page-header">
                        <div class="col-12 mt-4 mb-4">
                            <h4 class="mb-3">Products</h4>

                        </div>
                    </div>
                    <div class="card mb-3 bg-white">

                        <div class="card-body ">

                            <?php

                            require_once('parts/db.php');

                            if (isset($_GET['del'])) {
                                $del_id = $_GET['del'];
                                
                                if($admin_role == "admin"){

                                        $delete = "DELETE FROM product WHERE product_id='$del_id'";
                                        $run = mysqli_query($conn, $delete);
        
                                        if ($run === true) {
                                            
                                            $log_msg = "Deleted product with ID: $del_id";
                                                // Insert into log table
                                                $insert_log = "INSERT INTO log (log_msg, admin_id) 
                                                               VALUES ('$log_msg', '$admin_id')";
                                                mysqli_query($conn, $insert_log);
                                            
                                            echo "<script>alert('Deleted');</script>";
                                            echo "<script>window.open('product_view.php','_self');</script>";
                                        } else {
                                            echo "Failed,Try Again";
                                        }
                                
                                } else {
                                    echo "<script>alert('Access denied. Only admins can delete products.');</script>";
                                    echo "<script>window.open('post_view.php','_self');</script>";
                                }
                            }

                            ?>

                            <table id="datatablesSimple" class="table table-hover table-sm table-responsive">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Product</th>
                                        <th>URL</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    require_once('parts/db.php');
                                    $select = "SELECT * FROM product";
                                    $run = mysqli_query($conn, $select);
                                    while ($row = mysqli_fetch_array($run)) {

                                        $product_id = $row['product_id'];
                                        $product_name = $row['product_name'];
                                        $product_url = $row['product_url'];
                                        $product_status = $row['product_status'];
                                        $product_thumbnail = $row['product_thumbnail'];

                                        if ($product_status == "active") {
                                            $color = "success";
                                        } else if ($product_status == "inactive") {
                                            $color = "danger";
                                        }

                                    ?>
                                    <tr>
                                        <td><img src="assets/img/<?php echo $product_thumbnail;?>" height="35px" alt="">
                                        </td>
                                        <td><?php echo $product_id; ?></td>
                                        <td><?php echo $product_name; ?></td>
                                        <td><?php echo $product_url; ?></td>
                                        <td>
                                            <span
                                                class="badge bg-<?php echo $color; ?>"><?php echo $product_status; ?></span>
                                        </td>
                                        <td>
                                            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                                                <li class="nav-item dropdown">
                                                    <button class="btn btn-danger dropdown-toggle" id="navbarDropdown"
                                                        href="#" role="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">Action</i></button>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="navbarDropdown">

                                                        <li> <a class="dropdown-item"
                                                                href="product_view.php?del=<?php echo $product_id; ?>">Delete</a>
                                                        </li>
                                                        <li>
                                                            <hr class="dropdown-divider" />
                                                        </li>
                                                        <li> <a class="dropdown-item"
                                                                href="product_edit.php?edit=<?php echo $product_id; ?>">Edit</a>
                                                        </li>
                                                        <hr class="dropdown-divider" />
                                                </li>
                                                <li> <a class="dropdown-item"
                                                        href="product_details.php?product_url=<?php echo $product_url; ?>">View
                                                        Page</a></li>
                                            </ul>
                                            </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <?php    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


            </main>
            <?php require_once('parts/footer.php'); ?>
        </div>

    </div>
    <!--Footercdn--->
    <?php require_once('parts/footercdn.php'); ?>

</body>

</html>