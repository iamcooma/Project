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

    <center>
        <h1>รายชื่อทั้งหมด</h1>
    </center>
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>อีเมล</th>
                        <th>รหัสผ่าน</th>
                        <th>สถานะ</th>
                        <th>แก้ไขข้อมูลส่วนตัว</th>
                        <th>ลบ</th>

                    </tr>
                </thead>
                <?php
                $sql = "select * from users order by user_id asc";

                $result = mysqli_query($conn, $sql);

                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $data['user_id']; ?></td>
                        <td><?php echo $data['first_name'] ?></td>
                        <td><?php echo $data['last_name'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td><?php echo $data['password'] ?></td>
                        <td><?php echo $data['status']; ?></td>
                        <td><a href="../view/profile.php">แก้ไข</a></td>
                        <td><a href="../model/delete.php?action=delete&project_id=<?php echo $data['project_id']; ?>" onclick="return confirm('ต้องการลบข้อมูลหรือไม่?')"> ลบ</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>

</html>