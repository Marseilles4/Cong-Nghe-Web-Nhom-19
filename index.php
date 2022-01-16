<?php 
    include "header.php";
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
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <session class="main">
        <div class="wrapper">
            <div class="left-col">
                <div class="status-wrapper">
                    <div class="status-card">
                        <div class="profile-pic">
                            <img src="img/1.jpg" alt="">
                        </div>
                        <p class="username">User_name_1</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic">
                            <img src="img/2.jpg" alt="">
                        </div>
                        <p class="username">User_name_2</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic">
                            <img src="img/3.jpg" alt="">
                        </div>
                        <p class="username">User_name_3</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic">
                            <img src="img/4.jpg" alt="">
                        </div>
                        <p class="username">User_name_4</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic">
                            <img src="img/5.jpg" alt="">
                        </div>
                        <p class="username">User_name_5</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic">
                            <img src="img/6.png" alt="">
                        </div>
                        <p class="username">User_name_6</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic">
                            <img src="img/7.png" alt="">
                        </div>
                        <p class="username">User_name_7</p>
                    </div>
                    <div class="status-card">
                        <div class="profile-pic">
                            <img src="img/no_user.png" alt="">
                        </div>
                        <p class="username">User_name_8</p>
                    </div>
                </div>
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic">
                                <img src="img/1.jpg" alt="">
                            </div>
                            <p class="username">
                                User_name_1
                            </p>
                        </div>
                        <img src="img/option.PNG" class="options" alt="">
                    </div>
                    <img src="img/wallpapers-desktop-15-4-2018 (7).jpg" class="post-img" alt="">
                    <div class="post-content">
                        <div class="reaction-wrapper">
                            <i onclick="Toggle()" id="btn" class="far fa-heart"></i>
                            <i class="far fa-comment"></i>
                            <i class="far fa-share"></i>
                            <i class="far fa-bookmark"></i>
                        </div>
                        <p class="likes">34.506 likes</p>
                        <p class="description"><span>username</span>Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Et, laboriosam reiciendis. In tempore totam cupiditate itaque, molestias omnis, dolore
                            eius fugiat ab illum facilis hic labore? Deserunt nostrum itaque nemo.
                        </p>
                        <p class="post-time">12 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <img src="img/smile.PNG" class="icon" alt="">
                        <input type="text" class="comment-box" placeholder="More comments...">
                        <button class="comment-btn">post</button>
                    </div>
                </div>
                <div class="post">
                    <div class="info">
                        <div class="user">
                            <div class="profile-pic">
                                <img src="img/3.jpg" alt="">
                            </div>
                            <p class="username">
                                User_name_3
                            </p>
                        </div>
                        <img src="img/option.PNG" class="options" alt="">
                    </div>
                    <img src="img/wallpapers-desktop-15-4-2018 (9).jpg" class="post-img" alt="">
                    <div class="post-content">
                        <div class="reaction-wrapper">
                            <i onclick="Toggle()" id="btn" class="far fa-heart"></i>
                            <i class="far fa-comment"></i>
                            <i class="far fa-share"></i>
                            <i class="far fa-bookmark"></i>
                        </div>
                        <p class="likes">1.324 likes</p>
                        <p class="description"><span>username</span>Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Et, laboriosam reiciendis. In tempore totam cupiditate itaque, molestias omnis, dolore
                            eius fugiat ab illum facilis hic labore? Deserunt nostrum itaque nemo.
                        </p>
                        <p class="post-time">6 minutes ago</p>
                    </div>
                    <div class="comment-wrapper">
                        <img src="img/smile.PNG" class="icon" alt="">
                        <input type="text" class="comment-box" placeholder="More comments...">
                        <button class="comment-btn">post</button>
                    </div>
                </div>
            </div>
            <div class="right-col">
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/profile.jpg" alt="">
                    </div>
                    <div>
                        <p class="username">viethoang_bui</p>
                        <p class="sub-text">Viet Hoang Bui</p>
                    </div>
                    <button class="action-btn">Switch</button>
                </div>
                <div class="suggestion-side">
                <p class="suggestion-text">Suggestions for you</p>
                <button class="view-all-btn">View all</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/1.jpg" alt="">
                    </div>
                    <div>
                        <p class="name">user_name_1</p>
                        <p class="sub-text">Suggestions for you</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/2.jpg" alt="">
                    </div>
                    <div>
                        <p class="name">user_name_2</p>
                        <p class="sub-text">Suggestions for you</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/3.jpg" alt="">
                    </div>
                    <div>
                        <p class="name">user_name_3</p>
                        <p class="sub-text">Suggestions for you</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/4.jpg" alt="">
                    </div>
                    <div>
                        <p class="name">user_name_4</p>
                        <p class="sub-text">Suggestions for you</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                <div class="profile-card">
                    <div class="profile-pic">
                        <img src="img/5.jpg" alt="">
                    </div>
                    <div>
                        <p class="name">user_name_5</p>
                        <p class="sub-text">Suggestions for you</p>
                    </div>
                    <button class="action-btn">follow</button>
                </div>
                
                <div class="footer">
                    <h5 class="f-w-500 ">
                        Introduce &bull;Help &bull; Newspapers &bull; API &bull; Privacy &bull; Rules &bull;
                    </h5>
                    <h5 class="f-w-500">Position &bull; The most relevant account &bull; Hashtags &bull; Language &bull;
                    </h5>
                    <h5 class="f-w-500" style="margin-top: 30px;">&copy; 2022 INSTAGRAM FROM META
                    </h5>
                </div>
            </div>
        </div> 
    </session>
    <script>
        var btn = document.getElementById('btn');

function Toggle(){
    if(btn.classList.contains("far")){
        btn.classList.remove("far");
        btn.classList.add("fas");
    }
    else{
        btn.classList.remove("fas");
        btn.classList.add("far");
    }
}
    </script>
    <body>
</html>