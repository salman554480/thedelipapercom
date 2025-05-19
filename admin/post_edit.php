<?php
$page = "post";
require_once('parts/top.php'); ?>

<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
</head>

<body class="sb-nav-fixed">

    <?php require_once('parts/navbar.php'); ?>

    <div id="layoutSidenav">


        <?php require_once('parts/sidebar.php'); ?>

        <div id="layoutSidenav_content">
            <div class="main-content-container container-fluid px-4">
                <!-- Page Header -->
                <div class="page-header ">
                    <div class="col-12 mt-4  mb-4">
                        <h4 class="mb-3">Edit Post</h4>

                        <a href="post_view.php" class="btn btn-sm btn-outline-danger">View Record</a>
                    </div>
                </div>
                <!-- End Page Header -->


                <?php
                if (isset($_GET['edit'])) {
                    $post_id = $_GET['edit'];
                    $query = "SELECT * FROM post WHERE post_id = '$post_id'";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_array($result);
                    $post_title = $row['post_title'];
                    $post_content = $row['post_content'];
                    $post_content = $row['post_content'];
                    $post_status = $row['post_status'];
                    $post_index = $row['post_index'];
                    $post_url = $row['post_url'];
                    $post_thumbnail = $row['post_thumbnail'];

                    $select_meta = "SELECT * FROM meta WHERE meta_source='post' and meta_source_id='$post_id'";
                    $result_meta = mysqli_query($conn, $select_meta);
                    $row_meta = mysqli_fetch_array($result_meta);
                    $meta_title = $row_meta['meta_title'];
                    $meta_description = $row_meta['meta_description'];
                    $meta_keyword = $row_meta['meta_keyword'];
                }
                ?>

                <!-- form start -->
                <div class="card mb-1">

                    <div class="card-header">
                        Enter Post Record
                    </div>

                    <div class="card-body">
                        <form class="row g-3" action="" method="post" enctype="multipart/form-data">

                            <div class="col-md-6">
                                <label class="form-label">Title</label>
                                <input type="text" name="post_title" id="post_title" value="<?php echo $post_title; ?>"
                                    class="form-control" autofocus required />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">URL*</label>
                                <input type="text" name="post_url" value="<?php echo $post_url; ?>" id="post_url"
                                    class="form-control" autofocus required />
                            </div>



                            <div class="col-md-12">
                                <label class="form-label">Content*</label>
                                <textarea name="content" id="editor"><?php echo $post_content; ?></textarea>

                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Meta Title</label>
                                <input type="text" name="meta_title" value="<?php echo $meta_title; ?>"
                                    class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Meta Keywords</label>
                                <input type="text" name="meta_keyword" value="<?php echo $meta_keyword; ?>"
                                    class="form-control">
                            </div>

                            <div class="col-md-12">
                                <label class="form-label">Meta Description</label>
                                <textarea id="" type="text" name="meta_description"
                                    class="form-control"><?php echo $meta_description; ?></textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Thumbnail</label>
                                <input type="text" value="<?php echo $post_thumbnail; ?>" name="post_thumbnail"
                                    class="form-control">

                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Status</label>
                                <select name="post_status" class="form-control">
                                    <option value="<?php echo $post_status; ?>"><?php echo $post_status; ?>
                                    </option>
                                    <option value="publish">Publish</option>
                                    <option value="draft">Draft</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Index</label>
                                <select name="post_index" class="form-control">
                                    <option value="<?php echo $post_index; ?>"><?php echo $post_index; ?>
                                    </option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>


                            <br><br><br><br>
                            <div class="col-md-12">

                                <input type="submit" name="insert_btn" class="btn btn-sm btn-success"
                                    value="Save Changes" />
                            </div>

                        </form>

                        <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

                        <script>
                        ClassicEditor
                            .create(document.querySelector('#editor'))
                            .catch(error => {
                                console.error(error);
                            });
                        </script>


                        <script>
                        // Function to generate a slug from a string
                        function generateSlug(title) {
                            return title
                                .toLowerCase() // Convert to lowercase
                                .replace(/\s+/g, '-') // Replace spaces with dashes
                                .replace(/[^a-z0-9-]/g, '') // Remove non-alphanumeric characters and dashes
                                .replace(/--+/g, '-'); // Replace multiple dashes with a single dash
                        }

                        // Get references to the title and URL input fields
                        const titleInput = document.getElementById('post_title');
                        const urlInput = document.getElementById('post_url');

                        // Add event listener to the title input field
                        titleInput.addEventListener('input', function() {
                            const titleValue = titleInput.value;
                            const slug = generateSlug(titleValue);
                            urlInput.value = slug;
                        });
                        </script>


                    </div>
                </div>
                <!-- form end -->



                <?php
                require_once('parts/db.php');
                if (isset($_POST['insert_btn'])) {

                    $epost_title = $_POST['post_title'];
                    $epost_url = $_POST['post_url'];
                    $epost_content = $_POST['content'];
                    $epost_status = $_POST['post_status'];
                    $epost_index = $_POST['post_index'];
                    $epost_thumbnail = $_POST['post_thumbnail'];

                    $epost_title = str_replace("'", "\'",$epost_title);
                    $epost_content = str_replace("’", "\'", $epost_content);
                    $emeta_title = htmlspecialchars($_POST['meta_title'], ENT_QUOTES, 'UTF-8');
                    $emeta_description = htmlspecialchars($_POST['meta_description'], ENT_QUOTES, 'UTF-8');
                    $emeta_keyword = htmlspecialchars($_POST['meta_keyword'], ENT_QUOTES, 'UTF-8');



                    $update_post = "UPDATE post SET 
          post_title='$epost_title',
          post_url='$epost_url',
          post_content='$epost_content',
          post_thumbnail='$epost_thumbnail',
          post_status='$epost_status', 
          post_index='$epost_index' 
          WHERE post_id='$post_id'";

                    $run_update = mysqli_query($conn, $update_post);

                    if ($run_update == true) {



                        $update_meta = "UPDATE meta SET meta_title='$emeta_title',meta_description='$emeta_description',meta_keyword='$emeta_keyword' WHERE meta_source='post' and meta_source_id='$post_id'";
                        $run_meta = mysqli_query($conn, $update_meta);

                        echo "<script>alert('Record UPDATED');</script>";
                        echo "<script>window.open('post_edit.php?edit=$post_id','_self');</script>";
                    } else {
                        echo "<script>alert('Failed');</script>";
                    }
                }

                ?>




            </div>
            <?php require_once('parts/footer.php'); ?>
        </div>

    </div>
    <!--FooterCdn-->
    <?php require_once('parts/footercdn.php'); ?>
</body>

</html>