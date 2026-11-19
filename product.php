<?php
include_once("../db_config.php");
ob_start();
$search = isset($_GET['search']) ? mysqli_real_escape_string($con, trim($_GET['search'])) : '';
$categories = mysqli_query($con, "SELECT category_id, category_name FROM categories ORDER BY category_name");
?>
<section class="search-section">
  <div class="container">
    <form class="search-box" method="GET"><input type="text" name="search" value="<?php echo htmlspecialchars($search); ?>" placeholder="Search your favourite sweets..." autocomplete="off">
      <button type="submit">
        <i class="bi bi-search"></i> Search</button>
    </form>
  </div>
</section>
<section class="product-header">
  <div class="container text-center">
    <h1>Our Sweet Collection</h1>
    <p>Discover delicious traditional sweets made with love.</p>
  </div>
</section>
<section class="category-section py-4">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="section-title">Categories</h2>
    </div>
    <div class="category-buttons">
      <?php if ($categories && mysqli_num_rows($categories) > 0) {
        mysqli_data_seek($categories, 0);
        while ($cat = mysqli_fetch_assoc($categories)) { ?>
          <a href="#category-<?php echo (int)$cat['category_id']; ?>" class="category-btn">
            <?php echo htmlspecialchars($cat['category_name']); ?>
          </a><?php }
          } else { ?><p class="text-muted">No categories available yet.</p><?php } ?>
    </div>
  </div>
</section>
<section class="products-section py-5">
  <div class="container">
    <?php
    if ($categories && mysqli_num_rows($categories) > 0) {
      mysqli_data_seek($categories, 0);
      while ($cat = mysqli_fetch_assoc($categories)) {
        $catId = (int)$cat['category_id'];
        $sql = "SELECT * FROM products WHERE category_id=$catId AND status='Available' AND stock_quantity>0";
        if ($search !== '') {
          $sql .= " AND (product_name LIKE '%$search%' OR description LIKE '%$search%')";
        }
        $sql .= " ORDER BY product_name";
        $items = mysqli_query($con, $sql);
    ?>
        <div class="category-block mb-5" id="category-<?php echo $catId; ?>">
          <h2 class="category-title"><?php echo htmlspecialchars($cat['category_name']); ?></h2>
          <div class="product-grid">
            <?php if ($items && mysqli_num_rows($items) > 0) {
              while ($item = mysqli_fetch_assoc($items)) {
                $image = trim($item['product_image'] ?? '');
                $imagePath = $image !== '' ? '../uploads/products/' . rawurlencode($image) : '../img/banner.jpg'; ?>
                <div class="product-card"><img src="<?php echo htmlspecialchars($imagePath); ?>" alt="<?php echo htmlspecialchars($item['product_name']); ?>">
                  <div class="product-card-body">
                    <h4><?php echo htmlspecialchars($item['product_name']); ?></h4>
                    <p><?php echo htmlspecialchars($item['description'] ?? ''); ?></p>
                    <h5>₹<?php echo number_format((float)$item['price'], 2); ?></h5>
                    <div class="product-buttons">
                      <a href="product-details.php?product_id=<?php echo (int)$item['product_id']; ?>" class="btn btn-outline-dark btn-sm">View Details</a><a href="cart.php" class="btn btn-dark btn-sm">Add to Cart</a>
                    </div>
                  </div>
                </div>
              <?php }
            } else { ?><p class="text-muted">No products available in this category yet.</p><?php } ?>
          </div>
        </div>
      <?php }
    } else { ?><div class="text-center py-4">
        <p class="text-muted">No categories or sweets have been added by Admin yet.</p>
      </div><?php } ?>
  </div>
</section>
<?php $content = ob_get_clean();
include 'Layout/layout.php'; ?>