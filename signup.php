<?php
    session_start();
    include'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Instagram</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="img/app-features.png" class="phone" alt="">
            </div>
            <div class="col-sm-6">
                <div class="right-column text-center">
                    <img src="img/instagram-logo.png" class="instagram-logo" alt="">
                    <p class="info">
                        Sign up to see photos and videos from your friends.
                    </p>
                    <button type="submit" class="btn btn-primary btn-block">
                        <img src="img/facebook-logo.png" class="fb-logo" alt="">
                        Log in with Facebook
                    </button> 
                    <p class="or">OR</p>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email"  placeholder="Mobile Number or Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="username"  placeholder="User name">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password"  placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="signup">Sign up</button>
                    </form>
                    <?php 
                        if(isset($_POST['signup'])){
                            $email=$_POST['email'];
                            $username=$_POST['username'];
                            $password=$_POST['password'];
                            if($email==''||$username==''||$password==''){
                                echo "<script>alert('Điền đầy đủ thông tin')</script>";
                            }else{
                                $password=md5($password);
                                $sql="INSERT INTO user_account (email, username, password) 
                                    VALUES('$email','$username','$password')";
                                $result= mysqli_query($conn, $sql);
                                if($result){
                                echo "<script> alert('Đăng ký thành công') </script>";
                                }
                            }
                            mysqli_close($conn);
                        }
                    ?>
                    <p class="terms">By signing up, you agree to our <b>Terms, Data Policy</b> and <b>Cookies Policy</b>.</p>
                </div>
                <div class="right-column-login text-center">
                    <p>do you have an account? <a href="login.php">Log in</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>