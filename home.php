<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- fon awesome  cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- external css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- header section start -->

    <section class="header">

        <a href="home.php" class="logo">Travel</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- home section start -->
    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/explore.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel arround the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/discover.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/travel.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile </h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- service section start -->
    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/adventure.png" alt="">
                <h3>advanture</h3>
            </div>

            <div class="box">
                <img src="images/tour-guide.png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/trekking.png" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="images/campfire.png" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="images/offroad.png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="images/camping.png" alt="">
                <h3>camping</h3>
            </div>

        </div>
    </section>

    <!-- home about section start -->
    <section class="home-about">

        <div class="image">
            <img src="images/home-aboutus.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam, eveniet dolores perferendis odit quo dolorem explicabo animi molestiae. Earum, saepe!</p>
            <a href="about.php" class="btn">read more</a>
        </div>

    </section>

    <!-- home package section start -->

    <section class="home-packages">

        <h1 class="heading">our packages</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="images/campfire.jpg" alt="">
                </div>
                <div class="content">
                    <h3>camping</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, quam.</p>
                    <h2><i class="fa-solid fa-indian-rupee-sign"> </i> 7000 <s>14000</s></h2>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/trekking.jpg" alt="">
                </div>
                <div class="content">
                    <h3>trekking</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, quam.</p>
                    <h2><i class="fa-solid fa-indian-rupee-sign"> </i> 6000 <s>12000</s></h2>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/offroad.jpg" alt="">
                </div>
                <div class="content">
                    <h3>off road</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, quam.</p>
                    <h2><i class="fa-solid fa-indian-rupee-sign"> </i> 3000 <s>6000</s></h2>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

        </div>

        <div class="load-more"><a href="package.php" class="btn">load more</a></div>

    </section>

    <!-- home offer section start -->
    <section class="home-offer">

        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, enim accusantium voluptatem sunt eum eos ipsa consectetur repellat nesciunt consequuntur?</p>
            <a href="book.php" class="btn">book now</a>
        </div>

    </section>

    <!-- footer section start -->
    <section class="footer">
        <section class="foot">
            <div class="box-container">
                <div class="box">
                    <h3>Quick Links</h3>
                    <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                    <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                    <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                    <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
                </div>

                <div class="box">
                    <h3>Extra Links</h3>
                    <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
                    <a href="#"><i class="fas fa-angle-right"></i>about us</a>
                    <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
                    <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
                </div>

                <div class="box">
                    <h3>Contact info</h3>
                    <a href="#"><i class="fas fa-phone"></i> +123-456-7897</a>
                    <a href="#"><i class="fas fa-phone"></i> +123-456-7897</a>
                    <a href="#"><i class="fas fa-envelope"></i> csarvesh288@gmail.com</a>
                    <a href="#"><i class="fas fa-map"></i> Bhopal, India </a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                    <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                    <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                    <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
                </div>

            </div>

            <div class="credit">created by <span>Sarvesh choudhary</span> | all right reserved! </div>
        </section>
    </section>

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- external js file link -->
    <script src="js/script.js"></script>


</body>

</html>