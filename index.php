<?php
$title = 'home';

include_once "nav.php";


?>

<!-- Home Section -->
<section class="home" id="home">
    <div class="content">
        <span data-aos="fade-up" data-aos-delay="150">follow us</span>
        <h3 data-aos="fade-up" data-aos-delay="300">to the unknown</h3>
        <p data-aos="fade-up" data-aos-delay="450">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam temporibus similique neque itaque vero
            inventore quod ratione non corporis odio.</p>
        <a data-aos="fade-up" data-aos-delay="600" href="#book-form" class="btn">book now</a>
    </div>
</section>

<!-- booking form section  -->
<section class="book-form" id="book-form">
    <form action="#" method="POST">
        <div class="inpuBox" data-aos="zoom-in" data-aos-delay="150">
            <span>to where ?</span>
            <input name='place' type="text" placeholder="place name" value="">
        </div>
        <div class="inpuBox" data-aos="zoom-in" data-aos-delay="300">
            <span>when ?</span>
            <input name='time' type="date" value="">
        </div>
        <div class="inpuBox" data-aos="zoom-in" data-aos-delay="600">
            <span>how many ?</span>
            <input type="number" name='people' placeholder="number of travelers" value="">
        </div>

        <input type="submit" name='fly now' value="fly now" class="btn" data-aos="zoom-in" data-aos-delay="750">

    </form>
</section>

<!-- about section satrts -->
<section class="about in" id="about">
    <div class="video-container" data-aos="fade-right" data-aos-delay="300">
        <video src="./images/about-vid-1.mp4" muted autoplay loop class="video"></video>
        <div class="controls">
            <span class="control-btn" data-src="./images/about-vid-1.mp4"></span>
            <span class="control-btn" data-src="./images/about-vid-2.mp4"></span>
            <span class="control-btn" data-src="./images/about-vid-3.mp4"></span>
        </div>
    </div>
    <div class="content" data-aos="fade-left" data-aos-delay="150"" data-aos-delay=" 600">
        <span>why us ?</span>
        <h3>nature's majesty awaits you</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod quas accusantium veritatis similique
            laboriosam quidem asperiores, perspiciatis quibusdam aspernatur dolor?</p>
        <a href="destination.php" class="btn">read more</a>
    </div>
</section>

<!-- destination section -->

<section class="destination" id="destination">
    <div class="heading">
        <span>our destinations</span>
        <h1>make yours destination</h1>
    </div>

    <div class="box-container">
        <div class="box" data-aos="fade-up" data-aos-delay="150">
            <div class="image">
                <img src="./images/des-1.jpg" alt="destination">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="300">
            <div class="image">
                <img src="./images/des-2.jpg" alt="destination">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="450">
            <div class="image">
                <img src="./images/des-3.jpg" alt="destination">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="600">
            <div class="image">
                <img src="./images/des-4.jpg" alt="destination">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="750">
            <div class="image">
                <img src="./images/des-5.jpg" alt="destination">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="900">
            <div class="image">
                <img src="./images/des-6.jpg" alt="destination">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="1150">
            <div class="image">
                <img src="./images/des-7.jpg" alt="destination">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-delay="1300">
            <div class="image">
                <img src="./images/des-8.jpg" alt="destination">
            </div>
            <div class="content">
                <h3>tours & travel</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                <a href="destination.php">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- services section -->


<!-- gallery section starts -->
<section class="gallery" id="gallery">
    <div class="heading">
        <span>our gallery</span>
        <h1>we make the moment</h1>
    </div>

    <div class="box-container">
        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
            <img src="./images/gallery-img-1.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>iceland</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
            <img src="./images/gallery-img-2.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>greenland</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
            <img src="./images/gallery-img-3.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>alaska</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
            <img src="./images/gallery-img-4.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>thailand</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
            <img src="./images/gallery-img-5.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>brazil</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
            <img src="./images/gallery-img-6.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>maldives</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="1150">
            <img src="./images/gallery-img-7.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>paris</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="1300">
            <img src="./images/gallery-img-8.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>newyork</h3>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="1450">
            <img src="./images/gallery-img-9.jpg" alt="gallery">
            <span>travel spot</span>
            <h3>egypt</h3>
        </div>
    </div>
</section>
<!-- banner section start -->
<div class="banner">
    <div class="content" data-aos="zoom-in-up">
        <span>start your adventures</span>
        <h3>let's explore this world</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quidem incidunt ut, in cumque placeat?</p>
        <a href="#book-form" class="btn">Explore now</a>
    </div>
</div>


<?php

include_once "footer.php";
?>