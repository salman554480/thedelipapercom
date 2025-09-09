<?php
$page = "image";
require_once('parts/top.php'); ?>
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
                    <h4 class="mt-3">Media</h4>


                    <form id="uploadForm">
                        <label class="form-label">Select Images to Upload:</label>
                        <input type="file" class="form-control" name="images[]" id="imageInput" multiple>
                        <br>
                        <button type="submit" class="btn btn-success">Upload Images</button>
                    </form>

                    <center>
                        <div id="uploadStatus" class="mt-4 w-75"></div>
                    </center>

                    <script>
                    document.getElementById('uploadForm').addEventListener('submit', function(e) {
                        e.preventDefault();

                        const files = document.getElementById('imageInput').files;
                        const statusContainer = document.getElementById('uploadStatus');
                        statusContainer.innerHTML = '';

                        Array.from(files).forEach((file, index) => {
                            const formData = new FormData();
                            formData.append('image', file);

                            // Create status box
                            const uploadBox = document.createElement('div');
                            uploadBox.classList.add('upload-box', 'uploading');

                            uploadBox.innerHTML = `
            <div><strong>${file.name}</strong></div>
            <div class="progress my-2">
                <div id="bar-${index}" class="progress-bar progress-bar-striped progress-bar-animated" 
                     role="progressbar" style="width: 0%">0%</div>
            </div>
            <div id="result-${index}" class="text-muted">Uploading...</div>
        `;
                            statusContainer.appendChild(uploadBox);

                            // Simulate progress animation
                            let progress = 0;
                            const interval = setInterval(() => {
                                if (progress < 95) {
                                    progress += Math.floor(Math.random() * 10) + 1;
                                    document.getElementById(`bar-${index}`).style.width =
                                        `${progress}%`;
                                    document.getElementById(`bar-${index}`).innerText =
                                        `${progress}%`;
                                } else {
                                    clearInterval(interval);
                                }
                            }, 200);

                            // Perform actual upload
                            fetch('upload_ajax.php', {
                                    method: 'POST',
                                    body: formData
                                }).then(response => response.text())
                                .then(result => {
                                    clearInterval(interval);
                                    uploadBox.classList.remove('uploading');
                                    document.getElementById(`bar-${index}`).style.width = `100%`;
                                    document.getElementById(`bar-${index}`).classList.remove(
                                        'progress-bar-animated');
                                    document.getElementById(`bar-${index}`).innerText = `100%`;

                                    const resultText = document.getElementById(`result-${index}`);
                                    if (result.trim().toLowerCase() === 'uploaded') {
                                        resultText.innerHTML =
                                            `<span class="upload-success">Upload Successful!</span>`;
                                    } else {
                                        resultText.innerHTML =
                                            `<span class="upload-error">Error: ${result}</span>`;
                                    }
                                }).catch(error => {
                                    clearInterval(interval);
                                    document.getElementById(`result-${index}`).innerHTML =
                                        `<span class="upload-error">Upload failed</span>`;
                                });
                        });
                    });
                    </script>

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
                        
                        $log_msg = "Deleted image with ID: $image_path";
                                        // Insert into log table
                                        $insert_log = "INSERT INTO log (log_msg, admin_id) 
                                                       VALUES ('$log_msg', '$admin_id')";
                                        mysqli_query($conn, $insert_log);
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