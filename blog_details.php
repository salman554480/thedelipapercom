<?php 
require_once('admin/parts/db.php');
if(isset($_GET['post_url'])){
    $post_url = $_GET['post_url'];
  $select_post = "SELECT * FROM post where post_url='$post_url'";
 $run_post = mysqli_query($conn, $select_post);
 $row_post= mysqli_fetch_array($run_post);

     $post_id = $row_post['post_id'];
    $post_title = $row_post['post_title'];
     $post_url = $row_post['post_url'];
     $post_status = $row_post['post_status'];
     $post_thumbnail = $row_post['post_thumbnail'];
     $post_content = $row_post['post_content'];
     $post_date = $row_post['post_date'];

     $select_meta = "SELECT * FROM meta WHERE meta_source='post' and meta_source_id='$post_id'";
     $result_meta = mysqli_query($conn, $select_meta);
     $row_meta = mysqli_fetch_array($result_meta);
     $meta_title = $row_meta['meta_title'];
     $meta_description = $row_meta['meta_description'];
     $meta_keyword = $row_meta['meta_keyword'];
     

 }
?>
<?php require_once('parts/top.php'); ?>

</head>

<body>
    <?php require_once('parts/navbar.php'); ?>
    <div class="website-area">
        <div class="w-90 py-5 ">
            <h1 class="section-heading text-center"><?php echo $post_title;?></h1>
            <p class="text-center text-muted">Published on: <i class='bx bxs-calendar'></i> <?php echo $post_date;?></p>
            <div class="row my-3">
                <div class="col-md-12">
                    <img src="admin/assets/img/<?php echo $post_thumbnail;?>" class="w-50 mx-auto d-block" title=""
                        alt="">
                    <div class="content-area my-4">
                        <?php echo $post_content;?>
                    </div>

                </div>


            </div>
        </div>

    </div>




    <?php require_once('parts/footer.php'); ?>