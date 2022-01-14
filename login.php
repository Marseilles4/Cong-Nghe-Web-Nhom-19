<?php
	session_start();

    include'config.php';
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		if($username==''||$password==''){
			echo "<script>alert('Điền đầy đủ thông tin')</script>";
		}else{
			$password=md5($password);
			$sql="SELECT * FROM `user_account` WHERE username='$username' and password='$password'";
			$result=mysqli_query($conn,$sql);
			$num_rows=mysqli_num_rows($result);
			if($num_rows!=0){
				header("location:index.php");
			}else{
				header("location:signup.php");
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Instagram</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/login.css">
</head>

<body>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-6 firstContainer">
					<img src="img/app-features.png" alt="" class="rounded d-block w-100">
				</div>
				<div class="col-md-6 text-center secondContainer">
					<div class="card">
						<div class="py-3 px-2">
							<img src="img/instagram-logo.png" alt="card-img-top">
						</div>
						<div class="card-body">
							<form method="post">
								<div class="form-group py-1">
									<input type="text" class="form-control" name="username" id="" aria-describedby="helpId"
										placeholder="Phone Number, Username or Email">
								</div>
								<div class="form-group py-1">
									<input type="password" class="form-control" name="password" id="" aria-describedby="helpId"
										placeholder="Password">
								</div>
								<input type="submit" name="login" value="Log In" class="mt-2 btn btn-primary w-100">
							</form>
							<div class="or">
								<span>OR</span>
							</div>
							<div class="otherMethods">
								<div class="secondaryColor">
                                       <p>
                                        <img src="img/facebook-logo.png" class="img-fluid rounded" alt=""
                                        style="width: 18px;height: 18px">
                                         <a style="text-decoration:none" href="https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjM4NzI0Mjc2LCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D">Login to facebook</a>.
                                         </p>							
                                      </div>								
                                     </div>
                                   <a style="text-decoration:none" class="reset" href="" tabindex="0">Forgot password?</a>
						
                                </div>
                            <div>
					</div>
					<div class="card my-2">
						<div class="card-body">
							<span>Don't have an account?</span><span class="primaryColor"><a style="text-decoration:none" class="signup" href="signup.php" tabindex="0">Sign up</a>
						</div>
					</div>
					<span>Get the app.</span>
					<div class="row py-2">
						<div class="col-6"><img src="img/playstore.png" alt="" class="img-fluid d-block rounded" />
						</div>
						<div class="col-6"><img src="img/appstore.png" alt="" class="img-fluid d-block rounded" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>