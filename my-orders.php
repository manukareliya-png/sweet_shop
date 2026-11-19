<?php
$pageTitle = "Sweet Bliss - Home";
ob_start();
?>
<section class="orders-page">
    <div class="orders-header">
        <h1>My Orders </h1>
        <p>Track and manage all your Sweet Bliss orders</p>
    </div>
    <div class="container">
        <div class="orders-table-box">
            <div class="table-responsive">
                <table class="orders-table">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Items</th>
                            <th>Quantity</th>
                            <th>Total Amount</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#SB1001</td>
                            <td>28 Sep 2026</td>
                            <td>Motichoor Laddu</td>
                            <td>2</td>
                            <td>₹540</td>
                            <td>Cash on Delivery</td>
                            <td>
                                <span class="order-status delivered">
                                    Delivered
                                </span>
                            </td>
                            <td>
                                <a href="order-tracking.php" class="view-order-btn">
                                    <i class="fa-solid fa-eye"></i>
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#SB1002</td>
                            <td>30 Sep 2026</td>
                            <td>Kaju Katli, Rasgulla</td>
                            <td>2</td>
                            <td>₹680</td>
                            <td>Online Payment</td>
                            <td>
                                <span class="order-status processing">
                                    Processing
                                </span>
                            </td>
                            <td>
                                <a href="order-tracking.php" class="view-order-btn">
                                    <i class="fa-solid fa-eye"></i>
                                    View
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#SB1003</td>
                            <td>20 Sep 2026</td>
                            <td>Gulab Jamun</td>
                            <td>2</td>
                            <td>₹360</td>
                            <td>Cash on Delivery</td>
                            <td>
                                <span class="order-status cancelled">
                                    Cancelled
                                </span>
                            </td>
                            <td>
                                <a href="order-tracking.php" class="view-order-btn">
                                    <i class="fa-solid fa-eye"></i>
                                    View
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
include 'Layout/layout.php';
?>