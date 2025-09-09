<?php
$select_post = "SELECT * FROM post where post_url='$slug'";
$resultselect_post = mysqli_query($conn, $select_post);
if (mysqli_num_rows($resultselect_post) > 0) {
    $resultselect_post = mysqli_fetch_array($resultselect_post);
    $post_title = $resultselect_post["post_title"];
    $post_content = $resultselect_post["post_content"];
    $post_url = $resultselect_post["post_url"];
    $post_thumbnail = $resultselect_post["post_thumbnail"];
    $post_date = $resultselect_post["post_date"];
    $post_author = $resultselect_post["admin_id"];

    $formatted_date = date("F j, Y", strtotime($post_date));

    $select_author = "SELECT * FROM admin where admin_id='$post_author'";
    $resultselect_author = mysqli_query($conn, $select_author);
    if (mysqli_num_rows($resultselect_author) > 0) {
        $resultselect_author = mysqli_fetch_array($resultselect_author);
        $author_name = $resultselect_author["admin_name"];
    } else {
        $author_name = "Unknown";
    }
} else {
    header("Location: index.php");
}
?>
<section class=" wax-product-section mb-5 pb-5">
    <div class="container-fluid">
        <div class="row ml-5 mr-5 pl-3 pr-3 mt-5 justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-8 col-12 flex-padding">
                <div class="col-12">
                    <div class="not-found d-none">
                        <h1 class="  text-found">Nothing Found</h1>
                        <p class="mt-5 para-found">Sorry, but nothing matched your search terms. Please try again
                            with some different keywords.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-3 flex-padding-blog">
                        <a href="#" class="text-blog-product mt-3">BLog <span><i class="bx bxs-dot"></i></span>The
                            Deli
                            Paper Products &nbsp; &nbsp; <span
                                class="mr-3 para-blog-product text-capitalize"><?php echo $formatted_date; ?></span>
                            <span class="para-blog-product text-capitalize   ">By</span> <span
                                class="span-paper text-capitalize"> <?php echo $author_name; ?> </span></a>
                        <h1 class="alpha entry-title"><?php echo $post_title; ?>
                        </h1>




                        <div class="post-excerpt">
                            <p>Butcher paper is a versatile packaging material that has become essential in the
                                worlds of food service, BBQ culture and meat packaging. If you run a busy restaurant
                                or manage a meat shop, or smoke meats for commercial or competition sales, bulk
                                butcher rolls can be a great investment. Explores some of the advantages to [¡K]</p>
                        </div>
                        <div class="position-relative blog-wrapper mb-2">
                            <!-- <img src="<?php echo $website_url; ?>/assets/img/<?php echo $post_thumbnail ?>" class="img-fluid w-100" alt=""> -->
                            <img src="https://thedelipaper.com/wp-content/uploads/2025/07/Food-wrapping-paper.png"
                                class="img-fluid w-100" alt="">
                        </div>

                        <div class="content-area">
                            <?php echo $post_content; ?>
                        </div>


                        <div class="tags-links">
                            <a href="#" rel="tag">butcher paper</a>
                        </div>

                        <hr>
                        <div class="d-flex align-items-center">
                            <img src="assets/images/recent-img-01.png" class="img-fluid thumbnail-img" alt="">
                            <div class="detail-blog-recent">
                                <p class="mb-0 text-uppercase d-flex align-items-center"
                                    style="color: #999; font-size: .95rem;"><i class="bx bx-chevron-left"
                                        style="font-size: 18px;"></i><b>PREVIOUS POST </b> </p>
                                <h4 class="mt-2"><a href="#"> Find trusted suppliers to buy food <br> wrapping paper
                                        in the USA </a></h4>
                            </div>
                        </div>
                        <hr>
                        <span id="reply-title" class="gamma comment-reply-title">Leave a Reply</span>
                        <form action="" method="post">
                            <p class="comment-notes"><span id="email-notes">Your email address will not be
                                    published.</span> <span class="required-field-message">Required fields are
                                    marked <span class="required">*</span></span></p>
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-12 flex-padding">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-field-name"
                                            placeholder="Your name" name="comment_name">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-12 flex-padding">
                                    <div class="form-group">
                                        <input type="email" class="form-control input-field-name"
                                            placeholder="Business email" name="comment_email">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-12 flex-padding">
                                    <div class="form-group">
                                        <input type="text" class="form-control input-field-name"
                                            placeholder="Your Website" name="comment_url">
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12 flex-padding">
                                    <div class="form-group">
                                        <textarea name="comment_text" id="" rows="4" class="form-control input-field-name"
                                            placeholder="Comment"></textarea>
                                        <!-- <input type="text" class="form-control input-field-name" placeholder="Your Website"> -->
                                    </div>
                                </div>
                                <div class="col-xl-12 flex-padding">
                                    <div class="form-check ">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Save my name, email, and
                                            website in this browser for the next time I comment.</label>
                                    </div>
                                </div>
                                <div class="col-xl-12 mt-4 flex-padding">
                                    <button
                                        class="btn-slide-loop d-flex mr-auto justify-content-start align-items-center"
                                        type="submit" name="insert-data"><span>POST COMMENT </span> <i class="bx bx-chevron-right"
                                            style="font-size: 22px;"></i></button>
                                </div>
                            </div>
                        </form>
                        <?php  
                        require_once('db.php');
                        
                        if(isset($_POST['insert-data'])){
                            
                            $comment_name = $_POST['comment_name'];   
                            $comment_email = $_POST['comment_email'];   
                            $comment_url = $_POST['comment_url'];   
                            $comment_text = $_POST['comment_text'];   
                        
                            $insert = "INSERT INTO comment (comment_name,comment_email,comment_url,comment_text)VALUES('$comment_name','$comment_email','$comment_url','$comment_text')";
                            
                            $run_insert = mysqli_query($conn,$insert);
                            
                            if($run_insert === true){
                            echo "<script>alert('Comment Inserted');</script>";
                            }else{
                                echo "Try Again";
                            }
                            
                            }
                    ?>
                    </div>


                </div>

            </div>
            <div class="col-xl-3 col-lg-4 col-md-4 col-12 right-side-search-section ml-5">
                <?php require_once('parts/blog_sidebar.php'); ?>
            </div>
        </div>
    </div>

</section>