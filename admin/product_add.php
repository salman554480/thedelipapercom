<?php  require_once('parts/top.php');?>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body class="sb-nav-fixed">

    <?php  require_once('parts/navbar.php');?>

    <div id="layoutSidenav">

        <?php  require_once('parts/sidebar.php');?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h4 class="mt-3">Add Product</h1>

                        <form method="POST">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Product Name</label>
                                        <input type="text" name="product_name" id="product_name" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Product URL</label>
                                        <input type="text" name="product_url" id="product_url" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label>Product Content</label>
                                        <div id="editor" style="height: 300px;"></div>
                                        <textarea name="product_content" id="content" style="display:none;"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Product Thumbnail (filename only)</label>
                                        <input type="text" name="product_thumbnail" class="form-control"
                                            placeholder="example.jpg">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Status</label>
                                        <select name="product_status" class="form-control">
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label>Meta Title</label>
                                        <input type="text" name="product_meta_title" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label>Meta Keywords</label>
                                        <input type="text" name="product_meta_keywords" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label>Meta Description</label>
                                        <textarea name="product_meta_desrciption" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" class="btn btn-primary">Add Product</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

                        <script>
                        // Initialize Quill Editor
                        var quill = new Quill('#editor', {
                            theme: 'snow'
                        });

                        // Listen for the text-change event in Quill to update the hidden textarea
                        quill.on('text-change', function(delta, oldDelta, source) {
                            // Update the hidden textarea with the current HTML content of the editor
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
    $product_name = $_POST['product_name'];
    $product_url = $_POST['product_url'];
    $product_content = $_POST['product_content'];
    $product_thumbnail = $_POST['product_thumbnail']; // Now just plain text
    $product_meta_title = $_POST['product_meta_title'];
    $product_meta_desrciption = $_POST['product_meta_desrciption'];
    $product_meta_keywords = $_POST['product_meta_keywords'];
    $product_status = $_POST['product_status'];



    $product_content = str_replace("'", "\'", $product_content);
    $product_meta_title = str_replace("'", "\'", $product_meta_title);
    $product_meta_desrciption = str_replace("'", "\'", $product_meta_desrciption);

    // Insert query
    $sql = "INSERT INTO product (
        product_name,
        product_url,
        product_content,
        product_thumbnail,
        product_meta_title,
        product_meta_desrciption,
        product_meta_keywords,
        product_status
    ) VALUES (
        '$product_name',
        '$product_url',
        '$product_content',
        '$product_thumbnail',
        '$product_meta_title',
        '$product_meta_desrciption',
        '$product_meta_keywords',
        '$product_status'
    )";

    if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success'>Product added successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
}
?>


            </main>

            <?php  require_once('parts/footer.php');?>

        </div>

    </div>
    <!--Footercdn--->
    <?php require_once('parts/footercdn.php');?>

</body>

</html>