<?php
session_start();
include_once("../db_config.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$stmt = mysqli_prepare(
    $con,
    "SELECT full_name, email, mobile, address, profile_image
     FROM registration
     WHERE registration_id = ?"
);

mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if (!$user) {
    echo "User details not found.";
    exit();
}

$pageTitle = "Sweet Bliss - Profile";
ob_start();
?>

<section class="profile-page">

    <div class="profile-header">
        <h1>My Profile</h1>
        <p>Manage your Sweet Bliss account details</p>
    </div>

    <div class="container">
        <div class="profile-card">

            <div class="profile-top">

                <div class="profile-avatar">

                    <?php if (
                        !empty($user['profile_image']) &&
                        file_exists("../uploads/profile/" . $user['profile_image'])
                    ) { ?>

                        <img
                            src="../uploads/profile/<?php echo htmlspecialchars($user['profile_image']); ?>"
                            alt="Profile Picture"
                            style="width:120px;height:120px;border-radius:50%;object-fit:cover;">

                    <?php } else { ?>

                        <i class="bi bi-person"></i>

                    <?php } ?>

                </div>

                <div class="profile-info">
                    <h2><?php echo htmlspecialchars($user['full_name']); ?></h2>
                    <p><?php echo htmlspecialchars($user['email']); ?></p>
                </div>

            </div>

            <hr>

            <div class="profile-details">

                <h3>Personal Information</h3>

                <div class="row">

                    <div class="col-md-6">
                        <div class="profile-field">
                            <label>Full Name</label>
                            <p><?php echo htmlspecialchars($user['full_name']); ?></p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="profile-field">
                            <label>Email Address</label>
                            <p><?php echo htmlspecialchars($user['email']); ?></p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="profile-field">
                            <label>Mobile Number</label>
                            <p><?php echo htmlspecialchars($user['mobile']); ?></p>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="profile-field">
                            <label>Address</label>
                            <p><?php echo htmlspecialchars($user['address']); ?></p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="profile-actions">

                <a href="#" class="edit-profile-btn">
                    <i class="fa-solid fa-pen"></i>
                    Edit Profile
                </a>

                <a href="my-orders.php" class="orders-btn">
                    <i class="fa-solid fa-box"></i>
                    My Orders
                </a>

                <a href="../login.php" class="logout-btn">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </a>

            </div>

        </div>
    </div>

</section>

<?php
$content = ob_get_clean();
include 'Layout/layout.php';
?>