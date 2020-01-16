<!DOCTYPE html>
<html lang="en">
<?php
// error_reporting(0);
// include('../components/menu2.php');
include('../database/condb.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include('../shared/style.php'); ?>
</head>

<body>
    <?php include('../shared/header-user.php'); ?>
    <hr>
    <div class="container">
        <h1>โครงการ</h1>
    </div>

    <div class="container">
        <div>
            <tr>
                <th>หัวเรื่อง</th>
                <th>รูป</th>
                <th>วิดีโอ</th>
                <th>ความคืบหน้า</th>
                <th>รูปตัวอย่าง.7-10 รูป</th>
                <th>รายละเอียด</th>
            </tr>

        </div>
        <div>

        </div>

    </div>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>

</html>