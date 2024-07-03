<?php 
    include 'header.php'; 
?>


    <div class="heading" style="background:url(images/heading-img-3.png) ">
        <h1>Book Now</h1>
    </div>




    <!-- booking section starts -->
    <section class="booking">

        <h1 class="heading-title">Book Your Trip</h1>

        <form action="book_form.php" method="post" class="book-form" >

            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>

                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email-id" name="email">
                </div>

                <div class="inputBox">
                    <span>phone :</span>
                    <input type="phone" placeholder="enter your number" name="number">
                </div>

                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>

                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place where you want to visit :" name="loaction">
                </div>

                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>

                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>

                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>

    </section>
     <!-- booking section ends -->


    <?php
   include 'footer.php';
   ?>