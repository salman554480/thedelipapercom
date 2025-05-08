<?php
require_once('admin/parts/db.php');
if (isset($_GET['page_url'])) {
    $page_url = $_GET['page_url'];
    $select_page = "SELECT * FROM page WHERE page_url='$page_url'";
    $run_page = mysqli_query($conn, $select_page);
    $row_page = mysqli_fetch_array($run_page);
    $page_id = $row_page['page_id'];
    $page_title = $row_page['page_title'];
    $page_content = $row_page['page_content'];
    $meta_title = $row_page['meta_title'];
    $meta_description = $row_page['meta_description'];
    $meta_keywords = $row_page['meta_keywords'];
}
?>

<?php require_once('parts/top.php'); ?>

</head>

<body>
    <?php require_once('parts/navbar.php'); ?>
    <div class="website-area">
        <div class="w-90 py-5 ">
            <h1 class="section-heading text-center"><?php echo $page_title; ?></h1>
            <?php if (in_array($page_url, ["about-us", "privacy-policy", "terms-and-conditions"])) { ?>
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="page-content-area">
                            <?php echo $page_content; ?>
                        </div>
                    </div>
                </div>
            <?php } else if ($page_url == "contact-us") { ?>
                <div class="row my-4">
                    <!-- Contact Form -->
                    <div class="col-md-6">
                        <h3 class="section-heading">Contact Us</h3>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="message">Your Message</label>
                                <textarea class="form-control" id="message" rows="5"
                                    placeholder="Type your message"></textarea>
                            </div>
                            <button type="submit"
                                class="btn btn-primary primary-bg primary-border border-radius-30 custom-btn w-50">Send
                                Message</button>
                        </form>

                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $name    = htmlspecialchars($_POST['name']);
                            $email   = htmlspecialchars($_POST['email']);
                            $message = htmlspecialchars($_POST['message']);

                            $to      = "your@email.com"; // Replace with your email address
                            $subject = "New Message from Contact Form";
                            $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";

                            $headers = "From: $email\r\n";
                            $headers .= "Reply-To: $email\r\n";

                            if (mail($to, $subject, $body, $headers)) {
                                echo "Message sent successfully!";
                            } else {
                                echo "Failed to send message.";
                            }
                        }
                        ?>
                    </div>

                    <!-- Contact Information -->
                    <div class="col-md-6 contact-info">
                        <h3 class="section-subheading">Get in Touch</h3>
                        <p><i class='bx bx-map'></i>72 Booker Lane, High Wycombe HP12 3UT</p>
                        <p><i class='bx bx-phone'></i><a href="tel:+447366426960">+447366426960</a></p>
                        <p><i class='bx bx-envelope'></i><a href="mailto:sales@delipaper.co.uk">sales@delipaper.co.uk </a>
                        </p>
                        <!-- <p><i class='bx bx-time-five'></i>Mon - Fri: 9:00 AM to 6:00 PM</p> -->
                    </div>
                </div>
            <?php } else if ($page_url == "blog") { ?>
                <div class="row my-3">
                    <?php

                    $select_post = "SELECT * FROM post where post_status='publish' ORDER BY post_id DESC";
                    $run_post = mysqli_query($conn, $select_post);
                    while ($row_post = mysqli_fetch_array($run_post)) {

                        $post_id = $row_post['post_id'];
                        $post_title = $row_post['post_title'];
                        $post_url = $row_post['post_url'];
                        $post_status = $row_post['post_status'];
                        $post_thumbnail = $row_post['post_thumbnail'];
                        $post_content = $row_post['post_content'];
                        $post_date = $row_post['post_date'];

                        $day = date('d', strtotime($post_date));      // "27"
                        $month = date('M', strtotime($post_date));    // "Apr"

                    ?>
                        <div class="col-6 col-md-3 mb-4">
                            <div class="blog-grid">
                                <div class="blog-img">
                                    <div class="date">
                                        <span><?php echo $day; ?></span>
                                        <label><?php echo $month; ?></label>
                                    </div>
                                    <a href="blog_details.php?post_url=<?php echo $post_url ?>">
                                        <img src="admin/assets/img/<?php echo $post_thumbnail; ?>" class="w-100" title=""
                                            alt="">
                                    </a>
                                </div>
                                <div class="blog-info">
                                    <h5><a
                                            href="blog_details.php?post_url=<?php echo $post_url ?>"><?php echo $post_title; ?></a>
                                    </h5>
                                    <p><?php echo substr($post_content, 0, 150); ?>...</p>
                                    <div class="btn-bar">
                                        <a href="blog_details.php?post_url=<?php echo $post_url ?>"
                                            class="btn btn-secondary secondary-bg secondary-border border-radius-30 custom-btn w-50">
                                            <span>Read More</span>
                                            <i class="arrow"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            <?php } ?>
        </div>

    </div>




    <?php require_once('parts/footer.php'); ?>