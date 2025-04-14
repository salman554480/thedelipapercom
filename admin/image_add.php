<?php  require_once('parts/top.php');?>
</head>

<body class="sb-nav-fixed">

    <?php  require_once('parts/navbar.php');?>

    <div id="layoutSidenav">

        <?php  require_once('parts/sidebar.php');?>

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
                            mysqli_query($conn, $sql);
                        }
                    }

                    echo "Images uploaded successfully!";
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