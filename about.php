
    <?php 
    include 'header.php'; 
    ?>


    <div class="heading" style="background:url(images/heading-img-1.png) ">
        <h1>About Us</h1>
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

    $sql = "SELECT stars, review_text, name, role, image_path FROM reviews";
    $result = $conn->query($sql);

    $reviews = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $reviews[] = $row;
        }
    }
    $conn->close();
    ?>




    <!-- about section starts -->
        <section class="about">

            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>Why Choose Us?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae maxime exercitationem qui odio minus unde officiis consequatur est similique nobis.quos sint eos odit nihil sapiente, tempora neque? Illo, earum voluptatem.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo repudiandae unde earum saepe illo possimus facere illum, nulla impedit </p>

                <div class="icons-container">
                    <div class="icon">
                        <i class="fas fa-map"></i>
                        <span>Top Destinations</span>
                    </div>
                
                    <div class="icon">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span>Affordable Prices</span>
                    </div>

                    <div class="icon">
                        <i class="fas fa-headset"></i>
                        <span>24/7 guide service</span>
                    </div>
                </div>

            </div>

        </section>
    <!-- about section ends -->


    
    <!-- reviews section starts  -->
    <section class="reviews">
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <?php foreach ($reviews as $review): ?>
                    <div class="swiper-slide slide">
                        <div class="stars">
                            <?php for ($i = 0; $i < $review['stars']; $i++): ?>
                            <i class="fas fa-star"></i>
                            <?php endfor; ?>
                        </div>
                        <p><?php echo htmlspecialchars($review['review_text']); ?></p>
                        <h3><?php echo htmlspecialchars($review['name']); ?></h3>
                        <span><?php echo htmlspecialchars($review['role']); ?></span>
                        <img src="<?php echo htmlspecialchars($review['image_path']); ?>" alt="">
                    </div>
                <?php endforeach; ?>
                
            </div>
        </div>
     </section>
    <!-- reviews section ends  -->





    <?php
   include 'footer.php';
   ?>