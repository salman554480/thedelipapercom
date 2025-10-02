<?php
$page = "image";
require_once('parts/top.php'); ?>
<style>
/* Enhanced Image Gallery Styles */
.img-card {
    margin-bottom: 20px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.img-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.img-thumbnail {
    height: 200px;
    object-fit: cover;
    border-radius: 8px 8px 0 0;
}

.delete-icon {
    color: #dc3545;
    cursor: pointer;
    transition: color 0.3s ease;
    font-size: 18px;
}

.delete-icon:hover {
    color: #c82333;
    transform: scale(1.1);
}

/* Enhanced Upload Section */
.upload-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 12px;
    padding: 30px;
    margin-bottom: 30px;
    color: white;
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
}

.upload-section h4 {
    color: white;
    margin-bottom: 20px;
    font-weight: 600;
}

.upload-section .form-label {
    color: white;
    font-weight: 500;
    margin-bottom: 15px;
}

.file-input-wrapper {
    position: relative;
    display: inline-block;
    width: 100%;
}

.file-input-wrapper input[type=file] {
    position: absolute;
    left: -9999px;
}

.file-input-label {
    display: block;
    padding: 15px 20px;
    background: rgba(255,255,255,0.2);
    border: 2px dashed rgba(255,255,255,0.5);
    border-radius: 8px;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s ease;
    color: white;
    font-weight: 500;
}

.file-input-label:hover {
    background: rgba(255,255,255,0.3);
    border-color: rgba(255,255,255,0.8);
}

.file-input-label i {
    font-size: 24px;
    margin-right: 10px;
}

.upload-btn {
    background: rgba(255,255,255,0.2);
    border: 2px solid rgba(255,255,255,0.5);
    color: white;
    padding: 12px 30px;
    border-radius: 25px;
    font-weight: 600;
    transition: all 0.3s ease;
    margin-top: 15px;
}

.upload-btn:hover {
    background: rgba(255,255,255,0.3);
    border-color: rgba(255,255,255,0.8);
    color: white;
    transform: translateY(-2px);
}

/* Enhanced Upload Status */
.upload-box {
    background: white;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    border-left: 4px solid #28a745;
    transition: all 0.3s ease;
}

.upload-box.uploading {
    border-left-color: #007bff;
}

.upload-box.error {
    border-left-color: #dc3545;
}

.upload-success {
    color: #28a745;
    font-weight: 600;
}

.upload-error {
    color: #dc3545;
    font-weight: 600;
}

/* Enhanced Gallery Grid */
.gallery-header {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 25px;
    border-left: 4px solid #007bff;
}

.gallery-header h5 {
    color: #495057;
    margin: 0;
    font-weight: 600;
}

.gallery-stats {
    color: #6c757d;
    font-size: 14px;
    margin-top: 5px;
}

/* Enhanced Card Design */
.card {
    border: none;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    overflow: hidden;
}

.card:hover {
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.card-body {
    padding: 15px;
    background: #f8f9fa;
}

.card-text {
    color: #6c757d;
    font-size: 12px;
    margin: 0;
}

/* Image Actions */
.image-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}

.image-name-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.image-name {
    font-weight: 600;
    color: #495057;
    font-size: 13px;
    word-break: break-all;
    cursor: pointer;
    flex: 1;
    transition: color 0.3s ease;
}

.image-name:hover {
    color: #007bff;
}

.copy-btn {
    background: none;
    border: none;
    color: #6c757d;
    cursor: pointer;
    padding: 4px 6px;
    border-radius: 4px;
    transition: all 0.3s ease;
    font-size: 12px;
    margin-left: 8px;
}

.copy-btn:hover {
    background: #e9ecef;
    color: #007bff;
    transform: scale(1.1);
}

/* Responsive Design */
@media (max-width: 768px) {
    .upload-section {
        padding: 20px;
    }
    
    .img-thumbnail {
        height: 150px;
    }
    
    .col-md-2 {
        flex: 0 0 50%;
        max-width: 50%;
    }
}

@media (max-width: 576px) {
    .col-md-2 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}

/* Loading Animation */
@keyframes pulse {
    0% { opacity: 1; }
    50% { opacity: 0.5; }
    100% { opacity: 1; }
}

.uploading .progress-bar {
    animation: pulse 1.5s infinite;
}

/* Empty State */
.empty-gallery {
    text-align: center;
    padding: 60px 20px;
    color: #6c757d;
}

.empty-gallery i {
    font-size: 64px;
    color: #dee2e6;
    margin-bottom: 20px;
}

.empty-gallery h5 {
    color: #6c757d;
    margin-bottom: 10px;
}

.empty-gallery p {
    color: #adb5bd;
}

/* Card Overlay */
.card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 8px 8px 0 0;
}

.card:hover .card-overlay {
    opacity: 1;
}

.card-overlay .btn {
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
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
                    <!-- Enhanced Upload Section -->
                    <div class="upload-section">
                        <h4 class="mt-3">
                            <i class="fas fa-cloud-upload-alt"></i> Media Upload
                        </h4>
                        <p class="mb-4">Upload multiple images at once. Supported formats: JPG, PNG, GIF, WebP</p>

                    <form id="uploadForm">
                            <div class="file-input-wrapper">
                                <label for="imageInput" class="file-input-label">
                                    <i class="fas fa-images"></i>
                                    <span id="fileLabel">Choose Images or Drag & Drop</span>
                                </label>
                                <input type="file" name="images[]" id="imageInput" multiple 
                                       accept="image/*" style="display: none;">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="upload-btn" id="uploadBtn" disabled>
                                    <i class="fas fa-upload"></i> Upload Images
                                </button>
                            </div>
                    </form>

                        <!-- Upload Status -->
                        <div id="uploadStatus" class="mt-4"></div>
                    </div>

                    <script>
                    // Enhanced file input handling
                    const fileInput = document.getElementById('imageInput');
                    const fileLabel = document.getElementById('fileLabel');
                    const uploadBtn = document.getElementById('uploadBtn');
                    const uploadForm = document.getElementById('uploadForm');

                    // File selection handling
                    fileInput.addEventListener('change', function() {
                        const files = this.files;
                        if (files.length > 0) {
                            const fileCount = files.length;
                            const totalSize = Array.from(files).reduce((sum, file) => sum + file.size, 0);
                            const sizeMB = (totalSize / (1024 * 1024)).toFixed(2);
                            
                            fileLabel.innerHTML = `<i class="fas fa-images"></i> ${fileCount} file(s) selected (${sizeMB} MB)`;
                            uploadBtn.disabled = false;
                            uploadBtn.innerHTML = `<i class="fas fa-upload"></i> Upload ${fileCount} Image(s)`;
                        } else {
                            fileLabel.innerHTML = `<i class="fas fa-images"></i> Choose Images or Drag & Drop`;
                            uploadBtn.disabled = true;
                            uploadBtn.innerHTML = `<i class="fas fa-upload"></i> Upload Images`;
                        }
                    });

                    // Drag and drop functionality
                    const fileLabelElement = document.querySelector('.file-input-label');
                    
                    fileLabelElement.addEventListener('dragover', function(e) {
                        e.preventDefault();
                        this.style.background = 'rgba(255,255,255,0.4)';
                        this.style.borderColor = 'rgba(255,255,255,0.9)';
                    });
                    
                    fileLabelElement.addEventListener('dragleave', function(e) {
                        e.preventDefault();
                        this.style.background = 'rgba(255,255,255,0.2)';
                        this.style.borderColor = 'rgba(255,255,255,0.5)';
                    });
                    
                    fileLabelElement.addEventListener('drop', function(e) {
                        e.preventDefault();
                        this.style.background = 'rgba(255,255,255,0.2)';
                        this.style.borderColor = 'rgba(255,255,255,0.5)';
                        
                        const files = e.dataTransfer.files;
                        fileInput.files = files;
                        fileInput.dispatchEvent(new Event('change'));
                    });

                    // Enhanced upload form submission
                    uploadForm.addEventListener('submit', function(e) {
                        e.preventDefault();

                        const files = fileInput.files;
                        const statusContainer = document.getElementById('uploadStatus');
                        statusContainer.innerHTML = '';

                        if (files.length === 0) {
                            showMessage('Please select files to upload', 'error');
                            return;
                        }

                        // Disable upload button during upload
                        uploadBtn.disabled = true;
                        uploadBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Uploading...';

                        let completedUploads = 0;
                        let totalUploads = files.length;

                        Array.from(files).forEach((file, index) => {
                            // Validate file type
                            if (!file.type.startsWith('image/')) {
                                showUploadResult(index, file.name, 'error', 'Invalid file type');
                                completedUploads++;
                                checkAllUploadsComplete();
                                return;
                            }

                            // Validate file size (5MB limit)
                            if (file.size > 5 * 1024 * 1024) {
                                showUploadResult(index, file.name, 'error', 'File too large (max 5MB)');
                                completedUploads++;
                                checkAllUploadsComplete();
                                return;
                            }

                            const formData = new FormData();
                            formData.append('image', file);

                            // Create enhanced upload box
                            const uploadBox = document.createElement('div');
                            uploadBox.classList.add('upload-box', 'uploading');
                            uploadBox.innerHTML = `
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="upload-file-info">
                                        <strong>${file.name}</strong>
                                        <small class="text-muted d-block">${(file.size / 1024).toFixed(1)} KB</small>
                                    </div>
                                    <div class="upload-status-icon">
                                        <i class="fas fa-spinner fa-spin text-primary"></i>
                                    </div>
                                </div>
                                <div class="progress mb-2">
                                    <div id="bar-${index}" class="progress-bar progress-bar-striped progress-bar-animated bg-primary" 
                     role="progressbar" style="width: 0%">0%</div>
            </div>
                                <div id="result-${index}" class="text-muted small">Preparing upload...</div>
        `;
                            statusContainer.appendChild(uploadBox);

                            // Enhanced progress animation
                            let progress = 0;
                            const interval = setInterval(() => {
                                if (progress < 90) {
                                    progress += Math.floor(Math.random() * 8) + 2;
                                    const progressBar = document.getElementById(`bar-${index}`);
                                    progressBar.style.width = `${progress}%`;
                                    progressBar.innerText = `${progress}%`;
                                } else {
                                    clearInterval(interval);
                                }
                            }, 150);

                            // Perform actual upload
                            fetch('upload_ajax.php', {
                                    method: 'POST',
                                    body: formData
                            })
                            .then(response => response.text())
                                .then(result => {
                                    console.log('Upload response:', result); // Debug log
                                    clearInterval(interval);
                                    uploadBox.classList.remove('uploading');

                                const progressBar = document.getElementById(`bar-${index}`);
                                    const resultText = document.getElementById(`result-${index}`);
                                const statusIcon = uploadBox.querySelector('.upload-status-icon i');
                                
                                console.log('Elements found:', { progressBar, resultText, statusIcon }); // Debug log
                                
                                // Force progress bar to 100% and stop animation
                                if (progressBar) {
                                    progressBar.style.width = '100%';
                                    progressBar.classList.remove('progress-bar-animated');
                                    progressBar.classList.remove('progress-bar-striped');
                                }
                                
                                if (result.trim().toLowerCase().includes('uploaded')) {
                                    // Force complete progress bar
                                    if (progressBar) {
                                        progressBar.style.width = '100%';
                                        progressBar.classList.remove('progress-bar-animated', 'progress-bar-striped');
                                        progressBar.classList.add('bg-success');
                                        progressBar.innerText = '100%';
                                    }
                                    
                                    if (statusIcon) {
                                        statusIcon.className = 'fas fa-check-circle text-success';
                                    }
                                    
                                    if (resultText) {
                                        resultText.innerHTML = '<span class="upload-success">✓ Upload Successful!</span>';
                                    }
                                    
                                    uploadBox.classList.add('success');
                                    
                                    console.log('Upload successful, reloading page...'); // Debug log
                                    
                                    // Reload page immediately after successful upload
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 500);
                                    
                                    // Fallback reload after 2 seconds if first one fails
                                    setTimeout(() => {
                                        if (document.querySelector('.upload-box.success')) {
                                            window.location.reload();
                                        }
                                    }, 2000);
                                    } else {
                                    if (progressBar) {
                                        progressBar.classList.add('bg-danger');
                                    }
                                    if (statusIcon) {
                                        statusIcon.className = 'fas fa-times-circle text-danger';
                                    }
                                    if (resultText) {
                                        resultText.innerHTML = `<span class="upload-error">✗ Error: ${result}</span>`;
                                    }
                                    uploadBox.classList.add('error');
                                }
                                
                                completedUploads++;
                                checkAllUploadsComplete();
                            })
                            .catch(error => {
                                clearInterval(interval);
                                const progressBar = document.getElementById(`bar-${index}`);
                                const resultText = document.getElementById(`result-${index}`);
                                const statusIcon = uploadBox.querySelector('.upload-status-icon i');
                                
                                if (progressBar) {
                                    progressBar.classList.add('bg-danger');
                                }
                                if (statusIcon) {
                                    statusIcon.className = 'fas fa-times-circle text-danger';
                                }
                                if (resultText) {
                                    resultText.innerHTML = '<span class="upload-error">✗ Upload failed</span>';
                                }
                                uploadBox.classList.add('error');
                                
                                completedUploads++;
                                checkAllUploadsComplete();
                            });
                        });

                        function checkAllUploadsComplete() {
                            if (completedUploads === totalUploads) {
                                // Re-enable upload button
                                uploadBtn.disabled = false;
                                uploadBtn.innerHTML = '<i class="fas fa-upload"></i> Upload Images';
                                
                                // Reset file input
                                fileInput.value = '';
                                fileLabel.innerHTML = '<i class="fas fa-images"></i> Choose Images or Drag & Drop';
                                
                                // Note: Page will reload automatically after each successful upload
                            }
                        }
                    });

                    function showMessage(message, type) {
                        const alertDiv = document.createElement('div');
                        alertDiv.className = `alert alert-${type === 'error' ? 'danger' : 'success'} alert-dismissible fade show`;
                        alertDiv.innerHTML = `
                            ${message}
                            <button type="button" class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                        `;
                        document.getElementById('uploadStatus').appendChild(alertDiv);
                    }

                    function showUploadResult(index, fileName, type, message) {
                        const uploadBox = document.createElement('div');
                        uploadBox.classList.add('upload-box', type);
                        uploadBox.innerHTML = `
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>${fileName}</strong>
                                    <div class="text-${type === 'error' ? 'danger' : 'success'} small">${message}</div>
                                </div>
                                <i class="fas fa-${type === 'error' ? 'times-circle text-danger' : 'check-circle text-success'}"></i>
                            </div>
                        `;
                        document.getElementById('uploadStatus').appendChild(uploadBox);
                    }

                    // Copy image name functionality
                    function copyImageName(imageName) {
                        // Create a temporary textarea element
                        const tempTextarea = document.createElement('textarea');
                        tempTextarea.value = imageName;
                        document.body.appendChild(tempTextarea);
                        
                        // Select and copy the text
                        tempTextarea.select();
                        tempTextarea.setSelectionRange(0, 99999); // For mobile devices
                        
                        try {
                            const successful = document.execCommand('copy');
                            if (successful) {
                                showCopyNotification('Image name copied to clipboard!');
                            } else {
                                showCopyNotification('Failed to copy image name', 'error');
                            }
                        } catch (err) {
                            // Fallback for modern browsers
                            if (navigator.clipboard) {
                                navigator.clipboard.writeText(imageName).then(() => {
                                    showCopyNotification('Image name copied to clipboard!');
                                }).catch(() => {
                                    showCopyNotification('Failed to copy image name', 'error');
                                });
                            } else {
                                showCopyNotification('Copy not supported in this browser', 'error');
                            }
                        }
                        
                        // Remove the temporary textarea
                        document.body.removeChild(tempTextarea);
                    }

                    function showCopyNotification(message, type = 'success') {
                        // Remove any existing notifications
                        const existingNotification = document.querySelector('.copy-notification');
                        if (existingNotification) {
                            existingNotification.remove();
                        }

                        // Create notification element
                        const notification = document.createElement('div');
                        notification.className = `copy-notification alert alert-${type === 'error' ? 'danger' : 'success'} alert-dismissible fade show position-fixed`;
                        notification.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px; box-shadow: 0 4px 15px rgba(0,0,0,0.2);';
                        notification.innerHTML = `
                            <i class="fas fa-${type === 'error' ? 'exclamation-triangle' : 'check-circle'}"></i> ${message}
                            <button type="button" class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                        `;
                        
                        document.body.appendChild(notification);
                        
                        // Auto remove after 3 seconds
                        setTimeout(() => {
                            if (notification.parentNode) {
                                notification.parentNode.removeChild(notification);
                            }
                        }, 3000);
                    }
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
                    $image_count = mysqli_num_rows($result);
                    ?>

                    <!-- Enhanced Gallery Section -->
                    <div class="gallery-header">
                        <h5>
                            <i class="fas fa-images"></i> Image Gallery
                        </h5>
                        <div class="gallery-stats">
                            <?php if ($image_count > 0): ?>
                                Total Images: <strong><?php echo $image_count; ?></strong> | 
                                Last Updated: <strong><?php echo date('M d, Y'); ?></strong>
                            <?php else: ?>
                                No images uploaded yet
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if ($image_count > 0): ?>
                    <div class="row my-3">
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-md-2 img-card">
                            <div class="card">
                                    <div class="position-relative">
                                <img src="assets/img/<?php echo $row['image_name']; ?>"
                                            class="card-img-top img-thumbnail" alt="<?php echo htmlspecialchars($row['image_name']); ?>">
                                        <div class="card-overlay">
                                            <a href="assets/img/<?php echo $row['image_name']; ?>" 
                                               target="_blank" class="btn btn-sm btn-light" title="View Full Size">
                                                <i class="fas fa-expand"></i>
                                            </a>
                                        </div>
                                    </div>
                                <div class="card-body">
                                        <div class="image-name-container">
                                            <div class="image-name" onclick="copyImageName('<?php echo htmlspecialchars($row['image_name']); ?>')" title="Click to copy image name">
                                                <?php echo htmlspecialchars(substr($row['image_name'], 0, 20)) . (strlen($row['image_name']) > 20 ? '...' : ''); ?>
                                            </div>
                                            <button class="copy-btn" onclick="copyImageName('<?php echo htmlspecialchars($row['image_name']); ?>')" title="Copy image name">
                                                <i class="fas fa-copy"></i>
                                            </button>
                                        </div>
                                        <div class="image-actions">
                                            <span class="card-text">
                                                <?php echo round($row['image_size'] / 1024, 1); ?> KB
                                            </span>
                                        <a href="?delete=<?php echo urlencode($row['image_name']); ?>"
                                                onclick="return confirm('Are you sure you want to delete this image?')"
                                                class="delete-icon" title="Delete Image">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    <?php else: ?>
                        <div class="empty-gallery">
                            <i class="fas fa-images"></i>
                            <h5>No Images Yet</h5>
                            <p>Upload your first image to get started</p>
                    </div>
                    <?php endif; ?>



            </main>

            <?php require_once('parts/footer.php'); ?>

        </div>

    </div>
    <!--Footercdn--->
    <?php require_once('parts/footercdn.php'); ?>

</body>

</html>