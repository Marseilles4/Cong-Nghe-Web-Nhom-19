<?php
session_start();
include 'connect.php';
if(isset($_POST['submit']) && $_POST["username"] !='' && $_POST["password"] !=''   )
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM  WHERE username=?";
    
    $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_bind_result($username,$password,$fullname,$contact);
            if(mysqli_stmt_fetch($stmt)){
                if(password_verify($password, $password) && $status =='Verified'){
                    $_SESSION["password"] = $password;
                    $_SESSION["username"] = $username;
                    $_SESSION["contact"] = $contact;
                    $_SESSION["fullname"] = $fullname;
                    mysqli_close($conn);
                    if($usertype == 'admin'){
                        header("location:admin/admin.php");
                    }
                    else{
                        header("location:index.php");
                    }
                       
                }
                else{
                    echo "error occured.something wrong was happened";
                    echo $status;
                }
            }
            else{
                echo "Brokedown";
            }
        }

    }
?>
