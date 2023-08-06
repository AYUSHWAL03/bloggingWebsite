<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
<?php include './components/header.php';?>
<?php 
include './database/connecter.php';
?>

    <div class="formContainer">
        <div class="form-title">
        <h2>
            Login
        </h2>    
        </div>
        <div class="login-form">
            <form method="post" action="login.php">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username">
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
                <div class="forgotPass">
                    Forgot your password?
                </div>
                <br>
                <input type="submit" value="Login">
                <br>
                <!-- <div class="loginLink">
                    Already have an account?
                    <a href="login.php">Login</a>
                </div> -->
            </form>
            <?php
                if (isset($_POST['username'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                
                    if (empty($username) || empty($password)) {
                        echo "please enter your username and password";
                    } else {
                        // Make sure to escape the input to prevent SQL injection
                        // $username = mysqli_real_escape_string($conn, $username);
                        // $password = mysqli_real_escape_string($conn, $password);
                        $sql = "SELECT * FROM `blogwebsite`.`user_database` WHERE username = '$username' AND password = '$password'";
                
                        $result = mysqli_query($conn, $sql);
                
                        if (mysqli_num_rows($result) == 1) {
                            $from_DB = mysqli_fetch_assoc($result);
                
                            if ($from_DB['username'] == $username && $from_DB['password'] == $password) {
                                echo "Logged in successfully";
                
                                // Start the session before using $_SESSION
                                session_start();
                
                                $_SESSION['username'] = $from_DB['username'];
                                $_SESSION['password'] = $from_DB['password'];
                
                                header("Location: http://localhost/BlogWebsite/index.php?username=" . $from_DB['username']);
                                exit(); // Make sure to add exit after header to prevent further execution of the script
                            }
                        } else {
                            echo "Invalid username or password";
                        }
                    }
                }
                
            ?>
        </div>
    </div>
    </body>
</html>