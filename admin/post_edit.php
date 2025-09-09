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
                                <label class="form-label">Thumbnail</label><br>
                                <?php if (!empty($post_thumbnail)): ?>
                                    <img src="assets/img/<?php echo htmlspecialchars($post_thumbnail); ?>" alt="Current Thumbnail" style="max-width: 150px; margin-bottom: 10px;">
                                <?php endif; ?>
                                <input type="file" name="post_thumbnail" class="form-control" accept="image/*">
                                <!-- Optional: Hidden input to keep current thumbnail filename -->
                                <input type="hidden" name="current_thumbnail" value="<?php echo htmlspecialchars($post_thumbnail); ?>">
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

                    $emeta_title = htmlspecialchars($_POST['meta_title'], ENT_QUOTES, 'UTF-8');
                    $emeta_description = htmlspecialchars($_POST['meta_description'], ENT_QUOTES, 'UTF-8');
                    $emeta_keyword = htmlspecialchars($_POST['meta_keyword'], ENT_QUOTES, 'UTF-8');

                    // Handle thumbnail upload
                    $post_id = intval($_GET['edit']); // Make sure you have $post_id from your URL or context

                    if (isset($_FILES['post_thumbnail']) && $_FILES['post_thumbnail']['error'] == 0) {
                        $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                        $file_tmp = $_FILES['post_thumbnail']['tmp_name'];
                        $file_name = basename($_FILES['post_thumbnail']['name']);
                        $file_type = mime_content_type($file_tmp);

                        if (in_array($file_type, $allowed_types)) {
                            $ext = pathinfo($file_name, PATHINFO_EXTENSION);
                            $new_file_name = uniqid('thumb_', true) . '.' . $ext;

                            $upload_dir = '../assets/img/';
                            $upload_path = $upload_dir . $new_file_name;

                            if (move_uploaded_file($file_tmp, $upload_path)) {
                                $epost_thumbnail = $new_file_name;

                                // Optional: Delete old thumbnail file if it exists and is different
                                if (!empty($_POST['current_thumbnail']) && $_POST['current_thumbnail'] !== $new_file_name) {
                                    $old_file = $upload_dir . $_POST['current_thumbnail'];
                                    if (file_exists($old_file)) {
                                        unlink($old_file);
                                    }
                                }
                            } else {
                                echo "<script>alert('Failed to upload new thumbnail');</script>";
                                exit;
                            }
                        } else {
                            echo "<script>alert('Invalid thumbnail file type');</script>";
                            exit;
                        }
                    } else {
                        // No new file uploaded, keep current thumbnail
                        $epost_thumbnail = $_POST['current_thumbnail'];
                    }

                    // Escape quotes properly
                    $emeta_title = str_replace("'", "\'", $emeta_title);
                    $emeta_description = str_replace("'", "\'", $emeta_description);
                    $emeta_keyword = str_replace("'", "\'", $emeta_keyword);
                    $epost_title = str_replace("'", "\'", $epost_title);
                    $epost_content = str_replace("'", "\'", $epost_content);
                    $epost_content = str_replace("’", "\'", $epost_content);

                    // Update post query
                    $update_post = "UPDATE post SET 
          post_title='$epost_title',
          post_url='$epost_url',
          post_content='$epost_content',
          post_thumbnail='$epost_thumbnail',
          post_status='$epost_status', 
          post_index='$epost_index' 
          WHERE post_id='$post_id'";


                    $run_update = mysqli_query($conn, $update_post);

                    if ($run_update) {

                        $update_meta = "UPDATE meta SET 
            slug='$epost_url',
            meta_title='$emeta_title',
            meta_description='$emeta_description',
            meta_keyword='$emeta_keyword' 
            WHERE slug='$post_url'";

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