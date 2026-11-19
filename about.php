<?php
$pageTitle = "Sweet Bliss - Home";
ob_start();
?>
<section class="about-header">
    <h1>About Sweet Bliss</h1>
    <p>
        Where every sweet creates a beautiful memory
    </p>
</section>
<!-- ================= ABOUT ================= -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- IMAGE -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="img/about-us.jpg"
                    alt="Sweet Bliss Sweets"
                    class="about-image">
            </div>
            <!-- CONTENT -->
            <div class="col-lg-6">
                <div class="about-content">
                    <h2>Our Sweet Story</h2>
                    <p>
                        Welcome to <strong>Sweet Bliss</strong>, your destination
                        for delicious and traditional Indian sweets.
                    </p>
                    <p>
                        We believe that sweets are not just food,
                        they are a part of our celebrations, traditions
                        and special memories.
                    </p>
                    <p>
                        From traditional Indian mithai to delicious desserts,
                        Sweet Bliss brings a variety of sweet flavours
                        together in one place.
                    </p>
                    <h3>Made With Love</h3>
                    <p>
                        Every sweet at Sweet Bliss is prepared with care,
                        quality ingredients and lots of love to make
                        your special moments even sweeter.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================= WHY CHOOSE US ================= -->
<section class="features-section">
    <div class="container">
        <div class="section-title">
            <h2>Why Choose Sweet Bliss?</h2>
            <p>
                Making every celebration a little sweeter
            </p>
        </div>
        <div class="row g-4">
            <!-- CARD 1 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <h4>Made With Love</h4>
                    <p>
                        Our sweets are prepared with care
                        and love for every customer.
                    </p>
                </div>
            </div>
            <!-- CARD 2 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h4>Premium Quality</h4>
                    <p>
                        We focus on quality ingredients
                        and delicious taste.
                    </p>
                </div>
            </div>
            <!-- CARD 3 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-cake2-fill"></i>
                    </div>
                    <h4>Many Varieties</h4>
                    <p>
                        Explore Indian sweets, Bengali sweets,
                        Rajasthani mithai and desserts.
                    </p>
                </div>
            </div>
            <!-- CARD 4 -->
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-emoji-smile-fill"></i>
                    </div>
                    <h4>Happy Customers</h4>
                    <p>
                        Your happiness and satisfaction
                        are always our priority.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================= OUR MISSION ================= -->
<section class="story-section">
    <div class="container">
        <div class="story-box">
            <h2>Our Mission</h2>
            <p>
                Our mission is to bring the authentic taste of
                traditional sweets to everyone through a simple,
                beautiful and convenient online experience.
                At Sweet Bliss, we want every order to add
                sweetness to your celebrations and everyday moments.
            </p>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
include 'Layout/layout.php';
?>