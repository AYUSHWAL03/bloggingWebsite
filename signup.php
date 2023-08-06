<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
<?php include './components/header.php';?>
<?php include './database/connecter.php'
?>
<?php
$signed_up= false;
?>

<div class="formContainer">
    <div class="form-title">
        <h2>
            Sign Up 
        </h2>    
    </div>
    <div class="login-form">
        <form method="post" action="signup.php">
            <?php
                if($signed_up ==true){
                    echo"<p>signed up successfully </p>";
                }
                else{
                    echo"Please enter all fields";
                }
            ?>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username">
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your mail Id">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password">
            <!-- <div class="forgotPass">
                Forgot your password?
            </div> -->
            <br>
            
            <input type="submit" value="Sign up">
                <br>
                <div class="loginLink">
                    Already have an account?
                    <a href="login.php">Login</a>
                </div>
            </form>
            <?php
                if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){
                    $username = $_POST['username'];
                    $email= $_POST['email'];
                    $password = $_POST['password'];
                    
                    $sql = "INSERT INTO `blogwebsite`.`user_database` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password');";
                    if(mysqli_query($conn, $sql)){
                        // $signed_up = true;
                        echo "signed up successfully";
                    }else{
                        echo 'Signed Up failed';
                    }
                    // echo $sql;
                    $conn->close();
                }
            ?>
        </div>
    </div>
    </body>
</html>