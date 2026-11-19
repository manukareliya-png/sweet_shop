<?php
$pageTitle = "Sweet Bliss - Home";
ob_start();
?>
<!-- Order Confirmation -->
<section class="confirmation-page">
    <div class="container">
        <div class="confirmation-card">
            <!-- Success Icon -->
            <!-- Success Icon -->
            <div class="success-icon">
                <i class="bi bi-check-lg"></i>
            </div>
            <h1>Order Confirmed!</h1>
            <p class="confirmation-text">
                Thank you for choosing Sweet Bliss.
                Your order has been placed successfully.
            </p>
            <!-- Order ID -->
            <div class="order-number">
                <span>Order ID</span>
                <strong>#SB1001</strong>
            </div>
            <!-- Order Information -->
            <div class="order-info">
                <div class="info-item">
                    <!-- Order Date -->
                    <div class="info-icon">
                        <i class="bi bi-calendar3"></i>
                    </div>
                    <div>
                        <span>Order Date</span>
                        <strong>26 Sep 2026</strong>
                    </div>
                </div>
                <div class="info-item">
                    <!-- Items -->
                    <div class="info-icon">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <div>
                        <span>Items</span>
                        <strong>2 Items</strong>
                    </div>
                </div>
                <div class="info-item">
                    <!-- Amount -->
                    <div class="info-icon">
                        <i class="bi bi-currency-rupee"></i>
                    </div>
                    <div>
                        <span>Total Amount</span>
                        <strong>₹540</strong>
                    </div>
                </div>
                <div class="info-item">
                    <!-- Payment -->
                    <div class="info-icon">
                        <i class="bi bi-cash-stack"></i>
                    </div>
                    <div>
                        <span>Payment Method</span>
                        <strong>Cash on Delivery</strong>
                    </div>
                </div>
            </div>
            <!-- Delivery -->
            <!-- Delivery -->
            <div class="delivery-box">
                <i class="bi bi-truck"></i>
                <div>
                    <h4>Delivery Information</h4>
                    <p>
                        Your order is being prepared with love.
                        It will be delivered to your registered address soon.
                    </p>
                </div>
            </div>
            <!-- Buttons -->
            <div class="confirmation-buttons">
                <a href="my-orders.php" class="primary-btn">
                    My Orders
                </a>
                <a href="product.php" class="secondary-btn">
                    Continue Shopping
                </a>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
include 'Layout/layout.php';
?>