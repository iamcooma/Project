<!DOCTYPE html>
<?php include('checklogin.php');
include('../database/condb.php');
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
   <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div>
                <form method="POST" action="../model/topicnews.php" enctype="multipart/form-data">
                    <div class="container ml-3">

                        <h4>หัวข้อข่าว</h4>
                        <input class="form-control" type="text" name="news_topic" placeholder="หัวข้อโครงการ" required></<input>

                        <h4>รายละเอียด</h4>
                        <textarea class="form-control" rows="5" cols="25" type="text" name="news_detail" placeholder="รายละเอียด"></textarea>

                        <h4>วันที่</h4>
                        <input class="form-control" type="date" name="news_date" placeholder="วันที่" required>

                        <label for="lname">
                            <h4>รูปภาพ</h4>
                        </label>
                        <input type="file" name="news_img" placeholder="รูปภาพโครงการ">
                        <br>
                        <center>
                            <input class="btn btn-success" type="submit" value="บันทึก"></input>
                            <input class="btn btn-danger" type=button onclick=window.history.back() value="ย้อนกลับ">
                        </center>

                    </div>
                </form>

            </div>
        </div>
    </div>
    <br><br>
  <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>

</html>