<?php
ob_start();
?>
<!-- ================= PAGE HEADER ================= -->
<section class="page-header">
    <div class="container text-center">
        <h1>My Shopping Cart</h1>
        <p>Review your favourite sweets before checkout</p>
    </div>
</section>
<!-- ================= CART SECTION ================= -->
<section class="cart-section py-5">
    <div class="container">
        <div class="row g-4">
            <!-- CART ITEMS -->
            <div class="col-lg-8">
                <div class="cart-box">
                    <h3 class="cart-heading">
                        <i class="bi bi-cart3"></i>Cart Items
                    </h3>
                    <!-- CART ITEM 1 -->
                    <div class="cart-item">
                        <div class="cart-product">
                            <img src="img/kaju-katli.jpg" alt="Kaju Katli">
                            <div>
                                <h5>Kaju Katli</h5>
                                <p>Indian Sweet</p>
                                <span>₹500 / 500g</span>
                            </div>
                        </div>
                        <div class="quantity-control">
                            <button type="button">−</button>
                            <input type="text" value="2" readonly>
                            <button type="button">+</button>
                        </div>
                        <div class="cart-price"> ₹1000</div>
                        <button class="remove-btn" title="Remove">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </div>
                    <!-- CART ITEM 2 -->
                    <div class="cart-item">
                        <div class="cart-product">
                            <img src="img/gulab-jamun.webp" alt="Gulab Jamun">
                            <div>
                                <h5>Gulab Jamun</h5>
                                <p>Indian Sweet</p>
                                <span>₹300 / 500g</span>
                            </div>
                        </div>
                        <div class="quantity-control">
                            <button type="button">−</button>
                            <input type="text" value="1" readonly>
                            <button type="button">+</button>
                        </div>
                        <div class="cart-price">₹300 </div>
                        <button class="remove-btn" title="Remove">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </div>
                    <!-- CONTINUE SHOPPING -->
                    <div class="continue-shopping">
                        <a href="product.php">
                            <i class="bi bi-arrow-left"></i>
                            Continue Shopping
                        </a>
                    </div>
                </div>
            </div>
            <!-- ORDER SUMMARY -->
            <div class="col-lg-4">
                <div class="order-summary">
                    <h3>Order Summary</h3>
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span>₹1300</span>
                    </div>
                    <div class="summary-row">
                        <span>Delivery</span>
                        <span>₹50</span>
                    </div>
                    <hr>
                    <div class="summary-total">
                        <span>Total</span>
                        <strong>₹1350</strong>
                    </div>
                    <a href="checkout.php" class="checkout-btn"> Proceed to Checkout
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
include 'Layout/layout.php';
?>