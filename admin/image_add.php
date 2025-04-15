<?php require_once('parts/top.php'); ?>
<style>
.img-card {
    margin-bottom: 20px;
}

.img-thumbnail {
    height: 200px;
    object-fit: cover;
}

.delete-icon {
    color: red;
    cursor: pointer;
}
</style>
</head>

<body class="sb-nav-fixed">

    <?php require_once('parts/navbar.php'); ?>

    <div id="layoutSidenav">

        <?php require_once('parts/sidebar.php'); ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-3">Media</h4>


                        <form action="" method="POST" enctype="multipart/form-data">
                            <label>Select Images to Upload:</label>
                            <input type="file" name="images[]" multiple>
                            <br><br>
                            <button type="submit" class="btn btn-success" name="upload">Upload Images</button>
                        </form>
                        <?php

                        if (isset($_POST['upload'])) {
                            $uploadDir = 'assets/img/';

                            foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
                                $originalName = $_FILES['images']['name'][$key];
                                $fileSizeBytes = $_FILES['images']['size'][$key];
                                $tmpFile = $_FILES['images']['tmp_name'][$key];

                                // Convert file size to KB (rounded to 2 decimal places)
                                $fileSizeKB = round($fileSizeBytes / 1024, 2);

                                // Get file extension
                                $fileExtension = pathinfo($originalName, PATHINFO_EXTENSION);

                                // Generate unique file name: timestamp + original name
                                $uniqueID = time() . '_' . rand(1000, 9999);
                                $newFileName = $uniqueID . '_' . basename($originalName);

                                // Full path to save
                                $destination = $uploadDir . $newFileName;

                                // Move the file
                                if (move_uploaded_file($tmpFile, $destination)) {
                                    // Insert into DB
                                    $sql = "INSERT INTO image (image_name, image_size) VALUES ('$newFileName', '$fileSizeKB')";
                                    $run_add_image = mysqli_query($conn, $sql);
                                    if ($run_add_image === true) {
                                        echo "<p>Image uploaded successfully!</p>";
                                        echo "<script>window.open('image_add.php','_self');</script>";
                                    }
                                }
                            }

                            echo "Images uploaded successfully!";
                        }
                        ?>

                        <?php
                        // Handle delete request
                        if (isset($_GET['delete'])) {
                            $image_name = $_GET['delete'];
                            $image_path = 'assets/img/' . $image_name;

                            // Delete image file
                            if (file_exists($image_path)) {
                                unlink($image_path);
                            }

                            // Delete from database
                            $sql = "DELETE FROM image WHERE image_name = '$image_name'";
                            mysqli_query($conn, $sql);
                        }

                        // Get all images
                        $result = mysqli_query($conn, "SELECT * FROM image order by image_id DESC");
                        ?>


                        <div class="row my-3">
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="col-md-2 img-card">
                                <div class="card">
                                    <img src="assets/img/<?php echo $row['image_name']; ?>"
                                        class="card-img-top img-thumbnail" alt="">
                                    <div class="card-body">
                                        <small><b><?php echo htmlspecialchars($row['image_name']); ?></b></small>
                                        <div class="d-flex justify-content-between">
                                            <p class="card-text"><?php echo round($row['image_size'] / 1024, 2); ?> KB
                                            </p>
                                            <a href="?delete=<?php echo urlencode($row['image_name']); ?>"
                                                onclick="return confirm('Delete this image?')"
                                                class="delete-icon float-right">
                                                🗑️
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>



            </main>

            <?php require_once('parts/footer.php'); ?>

        </div>

    </div>
    <!--Footercdn--->
    <?php require_once('parts/footercdn.php'); ?>

</body>

</html>