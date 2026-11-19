<?php
include_once("db_config.php");

$message = "";

if (isset($_POST['submit_btn'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password != $confirmPassword) {

        $message = "Passwords do not match.";
    } else {

        // Check email
        $check = "SELECT * FROM registration WHERE email='$email'";
        $result = mysqli_query($con, $check);
        $user = mysqli_fetch_assoc($result);

        if ($user) {

            $message = "Email already registered!";
        } else {

            // Profile image upload
            $profile_image = "";

            if (
                isset($_FILES['profile_picture']) &&
                $_FILES['profile_picture']['error'] == 0
            ) {

                $folder = "uploads/profile/";

                if (!is_dir($folder)) {
                    mkdir($folder, 0755, true);
                }

                $image_name = time() . "_" .
                    basename($_FILES['profile_picture']['name']);

                if (move_uploaded_file(
                    $_FILES['profile_picture']['tmp_name'],
                    $folder . $image_name
                )) {
                    $profile_image = $image_name;
                }
            }


            // Insert data
            $query = "INSERT INTO registration
            (full_name, email, mobile, address, password, profile_image)
            VALUES
            ('$fullname', '$email', '$mobile', '$address',
            '$password', '$profile_image')";

            if (mysqli_query($con, $query)) {
                $message = "Registration successful!";
            } else {
                $message = "Registration failed!";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sweet Bliss</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Main CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <Script src="js/validator.js"></Script>
    <link rel="stylesheet" href="css/style.css?v=1">


</head>

<body>
    <!-- ================= REGISTER SECTION ================= -->
    <section class="register-section">

        <!-- Register Card -->
        <div class="register-box">
            <?php if ($message != "") { ?>
                <p><?php echo htmlspecialchars($message); ?></p>
            <?php } ?>
            <div class="register-title">
                <h2>Join Sweet Bliss</h2>
                <p>
                    Create your account & enjoy something sweet
                </p>
            </div>
            <form action="#" method="post" enctype="multipart/form-data">
                <!-- Full Name -->
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <div class="input-group">

                        <input type="text" class="form-control" name="fullname" placeholder="Enter your full name" data-validation="required alpha">
                    </div>
                    <span class="error text-danger" id="fullnameError"></span>
                </div>
                <!-- Email -->
                <div class="mb-3">
                    <label class="form-label">
                        Email Address
                    </label>
                    <div class="input-group">

                        <input type="email" class="form-control" name="email" placeholder="Enter your email" data-validation="required email">
                    </div>
                    <span class="error text-danger" id="emailError"></span>
                </div>
                <!-- Mobile -->
                <div class="mb-3">
                    <label class="form-label">
                        Mobile Number
                    </label>
                    <div class="input-group">

                        <input type="tel" class="form-control" name="mobile" placeholder="Enter your mobile number" data-validation="required numeric min max"
                            data-min="10" data-max="10">
                    </div>
                    <span class="error text-danger" id="mobileError"></span>
                </div>
                <!--address-->
                <div class="mb-3">
                    <label class="form-label">
                        Address
                    </label>
                    <div class="input-group">

                        <input type="text" class="form-control" name="address" placeholder="Enter your address" data-validation="required">
                    </div>
                    <span class="error text-danger" id="addressError"></span>
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label class="form-label">
                        Password
                    </label>
                    <div class="input-group">

                        <input type="password" class="form-control" name="password" placeholder="Create password" data-validation="required strongPassword min max" id="password" data-min="8" data-max="25">
                    </div>
                    <span class="error text-danger" id="passwordError"></span>
                </div>
                <!-- Confirm Password -->
                <div class="mb-3">
                    <label class="form-label">
                        Confirm Password
                    </label>
                    <div class="input-group">

                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm your password" data-validation="required confirmPassword" data-password-id="password">
                    </div>
                    <span class="error text-danger" id="confirm_passwordError"></span>
                </div>
                <!--profile picture-->
                <div class="mb-3">
                    <label class="form-label">
                        Profile Picture
                    </label>
                    <div class="input-group">

                        <input type="file" class="form-control" name="profile_picture" accept="image/*">
                    </div>
                    <span class="error text-danger" id="profile_pictureError"></span>
                </div>
                <!-- Terms -->
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="terms" required>
                    <label class="form-check-label" for="terms">
                        I agree to the Terms & Conditions
                    </label>
                </div>
                <!-- Button -->
                <button type="submit" class="register-btn" name="submit_btn">
                    <i class="fa-solid fa-wand-magic-sparkles"></i>
                    Create Account
                </button>
            </form>
            <!-- Login -->
            <div class="login-link">
                Already have an account?
                <a href="login.php">
                    Login here
                </a>
            </div>
            <!-- Home -->
            <div class="home-link">
                <a href="index.php">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back to Home
                </a>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>