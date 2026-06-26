<?php
    // This file is a partial. It is included by pages that already:
    //   - started the session,
    //   - included components/connect.php (defines $conn),
    //   - defined $user_id.
    // So we just use those variables here.

    $total_wishlist_items = 0;
    $total_cart_items = 0;
    if (isset($conn) && isset($user_id)) {
        $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
        $count_wishlist_items->execute([$user_id]);
        $total_wishlist_items = $count_wishlist_items->rowCount();

        $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
        $count_cart_items->execute([$user_id]);
        $total_cart_items = $count_cart_items->rowCount();
    }
?>

<header class="header">
    <div class="flex">
        <a href="home.php" class="logo"><img src="img/header_logo.png" alt="header logo"></a>

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
            <a href="wishlist.php" class="cart-btn">
                <i class="bx bx-heart"></i>
                <sup><?= $total_wishlist_items ?></sup>
            </a>
            <a href="cart.php" class="cart-btn">
                <i class="bx bx-cart"></i>
                <sup><?= $total_cart_items ?></sup>
            </a>
            <i class="bx bx-list-plus" id="menu-btn" style="font-size: 2rem;"></i>
        </div>

        <div class="user-box">
            <p>Username : <span><?php echo $_SESSION['user_name'] ?? ''; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email'] ?? ''; ?></span></p>

            <form method="post">
                <button type="submit" name="logout" class="logout-btn">Log Out</button>
            </form>
        </div>
    </div>
</header>