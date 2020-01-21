<!DOCTYPE html>
<?php
// error_reporting(0);
include('checklogin.php');


include('../database/condb.php');
?>
<html lang="en" dir="ltr">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



<style>
    .carousel-caption {
        background-color: rgba(0, 0, 0, 0.5);
        border: 1px solid #333;
        bottom: 50px !important;
    }

    .carousel-item {
        min-height: 500px !important;
    }

    form div {
        margin-bottom: 10px;
    }
</style>

<head>
    <meta charset="utf-8">
    <title>index</title>
    <?php include('../shared/style.php'); ?>
</head>

<body>
    <?php include('../shared/header-user.php'); ?>
    <hr>
    <?php
    $project_id = base64_decode($_GET['p']);
    $sql = "SELECT * FROM `project` WHERE project_id = '" . $project_id . "' ";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    ?>
    <!-- Page Content -->
    <section class="py-5">

        <div style="width: 800px; margin: 0 auto; padding: 20px;">
            <?php
            if (isset($_POST['save'])) {
                date_default_timezone_set('Asia/Bangkok');
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $address_in = $_POST['address_in'];
                $amount = $_POST['amount'];
                $project_id = $_POST['project_id'];
                $date_create = date("Y-m-d H:i:s");
                $checkbox = $_POST['textbox'];

                $sql = "INSERT INTO donor(name, phone, address, amount, project_id, date_create, address_in, checkbox) VALUES('$name', '$phone', '$address', '$amount', '$project_id', '$date_create', '$address_in', '$checkbox')";
                if (mysqli_query($conn, $sql)) {
                    echo '<div class="alert alert-danger text-center">ขอขอบคุณ ' . $name . ' ที่ได้ร่วมบริจาคเงินจำนวน ' . $amount . ' บาท กับโครงการของเรา</div>';
                }
            }
            ?>
        </div>

        <h3 class="text-center">เข้าร่วมบริจาค</h3>
        <div style="width: 800px; margin: 0 auto; border: 1px solid #ccc; padding: 20px;">


            <div class="alert alert-danger">
                <div>
                    <b>ชื่อเจ้าของโครงการ : </b> <?= $data['project_manager'] ?>
                </div>
                <div>
                    <b>ชื่อโครงการ : </b> <?= $data['project_title'] ?>
                </div>
                <div>
                    <b>รายละเอียดโครงการ : </b> <?= $data['project_detail'] ?>
                </div>
                <hr>
                <h5 class="text-center">บัญชีธนาคารในการโอนเงินบริจาค</h5>
                <div>
                    <b>ชื่อบัญชี : </b> <?= $data['account_name'] ?>
                </div>
                <div>
                    <b>เลขที่บัญชี : </b> <?= $data['account_number'] ?>
                </div>
                <div>
                    <b>ธนาคาร : </b> <?= $data['account_bank'] ?>
                </div>
            </div>

            <form method="post" action="?p=<?= base64_encode($data['project_id']) ?>" onsubmit="return confirm('ยืนยันการบันทึกข้อมูล?')">
                <input type="hidden" name="project_id" value="<?= $data['project_id'] ?>">
                <div>
                    <label>ชื่อผู้บริจาค*</label>
                    <input type="text" name="name" class="form-control" required="">
                </div>
                <div>
                    <label>ที่อยู่*</label>
                    <textarea name="address" class="form-control" required=""></textarea>
                </div>
                <div>
                    <div>
                        <label>
                            <input type=hidden name=textbox value="0">
                            <input type=checkbox onchange="this.form.textbox.value=this.checked? 1 : 0">

                            ต้องการใบอนุโมทนา
                        </label>
                    </div>
                </div>
                <div>
                    <label>ชื่อบริษัท/ที่อยู่ส่งใบอนุโมทนา*</label>
                    <textarea name="address_in" class="form-control" required=""></textarea>
                </div>

                <div>
                    <label>เบอร์โทรศัพท์*</label>
                    <input type="number" name="phone" class="form-control" required="">
                </div>

                <div>
                    <label>จำนวนเงินที่บริจาค*</label>
                    <input type="number" name="amount" class="form-control" required="">
                </div>

                <br>
                <div class="text-center">
                    <button name="save" type="submit" class="btn btn-success btn-lg">บันทักเข้าร่วมบริจาค</button>
                </div>

            </form>

        </div>

    </section>
    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>

</html>