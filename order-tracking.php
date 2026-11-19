<?php
$pageTitle = "Sweet Bliss - Home";
ob_start();
?>
<!-- Tracking Page -->
<section class="tracking-page">
    <div class="tracking-header">
        <h1>Track Your Order </h1>
        <p>
            Keep an eye on your Sweet Bliss order
        </p>
    </div>
    <div class="container">
        <div class="tracking-card">
            <!-- Order Top -->
            <div class="tracking-top">
                <div>
                    <span>Order ID</span>
                    <h3>#SB1002</h3>
                </div>
                <div class="current-status">
                    Processing
                </div>
            </div>
            <hr>
            <!-- Product -->
            <div class="product-info">
                <div class="product-icon">
                    <i class="bi bi-box-seam"></i>
                </div>
                <div>
                    <h4>Kaju Katli & Rasgulla</h4>
                    <p>
                        Quantity: 2
                    </p>
                    <strong>
                        ₹680
                    </strong>
                </div>
            </div>
            <!-- Tracking -->
            <div class="tracking-section">
                <h3>Order Status</h3>
                <div class="tracking-step completed">
                    <div class="step-icon">
                        <i class="bi bi-check-lg"></i>
                    </div>
                    <div class="step-content">
                        <h4>Order Placed</h4>
                        <p>
                            Your order has been successfully placed.
                        </p>
                        <small>
                            30 Sep 2026, 10:30 AM
                        </small>
                    </div>
                </div>
                <div class="tracking-line"></div>
                <div class="tracking-step active">
                    <div class="step-icon">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <div class="step-content">
                        <h4>Shipping</h4>
                        <p>
                            Your sweets are being prepared.
                        </p>
                        <small>
                            30 Sep 2026, 11:15 AM
                        </small>
                    </div>
                </div>
                <div class="tracking-line"></div>
                <div class="tracking-step">
                    <div class="step-icon">
                        <i class="bi bi-truck"></i>
                    </div>
                    <div class="step-content">
                        <h4>Out for Delivery</h4>
                        <p>
                            Your order will be delivered soon.
                        </p>
                    </div>
                </div>
                <div class="tracking-line"></div>
                <div class="tracking-step">
                    <div class="step-icon">
                        <i class="bi bi-house-check"></i>
                    </div>
                    <div class="step-content">
                        <h4>Delivered</h4>
                        <p>
                            Your order will be delivered to your address.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Delivery Address -->
            <div class="delivery-address">
                <h3>
                    <i class="bi bi-geo-alt"></i>
                    Delivery Address
                </h3>
                <p>
                    Priya Patel<br>
                    123, Main Road,<br>
                    Rajkot, Gujarat
                </p>
            </div>
            <!-- Back -->
            <div class="tracking-action">
                <a href="my-orders.php">
                    <i class="bi bi-arrow-left"></i>
                    Back to My Orders
                </a>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
include 'Layout/layout.php';
?>