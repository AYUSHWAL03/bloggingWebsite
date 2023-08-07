<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/blogs.css">
    <link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body style="background-color:#050505">
    <?php
        include './components/header.php';
    ?>
    <div class="containerBlog">

        <div class="dropdown">
            <button class="dropbtn">Dropdown</button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
            <div class="searchBar">
                <input type="search" placeholder="Search categories ....">
            </div>
        </div>
    </div>
</body>
</html>