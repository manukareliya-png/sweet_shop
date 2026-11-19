<?php
include_once("../db_config.php");
$product_id = isset($_GET['product_id']) ? (int)$_GET['product_id'] : 0;
$product = false;
if ($product_id > 0) {
    $result = mysqli_query($con, "SELECT p.*,c.category_name FROM products p LEFT JOIN categories c ON p.category_id=c.category_id WHERE p.product_id=$product_id AND p.status='Available'");
    if ($result) {
        $product = mysqli_fetch_assoc($result);
    }
}
ob_start(); ?>
<section class="search-section">
    <div class="container">
        <form class="search-box" action="product.php" method="GET">
            <input type="text" name="search" placeholder="Search your favourite sweets..." autocomplete="off">
            <button type="submit">
                <i class="bi bi-search">

                </i> Search</button>
        </form>
    </div>
</section>
<section class="product-details-section py-5">
    <div class="container">
        <?php if ($product) {
            $img = trim($product['product_image'] ?? '');
            $imgPath = $img !== '' ? '../uploads/products/' . rawurlencode($img) : '../img/banner.jpg'; ?>
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="product-details-image"><img src="<?php echo htmlspecialchars($imgPath); ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>" class="img-fluid"></div>
                </div>
                <div class="col-lg-6"><span class="product-category"><?php echo htmlspecialchars($product['category_name'] ?? ''); ?></span>
                    <h1 class="product-details-title"><?php echo htmlspecialchars($product['product_name']); ?></h1>
                    <h2 class="product-price">₹<?php echo number_format((float)$product['price'], 2); ?></h2>
                    <p class="product-description"><?php echo nl2br(htmlspecialchars($product['description'] ?? '')); ?></p>
                    <p><i class="bi bi-check-circle-fill"></i> <?php echo (int)$product['stock_quantity']; ?> available</p>
                    <div class="product-action-buttons"><a href="cart.php" class="btn btn-dark"><i class="bi bi-cart3"></i> Add to Cart</a><a href="checkout.php" class="btn btn-outline-dark">Buy Now</a></div>
                </div>
            </div>
        <?php } else { ?><div class="text-center py-5">
                <h3>Product not found</h3>
                <p class="text-muted">This product may have been removed or is unavailable.</p><a href="product.php" class="btn btn-dark">Back to Sweets</a>
            </div><?php } ?>
    </div>
</section>
<?php $content = ob_get_clean();
include 'Layout/layout.php'; ?>