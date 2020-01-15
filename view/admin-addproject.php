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

    <div class="container-fluid">
        <?php include('../components/carousel.php'); ?>
    </div>
    <hr>
    <center>
        <h1>ตั้งโครงการ</h1>
    </center>
    <div class="container">
        <div class="col-md-0">

        </div>
        <div class="col-mr-5">
            <div class="row">
                <form method="POST" action="../model/process_project.php">
                    <div class="form-group">
                        <label>
                            <h4>หัวข้อโครงการ</h4>
                        </label>
                        <input class="form-control" type="text" name="project_title" placeholder="หัวข้อโครงการ" required></<input>
                        <br>
                        <label>
                            <h4>กรอกรายละเอียดโครงการ</h4>
                        </label>
                        <input class="form-control" type="text" name="project_detail" placeholder="รายละเอียดโครงการ" required>
                        <br>
                        <label>
                            <h4>ชื่อผู้จัดตั้งโครงการ</h4>
                        </label>
                        <input class="form-control" type="text" name="project_manager" placeholder="ชื่อผู้จัดตั้งโครงการ" required>
                        <br>
                        <label>
                            <h4>เลขที่บัญชีโครงการ (บัญชีธนาคาร)</h4>
                        </label>
                        <input class="form-control" type="text" name="account_number" placeholder="เลขบัญชีโครงการ" required>
                        <br>
                        <label>
                            <h4>ชื่อบัญชีโครงการ (บัญชีธนาคาร)</h4>
                        </label>
                        <input class="form-control" type="text" name="account_name" placeholder="ชื่อบัญชีโครงการ" required>
                        <br>
                        <label>
                            <h4>ธนาคาร (บัญชีธนาคาร)</h4>
                        </label>
                        <input class="form-control" type="text" name="account_bank" placeholder="ธนาคาร" required>
                        <br>
                        <label>
                            <h4>จำนวนที่ขอรับบริจาค</h4>
                        </label>
                        <input required="" class="form-control" type="text" name="project_money" placeholder="จำนวนที่ขอรับบริจาค">
                        <label>
                            <input type="checkbox" name="project_money2" value="0">
                            ไม่มีจำนวนที่แน่นอน
                        </label>
                        <br>

                        <label>
                            <h4>วันที่สิ้นสุดโครงการ</h4>
                        </label>
                        <input class="form-control" type="date" name="project_date" placeholder="วันที่สิ้นสุดโครงการ" required>
                        <br>
                        <label for="lname">
                            <h4>รูปภาพโครงการ</h4>
                        </label>
                        <input type="file" name="project_pic" placeholder="รูปภาพโครงการ">

                        <br><br>
                        <input class="btn btn-success" type="submit" value="บันทึกโครงการ"></input>
                        <input class="btn btn-danger" type=button onclick=window.history.back() value="ย้อนกลับ">
                    </div>
                </form>

            </div>
        </div>

    </div>
    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<script>
    $('input[name="project_money2"]').on('change', function() {

        if ($('input[name="project_money2"]').is(':checked')) {
            $('input[name="project_money"]').attr('disabled', 'disabled');
            $('input[name="project_money"]').removeAttr('required');
        } else {
            $('input[name="project_money"]').removeAttr('disabled');
            $('input[name="project_money"]').attr('required', 'required');
        }

    });
</script>

</html>