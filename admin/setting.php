<?php
$page = "setting";
require_once('parts/top.php'); ?>
<?php 
if($admin_role != "admin"){
    	echo "<script>window.open('post_view.php','_self');</script>";
}
?>
</head>

<body class="sb-nav-fixed">

    <?php require_once('parts/navbar.php'); ?>

    <style>
        .form-label {
            font-weight: 600;
            color: #495057;
        }
        .input-group-text {
            font-weight: 500;
        }
        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            font-weight: 600;
        }
        .text-secondary {
            color: #6c757d !important;
            font-weight: 600;
        }
        .btn-lg {
            font-weight: 600;
        }
        .alert-info {
            border-left: 4px solid #17a2b8;
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        .input-group-text i {
            width: 16px;
        }
        .code-editor {
            font-family: 'Courier New', monospace;
            font-size: 13px;
            line-height: 1.4;
            background-color: #f8f9fa;
            border: 2px solid #e9ecef;
        }
        .code-editor:focus {
            background-color: #ffffff;
            border-color: #667eea;
        }
        .badge {
            font-size: 0.7em;
        }
        .card-header h5, .card-header h6 {
            font-size: 1rem;
        }
        .alert-light {
            background-color: #f8f9fa;
        }
        .file-upload-section {
            border: 2px dashed #28a745;
            border-radius: 8px;
            padding: 20px;
            background-color: #f8fff9;
            transition: all 0.3s ease;
        }
        .file-upload-section:hover {
            border-color: #1e7e34;
            background-color: #e8f5e8;
        }
        .badge {
            font-size: 0.75em;
        }
        .file-status {
            margin-top: 10px;
            padding: 8px 12px;
            border-radius: 4px;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }
    </style>

    <div id="layoutSidenav">

        <?php require_once('parts/sidebar.php'); ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="main-content-container container-fluid px-4">
                    <!-- Page Header -->

                    <div class="page-header ">
                        <div class="col-12 mt-4  mb-4 ">
                            <h4 class="mb-3">Edit Setting</h4>

                        </div>
                    </div>
                    <!-- End Page Header -->

                    <!-- form start -->
                    <div class="card mb-1">

                        <div class="card-header">
                            Edit setting Record
                        </div>




                        <div class="card-body">
                            <form class="row g-3" action="" method="post" enctype="multipart/form-data">

                                <div class="col-md-6">
                                    <label class="form-label">Website Title</label>
                                    <input type="text" name="website_title" value="<?php echo $website_title; ?>"
                                        class="form-control" autofocus required />
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Website URL*</label>
                                    <input type="url" name="website_url" value="<?php echo $website_url; ?>"
                                        class="form-control" required />
                                    <small>Please Use / at the End of the URL</small>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Website Logo*</label>
                                    <input type="text" name="website_logo" value="<?php echo $website_logo; ?>"
                                        class="form-control">
                                    <img src="assets/img/<?php echo $website_logo; ?>" height="50px">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Website Favicon*</label>
                                    <input type="text" name="website_favicon" value="<?php echo $website_favicon; ?>"
                                        class="form-control">
                                    <img src="assets/img/<?php echo $website_favicon; ?>" height="50px">
                                </div>

                                <!-- SEO Files Upload Section -->
                                <div class="col-md-12">
                                    <div class="card border-success">
                                        <div class="card-header bg-success text-white">
                                            <h5 class="mb-0">
                                                <i class="fas fa-upload"></i> SEO Files Upload
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label">
                                                        <i class="fas fa-sitemap text-success"></i> 
                                                        Sitemap File
                                                        <span class="badge badge-success ml-2">XML</span>
                                                    </label>
                                                    <input type="file" name="sitemap_file" class="form-control" 
                                                        accept=".xml" />
                                                    <small class="form-text text-muted">
                                                        <i class="fas fa-info-circle"></i>
                                                        Upload your sitemap.xml file. Will be placed in the root directory.
                                                    </small>
                                                    <?php if (file_exists('../sitemap.xml')): ?>
                                                        <div class="mt-2">
                                                            <span class="badge badge-success">
                                                                <i class="fas fa-check"></i> Current: sitemap.xml
                                                            </span>
                                                            <small class="text-muted ml-2">
                                                                Last modified: <?php echo date('Y-m-d H:i:s', filemtime('../sitemap.xml')); ?>
                                                            </small>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label">
                                                        <i class="fas fa-robot text-info"></i> 
                                                        Robots.txt File
                                                        <span class="badge badge-info ml-2">TXT</span>
                                                    </label>
                                                    <input type="file" name="robots_file" class="form-control" 
                                                        accept=".txt" />
                                                    <small class="form-text text-muted">
                                                        <i class="fas fa-info-circle"></i>
                                                        Upload your robots.txt file. Will be placed in the root directory.
                                                    </small>
                                                    <?php if (file_exists('../robots.txt')): ?>
                                                        <div class="mt-2">
                                                            <span class="badge badge-success">
                                                                <i class="fas fa-check"></i> Current: robots.txt
                                                            </span>
                                                            <small class="text-muted ml-2">
                                                                Last modified: <?php echo date('Y-m-d H:i:s', filemtime('../robots.txt')); ?>
                                                            </small>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            
                                            <!-- SEO Files Information -->
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <div class="alert alert-info">
                                                        <h6 class="alert-heading">
                                                            <i class="fas fa-lightbulb text-info"></i> 
                                                            SEO Files Information:
                                                        </h6>
                                                        <ul class="mb-0 small">
                                                            <li><strong>Sitemap.xml:</strong> Helps search engines discover and index your pages</li>
                                                            <li><strong>Robots.txt:</strong> Tells search engines which pages to crawl or avoid</li>
                                                            <li><strong>Location:</strong> Files will be uploaded to your website root directory</li>
                                                            <li><strong>Access:</strong> Accessible at yoursite.com/sitemap.xml and yoursite.com/robots.txt</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="card border-primary">
                                        <div class="card-header bg-primary text-white">
                                            <h5 class="mb-0">
                                                <i class="fas fa-code"></i> Head Tag Code Configuration
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label class="form-label">
                                                        <i class="fas fa-heading text-primary"></i> 
                                                        Head Tag Code
                                                        <span class="badge badge-info ml-2">Advanced</span>
                                                    </label>
                                                    <textarea id="headCodeEditor" rows="12" name="website_head_code"
                                                        class="form-control code-editor" 
                                                        placeholder="<!-- Paste your head tag code here -->
<!-- Example: Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
</script>

<!-- Example: Google Search Console Verification -->
<meta name='google-site-verification' content='your-verification-code' />

<!-- Example: Facebook Pixel -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', 'YOUR_PIXEL_ID');
  fbq('track', 'PageView');
</script>"><?php echo htmlspecialchars($website_head_code); ?></textarea>
                                                    <small class="form-text text-muted">
                                                        <i class="fas fa-info-circle"></i>
                                                        This code will be inserted in the &lt;head&gt; section of all pages. 
                                                        Perfect for Google Analytics, Facebook Pixel, Google Search Console verification, and other tracking codes.
                                                    </small>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="alert alert-light border">
                                                        <h6 class="alert-heading">
                                                            <i class="fas fa-lightbulb text-warning"></i> 
                                                            Common Use Cases:
                                                        </h6>
                                                        <ul class="mb-0 small">
                                                            <li><strong>Google Analytics:</strong> GA4 tracking code</li>
                                                            <li><strong>Google Tag Manager:</strong> GTM container code</li>
                                                            <li><strong>Facebook Pixel:</strong> Conversion tracking</li>
                                                            <li><strong>Google Search Console:</strong> Site verification</li>
                                                            <li><strong>Bing Webmaster:</strong> Site verification</li>
                                                            <li><strong>Custom CSS:</strong> Additional stylesheets</li>
                                                            <li><strong>Custom JS:</strong> Additional scripts</li>
                                                            <li><strong>Meta Tags:</strong> SEO and social media</li>
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <hr class="my-4">
                                
                                <!-- Submit Section -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-info">
                                            <i class="fas fa-info-circle"></i>
                                            <strong>Note:</strong> Changes will be applied immediately to your website. Make sure to test all settings after updating.
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" name="insert_btn" class="btn btn-primary btn-lg px-5">
                                            <i class="fas fa-save"></i> Update Settings
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-lg px-5 ml-2" onclick="location.reload()">
                                            <i class="fas fa-undo"></i> Reset Form
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- form end -->

                    <?php
                    require_once('parts/db.php');
                    if (isset($_POST['insert_btn'])) {

                        $ewebsite_title = $_POST['website_title'];
                        $ewebsite_url = $_POST['website_url'];
                        $ewebsite_logo = $_POST['website_logo'];
                        $ewebsite_favicon = $_POST['website_favicon'];
                        $ewebsite_head_code = mysqli_real_escape_string($conn, $_POST['website_head_code']);

                        $update_setting = "UPDATE setting SET 
				website_title='$ewebsite_title',
				website_url='$ewebsite_url',
				website_logo='$ewebsite_logo',
				website_favicon='$ewebsite_favicon',
				website_head_code='$ewebsite_head_code'";

                        $run_setting = mysqli_query($conn, $update_setting);

                        if ($run_setting == true) {
                            // Handle sitemap file upload
                            if (!empty($_FILES['sitemap_file']['name'])) {
                                $sitemap_file = $_FILES['sitemap_file'];
                                $sitemap_extension = strtolower(pathinfo($sitemap_file['name'], PATHINFO_EXTENSION));
                                
                                if ($sitemap_extension === 'xml') {
                                    $sitemap_destination = '../sitemap.xml';
                                    if (move_uploaded_file($sitemap_file['tmp_name'], $sitemap_destination)) {
                                        echo "<script>alert('Sitemap uploaded successfully!');</script>";
                                    } else {
                                        echo "<script>alert('Failed to upload sitemap file!');</script>";
                                    }
                                } else {
                                    echo "<script>alert('Sitemap file must be XML format!');</script>";
                                }
                            }
                            
                            // Handle robots.txt file upload
                            if (!empty($_FILES['robots_file']['name'])) {
                                $robots_file = $_FILES['robots_file'];
                                $robots_extension = strtolower(pathinfo($robots_file['name'], PATHINFO_EXTENSION));
                                
                                if ($robots_extension === 'txt') {
                                    $robots_destination = '../robots.txt';
                                    if (move_uploaded_file($robots_file['tmp_name'], $robots_destination)) {
                                        echo "<script>alert('Robots.txt uploaded successfully!');</script>";
                                    } else {
                                        echo "<script>alert('Failed to upload robots.txt file!');</script>";
                                    }
                                } else {
                                    echo "<script>alert('Robots file must be TXT format!');</script>";
                                }
                            }
                            
                            // Handle existing logo and favicon uploads (if any)
                            if (isset($ewebsite_logo_tmp_name) && !empty($ewebsite_logo_tmp_name)) {
                                move_uploaded_file($ewebsite_logo_tmp_name, "upload/$ewebsite_logo");
                            }
                            if (isset($ewebsite_favicon_tmp_name) && !empty($ewebsite_favicon_tmp_name)) {
                                move_uploaded_file($ewebsite_favicon_tmp_name, "upload/$ewebsite_favicon");
                            }
                            
                            echo "<script>alert('Settings updated successfully!');</script>";
                            echo "<script>window.open('setting.php','_self');</script>";
                        } else {
                            echo "<script>alert('Failed to update settings!');</script>";
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