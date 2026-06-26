<?php
    include './components/connect.php';
    session_start();
    $user_id = $_SESSION['user_id'] ?? null;

    if(!isset($user_id)){
        header('location:login.php');
        exit;
    }

    if(isset($_POST['logout'])){
        session_destroy();
        header('location:login.php');
        exit;
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
    <title>Caffio - Home Page</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>

<body>
    <?php
    include './components/header.php'; 
    ?>

    <div class="main">
        <section class="home-section">
            <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
            <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>

            <div class="slider">
                <div class="slider__slider slider1">
                    <div class="slider-detail">
                        <h1>Pure Green Coffee</h1>
                        <p>Experience premium unroasted beans packed with antioxidants and natural vitality.</p>
                        <a href="view_products.php" class="btn">Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <div class="slider__slider slider2">
                    <div class="slider-detail">
                        <h1>Nature's Morning Boost</h1>
                        <p>Embrace sustainable energy with our ethically sourced green coffee collection.</p>
                        <a href="view_products.php" class="btn">Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <div class="slider__slider slider3">
                    <div class="slider-detail">
                        <h1>Wellness in Every Sip</h1>
                        <p>Discover how green coffee supports metabolism and overall vitality naturally.</p>
                        <a href="view_products.php" class="btn">Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <div class="slider__slider slider4">
                    <div class="slider-detail">
                        <h1>Farm to Cup Perfection</h1>
                        <p>Taste the difference of carefully selected, premium green coffee beans.</p>
                        <a href="view_products.php" class="btn">Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
                <div class="slider__slider slider5">
                    <div class="slider-detail">
                        <h1>Elevate Every Cup</h1>
                        <p>Join thousands who've discovered the remarkable benefits of green coffee.</p>
                        <a href="view_products.php" class="btn">Shop Now</a>
                    </div>
                    <div class="hero-dec-top"></div>
                    <div class="hero-dec-bottom"></div>
                </div>
            </div>

            <div class="slider-progress">
                <span class="dot active" data-slide="0"></span>
                <span class="dot" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
                <span class="dot" data-slide="3"></span>
                <span class="dot" data-slide="4"></span>
            </div>
        </section>
        <!-- Home slide end -->

        <!-- Ingredients section -->
        <section class="ingredients-section">
            <div class="product-image">
                <img src="img/container.webp" alt="coffee product">
            </div>
            <div class="content">
                <h1>FINEST INGREDIENTS</h1>
                <p class="intro-text">
                    This is the perfect place to find a nice and cozy spot to sip some. You'll find the Java Jungle,
                    Coffee Bean and more.
                </p>
                <div class="feature">
                    <i class="bx bxs-coffee icon"></i>
                    <div class="feature-content">
                        <h3>Coffeemaker</h3>
                        <p>Enjoy freshly brewed coffee anytime with a simple and convenient brewing experience.</p>
                    </div>
                </div>
                <div class="feature">
                    <i class="bx bxs-coffee-bean icon"></i>
                    <div class="feature-content">
                        <h3>Coffee Grinder</h3>
                        <p>Grind your beans fresh for maximum aroma and a richer, fuller flavor in every cup.</p>
                    </div>
                </div>
                <div class="feature">
                    <i class="bx bxs-coffee-togo icon"></i>
                    <div class="feature-content">
                        <h3>Coffee Cups</h3>
                        <p>Take your favorite brew with you in cups designed for comfort and convenience.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Shop section -->
        <section class="shop">
            <div class="title">
                <img src="./img/download.png" alt="">
                <h1>Popular Products</h1>
            </div>
            <div class="hero-banner">
                <img src="./img/hero_image.jpg" alt="">
                <div class="hero-content">
                    <h2>Discover the Power of Pure Green Coffee</h2>
                    <p>Freshly roasted, ethically sourced beans that bring rich flavor and natural energy to every cup.
                        Experience coffee the way nature intended.
                    </p>
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="./img/card.jpg" alt="">
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
                <div class="box">
                    <img src="./img/card0.jpg" alt="">
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
                <div class="box">
                    <img src="./img/card1.jpg" alt="">
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
                <div class="box">
                    <img src="./img/card2.jpg" alt="">
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
                <div class="box">
                    <img src="./img/card3.jpg" alt="">
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
                <div class="box">
                    <img src="./img/card4.jpg" alt="">
                    <a href="view_products.php" class="btn">Shop Now</a>
                </div>
            </div>
        </section>

        <!-- Shop category section -->
        <section class="shop-category">
            <div class="box-container">
                <div class="box">
                    <img src="./img/left.jpg" alt="">
                    <div class="detail">
                        <span>BIG OFFERS</span>
                        <h1>Extra 15% off</h1>
                        <a href="view_products.php" class="btn">Shop Now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="./img/right.jpg" alt="">
                    <div class="detail">
                        <span>New In Taste</span>
                        <h1>Coffee House</h1>
                        <a href="view_products.php" class="btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services section -->
        <section class="services">
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
                        <h3>24/7 support</h3>
                        <p>one-on-one support</p>
                    </div>
                </div>

                <div class="box">
                    <img src="./img/icon0.png" alt="">
                    <div class="detail">
                        <h3>Gift Vouchers</h3>
                        <p>Vouchers on every festivals</p>
                    </div>
                </div>

                <div class="box">
                    <img src="./img/icon.png" alt="">
                    <div class="detail">
                        <h3>Cash On Delivery</h3>
                        <p>All Us Delivery</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brand section -->
        <section class="brand">
            <div class="title">
                <h1>Our Coffee Brands</h1>
                <p>Explore the signature blends that make every cup unforgettable.</p>
            </div>

            <div class="box-container">
                <div class="box">
                    <img src="./img/Img-3.webp" alt="">
                    <h3>Mocha</h3>
                </div>
                <div class="box">
                    <img src="./img/Img-2.webp" alt="">
                    <h3>Caramel Macchiato</h3>
                </div>
                <div class="box">
                    <img src="./img/Img-9.webp" alt="">
                    <h3>Premium Roast</h3>
                </div>
                <div class="box">
                    <img src="./img/Img-4.webp" alt="">
                    <h3>Latte</h3>
                </div>
            </div>
        </section>

        <?php include './components/footer.php'; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="./script.js"></script>
    <?php include './components/alert.php'; ?>
</body>

</html>