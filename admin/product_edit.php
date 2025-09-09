<?php
$page = "product";
require_once('parts/top.php'); ?>
<?php 
if($admin_role != "admin"){
    	echo "<script>window.open('post_view.php','_self');</script>";
}
?>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body class="sb-nav-fixed">

    <?php require_once('parts/navbar.php'); ?>

    <div id="layoutSidenav">

        <?php require_once('parts/sidebar.php'); ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h4 class="mt-3">Product Edit</h1>
                        <?php
                        if (isset($_GET['edit'])) {
                            $product_id =  $_GET['edit'];
                            $select = "SELECT * FROM product WHERE product_id='$product_id'";
                            $run = mysqli_query($conn, $select);
                            $row = mysqli_fetch_array($run);
                            $product_content = $row['product_content'];
                            $slug = $row['product_url'];
                            
                            
                            $select_meta = "SELECT * FROM meta WHERE meta_source='product' and slug='$slug'";
                            $run_meta =  mysqli_query($conn,$select_meta);
                            $row_meta =  mysqli_fetch_array($run_meta);
                            
                        }

                        ?>

                        <form method="POST">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Product Name</label>
                                        <input type="text" value="<?php echo $row['product_name']; ?>"
                                            name="product_name" id="product_name" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Product URL</label>
                                        <input type="text" value="<?php echo $row['product_url']; ?>" name="product_url"
                                            id="product_url" class="form-control">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label>Short Description</label>
                                        <textarea name="product_short_description"
                                            class="form-control"><?php echo $row['product_short_description']; ?></textarea>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label>Product Content</label>
                                        <div id="editor-container" style="height: 300px;"></div>
                                        <!-- Hidden textarea to hold content for submission -->
                                        <textarea id="content" name="content" class="add-new-post__editor mb-1"
                                            style="display:none;"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>Product Thumbnail (filename only)</label>
                                        <input type="text" value="<?php echo $row['product_thumbnail']; ?>"
                                            name="product_thumbnail" class="form-control" placeholder="example.jpg">
                                        <img src="assets/img/<?php echo $row['product_thumbnail']; ?>" height="50px">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label>Section 1 Image (filename only)</label>
                                        <input type="text" value="<?php echo $row['product_image1']; ?>"
                                            name="product_image1" class="form-control" placeholder="example.jpg">
                                        <img src="assets/img/<?php echo $row['product_image1']; ?>" height="50px">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label>Section 2 Image (filename only)</label>
                                        <input type="text" value="<?php echo $row['product_image2']; ?>"
                                            name="product_image2" class="form-control" placeholder="example.jpg">
                                        <img src="assets/img/<?php echo $row['product_image2']; ?>" height="50px">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Status</label>
                                        <select name="product_status" class="form-control">
                                            <option <?php if ($row['product_status'] == "active") {
                                                        echo "selected";
                                                    } ?> value="active">Active</option>
                                            <option <?php if ($row['product_status'] == "inactive") {
                                                        echo "selected";
                                                    } ?> value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Index</label>
                                        <select name="product_index" class="form-control">
                                            <option <?php if ($row['product_index'] == "yes") {
                                                        echo "selected";
                                                    } ?> value="yes">Yes</option>
                                            <option <?php if ($row['product_index'] == "no") {
                                                        echo "selected";
                                                    } ?> value="no">No</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Meta Title</label>
                                        <input type="text" value="<?php echo $row_meta['meta_title']; ?>"
                                            name="product_meta_title" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Meta Keywords</label>
                                        <input type="text" value="<?php echo $row_meta['meta_keywords']; ?>"
                                            name="product_meta_keywords" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label>Meta Description</label>
                                        <textarea name="product_meta_desrciption"
                                            class="form-control"><?php echo $row_meta['meta_description']; ?></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
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

                            // Set existing content from PHP variable ($product_content) into the Quill editor
                            var pageContent = <?php echo json_encode($product_content); ?>;
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
                            const titleInput = document.getElementById('product_name');
                            const urlInput = document.getElementById('product_url');

                            // Add event listener to the title input field
                            titleInput.addEventListener('input', function() {
                                const titleValue = titleInput.value;
                                const slug = generateSlug(titleValue);
                                urlInput.value = slug;
                            });
                        </script>
                        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get product ID from form (must be included in your form)
 
    // Escape all inputs properly
    $eproduct_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $eproduct_url = mysqli_real_escape_string($conn, $_POST['product_url']);
    $product_short_description = mysqli_real_escape_string($conn, $_POST['product_short_description']);
    $epage_content = mysqli_real_escape_string($conn, $_POST['content']);
    $product_thumbnail = mysqli_real_escape_string($conn, $_POST['product_thumbnail']);
    $product_image1 = mysqli_real_escape_string($conn, $_POST['product_image1']);
    $product_image2 = mysqli_real_escape_string($conn, $_POST['product_image2']);
    $product_meta_title = mysqli_real_escape_string($conn, $_POST['product_meta_title']);
    $product_meta_desrciption = mysqli_real_escape_string($conn, $_POST['product_meta_desrciption']);
    $product_meta_keywords = mysqli_real_escape_string($conn, $_POST['product_meta_keywords']);
    $product_status = mysqli_real_escape_string($conn, $_POST['product_status']);
    $product_index = mysqli_real_escape_string($conn, $_POST['product_index']);

    // Update product query
    $sql = "UPDATE product SET
        product_name = '$eproduct_name',
        product_thumbnail = '$product_thumbnail',
        product_image1 = '$product_image1',
        product_image2 = '$product_image2',
        product_url = '$eproduct_url',
        product_short_description = '$product_short_description',
        product_content = '$epage_content',
        product_status = '$product_status',
        product_index = '$product_index'
        WHERE product_id = '$product_id'";

    if (mysqli_query($conn, $sql)) {
        // Update meta info
        $update_meta = "UPDATE meta SET 
            slug = '$eproduct_url',
            meta_title = '$product_meta_title',
            meta_description = '$product_meta_desrciption',
            meta_keyword = '$product_meta_keywords'
            WHERE slug = '$eproduct_url'";
        
        $run_meta = mysqli_query($conn, $update_meta);

        echo "<script>alert('Query Succeeded');</script>";
        echo "<script>window.open('product_edit.php?edit=$product_id','_self');</script>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
}
?>



            </main>

            <?php require_once('parts/footer.php'); ?>

        </div>

    </div>
    <!--Footercdn--->
    <?php require_once('parts/footercdn.php'); ?>

</body>

</html>