<!DOCTYPE html>
<?php include('checklogin.php');
include('../components/menu.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div>
                <form method="POST" action="../model/message.php">
                    <div class="form-group">

                        <h4>หัวข้อข่าว</h4>
                        <input class="form-control" type="text" name=news_topic placeholder="หัวข้อโครงการ" required></<input>

                        <h4>รายละเอียด</h4>
                        <textarea class="form-control" rows="7" cols="25" type="text" name="news_detail" placeholder="รายละเอียด" required></textarea>
                        <h4>วันที่</h4>
                        <input class="form-control" type="date" name="news_date" placeholder="วันที่" required>
                        <br><br>
                        <label for="lname">
                            <h4>รูปภาพ</h4>
                        </label>
                        <input type="file" name="project_pic" placeholder="รูปภาพโครงการ">
                        <br><br>
                        <center>
                            <input class="btn btn-success" type="submit" value="บันทึก"></input>
                            <input class="btn btn-danger" type=button onclick=window.history.back() value="ย้อนกลับ">
                        </center>

                    </div>
                </form>

            </div>
        </div>
    </div>
    <br><br><br>
    <footer>
        <?php include('../components/footer.php'); ?>
    </footer>
</body>

</html>