<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Login myAdmin</title>
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

        // check is user existing in the database or not
        $sql = "SELECT * FROM users WHERE email = '$email' AND password ='" . md5($password) . "'";

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
            echo "<div class='form'>
            <center>
                <h3>กรุณาใส่รหัสผ่านของผู้ใช้งาน.</h3><br>
                <p>คลิกที่นี้เพื่อ<a href=' login.php '>เข้าสู่ระบบ</a></p>
                  </div> 
            </center>";
        }
    } else {


    ?>

        <body>
            <div class="row">
                
            </div>
            <form action="" method="post" class="form-signin">
                <center>
                    <h1 class="h3 mb-3 font-weight-normal">Login myAdmin</h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="text" id="inputEmail" name="email" class="form-control" placeholder="อีเมล" required autofocus><br>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="รหัสผ่าน" required><br>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> จำรหัสผ่านเอาไว้
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">เข้าสู่ระบบ</button>

                </center>
            </form>
        </body>
    <?php } ?>
</body>

</html>