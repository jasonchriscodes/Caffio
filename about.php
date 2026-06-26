<?php
    include './components/connect.php';
    session_start();

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    }

    if (isset($_POST['logout'])) {
        session_destroy();
        header('location: login.php');
    }
?>
<style type="text/css">
<?php include './style.css';
?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

    <title>Coffee Shop - About Us Page</title>
</head>

<body>
    <?php 
        include './components/header.php'; 
    ?>
    <div class="main">
        <div class="banner">
            <h1>About Us</h1>
        </div>
        <div class="title2">
            <a href="home.php">Home </a><span>/ About</span>
        </div>
        <section class="shop">
            <div class="title">
                <img src="./img/download.png" alt="">
                <div class="subtitle">We Offer You</div>
                <h1 class="title">Aromatic Coffee Blends</h1>
            </div>
        </section>
        <div class="about-categories-container">
            <div class="about-category">
                <img src="img/roasted grains.jpg" alt="Roasted Coffee Grains" class="about-category-image">
                <div class="about-category-content">
                    <h2 class="about-category-title">Roasted Grains</h2>
                    <p class="about-category-description">
                        Our coffee is roasted in several stages. We select every grain to be perfect.
                        Impeccable taste is the main thing for us.
                    </p>
                    <button class="about-category-button" aria-label="Learn more about roasted grains"></button>
                </div>
            </div>

            <div class="about-category">
                <img src="img/coffee delivery.jpg" alt="Coffee Delivery Bags" class="about-category-image">
                <div class="about-category-content">
                    <h2 class="about-category-title">Coffee Delivery</h2>
                    <p class="about-category-description">
                        Delivery of coffee anywhere in the world. We also have a discount on bulk orders.
                        Feel the taste of real delicious coffee.
                    </p>
                    <button class="about-category-button" aria-label="Learn more about coffee delivery"></button>
                </div>
            </div>

            <div class="about-category">
                <img src="img/mexico.jpg" alt="Mexican Coffee Packages" class="about-category-image">
                <div class="about-category-content">
                    <h2 class="about-category-title">Coffee from Mexico</h2>
                    <p class="about-category-description">
                        Exclusively for you there is a blend of coffee beans grown on Mexican plantations.
                        You can taste the Oaxaca sun.
                    </p>
                    <button class="about-category-button" aria-label="Learn more about Mexican coffee"></button>
                </div>
            </div>
        </div>

        <section class="services">
            <div class="title">
                <img src="./img/download.png" class="logo" alt="">
                <h1>Why Choose Us</h1>
                <p>Choose us for premium Coffee Shop, sustainably sourced and packed with flavor. </p>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="./img/icon2.png" alt="">
                    <div class="detail">
                        <h3>Great Savings</h3>
                        <p>save big every order</p>
                    </div>
                </div>

                <div class="box">
                    <img src="./img/icon1.png" alt="">
                    <div class="detail">
                        <h3>24*7 Support</h3>
                        <p>one-on-one support</p>
                    </div>
                </div>

                <div class="box">
                    <img src="./img/icon0.png" alt="">
                    <div class="detail">
                        <h3>Gift Vouchers</h3>
                        <p>vouchers on every festivals</p>
                    </div>
                </div>

                <div class="box">
                    <img src="./img/icon.png" alt="">
                    <div class="detail">
                        <h3>Cash On Delivery</h3>
                        <p>all india delivery</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="about">
            <div class="title">
                <img src="./img/download.png" alt="">
                <h1>Meet Our Team</h1>
                <p>The passionate people behind our exceptional coffee</p>
            </div>
            <div class="team-container">
                <div class="team-member">
                    <div class="member-image">
                        <img src="./img/avatar_01.webp" alt="Team Member 1">
                    </div>
                    <h3>Sarah Johnson</h3>
                    <p class="role">Founder & CEO</p>
                    <p class="description">With 15 years of experience in the coffee industry, John leads our vision of
                        bringing premium coffee to every home.</p>
                </div>

                <div class="team-member">
                    <div class="member-image">
                        <img src="./img/avatar_02.webp" alt="Team Member 2">
                    </div>
                    <h3>Michael Chen</h3>
                    <p class="role">Head Roaster</p>
                    <p class="description">Chen's expertise in roasting techniques ensures every batch meets our highest
                        quality standards.</p>
                </div>

                <div class="team-member">
                    <div class="member-image">
                        <img src="./img/avatar_03.webp" alt="Team Member 3">
                    </div>
                    <h3>Cora Lee</h3>
                    <p class="role">Customer Relations</p>
                    <p class="description">Cora ensures every customer has an exceptional experience from order to
                        delivery.</p>
                </div>
            </div>
        </div>
        <div class="testimonial-container">
            <div class="title">
                <img src="./img/download.png" alt="">
                <h1>what people say about us</h1>
                <p>What Our Customers Are Saying About Us</p>
            </div>
            <div class="container">
                <div class="testimonial-item active">
                    <img src="./img/02.jpg" alt="">
                    <h1>Khushi Rupapara</h1>
                    <p>Absolutely love this coffee shop! The flavor is smooth and rich,
                        and I feel more energized throughout the day without the jitters.
                        It’s become my go-to morning beverage. Highly recommend!</p>
                </div>

                <div class="testimonial-item ">
                    <img src="./img/04.jpg" alt="">
                    <h1>Deep Vaghasiya</h1>
                    <p>I was skeptical at first, but this coffee shop exceeded my expectations!
                        It’s refreshing and has helped boost my metabolism. Plus, I appreciate the sustainable sourcing.
                        Will definitely purchase again!"</p>
                </div>

                <div class="testimonial-item ">
                    <img src="./img/03.jpg" alt="">
                    <h1>Priya Patel</h1>
                    <p>Fantastic product! The aroma is delightful, and the taste is exceptional.
                        I’ve noticed a positive difference in my focus and energy levels. A must-try for any coffee
                        lover!</p>
                </div>

                <div class="testimonial-item ">
                    <img src="./img/01.jpg" alt="">
                    <h1>Kaxxa Vaghasiya</h1>
                    <p>I've tried several coffee shops, but this one stands out. It’s perfectly balanced and gives me a
                        great start to my day.
                        Great quality and fast shipping!</p>
                </div>
                <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                <div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
            </div>
        </div>




        <?php include './components/footer.php'; ?>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include './components/alert.php'; ?>
</body>

</html>