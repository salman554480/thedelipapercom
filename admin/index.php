<?php	require_once('parts/top.php'); ?>
</head>
<body class="sb-nav-fixed">
   <?php  require_once('parts/navbar.php');?>
   <div id="layoutSidenav">
      <?php require_once('parts/sidebar.php');?>
      <div id="layoutSidenav_content">
         <main>
            <div class="container-fluid px-4">
               <br>
               <h2 class="mt-1">Dashboard</h2>
               <hr>
               <div class="row">
                  <?php 
                     require_once('parts/db.php');
                     
                     $select_calculator = "SELECT * FROM calculator ";
                     $run_calculator = mysqli_query($conn,$select_calculator);
                     $total_calculator = mysqli_num_rows($run_calculator);
                     
                     $select_category = "SELECT * FROM category ";
                     $run_category = mysqli_query($conn,$select_category);
                     $total_category = mysqli_num_rows($run_category);
					 
					 $select_views = "SELECT SUM(calculator_views) AS calculator_views FROM calculator ";
                     $run_views = mysqli_query($conn,$select_views);
                     $row_views =  mysqli_fetch_array($run_views);
					 $total_views =  $row_views['calculator_views'];	
                     
                     
                     
                     ?>
                  <div class="col-xl-3 col-md-6">
                     <div class="card bg-primary text-white mb-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                           <h4>Total Calculators</h4>
                           <h3><?php echo $total_calculator;?></h3>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                           <a href="calculator_view.php"><small class="small text-white stretched-link">View Calculator Details</small></a>
                           <div class="small text-white">
                              <i class="fas fa-angle-right"></i>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="card bg-success text-white mb-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                           <h4>Total Categories</h4>
                           <h3><?php echo $total_category;?></h3>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                           <a href="category_view.php"><small class="small text-white stretched-link">View Category Details</small></a>
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
                           <h3><?php echo $total_views;?></h3>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                           <a href="calculator_view.php"><small class="small text-white stretched-link">View Calculator Details</small></a>
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
                           <a href="category_view.php"><small class="small text-white stretched-link">View Category Details</small></a>
                           <div class="small text-white">
                              <i class="fas fa-angle-right"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-8">
                     <div class="card mb-4">
                        <div class="card-header">
                           <i class="fas fa-calculator me-1"></i>
                           Latest Added Calculators
                        </div>
                        <div class="card-body">
                           <table  class="table table-hover table-bordered">
                              <thead>
                                 <tr>
                                    <th>Title</th>
                                    <th>URL</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    require_once('parts/db.php'); 
                                     $select = "SELECT * FROM calculator ORDER BY calculator_id DESC LIMIT 10";
                                     $run = mysqli_query($conn,$select);
                                     while( $row = mysqli_fetch_array ($run)){
                                    
                                    $category_id = $row ['category_id'];
                                    $calculator_title = $row ['calculator_title'];
                                    $calculator_url = $row ['calculator_url'];
                                    
                                    ?>
                                 <tr>
                                    <td><?php echo $calculator_title;?></td>
                                    <td><?php echo $calculator_url;?></td>
                                 </tr>
                                 <?php    }?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
				  <div class="col-xl-4">
                     <div class="card mb-4">
                        <div class="card-header">
                           <i class="fas fa-calculator me-1"></i>
                           Most Popular Calculators
                        </div>
                        <div class="card-body">
                           <table  class="table table-hover table-bordered">
                              <thead>
                                 <tr>
                                    <th>Title</th>
                                    <th>View</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php 
                                    require_once('parts/db.php'); 
                                     $select = "SELECT * FROM calculator ORDER BY calculator_views DESC LIMIT 10";
                                     $run = mysqli_query($conn,$select);
                                     while( $row = mysqli_fetch_array ($run)){
                                    
                                    $category_id = $row ['category_id'];
                                    $calculator_title = $row ['calculator_title'];
                                    $calculator_url = $row ['calculator_url'];
                                    $calculator_views = $row ['calculator_views'];
                                    
                                    ?>
                                 <tr>
                                    <td><?php echo $calculator_title;?></td>
                                    <td><?php echo $calculator_views;?></td>
                                 </tr>
                                 <?php    }?>
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
         <?php require_once('parts/footer.php');?>
      </div>
   </div>
   <!--Footercdn--->
   <?php require_once('parts/footercdn.php');?>
</body>
</html>