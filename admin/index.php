<?php require_once('parts/top.php'); ?>
</head>

<body class="sb-nav-fixed">
    <?php require_once('parts/navbar.php'); ?>
    <div id="layoutSidenav">
        <?php require_once('parts/sidebar.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <br>
                    <h2 class="mt-1">Dashboard</h2>
                    <hr>
                    <div class="row">
                        <?php
                        require_once('parts/db.php');

                        $select_product = "SELECT * FROM product ";
                        $run_product = mysqli_query($conn, $select_product);
                        $total_product = mysqli_num_rows($run_product);

                        $select_post = "SELECT * FROM post ";
                        $run_post = mysqli_query($conn, $select_post);
                        $total_post = mysqli_num_rows($run_post);


                        $total_views =  50;



                        ?>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <h4>Total Products</h4>
                                    <h3><?php echo $total_product; ?></h3>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="product_view.php"><small class="small text-white stretched-link">View
                                            product Details</small></a>
                                    <div class="small text-white">
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <h4>Total Posts</h4>
                                    <h3><?php echo $total_post; ?></h3>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="post_view.php"><small class="small text-white stretched-link">View
                                            post Details</small></a>
                                    <div class="small text-white">
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <h4>Total Views</h4>
                                    <h3><?php echo $total_views; ?></h3>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="product_view.php"><small class="small text-white stretched-link">View
                                            product Details</small></a>
                                    <div class="small text-white">
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <h4>Earning</h4>
                                    <h3>$319.05</h3>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a href="post_view.php"><small class="small text-white stretched-link">View
                                            post Details</small></a>
                                    <div class="small text-white">
                                        <i class="fas fa-angle-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-product me-1"></i>
                                    Latest Added Posts
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require_once('parts/db.php');
                                            $select = "SELECT * FROM post ORDER BY post_id DESC LIMIT 10";
                                            $run = mysqli_query($conn, $select);
                                            while ($row = mysqli_fetch_array($run)) {

                                                $post_id = $row['post_id'];
                                                $post_title = $row['post_title'];
                                                $post_url = $row['post_url'];

                                            ?>
                                            <tr>
                                                <td><?php echo $post_title; ?></td>
                                                <td><?php echo $post_url; ?></td>
                                            </tr>
                                            <?php    } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-product me-1"></i>
                                    Most Popular Products
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>URL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require_once('parts/db.php');
                                            $select = "SELECT * FROM product ";
                                            $run = mysqli_query($conn, $select);
                                            while ($row = mysqli_fetch_array($run)) {

                                                $product_id = $row['product_id'];
                                                $product_name = $row['product_name'];
                                                $product_url = $row['product_url'];

                                            ?>
                                            <tr>
                                                <td><?php echo $product_name; ?></td>
                                                <td><?php echo $product_url; ?></td>
                                            </tr>
                                            <?php    } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----start chart
                  <div class="row">
                      <div class="col-xl-6">
                          <div class="card mb-4">
                              <div class="card-header">
                                  <i class="fas fa-chart-area me-1"></i>
                                  Area Chart Example
                              </div>
                              <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                          </div>
                      </div>
                      <div class="col-xl-6">
                          <div class="card mb-4">
                              <div class="card-header">
                                  <i class="fas fa-chart-bar me-1"></i>
                                  Bar Chart Example
                              </div>
                              <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                          </div>
                      </div>
                  </div>
                  end chart--->
                </div>
            </main>
            <?php require_once('parts/footer.php'); ?>
        </div>
    </div>
    <!--Footercdn--->
    <?php require_once('parts/footercdn.php'); ?>
</body>

</html>