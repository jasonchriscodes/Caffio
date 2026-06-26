<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
</head>

<body>
    <header class="header">
        <div class="flex">
            <a href="home.php" class="logo"><img src="img/header_logo.avif" alt="header logo"></a>
            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="view_products.php">Products</a>
                <a href="order.php">Orders</a>
                <a href="about.php">About Us</a>
                <a href="contact.php">Contact Us</a>
            </nav>
            <div class="icons">
                <a href="search_page.php" class="search-btn"><i class="bx bx-search-alt-2"></i></a>
                <i class="bx bxs-user" id="user-btn"></i>
                <php? $count_wishlist_items=$conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
                    $count_wishlist_items->execute([$user_id]);
                    $total_wishlist_items = $count_wishlist_items->rowCount();
                    ?>
                    <a href="cart.php" class="cart-btn"><i class="bx bx-heart"></i><sup>?=$total_wishlist_items?>
                        </sup></a>
                    <i class="bx bx-list-plus" id="menu-btn" style="font-size: 2rem;"></i>
            </div>

            <div class="user-box">
                <p>Username : <span><?php echo $_SESSION['user_name']; ?></span></p>
                <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>

                <form method="post">
                    <button type="submit" name="logout" class="logout-btn">Log Out</button>
                </form>
            </div>
        </div>
    </header>
</body>

</html>