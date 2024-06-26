<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- swiper link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "book_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT title, description, image_path, button_text, button_link FROM packages";
    $result = $conn->query($sql);

    $packages = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $packages[] = $row;
        }
    }
    $conn->close();
    ?>


    <!-- header section start -->

    <section class="header">

        <a href="home.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>


    </section>

    <!-- header section end -->


    <div class="heading" style="background:url(images/heading-img-1.png) ">
        <h1>Packages</h1>
    </div>

    <!-- packages section starts -->
<section class="packages">
    <h1 class="heading-title">Top Destinations</h1>

    <div class="box-container">
        <?php foreach ($packages as $package): ?>
        <div class="box">
            <div class="image">
                <img src="<?php echo htmlspecialchars($package['image_path']); ?>" alt="">
            </div>
            <div class="content">
                <h3><?php echo htmlspecialchars($package['title']); ?></h3>
                <p><?php echo htmlspecialchars($package['description']); ?></p>
                <a href="<?php echo htmlspecialchars($package['button_link']); ?>" class="btn"><?php echo htmlspecialchars($package['button_text']); ?></a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="load-more"><span class="btn">load more</span></div>

</section>
<!-- packages section ends -->





    <!-- footer section start -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="box">
                
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
            </div>
            

            <div class="box">
                
                <h3>contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i>+91-999-000-8787</a>
                <a href="#"> <i class="fas fa-phone"></i>+91-999-011-8787</a>
                <a href="#"> <i class="fas fa-envelope"></i>travelne@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i>Guwahati, Assam - 785621</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href='#'><i class="fab fa-facebook-f"></i>facebook</a>
                <a href='#'><i class="fab fa-twitter"></i>twitter</a>
                <a href='#'><i class="fab fa-instagram"></i>instagram</a>
                <a href='#'><i class="fab fa-linkedin"></i>linkedin</a>
            </div>

        </div>

        <div class="credit"> created by <span> manvi mahe</span> |all rights reserved!</div>

    </section>


    <!-- footer section end -->

    <!-- swiper script file -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

     <!-- custom js file link -->
     <script src="js/script.js"></script>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
   
    
</body>
</html>