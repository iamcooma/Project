<!DOCTYPE html>
<html lang="en">
<?php include('checklogin.php');

?>

<head>
    <meta charset="utf-8">
    <title>มูลนิธิเพื่อการศึกษาและพัฒนามหาวิทยาลัยมหาสารคาม</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <?php include('../shared/style.php'); ?>
</head>

<body>
    <?php include('../shared/header-user.php'); ?>
    <div>

        <center>
            <br><br>
            <h1>ขั้นตอนการส่งโครงการ</h1>
            <br><br>
            <div>
                <FROT color=blue>
                    <p>
                        1. <a href="../view/register.php">สมัครสมาชิก</a> และ/หรือ <a href="../view/login">เข้าสู่ระบบ</a>
                    </p>
                </FROT>
                <p> 2. กรอกข้อมูลโครงการลงในไฟล์ (กรุณาเข้าสู่ระบบก่อนดาวน์โหลดไฟล์)
                    <a href="../files/KKD.docx" class="btn btn-warning btn-lg">ดาวน์โหลดไฟล์</a>
                </p>
                <p> 3. ส่งไฟล์มาให้เราทางอีเมล submit@krukiddee.com</p>
                <p> 4. เจ้าหน้าที่ตรวจสอบข้อมูล และอาจขอข้อมูลเพิ่มเติม (ใช้เวลาประมาณ 3-7 วัน)</p>
                <p> 5. เมื่อเจ้าหน้าที่ยืนยันข้อมูลแล้ว โครงการจะพร้อมรับบริจาคทันที</p>
            </div>
        </center>
        <div>
            <ul class="navbar-nav mr-auto">
                <p align="left">
                    <font size="3">สอบถามข้อมูลเพิ่มเติม</font>
                </p>
                <p align="left">
                    <font size="3">อีเมล : info@ krukiddee.com</font>
                </p>
                <p align="left">
                    <font size="3">โทรศัพท์ : xxxxxxxxxx</font>
                </p>
            </ul>
        </div>
    </div>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>

</html>