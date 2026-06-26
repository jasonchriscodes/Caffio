<?php
if(isset($_POST['sub-btn'])) {
    $email = filter_var($_POST['subemail'], FILTER_VALIDATE_EMAIL);

    if(!$email) {
        $warning_msg[] = 'Invalid email address!';
    } else {
        $select_subscribers = $conn->prepare("SELECT * FROM `subscribers` WHERE email = ?");
        $select_subscribers->execute([$email]);

        if ($select_subscribers->rowCount() > 0) {
            $warning_msg[] = 'You are already subscribed!';
        } else {
            $insert_subscribers = $conn->prepare("INSERT INTO `subscribers` (user_id, email) VALUES(?,?)");
            $insert_subscribers->execute([$user_id, $email]);
            $success_msg[] = 'Thank you for subscribing!';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
</head>

<body>
    <div class="top-footer">
        <h2><i class="bx bx-envelope"></i>Sign Up For Newsletter</h2>
        <form action="" method="post">
            <div class="input-field">
                <input type="email" name="subemail" required placeholder="Enter your email" maxlength="50"
                    oninput="this.value = this.value.replace(/\s/g, '')">
                <button type="submit" name="sub-btn" class="btn">Subscribe</button>
            </div>
        </form>
    </div>

    <footer>
        <div class="overlay"></div>
        <div class="footer-content">
            <div class="inner-footer">
                <div class="card">
                    <h3>About Us</h3>
                    <ul>
                        <li>About Us</li>
                        <li>Our Difference</li>
                        <li>Community Matters</li>
                        <li>Press</li>
                        <li>Blog</li>
                        <li>Video Gallery</li>
                    </ul>
                </div>
                <div class="card">
                    <h3>Services</h3>
                    <ul>
                        <li>Order</li>
                        <li>Help Center</li>
                        <li>Shipping</li>
                        <li>Terms of Use</li>
                        <li>Account Details</li>
                        <li>My Account</li>
                    </ul>
                </div>
                <div class="card">
                    <h3>Locations</h3>
                    <ul>
                        <li>New York, NY</li>
                        <li>Lost Angeles, CA</li>
                        <li>Chicago, IL</li>
                        <li>Houston, TX</li>
                        <li>Miami, FL/li>
                        <li>Seattle, WA</li>
                    </ul>
                </div>
                <div class="card">
                    <h3>Connect With Us</h3>
                    <p>Follow us on social media or updates and special offers</p>
                    <div class="social-links">
                        <i class="bx bxl-instagram"></i>
                        <i class="bx bxl-twitter"></i>
                        <i class="bx bxl-facebook"></i>
                        <i class="bx bxl-whatsapp"></i>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <p>&copy; <?= date('Y'); ?> All Rights Reserved - Caffio</p>
            </div>

        </div>
    </footer>



</body>

</html>