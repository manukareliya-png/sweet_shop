<?php
ob_start();
?>
<!-- SEARCH BAR -->
<section class="search-section">
    <div class="container">
        <form class="search-box">
            <input type="text" name="search" placeholder="Search your favourite sweets..." autocomplete="off">
            <button type="submit"><i class="bi bi-search"></i> Search </button>
        </form>
    </div>
</section>
<!-- ================= HERO SECTION ================= -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <p class="hero-small-text"> WELCOME TO SWEET BLISS </p>
                <h1>Sweet Moments,<br><span>Delicious Memories</span></h1>
                <p class="hero-description">Discover delicious traditional sweets made with love, quality ingredients and a whole lot of sweetness.</p>
                <a href="product.php" class="btn btn-dark"> Explore Sweets<i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="col-lg-6 text-center">
                <img src="img/sweet2.jpg" class="img-fluid hero-image" alt="Sweet Bliss">
            </div>
        </div>
    </div>
</section>
<!-- ================= SPECIAL SWEETS ================= -->
<section class="special-section"><div class="container"><div class="text-center mb-5"><p class="section-small-title">OUR SPECIALS</p><h2>Taste Our<span> Delicious Sweets</span></h2><p>Available sweets added by our Admin.</p></div><div class="row g-4">
<?php
include_once("../db_config.php");
$homeProducts=mysqli_query($con,"SELECT product_id,product_name,description,price,product_image FROM products WHERE status='Available' AND stock_quantity>0 ORDER BY product_id DESC LIMIT 3");
if($homeProducts && mysqli_num_rows($homeProducts)>0){while($p=mysqli_fetch_assoc($homeProducts)){$img=trim($p['product_image'] ?? '');$imgPath=$img!==''?'../uploads/products/'.rawurlencode($img):'../img/banner.jpg';?>
<div class="col-md-4"><div class="sweet-card"><img src="<?php echo htmlspecialchars($imgPath); ?>" alt="<?php echo htmlspecialchars($p['product_name']); ?>"><div class="card-body"><h4><?php echo htmlspecialchars($p['product_name']); ?></h4><p><?php echo htmlspecialchars($p['description'] ?? ''); ?></p><div class="d-flex justify-content-between align-items-center"><strong>₹<?php echo number_format((float)$p['price'],2); ?></strong><a href="product-details.php?product_id=<?php echo (int)$p['product_id']; ?>" class="btn btn-sm btn-outline-dark">View</a></div></div></div></div>
<?php }}else{?><div class="col-12 text-center"><p class="text-muted">Sweets added by Admin will appear here.</p></div><?php } ?>
</div></div></section>
<!-- SPECIAL OFFER -->
<section class="offer-section">
    <div class="container">
        <div class="offer-box">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <p class="offer-small"> SPECIAL OFFER 🎁 </p>
                    <h2>Get <span>20% OFF</span> on Your First Order! </h2>
                    <p>Celebrate every occasion with our delicious
                        sweets. Order now and enjoy sweetness at a special price.</p>
                    <a href="product.php" class="btn btn-dark"> Order Now
                        <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-md-4 text-center">
                    <div class="offer-icon"> 🍰 </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================= WHY CHOOSE US ================= -->
<section class="why-section">
    <div class="container">
        <div class="text-center mb-5">
            <p class="section-small-title">WHY SWEET BLISS?</p>
            <h2> Made With <span>Love & Care</span></h2>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="why-card">
                    <i class="bi bi-heart"></i>
                    <h4>Made With Love</h4>
                    <p> Every sweet is prepared with care and passion.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-card">
                    <i class="bi bi-star"></i>
                    <h4>Premium Quality</h4>
                    <p>We use quality ingredients for the best taste.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="why-card">
                    <i class="bi bi-truck"></i>
                    <h4>Fresh Delivery</h4>
                    <p>Fresh sweets delivered right to your doorstep.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================= FOOTER ================= -->
<?php
$content = ob_get_clean();
include 'Layout/layout.php';
?>