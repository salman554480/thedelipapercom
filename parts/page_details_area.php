<?php

$select_page = "SELECT * FROM page WHERE page_url='$slug'";
$run_page = mysqli_query($conn, $select_page);
$row_page = mysqli_fetch_array($run_page);
$page_id = $row_page['page_id'];
$page_title = $row_page['page_title'];
$page_content = $row_page['page_content'];
$meta_title = $row_page['meta_title'];
$meta_description = $row_page['meta_description'];
$meta_keywords = $row_page['meta_keywords'];

?>

<div class="website-area">
    <div class="container py-5 ">
        <h1 class="section-heading text-center"><?php echo $page_title; ?></h1>
        <?php if (in_array($slug, ["about-us", "privacy-policy", "terms-and-conditions"])) { ?>
        <div class="row my-3">
            <div class="col-md-12">
                <div class="page-content-area">
                    <?php echo $page_content; ?>
                </div>
            </div>
        </div>
        <?php } else if ($slug == "contact-deli-paper-in-uk") { ?>
        <div class="row my-4">
            <!-- Contact Form -->

            <div class="col-md-12 mb-4">
                <div class="row">

                    <!-- Address Card -->
                    <div class="col-md-6 col-lg-3 d-flex">
                        <div class="card contact-card w-100 h-100 d-flex flex-column">
                            <div class="card-body d-flex flex-column">
                                <i class='bx bx-map contact-icon'></i>
                                <h6 class="card-title">Address</h6>
                                <p class="card-text">72 Booker Lane,<br> High Wycombe HP12 3UT</p>
                            </div>
                        </div>
                    </div>

                    <!-- WhatsApp Contact Card -->
                    <div class="col-md-6 col-lg-3 d-flex">
                        <div class="card contact-card w-100 h-100 d-flex flex-column">
                            <div class="card-body d-flex flex-column">
                                <i class='bx bxl-whatsapp contact-icon'></i>
                                <h6 class="card-title">WhatsApp</h6>
                                <p class="card-text">
                                    <a href="https://wa.me/447366426960" target="_blank">+44 7366 426960</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Working Hours Card -->
                    <div class="col-md-6 col-lg-3 d-flex">
                        <div class="card contact-card w-100 h-100 d-flex flex-column">
                            <div class="card-body d-flex flex-column">
                                <i class='bx bx-time-five contact-icon'></i>
                                <h6 class="card-title">Working Hours</h6>
                                <p class="card-text">Mon - Fri:<br> 9:00 AM – 6:00 PM</p>
                            </div>
                        </div>
                    </div>

                    <!-- Email Card -->
                    <div class="col-md-6 col-lg-3 d-flex">
                        <div class="card contact-card w-100 h-100 d-flex flex-column">
                            <div class="card-body d-flex flex-column">
                                <i class='bx bx-envelope contact-icon'></i>
                                <h6 class="card-title">Email</h6>
                                <p class="card-text" style="font-size:15px;">
                                    <a href="mailto:sales@delipaper.co.uk">sales@delipaper.co.uk</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12">
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
                        <textarea class="form-control" id="message" rows="5" placeholder="Type your message"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="quizAnswer" id="quizQuestion" class="form-label"></label>
                        <input type="text" id="quizAnswer" class="form-control w-25" placeholder="Your answer">
                        <div id="quizFeedback" style="color: red; display: none;">Incorrect answer. Please try
                            again.</div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" id="submitBtn"
                        class="btn btn-primary primary-bg primary-border border-radius-30 custom-btn w-25"
                        disabled>Submit</button>
                </form>

                <script>
                const quizQuestion = document.getElementById('quizQuestion');
                const quizAnswerInput = document.getElementById('quizAnswer');
                const submitBtn = document.getElementById('submitBtn');
                const feedback = document.getElementById('quizFeedback');

                // Generate two random numbers (1 to 10)
                const num1 = Math.floor(Math.random() * 10) + 1;
                const num2 = Math.floor(Math.random() * 10) + 1;
                const correctAnswer = num1 + num2;

                // Display the question
                quizQuestion.textContent = `What is ${num1} + ${num2}?`;

                // Check answer
                quizAnswerInput.addEventListener('input', () => {
                    if (parseInt(quizAnswerInput.value.trim()) === correctAnswer) {
                        submitBtn.disabled = false;
                        feedback.style.display = 'none';
                    } else {
                        submitBtn.disabled = true;
                        feedback.style.display = 'block';
                    }
                });

                // Optional: prevent form submission if answer is wrong
                document.getElementById('quizForm').addEventListener('submit', function(e) {
                    if (submitBtn.disabled) {
                        e.preventDefault();
                    }
                });
                </script>
                <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $name = htmlspecialchars($_POST['name']);
                            $email = htmlspecialchars($_POST['email']);
                            $message = htmlspecialchars($_POST['message']);

                            $to = "sales@delipaper.co.uk"; // Replace with your email address
                            $subject = "New Message from Contact Form";
                            $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

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


        </div>
        <?php } else if ($slug == "blog-deli-paper") { ?>
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
            <div class="col-12 col-md-4 mb-4 mb-4">
                <div class="card h-100">
                    <div class="blog-img-container">
                        <a href="<?php echo $website_url; ?>/<?php echo $post_url ?>">
                            <img src="admin/assets/img/<?php echo $post_thumbnail; ?>" alt="Blog Image"
                                class="card-img-top">
                        </a>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5><a href="<?php echo $website_url; ?>/<?php echo $post_url ?>"><?php echo $post_title; ?></a>
                        </h5>
                        <p><?php echo substr($post_content, 0, 150); ?>...</p>
                        <div class="mt-auto">
                            <a href="<?php echo $website_url; ?>/<?php echo $post_url ?>"
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