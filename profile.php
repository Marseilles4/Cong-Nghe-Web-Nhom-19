<?php
    session_start();
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <header>
    <div class="container">
        <div class="profile">
            <div class="profile-img">
                <img src="<?php if($result["avatar"]==null){ echo 'img/no_user.png' ; }else{echo 'images/'.$result["avatar"];} ?>" alt="">
            </div>
            <div class="profile-user-settings">
                <h1 class="profile-user-name">
                    viethoang_bui
                    <button class="btn profile-edit-btn">Edit Profile</button>
                    <button class="btn profile-settings-btn" aria-label="Profile Settings">
                        <i class="fas fa-cog" aria-hidden></i>
                    </button>
                </h1>
            </div>
            <div class="profile-stats">
                <ul>
                    <li>
                        <span class="profile-stat-count"> 164 </span> posts
                    </li>
                    <li>
                        <span class="profile-stat-count"> 75 </span> followers
                    </li>
                    <li>
                        <span class="profile-stat-count"> 255 </span> following
                    </li>
                </ul>
            </div>
            <div class="profile-bio">
                <p><span class="profile-real-name">Viet Hoang Bui</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis quas et repudiandae, vel omnis nostrum, aspernatur eum quisquam explicabo possimus voluptatem in neque suscipit doloribus totam minima a aliquid aliquam?</p>
            </div>
        </div>
    </div>
    </header>
    <main>
        <div class="container">
        <div class="gallery">
            <div class="gallery-item" tabindex="0">
                <img src="https:/images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop" alt="Gallery-1" class="gallery-img">
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart"></i>56</li>
                        <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment"></i>12</li>
                    </ul>
                </div>
            </div>
            <div class="gallery-item" tabindex="0">
                <img src="img/wallpapers-desktop-15-4-2018 (10).jpg" alt="Gallery-1" class="gallery-img">
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart"></i>56</li>
                        <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment"></i>12</li>
                    </ul>
                </div>
            </div>
            <div class="gallery-item" tabindex="0">
                <img src="https:/images.unsplash.com/photo-1426604966848-d7adac402bff?w=500&h=500&fit=crop" alt="Gallery-1" class="gallery-img">
                <div class="gallery-item-type">
                    <span class="visually-hidden">Gallery</span>
                    <i class="fas fa-clone" aria-hidden=""></i>
                </div>
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart"></i>56</li>
                        <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment"></i>12</li>
                    </ul>
                </div>
            </div>
            <div class="gallery-item" tabindex="0">
                <img src="https:/images.unsplash.com/photo-1504214208698-ea1916a2195a?w=500&h=500&fit=crop" alt="Gallery-1" class="gallery-img">
                <div class="gallery-item-type">
                    <span class="visually-hidden">Video</span>
                    <i class="fas fa-video" aria-hidden=""></i>
                </div>
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart"></i>56</li>
                        <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment"></i>12</li>
                    </ul>
                </div>
            </div>
            <div class="gallery-item" tabindex="0">
                <img src="https:/images.unsplash.com/photo-1515814472071-4d632dbc5d4a?w=500&h=500&fit=crop" alt="Gallery-1" class="gallery-img">
                <div class="gallery-item-type">
                    <span class="visually-hidden">Video</span>
                    <i class="fas fa-video" aria-hidden=""></i>
                </div>
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart"></i>56</li>
                        <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment"></i>12</li>
                    </ul>
                </div>
            </div>
            <div class="gallery-item" tabindex="0">
                <img src="https:/images.unsplash.com/photo-1511407397940-d57f68e81203?w=500&h=500&fit=crop" alt="Gallery-1" class="gallery-img">
                <div class="gallery-item-info">
                    <ul>
                        <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart"></i>56</li>
                        <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment"></i>12</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <div class="loader">

        </div>
    </main>
</body>
</html>