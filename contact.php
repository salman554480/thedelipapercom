<?php require_once('parts/top.php'); ?>

</head>

<body>
    <?php require_once('parts/navbar.php'); ?>
    <div class="website-area">
        <div class="container py-3 ">
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
                    } else {
                        echo "Invalid request.";
                    }
                    ?>
                </div>

                <!-- Contact Information -->
                <div class="col-md-6 contact-info">
                    <h3 class="section-subheading">Get in Touch</h3>
                    <p><i class='bx bx-map'></i>123 Main Street, City, Country</p>
                    <p><i class='bx bx-phone'></i>+1 (555) 123-4567</p>
                    <p><i class='bx bx-envelope'></i>info@example.com</p>
                    <p><i class='bx bx-time-five'></i>Mon - Fri: 9:00 AM to 6:00 PM</p>
                </div>
            </div>
        </div>

    </div>




    <?php require_once('parts/footer.php'); ?>