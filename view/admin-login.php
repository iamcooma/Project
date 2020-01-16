<!DOCTYPE html>
<html lang="en">
<head>
	<title>admin login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<?php include('../shared/style2.php'); ?>
<!--===============================================================================================-->
</head>
<body>

<?php
    include('../database/condb.php');
    session_start();

    if (isset($_POST['email'])) {
        // removes backslashes
        $email = stripslashes($_REQUEST['email']);
        // escape special charecters in a string 
        $email = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $password = md5($password);
        // check is user existing in the database or not
        $sql = "SELECT * FROM users WHERE email = '$email' AND password ='$password' AND status = 0 ";

        $result = mysqli_query($conn, $sql) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        $data = mysqli_fetch_array($result);

        if ($rows == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $data['user_id'];
            $_SESSION['status'] = $data['status'];
            // Redirect user to index.php
            header("Location: admin-index.php");
        } else {
			echo "
			<br>
			<div class='form'>
            <center>
                <h3>กรุณาใส่รหัสผ่านของผู้ใช้งาน.</h3><br>
                <p>คลิกที่นี้เพื่อ<a href=' admin-login.php '>เข้าสู่ระบบ</a></p>
                  </div> 
            </center>";
        }

    
        
    } else {


        ?>
	
	<div class="limiter" >
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">

				<form action="" method="post" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-51">
						Admin
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100" type="text" id="inputEmail" name="email" placeholder="อีเมล">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" id="inputPassword" name="password" placeholder="รหัสผ่าน">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
                                จำรหัสผ่านเอาไว้
							</label>
						</div>

					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
    <?php include ('../shared/script.php');?>
    <?php } ?>
</body>

</html>