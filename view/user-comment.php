<!DOCTYPE html>
<?php include('checklogin.php');
include('../database/condb.php');
// include('../components/menu.php');
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>มูลนิธิเพื่อการศึกษาและพัฒนามหาวิทยาลัยมหาสารคาม</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <?php include('../shared/style.php'); ?>
</head>

<?php
function DateThai($strDate)
{
    $strYear = date("Y", strtotime($strDate)) + 543;
    $strMonth = date("n", strtotime($strDate));
    $strDay = date("j", strtotime($strDate));
    $strHour = date("H", strtotime($strDate));
    $strMinute = date("i", strtotime($strDate));
    $strSeconds = date("s", strtotime($strDate));
    $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
    $strMonthThai = $strMonthCut[$strMonth];
    return "$strDay $strMonthThai $strYear";
}
?>

<body>
    <?php include('../shared/header-user.php'); ?>
    <hr>
    <form action="../model/comment.php" method="POST">
        <style>
            textarea {
                width: 100%;
                height: 150px;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                font-size: 16px;
                resize: none;
            }
        </style>
        <div class="container">
            <?php
            $email = $_SESSION['email'];
            $sql = "SELECT user_id FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_row($result);
            $user_id = $row[0];
            ?>
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
            <h3>ข้อความ</h3>
            <textarea name="com_text" rows="6" cols="25"></textarea>
            <br><br>
            <button class="btn btn-success" type="submit">บันทึก</button>
            <input class="btn btn-danger" type=button onclick=window.history.back() value="ย้อนกลับ">
            <!-- <input type="reset" value="รีเฟรช"> -->
        </div>
    </form>
    <!-- <center>
        <h4>ประวัติการส่งความคิดเห็น</h4>
    </center>
    <table class="container">
        <tr>
            <th>ความคิดเห็น</th>
            <th>วันที่ถาม</th>
            <th>สถานะ</th>
            <th>คำตอบ</th>
        </tr>

        <?php
        $email = $_SESSION['email'];
        $sqll = "SELECT user_id FROM users WHERE user_id=$user_id";
        $resultt = mysqli_query($conn, $sqll);
        $roww = mysqli_fetch_row($resultt);
        $user_idd = $roww[0];
        if ($user_idd) {
            $sql2 = "SELECT * FROM comment WHERE user_id=$user_idd";
            $result2 = mysqli_query($conn, $sql2);
            while ($data2 = mysqli_fetch_array($result2)) {
        ?>
                <tr>
                    <td><?php echo $data2['com_text']; ?></td>
                    <td><?php echo DateThai($data['com_date']); ?></td>
                    <?php
                    if ($data2['com_status'] == 0) {
                    ?>
                        <td>ยังไม่ตอบ</td>
                    <?php
                    } elseif ($data2['com_status'] == 1) {
                    ?>
                        <td>ตอบแล้ว</td>
                        <td><?php echo $data2['anw_com']; ?></td>
                <?php }
                } ?>
                </tr>
            <?php
        }
            ?>
    </table> -->
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>

</html>