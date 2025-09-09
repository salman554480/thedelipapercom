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
                        <h4 class="mb-3">Add Post</h4>

                        <a href="admin_view.php" class="btn btn-sm btn-outline-danger">View Record*</a>
                        <a href="admin_trash.php" class="btn btn-sm btn-outline-primary ">Trash Record*</a>
                    </div>
                </div>
                <!-- End Page Header -->

                <!-- form start -->
                <div class="card mb-1">

                    <div class="card-header">
                        Enter Post Record
                    </div>

                    <div class="card-body">
                        <form class="row g-3" action="" method="post" enctype="multipart/form-data">

                            <div class="col-md-12">
                                <label class="form-label">Category</label>
                                <select class="form-select" name="category_id" id="example-select">
                                    <option>Select Category</option>
									<?php 
									require_once('parts/db.php');

									$select_category = "SELECT * FROM category ORDER BY category_name ASC";

									$run_category = mysqli_query($conn, $select_category);
									while ($row_category = mysqli_fetch_array($run_category)) {

										$category_id = $row_category['category_id'];
										$category_name = $row_category['category_name'];

									?>
									<option value="<?php echo $category_id; ?>"> <?php echo $category_name; ?></option>
									<?php } ?>
								</select>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="form-label">Title</label>
                                <input type="text" name="post_title" id="post_title" class="form-control" autofocus
                                    required />
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">URL*</label>
                                <input type="text" name="post_url" id="post_url" class="form-control" autofocus
                                    required />
                            </div>



                            <div class="col-md-12">
                                <label class="form-label">Content*</label>
                                <textarea name="content" id="editor"></textarea>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Meta Keywords</label>
                                <input type="text" name="meta_keyword" class="form-control">
                            </div>

                            <div class="col-md-12">
                                <label class="form-label">Meta Description</label>
                                <textarea id="" type="text" name="meta_description" class="form-control"></textarea>
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Thumbnail</label>
                                <input type="file" name="post_thumbnail" class="form-control" accept="image/*" required>
                            </div>
                            
                            <div class="col-md-3">
                                <label class="form-label">Tag</label>
                                <input type="text" name="post_tag" class="form-control">
                            </div>

                            <div class="col-md-3">
                                <label class="form-label">Status</label>
                                <select name="post_status" class="form-control">
                                    <option value="publish">Publish</option>
                                    <option value="draft">Draft</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Index</label>
                                <select name="post_index" class="form-control">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>


                            <br><br><br><br>
                            <div class="col-md-12">

                                <input type="submit" name="insert_btn" class="btn btn-sm btn-success"
                                    value="Add Record" />
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
                if (isset($_POST['insert_btn'])) {

                    // Other variables
                    $post_title = htmlspecialchars($_POST['post_title']);
                    $post_url = $_POST['post_url'];
                    $post_content = addslashes($_POST['content']);
                    $post_status = $_POST['post_status'];
                    $post_index = $_POST['post_index'];
                    $post_tag = $_POST['post_tag'];
                    $category_id = $_POST['category_id'];
                    $meta_title = htmlspecialchars($_POST['meta_title']);
                    $meta_description = htmlspecialchars($_POST['meta_description']);
                    $meta_keyword = htmlspecialchars($_POST['meta_keyword']);
                    $post_date = date('Y-m-d');

                    // Handle file upload
                    if (isset($_FILES['post_thumbnail']) && $_FILES['post_thumbnail']['error'] == 0) {
                        $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                        $file_tmp = $_FILES['post_thumbnail']['tmp_name'];
                        $file_name = basename($_FILES['post_thumbnail']['name']);
                        $file_type = mime_content_type($file_tmp);

                        if (in_array($file_type, $allowed_types)) {
                            // Create unique filename to prevent overwrite
                            $ext = pathinfo($file_name, PATHINFO_EXTENSION);
                            $new_file_name = uniqid('thumb_', true) . '.' . $ext;

                            $upload_dir = 'assets/img/';
                            $upload_path = $upload_dir . $new_file_name;

                            // Move uploaded file
                            if (move_uploaded_file($file_tmp, $upload_path)) {
                                $post_thumbnail = $new_file_name;
                            } else {
                                echo "<script>alert('Failed to upload thumbnail');</script>";
                                exit;
                            }
                        } else {
                            echo "<script>alert('Invalid file type. Only JPG, PNG, GIF, and WEBP are allowed.');</script>";
                            exit;
                        }
                    } else {
                        $post_thumbnail = '';  // Or set a default image filename if you want
                    }

                    // Insert post into database
                    $insert_admin = "INSERT INTO post(
        post_title,
        post_content,
        post_url,
        post_thumbnail,
        post_date,
        post_status,
        post_index,
        category_id,
        post_tag
    ) VALUES (
        '$post_title',
        '$post_content',
        '$post_url',
        '$post_thumbnail',
        '$post_date',
        '$post_status',
        '$post_index',
        '$category_id',
        '$post_tag'
    )";

                    $run_admin = mysqli_query($conn, $insert_admin);

                    if ($run_admin == true) {

                        $select_latest = "SELECT * FROM post WHERE post_url='$post_url'";
                        $run_latest = mysqli_query($conn, $select_latest);
                        $row_latest_post = mysqli_fetch_array($run_latest);
                        $post_id = $row_latest_post['post_id'];

                        $insert_meta = "INSERT INTO meta(slug, meta_title, meta_description, meta_keyword, meta_source, meta_source_id) VALUES('$post_url', '$meta_title', '$meta_description', '$meta_keyword', 'post', '$post_id')";
                        $run_meta = mysqli_query($conn, $insert_meta);

                        echo "<script>alert('Record Added');</script>";
                        echo "<script>window.open('post_view.php','_self');</script>";
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