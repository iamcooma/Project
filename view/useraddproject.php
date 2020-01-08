<!DOCTYPE html>
<html lang="en">
<?php include('checklogin.php');
include('../components/menu.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>

        <center>
            <h1>ขั้นตอนการส่งโครงการ</h1>
            <div>
                <FROT color=blue>
                    <p>
                        1. <a href="../view/register.php">สมัครสมาชิก</a> และ/หรือ <a href="../view/login">เข้าสู่ระบบ</a>
                    </p>
                </FROT>
                <p> 2. กรอกข้อมูลโครงการลงในไฟล์ (กรุณาเข้าสู่ระบบก่อนดาวน์โหลดไฟล์)
                    <a href="download.php" class="btn btn-warning btn-lg">ดาวน์โหลดไฟล์</a>
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

</body>

</html>