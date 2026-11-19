<?php
include_once("db_config.php");
ob_start();
$categories = mysqli_query($con, "SELECT category_id, category_name FROM categories ORDER BY category_name");
$products = mysqli_query($con, "SELECT p.*, c.category_name FROM products p INNER JOIN categories c ON p.category_id=c.category_id WHERE p.status='Available' AND p.stock_quantity>0 ORDER BY c.category_name,p.product_name");
?>
<section class="page-header"><div class="container text-center"><h1>Our Sweet Collection</h1><p>Explore delicious sweets made with love</p></div></section>
<section class="category-section"><div class="container text-center"><h2 class="section-title">Choose Your Category</h2><div class="category-buttons">
<?php if($categories && mysqli_num_rows($categories)>0){mysqli_data_seek($categories,0);while($cat=mysqli_fetch_assoc($categories)){ ?><a href="#category-<?php echo $cat['category_id']; ?>" class="category-btn"><?php echo htmlspecialchars($cat['category_name']); ?></a><?php }}else{ ?><p class="text-muted">Categories will appear here soon.</p><?php } ?>
</div></div></section>
<section class="products-section"><div class="container">
<?php if($categories && mysqli_num_rows($categories)>0){mysqli_data_seek($categories,0);while($cat=mysqli_fetch_assoc($categories)){ ?>
<div class="category-block" id="category-<?php echo $cat['category_id']; ?>"><h2 class="category-title"><?php echo htmlspecialchars($cat['category_name']); ?></h2><div class="row g-4">
<?php
$catId=(int)$cat['category_id'];
$items=mysqli_query($con,"SELECT * FROM products WHERE category_id=$catId AND status='Available' AND stock_quantity>0 ORDER BY product_name");
if($items && mysqli_num_rows($items)>0){while($item=mysqli_fetch_assoc($items)){
$image=trim($item['product_image'] ?? '');
$imagePath=$image!=='' ? 'uploads/products/'.rawurlencode($image) : 'img/banner.jpg';
?>
<div class="col-12 col-sm-6 col-lg-3"><div class="product-card"><img src="<?php echo htmlspecialchars($imagePath); ?>" alt="<?php echo htmlspecialchars($item['product_name']); ?>"><div class="product-content"><h5><?php echo htmlspecialchars($item['product_name']); ?></h5><p class="price">₹<?php echo number_format((float)$item['price'],2); ?></p><div class="product-buttons"><a href="product-details.php?product_id=<?php echo (int)$item['product_id']; ?>" class="view-btn">View Details</a><a href="login.php" class="cart-btn"><i class="bi bi-cart"></i></a></div></div></div></div>
<?php }}else{ ?><div class="col-12"><p class="text-muted">No products in this category yet.</p></div><?php } ?>
</div></div>
<?php }} ?>
</div></section>
<?php $content=ob_get_clean(); include "layout/layout.php"; ?>