<?php 
    include 'header.php'; 
?>


    <div class="heading" style="background:url(images/heading-img-1.png) ">
        <h1>Packages</h1>
    </div>

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





    <?php
   include 'footer.php';
   ?>