<?php
    session_start();
?>
<div class="topnav">
    <a href="#" class="logo"><i class="fa-brands fa-blogger"></i>Blogster</a>

    <?php
            if(isset($_SESSION['username'])){
                echo "<a>". $_SESSION['username']."&nbsp;<i class='fa-solid fa-circle-user'></i></a>";
            }else{
                echo "<a href='signup.php' >Sign Up <i class='fa-solid fa-circle-user'></i></a>";
            }
        
    ?>
    <!-- log out feature is missing  -->
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
    <a href="blogs.php">Blogs</a>
    <a  href="index.php">Home</a>
</div>