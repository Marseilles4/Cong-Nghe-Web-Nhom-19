<?php
        session_start();
        include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/header.css">
</head>

<body>
    <nav class="navbar">
        <div class="nav-wrapper">
            <img src="img/1.png" class="brand-img" alt="">
            <input type="text" class="search-box" placeholder="search">
            <div class="nav-items">
                <img src="img/home.PNG" onclick="home()" class="icon" id="home" alt="">
                <img src="img/messenger.PNG" class="icon" alt="">
                <img src="img/add.PNG" class="icon" alt="">
                <img src="img/explore.PNG" class="icon" alt="">
                <img src="img/like.PNG" class="icon" alt="">
                <div class="icon user_ava">
                    <?php
                        $sql_avatar = "SELECT avatar from user_account where id = 2 ;";
                        $query = mysqli_query($conn, $sql_avatar);
                        $result = mysqli_fetch_assoc($query);
                    ?>
                    <img id="avt" class="avatar" onclick="toggleMenu()" src="<?php if($result["avatar"]==null){echo 'img/no_user.png';}else{echo 'img/'.$result["avatar"];}?>" alt="">
                    <div class="menu-profile" id="menu-profile">
                        <div class="item-menu">
                            <span class="material-icons-outlined">
                                account_circle
                            </span>
                                <a href="profile.php">
                                    <p>Personal page</p>
                                </a>
                        </div>
                        <div class="item-menu">
                            <span class="material-icons-outlined">
                                bookmark_border
                            </span>
                                <p>Saved</p>
                        </div>
                        <div class="item-menu">
                            <span class="material-icons-outlined">
                                settings
                            </span>
                                <p>Settings</p>
                        </div>
                        <div class="item-menu">
                            <span class="material-icons-outlined">
                                swap_horizontal_circle
                            </span>
                                <p>Account transfer</p>
                        </div>
                        <hr>
                        <div class="item-menu">
                            <a href="logout.php"><p>Logout</p></a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </nav>
    <script>
        function toggleMenu(){
        var menuBox = document.getElementById('menu-profile'); 
        var nav = document.getElementById('nav-wrapper');
        if(menuBox.style.display == "block") { 
            menuBox.style.display = "none";
            nav.style.marginRight = "100px";
        }else{
            menuBox.style.display = "block";
        }
    }
    </script>
    <script>
        function home(){
        var menuBox = document.getElementById('home'); 
        location.assign("index.php");
    }
    </script>
