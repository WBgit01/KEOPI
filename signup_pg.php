<?php
include_once 'head_layout.php';
include_once 'config/database.php';
include_once 'config/core.php';
include_once 'object/user.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$page_title = "signup-page";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['signup'])) {
    
        $user->name = $_POST['username'];
        $user->email_address = $_POST['email_address'];
        $user->password = $_POST['password'];
        $confirmPass = $_POST['confirmpass'];
        $user->access_level = "User";
    
        if ($user->password == $confirmPass){
            if ($user->create()) {
                echo "<script>alert('Successful register');</script>";
            } else {
                echo "<script>alert('Please try again later');</script>";
            }
        } else {
            echo "<script>alert('Password and Confirm Password does not match');</script>";
        }
    } elseif (isset($_POST['login'])) {
        $user->email_address = $_POST['email_address'];
        $email_exist = $user->emailExists();

        if ($email_exist && password_verify($_POST['password'], $user->password)) {
            $_SESSION['name'] = $user->name;
            $_SESSION['email_address'] = $user->email_address;
            $_SESSION['access_level'] = $user->access_level;
            if ($_SESSION['access_level'] == "User"){
                header("Location: user-page/index.php?action=login_success");
                exit();
            }else if ($_SESSION['access_level'] == "Admin"){
                header("Location: admin-page/index.php?action=login_success");
                exit();
            } else {
                echo "<script>alert('Log in failed. Please try again later.');</script>";
            }
        } else {
            echo "<script>alert('Invalid email or password.');</script>";
        }
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="libs/css/signup-style.css">
         
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="" method="post">
                    <div class="input-field">
                        <input type="text" name="email_address" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" name="login" value="Login">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="" method="post">
                    <div class="input-field">
                        <input type="text" name="username" placeholder="Enter your name" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" name="email_address" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" class="password" placeholder="Create a password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="confirmpass" class="password" placeholder="Confirm a password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">I accepted all terms and conditions</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" name="signup" value="Signup">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

     <script src="libs/js/signup-script.js"></script> 
</body>
</html>