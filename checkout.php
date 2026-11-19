<?php
ob_start();
?>
<!-- ================= PAGE HEADER ================= -->
<section class="page-header">
    <div class="container text-center">
        <h1>Checkout</h1>
        <p> Complete your order </p>
    </div>
</section>
<!-- ================= CHECKOUT ================= -->
<section class="checkout-section py-5">
    <div class="container">
        <div class="row g-4">
            <!-- LEFT SIDE -->
            <div class="col-lg-7">
                <!-- Customer Information -->
                <div class="checkout-box">
                    <h3>
                        <i class="bi bi-person"></i>
                        Customer Information
                    </h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label>Full Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name" data-validation="required alpha" name="fullname">
                            <span class="error text-danger" id="fullnameError"></span>
                        </div>

                        <div class="col-md-6">
                            <label>Mobile Number</label>
                            <input type="tel" class="form-control" placeholder="Enter mobile number" data-validation="required numeric min max"
                                data-min="10" data-max="10" name="mobile">
                            <span class="error text-danger" id="mobileError"></span>
                        </div>

                        <div class="col-12">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Enter email" data-validation="required email" name="email">
                            <span class="error text-danger" id="emailError"></span>
                        </div>

                    </div>
                </div>
                <!-- Delivery Address -->
                <div class="checkout-box">
                    <h3>
                        <i class="bi bi-geo-alt"></i> Delivery Address
                    </h3>
                    <div class="row g-3">
                        <div class="col-12">
                            <label>Address</label>
                            <textarea class="form-control" rows="3" placeholder="Enter your complete address" data-validation="required" name="address"></textarea>
                            <span class="error text-danger" id="emailError"></span>
                        </div>

                        <div class="col-md-6">
                            <label>City</label>
                            <input type="text" class="form-control" placeholder="Enter city" data-validation="required" name="address">
                            <span class="error text-danger" id="emailError"></span>
                        </div>

                        <div class="col-md-6">
                            <label>Pincode</label>
                            <input type="text" class="form-control" placeholder="Enter pincode" data-validation="required pincode"
                                maxlength="6" name="pincode">
                            <span class="error text-danger" id="pincodeError"></span>
                        </div>

                    </div>
                </div>
                <!-- Payment Method -->
                <div class="checkout-box">
                    <h3>
                        <i class="bi bi-credit-card"></i>
                        Payment Method
                    </h3>
                    <div class="payment-option">
                        <label>
                            <input type="radio" name="payment" checked>
                            <i class="bi bi-cash"></i>
                            Cash on Delivery
                        </label>
                    </div>
                    <div class="payment-option">
                        <label>
                            <input type="radio" name="payment">
                            <i class="bi bi-credit-card"></i>
                            Online Payment
                        </label>
                    </div>
                </div>
            </div>
            <!-- RIGHT SIDE -->
            <div class="col-lg-5">
                <div class="order-summary">
                    <h3>Order Summary</h3>
                    <div class="summary-row">
                        <span>Kaju Katli × 2</span>
                        <span>₹1000</span>
                        <!-- RIGHT SIDE -->
                        <div class="col-lg-5">
                            <div class="order-summary">
                                <h3>Order Summary</h3>
                                <div class="summary-row">
                                    <span>Kaju Katli × 2</span>
                                    <span>₹1000</span>
                                </div>
                                <div class="summary-row">
                                    <span>Gulab Jamun × 1</span>
                                    <span>₹300</span>
                                </div>
                                <hr>
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
                                    <span>₹1350</span>
                                </div>
                                <a href="order-confirmation.php"
                                    class="btn checkout-btn w-100">
                                    <i class="bi bi-check-circle"></i>
                                    Place Order
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
include 'Layout/layout.php';
?>