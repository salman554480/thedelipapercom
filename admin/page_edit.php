<?php
$page = "page";
require_once('parts/top.php'); ?>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<?php echo require_once('parts/top.php'); ?>
</head>

<body class="sb-nav-fixed">

    <?php require_once('parts/navbar.php'); ?>

    <div id="layoutSidenav">

        <?php require_once('parts/sidebar.php'); ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="main-content-container container-fluid px-4">
                    <!-- Page Header -->

                    <div class="page-header ">
                        <div class="col-12 mt-4  mb-4 ">
                            <h4 class="mb-3">Edit Page</h4>

                        </div>
                    </div>
                    <!-- End Page Header -->

                    <!-- form start -->
                    <div class="card mb-1">

                        <div class="card-header">
                            Edit page Record
                        </div>

                        <?php
                        require_once('parts/db.php');
                        if (isset($_GET['edit'])) {
                            $edit_id = $_GET['edit'];

                            $select_page = "SELECT * FROM page WHERE page_id='$edit_id'";
                            $run_page = mysqli_query($conn, $select_page);
                            $row_page = mysqli_fetch_array($run_page);

                            $page_id = $row_page['page_id'];
                            $page_title = $row_page['page_title'];
                            $page_url = $row_page['page_url'];
                            $page_content = $row_page['page_content'];
                            $meta_title = $row_page['meta_title'];
                            $meta_description = $row_page['meta_description'];
                            $meta_keywords = $row_page['meta_keywords'];
                        }
                        ?>


                        <div class="card-body">
                            <form class="row g-3" action="" method="post" enctype="multipart/form-data">

                                <div class="col-md-6">
                                    <label class="form-label">Title*</label>
                                    <input type="text" name="page_title" id="page_title"
                                        value="<?php echo $page_title; ?>" class="form-control" autofocus required />
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">URL*</label>
                                    <input type="text" name="page_url" id="page_url" value="<?php echo $page_url; ?>"
                                        class="form-control" required />
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Content*</label>
                                    <div id="editor-container" style="height: 300px;"></div>
                                    <!-- Hidden textarea to hold content for submission -->
                                    <textarea id="content" name="content" class="add-new-post__editor mb-1"
                                        style="display:none;"></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Meta Title*</label>
                                    <input type="text" name="meta_title" value="<?php echo $meta_title; ?>"
                                        class="form-control" required />
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Meta Keywords*</label>
                                    <input type="text" name="meta_keywords" value="<?php echo $meta_keywords; ?>"
                                        class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Meta Description*</label>
                                    <textarea name="meta_description"
                                        class="form-control"><?php echo $meta_description; ?></textarea>
                                </div>
                                <br><br>
                                <div class="col-md-12">

                                    <input type="submit" name="insert_btn" class="btn btn-sm btn-success"
                                        value="Update Record" />
                                </div>

                            </form>



                            <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
                            <script>
                            // Initialize Quill editor
                            var quill = new Quill('#editor-container', {
                                theme: 'snow',
                                modules: {
                                    toolbar: [
                                        [{
                                            'header': '1'
                                        }, {
                                            'header': '2'
                                        }, {
                                            'font': []
                                        }],
                                        [{
                                            'list': 'ordered'
                                        }, {
                                            'list': 'bullet'
                                        }],
                                        ['bold', 'italic', 'underline'],
                                        ['link'],
                                        [{
                                            'align': []
                                        }],
                                        ['image']
                                    ]
                                }
                            });

                            // Set existing content from PHP variable ($page_content) into the Quill editor
                            var pageContent = <?php echo json_encode($page_content); ?>;
                            quill.clipboard.dangerouslyPasteHTML(pageContent);

                            // Initially populate the hidden textarea
                            document.querySelector('#content').value = pageContent;

                            // Listen for the text-change event in Quill to update the hidden textarea
                            quill.on('text-change', function(delta, oldDelta, source) {
                                document.querySelector('#content').value = quill.root.innerHTML;
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
                            const titleInput = document.getElementById('page_title');
                            const urlInput = document.getElementById('page_url');

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
                        // Capture all input fields
                        $epage_title = $_POST['page_title'];
                        $epage_url = $_POST['page_url'];
                        $epage_content = $_POST['content']; // This should now have the correct HTML content
                        $emeta_title = $_POST['meta_title'];
                        $emeta_description = $_POST['meta_description'];
                        $emeta_keywords = $_POST['meta_keywords'];

                        // Sanitize content and other input fields for safe insertion into the database
                        $epage_content = str_replace("'", "\'", $epage_content);
                        $emeta_title = str_replace("'", "\'", $emeta_title);
                        $emeta_description = str_replace("'", "\'", $emeta_description);

                        // Prepare and execute the update query
                        $update_page = "UPDATE page SET page_title='$epage_title', page_url='$epage_url', page_content='$epage_content' WHERE page_id='$edit_id'";

                        $run_page = mysqli_query($conn, $update_page);

                        if ($run_page) {
                            $update_meta = "UPDATE meta SET slug='$epage_url',meta_title='$emeta_title',meta_description='$emeta_description',meta_keyword='$emeta_keywords' where slug='$page_url'";
                            $run_meta = mysqli_query($conn, $update_meta);
                            echo "<script>alert('Record updated successfully');</script>";
                            echo "<script>window.open('page_edit.php?edit=$edit_id','_self');</script>";
                        } else {
                            echo "<script>alert('Update failed');</script>";
                        }
                    }


                    ?>


                </div>

        </div>
    </div>
    <?php require_once('parts/footer.php'); ?>
    <!--Footercdn--->
    <?php require_once('parts/footercdn.php'); ?>

</body>

</html>