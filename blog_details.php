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

            <div class="row my-3">
                <div class="col-md-9">
                    <h1 class="section-heading text-center"><?php echo $post_title;?></h1>
                    <p class="text-center text-muted">Published on: <i class='bx bxs-calendar'></i>
                        <?php echo $post_date;?></p>
                    <img src="admin/assets/img/<?php echo $post_thumbnail;?>" class="w-50 mx-auto d-block" title=""
                        alt="">
                    <div class="content-area my-4">
                        <?php echo $post_content;?>
                    </div>

                </div>
                <div class="col-md-3">
                    <h5>Related Blogs</h5>
                    <div class="list-group mt-2" style="font-size:13px">
                        <?php

                        $select_other_post = "SELECT * FROM post where post_status='publish' ORDER BY post_id DESC";
                        $run_other_post = mysqli_query($conn, $select_other_post);
                        while ($row_other_post = mysqli_fetch_array($run_other_post)) {

                            $other_post_id = $row_other_post['post_id'];
                            $other_post_title = $row_other_post['post_title'];
                            $other_post_status = $row_other_post['post_status'];
                            $other_post_thumbnail = $row_other_post['post_thumbnail'];
                            $other_post_url = $row_other_post['post_url'];
                            $other_post_content = $row_other_post['post_content'];



                ?>
                        <a href="blog_details.php?post_url=<?php echo $other_post_url;?>"
                            class="list-group-item list-group-item-action"><?php echo $other_post_title;?></a>
                        <?php } ?>
                    </div>
                </div>


            </div>
        </div>

    </div>




    <?php require_once('parts/footer.php'); ?>