<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Campaign</title>
    <!-- capture link -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>


    <?php
    $titlename = "Registeration";
    include("function/header.php");
    ?>

    <div class="form_container">
        <form action="" method="post">


            <input type="text" name="ftname" placeholder="First Name" required><br>
            <input type="text" name="ltname" placeholder="Last Name" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="confirmpassword" placeholder="Confirm Password"><br>
            <div class="g-recaptcha" id="captcha" data-sitekey="6Lcc5fsoAAAAAB-A4Sj34C9ya_lVz0Weyrw9Nyvc"></div>
            <button type="submit" name="signup" value="Signup" id="signup">Sign Up</button>
            <button type="reset" name="cancel" value="Cancel">Cancel</button><br>
            <p> Already have account? <a href="login.php">Log in</a></p><br>
        </form>
        <script>
            $(document).ready(function() {
                $("#signup").click(function() {
                    var response = grecaptcha.getResponse();
                    if (response.length == 0) {
                        alert("Please verify that you are not a robot");
                        return false; 
                    }
                });
            });
        </script>
        <?php
         if(isset($_POST["signup"])){
            $f_name=$_POST["ftname"];
            $l_name=$_POST["ltname"];
            $email=$_POST["email"];
            $password=$_POST["password"];
            $cpassword=$_POST["confirmpassword"];
            if(!($password==$cpassword)){
             echo "<script>alert('Password and Confirm Password are not match')</script>";
            }
            else{
                $sql="insert into user(fname,lname,email,password) values('$f_name','$l_name','$email','$password')";
                $result=mysqli_query($conn,$sql);
                if($result){
                    echo "<script>alert('Registeration Successful')</script>";
                }
            }
         }
        ?>
    </div>
    <br>
    <br>
</body>

</html>
<?php
$footername = "Register Page";
include("function/footer.php");
?>