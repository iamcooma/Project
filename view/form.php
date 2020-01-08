<!DOCTYPE html>
<?php
// error_reporting(0);
include('checklogin.php');
include('../components/menu.php');

include('../database/condb.php');
?>
<html lang="en" dir="ltr">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    body,
    html {
        height: 100%;
    }

    .bg {

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .row.heading h2 {
        color: #fff;
        font-size: 52.52px;
        line-height: 95px;
        font-weight: 400;
        text-align: center;
        margin: 0 0 40px;
        padding-bottom: 20px;
        text-transform: uppercase;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .heading.heading-icon {
        display: block;
    }

    .padding-lg {
        display: block;
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .practice-area.padding-lg {
        padding-bottom: 55px;
        padding-top: 55px;
    }

    .practice-area .inner {
        border: 1px solid #999999;
        text-align: center;
        margin-bottom: 28px;
        padding: 40px 25px;
    }

    .our-webcoderskull .cnt-block:hover {
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        border: 0;
    }

    .practice-area .inner h3 {
        color: #3c3c3c;
        font-size: 24px;
        font-weight: 500;
        font-family: 'Poppins', sans-serif;
        padding: 10px 0;
    }

    .practice-area .inner p {
        font-size: 14px;
        line-height: 22px;
        font-weight: 400;
    }

    .practice-area .inner img {
        display: inline-block;
    }

    .our-webcoderskull {
        /* background: url("http://www.webcoderskull.com/img/right-sider-banner.png") no-repeat center top / cover; */

    }

    .our-webcoderskull .cnt-block {
        float: left;
        width: 100%;
        background: #fff;
        padding: 30px 20px;
        text-align: center;
        border: 2px solid #d5d5d5;
        margin: 0 0 28px;
    }

    .our-webcoderskull .cnt-block figure {
        width: 148px;
        height: 148px;
        border-radius: 100%;
        display: inline-block;
        margin-bottom: 15px;
    }

    .our-webcoderskull .cnt-block img {
        width: 148px;
        height: 148px;
        border-radius: 100%;
    }

    .our-webcoderskull .cnt-block h3 {
        color: #2a2a2a;
        font-size: 20px;
        font-weight: 500;
        padding: 6px 0;
        text-transform: uppercase;
    }

    .our-webcoderskull .cnt-block h3 a {
        text-decoration: none;
        color: #2a2a2a;
    }

    .our-webcoderskull .cnt-block h3 a:hover {
        color: #337ab7;
    }

    .our-webcoderskull .cnt-block p {
        color: #2a2a2a;
        font-size: 13px;
        line-height: 20px;
        font-weight: 400;
    }

    .our-webcoderskull .cnt-block .follow-us {
        margin: 20px 0 0;
    }

    .our-webcoderskull .cnt-block .follow-us li {
        display: inline-block;
        width: auto;
        margin: 0 5px;
    }

    .our-webcoderskull .cnt-block .follow-us li .fa {
        font-size: 24px;
        color: #767676;
    }

    .our-webcoderskull .cnt-block .follow-us li .fa:hover {
        color: #025a8e;
    }

    .pagination>li>a {
        border-radius: 50% !important;
        margin: 0 5px;
    }

    /* Footer */
    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    section {
        padding: 60px 0;
    }

    section .section-title {
        text-align: center;
        color: #007b5e;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    #footer {
        background: #007b5e !important;
    }

    #footer h5 {
        padding-left: 10px;
        border-left: 3px solid #eeeeee;
        padding-bottom: 6px;
        margin-bottom: 20px;
        color: #ffffff;
    }

    #footer a {
        color: #ffffff;
        text-decoration: none !important;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    #footer ul.social li {
        padding: 3px 0;
    }

    #footer ul.social li a i {
        margin-right: 5px;
        font-size: 25px;
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }

    #footer ul.social li:hover a i {
        font-size: 30px;
        margin-top: -10px;
    }

    #footer ul.social li a,
    #footer ul.quick-links li a {
        color: #ffffff;
    }

    #footer ul.social li a:hover {
        color: #eeeeee;
    }

    #footer ul.quick-links li {
        padding: 3px 0;
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }

    #footer ul.quick-links li:hover {
        padding: 3px 0;
        margin-left: 5px;
        font-weight: 700;
    }

    #footer ul.quick-links li a i {
        margin-right: 5px;
    }

    #footer ul.quick-links li:hover a i {
        font-weight: 700;
    }

    @media (max-width:767px) {
        #footer h5 {
            padding-left: 0;
            border-left: transparent;
            padding-bottom: 0px;
            margin-bottom: 10px;
        }
    }

    .a {
        width: 100%;
        padding: 15px 30px;
        float: left;
        word-spacing: 10px;
    }

    .edit {
        font-size: 14px;
        color: black;
        border: 2px solid #ff9933;
        text-decoration: none;
        background-color: #ff9933;
        border-radius: 5px;
    }

    .edit:hover {
        text-decoration: none;
        background-color: #ffe6cc;
        border: 2px solid #ffe6cc;
        color: black;
    }

    /* background */
    .carousel-item {
        height: 65vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

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
</head>

<body>

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
                        <input type=hidden name=textbox value="0" >
                            <input type=checkbox onchange="this.form.textbox.value=this.checked? 1 : 0" >
                          
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
    <footer>
        <?php include('../components/footer.php'); ?>
    </footer>
</body>

</html>