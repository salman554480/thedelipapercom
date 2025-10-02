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
                        <h5 class="mb-0">
                            <i class="fas fa-edit"></i> Edit Post
                        </h5>
                    </div>

                    <div class="card-body">
                        <form class="row g-3" action="" method="post" enctype="multipart/form-data">

                            <!-- Title and URL Section -->
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <i class="fas fa-edit"></i> Post Title & URL
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                            <div class="col-md-6">
                                                <label class="form-label">
                                                    <i class="fas fa-heading"></i> Post Title
                                                    <span class="badge badge-danger ml-2">Required</span>
                                                </label>
                                                <input type="text" name="post_title" id="post_title" value="<?php echo htmlspecialchars($post_title); ?>" class="form-control" autofocus required />
                                                <small class="form-text text-muted">
                                                    <i class="fas fa-info-circle"></i> This will be used to generate the URL slug
                                                </small>
                            </div>
                            <div class="col-md-6">
                                                <label class="form-label">
                                                    <i class="fas fa-link"></i> URL Slug
                                                    <span class="badge badge-info ml-2">Auto-generated</span>
                                                </label>
                                                <input type="text" name="post_url" value="<?php echo htmlspecialchars($post_url); ?>" id="post_url" class="form-control" required />
                                                <small class="form-text text-muted">
                                                    <i class="fas fa-info-circle"></i> SEO-friendly URL for your post
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Content Section -->
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <i class="fas fa-file-alt"></i> Post Content
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <label class="form-label">
                                            <i class="fas fa-file-alt"></i> Content
                                            <span class="badge badge-danger ml-2">Required</span>
                                        </label>
                                <textarea name="content" id="editor"><?php echo $post_content; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- SEO Meta Fields Section -->
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <i class="fas fa-search"></i> SEO Meta Fields
                                            <span class="badge badge-light ml-2" id="seoScore">Score: 0/100</span>
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                            <div class="col-md-6">
                                                <label class="form-label">
                                                    <i class="fas fa-heading"></i> Meta Title
                                                    <span class="badge badge-info ml-2">Max 60 chars</span>
                                                </label>
                                                <input type="text" name="meta_title" id="meta_title" value="<?php echo htmlspecialchars($meta_title); ?>" class="form-control seo-field" maxlength="60">
                                                <div class="meta-counter">
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar" id="titleProgress" role="progressbar" style="width: 0%"></div>
                                                    </div>
                                                    <small class="text-muted">
                                                        <span id="titleCount">0</span>/60 characters
                                                        <span id="titleStatus" class="ml-2"></span>
                                                    </small>
                                                </div>
                            </div>
                            <div class="col-md-6">
                                                <label class="form-label">
                                                    <i class="fas fa-tags"></i> Meta Keywords
                                                    <span class="badge badge-info ml-2">Max 160 chars</span>
                                                </label>
                                                <input type="text" name="meta_keyword" id="meta_keyword" value="<?php echo htmlspecialchars($meta_keyword); ?>" class="form-control seo-field" maxlength="160">
                                                <div class="meta-counter">
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar" id="keywordProgress" role="progressbar" style="width: 0%"></div>
                                                    </div>
                                                    <small class="text-muted">
                                                        <span id="keywordCount">0</span>/160 characters
                                                        <span id="keywordStatus" class="ml-2"></span>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <label class="form-label">
                                                    <i class="fas fa-align-left"></i> Meta Description
                                                    <span class="badge badge-info ml-2">Max 160 chars</span>
                                                </label>
                                                <textarea id="meta_description" name="meta_description" class="form-control seo-field" maxlength="160" rows="3"><?php echo htmlspecialchars($meta_description); ?></textarea>
                                                <div class="meta-counter">
                                                    <div class="progress mt-2" style="height: 6px;">
                                                        <div class="progress-bar" id="descriptionProgress" role="progressbar" style="width: 0%"></div>
                                                    </div>
                                                    <small class="text-muted">
                                                        <span id="descriptionCount">0</span>/160 characters
                                                        <span id="descriptionStatus" class="ml-2"></span>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- SEO Analysis Panel -->
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <div class="alert alert-info">
                                                    <h6 class="alert-heading">
                                                        <i class="fas fa-chart-line"></i> SEO Analysis
                                                    </h6>
                                                    <div id="seoAnalysis">
                                                        <div class="seo-item">
                                                            <i class="fas fa-circle text-danger"></i>
                                                            <span>Meta Title: Not optimized</span>
                                                        </div>
                                                        <div class="seo-item">
                                                            <i class="fas fa-circle text-danger"></i>
                                                            <span>Meta Description: Not optimized</span>
                                                        </div>
                                                        <div class="seo-item">
                                                            <i class="fas fa-circle text-danger"></i>
                                                            <span>Meta Keywords: Not optimized</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Post Settings Section -->
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <i class="fas fa-cogs"></i> Post Settings
                                        </h5>
                            </div>
                                    <div class="card-body">
                                        <div class="row">
                            <div class="col-md-6">
                                                <label class="form-label">
                                                    <i class="fas fa-eye"></i> Status
                                                </label>
                                <select name="post_status" class="form-control">
                                                    <option value="<?php echo $post_status; ?>" selected><?php echo ucfirst($post_status); ?></option>
                                    <option value="publish">Publish</option>
                                    <option value="draft">Draft</option>
                                </select>
                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">
                                                    <i class="fas fa-search"></i> Index
                                                </label>
                                <select name="post_index" class="form-control">
                                                    <option value="<?php echo $post_index; ?>" selected><?php echo ucfirst($post_index); ?></option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Media Upload Section -->
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="mb-0">
                                            <i class="fas fa-image"></i> Media Upload
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">
                                                    <i class="fas fa-image"></i> Featured Image
                                                    <span class="badge badge-info ml-2">Optional</span>
                                                </label>
                                                <?php if (!empty($post_thumbnail)): ?>
                                                    <div class="current-image mb-3">
                                                        <label class="form-label">Current Image:</label>
                                                        <img src="assets/img/<?php echo htmlspecialchars($post_thumbnail); ?>" alt="Current Thumbnail" class="img-thumbnail" style="max-width: 200px; max-height: 150px;">
                                                    </div>
                                                <?php endif; ?>
                                                <input type="file" name="post_thumbnail" class="form-control" accept="image/*">
                                                <input type="hidden" name="current_thumbnail" value="<?php echo htmlspecialchars($post_thumbnail); ?>">
                                                <small class="form-text text-muted">
                                                    <i class="fas fa-info-circle"></i> Recommended size: 1200x630px (JPG, PNG, GIF, WEBP)
                                                </small>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="image-preview-container" style="display: none;">
                                                    <label class="form-label">New Image Preview:</label>
                                                    <div class="image-preview">
                                                        <img id="imagePreview" src="" alt="Preview" class="img-thumbnail" style="max-width: 200px; max-height: 150px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Section -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="seo-summary">
                                                    <h6 class="text-muted mb-3">
                                                        <i class="fas fa-chart-bar"></i> SEO Summary
                                                    </h6>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="seo-stat">
                                                                <div class="stat-number" id="titleScore">0</div>
                                                                <div class="stat-label">Title Score</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="seo-stat">
                                                                <div class="stat-number" id="descriptionScore">0</div>
                                                                <div class="stat-label">Description Score</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="seo-stat">
                                                                <div class="stat-number" id="keywordScore">0</div>
                                                                <div class="stat-label">Keyword Score</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="submit" name="insert_btn" class="btn btn-success btn-lg px-5" id="submitBtn">
                                                    <i class="fas fa-save"></i> Save Changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                        <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

                        <style>
                            /* Simplified Post Edit Page Styles */
                            .card {
                                box-shadow: 0 1px 3px rgba(0,0,0,0.1);
                                border-radius: 5px;
                                border: 1px solid #e9ecef;
                            }
                            
                            .card-header {
                                background-color: #f8f9fa;
                                border-bottom: 1px solid #e9ecef;
                                border-radius: 5px 5px 0 0 !important;
                                font-weight: 600;
                                color: #495057;
                                padding: 15px 20px;
                            }
                            
                            .form-label {
                                font-weight: 500;
                                margin-bottom: 8px;
                                color: #495057;
                            }
                            
                            .badge {
                                font-size: 0.75em;
                                font-weight: 500;
                            }
                            
                            /* Progress Bar Styles */
                            .progress {
                                border-radius: 3px;
                                background-color: #e9ecef;
                                height: 6px;
                            }
                            
                            .progress-bar {
                                border-radius: 3px;
                                transition: all 0.3s ease;
                            }
                            
                            .progress-bar.bg-danger {
                                background-color: #dc3545 !important;
                            }
                            
                            .progress-bar.bg-warning {
                                background-color: #ffc107 !important;
                            }
                            
                            .progress-bar.bg-success {
                                background-color: #28a745 !important;
                            }
                            
                            /* SEO Analysis Styles */
                            .seo-item {
                                display: flex;
                                align-items: center;
                                margin-bottom: 8px;
                                padding: 5px 0;
                            }
                            
                            .seo-item i {
                                margin-right: 10px;
                                font-size: 12px;
                            }
                            
                            .seo-item .text-success {
                                color: #28a745 !important;
                            }
                            
                            .seo-item .text-warning {
                                color: #ffc107 !important;
                            }
                            
                            .seo-item .text-danger {
                                color: #dc3545 !important;
                            }
                            
                            /* SEO Summary Styles */
                            .seo-summary {
                                background: #f8f9fa;
                                padding: 20px;
                                border-radius: 5px;
                                border: 1px solid #e9ecef;
                            }
                            
                            .seo-stat {
                                text-align: center;
                                padding: 10px;
                            }
                            
                            .stat-number {
                                font-size: 1.8rem;
                                font-weight: bold;
                                color: #495057;
                                margin-bottom: 5px;
                            }
                            
                            .stat-label {
                                font-size: 0.85rem;
                                color: #6c757d;
                                font-weight: 500;
                            }
                            
                            /* Form Field Enhancements */
                            .form-control:focus {
                                border-color: #007bff;
                                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
                            }
                            
                            .seo-field:focus {
                                border-color: #007bff;
                                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
                            }
                            
                            /* Image Preview */
                            .image-preview-container {
                                margin-top: 15px;
                            }
                            
                            .image-preview img {
                                border: 1px solid #dee2e6;
                                border-radius: 3px;
                            }
                            
                            .current-image img {
                                border: 1px solid #dee2e6;
                                border-radius: 3px;
                            }
                            
                            /* Responsive Design */
                            @media (max-width: 768px) {
                                .seo-summary {
                                    margin-bottom: 20px;
                                }
                                
                                .stat-number {
                                    font-size: 1.5rem;
                                }
                            }
                        </style>

                        <script>
                            ClassicEditor
                                .create(document.querySelector('#editor'))
                                .catch(error => {
                                    console.error(error);
                                });
                        </script>

                        <script>
                            // SEO Character Limits
                            const SEO_LIMITS = {
                                title: { min: 30, max: 60, optimal: 50 },
                                description: { min: 120, max: 160, optimal: 150 },
                                keyword: { min: 10, max: 160, optimal: 100 }
                            };

                            // Function to generate a slug from a string
                            function generateSlug(title) {
                                return title
                                    .toLowerCase()
                                    .replace(/\s+/g, '-')
                                    .replace(/[^a-z0-9-]/g, '')
                                    .replace(/--+/g, '-');
                            }

                            // Function to update character counter and progress bar
                            function updateCounter(fieldId, countId, progressId, statusId, limits) {
                                const field = document.getElementById(fieldId);
                                const countElement = document.getElementById(countId);
                                const progressElement = document.getElementById(progressId);
                                const statusElement = document.getElementById(statusId);
                                
                                const length = field.value.length;
                                countElement.textContent = length;
                                
                                // Calculate progress percentage
                                const percentage = Math.min((length / limits.max) * 100, 100);
                                progressElement.style.width = percentage + '%';
                                
                                // Update progress bar color and status
                                let colorClass = 'bg-danger';
                                let status = 'Too short';
                                
                                if (length >= limits.min && length <= limits.max) {
                                    colorClass = 'bg-success';
                                    status = 'Optimal';
                                } else if (length > limits.max) {
                                    colorClass = 'bg-danger';
                                    status = 'Too long';
                                } else if (length > limits.min * 0.7) {
                                    colorClass = 'bg-warning';
                                    status = 'Getting better';
                                }
                                
                                progressElement.className = `progress-bar ${colorClass}`;
                                statusElement.textContent = status;
                                statusElement.className = `ml-2 text-${colorClass.replace('bg-', '')}`;
                                
                                return { length, percentage, status, colorClass };
                            }

                            // Function to calculate SEO score
                            function calculateSEOScore() {
                                const titleLength = document.getElementById('meta_title').value.length;
                                const descriptionLength = document.getElementById('meta_description').value.length;
                                const keywordLength = document.getElementById('meta_keyword').value.length;
                                
                                let score = 0;
                                
                                // Title score (40 points)
                                if (titleLength >= SEO_LIMITS.title.min && titleLength <= SEO_LIMITS.title.max) {
                                    score += 40;
                                } else if (titleLength > 0) {
                                    score += 20;
                                }
                                
                                // Description score (35 points)
                                if (descriptionLength >= SEO_LIMITS.description.min && descriptionLength <= SEO_LIMITS.description.max) {
                                    score += 35;
                                } else if (descriptionLength > 0) {
                                    score += 15;
                                }
                                
                                // Keyword score (25 points)
                                if (keywordLength >= SEO_LIMITS.keyword.min && keywordLength <= SEO_LIMITS.keyword.max) {
                                    score += 25;
                                } else if (keywordLength > 0) {
                                    score += 10;
                                }
                                
                                return score;
                            }

                            // Function to update SEO analysis
                            function updateSEOAnalysis() {
                                const titleLength = document.getElementById('meta_title').value.length;
                                const descriptionLength = document.getElementById('meta_description').value.length;
                                const keywordLength = document.getElementById('meta_keyword').value.length;
                                
                                const analysis = document.getElementById('seoAnalysis');
                                const seoScore = document.getElementById('seoScore');
                                const totalScore = calculateSEOScore();
                                
                                // Update overall score
                                seoScore.textContent = `Score: ${totalScore}/100`;
                                seoScore.className = `badge ml-2 ${totalScore >= 80 ? 'badge-success' : totalScore >= 60 ? 'badge-warning' : 'badge-danger'}`;
                                
                                // Update individual scores
                                document.getElementById('titleScore').textContent = titleLength >= SEO_LIMITS.title.min && titleLength <= SEO_LIMITS.title.max ? '40' : titleLength > 0 ? '20' : '0';
                                document.getElementById('descriptionScore').textContent = descriptionLength >= SEO_LIMITS.description.min && descriptionLength <= SEO_LIMITS.description.max ? '35' : descriptionLength > 0 ? '15' : '0';
                                document.getElementById('keywordScore').textContent = keywordLength >= SEO_LIMITS.keyword.min && keywordLength <= SEO_LIMITS.keyword.max ? '25' : keywordLength > 0 ? '10' : '0';
                                
                                // Update analysis items
                                analysis.innerHTML = `
                                    <div class="seo-item">
                                        <i class="fas fa-circle ${titleLength >= SEO_LIMITS.title.min && titleLength <= SEO_LIMITS.title.max ? 'text-success' : titleLength > 0 ? 'text-warning' : 'text-danger'}"></i>
                                        <span>Meta Title: ${titleLength >= SEO_LIMITS.title.min && titleLength <= SEO_LIMITS.title.max ? 'Optimized' : titleLength > 0 ? 'Needs improvement' : 'Not set'}</span>
                                    </div>
                                    <div class="seo-item">
                                        <i class="fas fa-circle ${descriptionLength >= SEO_LIMITS.description.min && descriptionLength <= SEO_LIMITS.description.max ? 'text-success' : descriptionLength > 0 ? 'text-warning' : 'text-danger'}"></i>
                                        <span>Meta Description: ${descriptionLength >= SEO_LIMITS.description.min && descriptionLength <= SEO_LIMITS.description.max ? 'Optimized' : descriptionLength > 0 ? 'Needs improvement' : 'Not set'}</span>
                                    </div>
                                    <div class="seo-item">
                                        <i class="fas fa-circle ${keywordLength >= SEO_LIMITS.keyword.min && keywordLength <= SEO_LIMITS.keyword.max ? 'text-success' : keywordLength > 0 ? 'text-warning' : 'text-danger'}"></i>
                                        <span>Meta Keywords: ${keywordLength >= SEO_LIMITS.keyword.min && keywordLength <= SEO_LIMITS.keyword.max ? 'Optimized' : keywordLength > 0 ? 'Needs improvement' : 'Not set'}</span>
                                    </div>
                                `;
                            }

                            // Image preview functionality
                            function setupImagePreview() {
                                const fileInput = document.querySelector('input[name="post_thumbnail"]');
                                const previewContainer = document.querySelector('.image-preview-container');
                                const previewImage = document.getElementById('imagePreview');
                                
                                fileInput.addEventListener('change', function(e) {
                                    const file = e.target.files[0];
                                    if (file) {
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            previewImage.src = e.target.result;
                                            previewContainer.style.display = 'block';
                                        };
                                        reader.readAsDataURL(file);
                                    } else {
                                        previewContainer.style.display = 'none';
                                    }
                                });
                            }

                            // Initialize everything when DOM is loaded
                            document.addEventListener('DOMContentLoaded', function() {
                                // Get references to input fields
                            const titleInput = document.getElementById('post_title');
                            const urlInput = document.getElementById('post_url');
                                const metaTitleInput = document.getElementById('meta_title');
                                const metaDescriptionInput = document.getElementById('meta_description');
                                const metaKeywordInput = document.getElementById('meta_keyword');

                                // Auto-generate URL slug from title
                            titleInput.addEventListener('input', function() {
                                const titleValue = titleInput.value;
                                const slug = generateSlug(titleValue);
                                urlInput.value = slug;
                                });
                                
                                // Setup character counters for SEO fields
                                metaTitleInput.addEventListener('input', function() {
                                    updateCounter('meta_title', 'titleCount', 'titleProgress', 'titleStatus', SEO_LIMITS.title);
                                    updateSEOAnalysis();
                                });
                                
                                metaDescriptionInput.addEventListener('input', function() {
                                    updateCounter('meta_description', 'descriptionCount', 'descriptionProgress', 'descriptionStatus', SEO_LIMITS.description);
                                    updateSEOAnalysis();
                                });
                                
                                metaKeywordInput.addEventListener('input', function() {
                                    updateCounter('meta_keyword', 'keywordCount', 'keywordProgress', 'keywordStatus', SEO_LIMITS.keyword);
                                    updateSEOAnalysis();
                                });
                                
                                // Setup image preview
                                setupImagePreview();
                                
                                // Initial SEO analysis
                                updateSEOAnalysis();
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