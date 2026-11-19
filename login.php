<?php
session_start();
include_once("db_config.php");

$role = "";
$show_form = false;
$error = "";

if (isset($_POST['select_role'])) {
    $role = $_POST['select_role'];
    $show_form = true;
}

if (isset($_POST['login_btn'])) {

    $role = $_POST['role'];
    $show_form = true;

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if ($role == "admin") {

        $query = "SELECT * FROM admins WHERE email='$email'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {

            $admin = mysqli_fetch_assoc($result);

            if (password_verify($password, $admin['password']) || $password == $admin['password']) {

                $_SESSION['admin_id'] = $admin['admin_id'];
                $_SESSION['admin_name'] = $admin['admin_name'];

                header("Location: admin/index.php");
                exit();
            } else {
                $error = "Invalid password!";
            }
        } else {
            $error = "Admin email not found!";
        }
    } elseif ($role == "user") {

        $query = "SELECT * FROM registration WHERE email='$email'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {

            $user = mysqli_fetch_assoc($result);

            if (password_verify($password, $user['password']) || $password == $user['password']) {

                $_SESSION['user_id'] = $user['registration_id'];
                $_SESSION['user_name'] = $user['full_name'];

                header("Location: user/index.php");
                exit();
            } else {
                $error = "Invalid password!";
            }
        } else {
            $error = "User email not found!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sweet Bliss - Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="stylesheet" href="css/style.css?v=3">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/validator.js"></script>

</head>

<body>

    <div class="login-container">

        <?php if (!$show_form) { ?>

            <h2>Login</h2>

            <form method="POST">

                <button type="submit" name="select_role" value="admin" class="role-option">
                    Admin Login
                </button>

                <button type="submit" name="select_role" value="user" class="role-option">
                    User Login
                </button>

            </form>

        <?php } else { ?>

            <h2>
                <?php echo ($role == "admin") ? "Admin Login" : "User Login"; ?>
            </h2>

            <?php if ($error != "") { ?>
                <div class="error-message">
                    <?php echo htmlspecialchars($error); ?>
                </div>
            <?php } ?>

            <form method="POST">

                <input type="hidden" name="role" value="<?php echo htmlspecialchars($role); ?>">

                <div class="mb-3">

                    <label class="form-label">Email Address</label>

                    <input type="email" name="email" class="form-control"
                        placeholder="Enter your email"
                        data-validation="required email">

                    <span class="error text-danger" id="emailError"></span>

                </div>

                <div class="mb-4">

                    <label class="form-label">Password</label>

                    <input type="password" name="password" class="form-control"
                        placeholder="Enter your password"
                        data-validation="required strongPassword min max"
                        id="password"
                        data-min="8"
                        data-max="25">

                    <span class="error text-danger" id="passwordError"></span>

                </div>

                <button type="submit" name="login_btn" class="login-btn">
                    Login
                </button>

            </form>

            <?php if ($role == "user") { ?>

                <div class="register-link">
                    Don't have an account?
                    <a href="register.php">Register Now</a>
                </div>

            <?php } ?>

        <?php } ?>

        <div class="home-link">
            <a href="index.php">
                <i class="fa-solid fa-arrow-left"></i>
                Back to Home
            </a>
        </div>

    </div>

</body>

</html>