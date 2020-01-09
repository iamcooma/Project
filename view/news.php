<!DOCTYPE html>
<?php include('checklogin.php');
include('../database/condb.php');
include('../components/menu.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <footer>
        <?php include('../components/footer.php'); ?>
    </footer>
</body>

</html>