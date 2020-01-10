<!DOCTYPE html>
<?php
// error_reporting(0);
// include('../components/menu2.php');
include('../database/condb.php');
?>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>มูลนิธิเพื่อการศึกษาและพัฒนามหาวิทยาลัยมหาสารคาม</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <?php include('../shared/style.php'); ?>
</head>

<body>
    <?php include('../shared/header-guest.php'); ?>
    <hr>
    <div class="container-fluid">
        <?php include('../components/carousel.php'); ?>
    </div>

    <?php
    $sql = "SELECT * FROM `project` WHERE user_id IS NOT NULL ORDER BY project_id DESC ";
    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql);

    ?>

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $i = 0;
                while ($data = mysqli_fetch_array($result)) { ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" <?php if ($i == 0) {
                                                                                                echo 'class="active"';
                                                                                            } ?>></li>
                <?php $i++;
                } ?>
            </ol>
            <div class="carousel-inner" role="listbox">

                <?php $i = 0;
                while ($data = mysqli_fetch_array($result2)) { ?>
                    <div class="carousel-item <?php if ($i == 0) {
                                                    echo 'active';
                                                } ?>" style="background-image: url('../img/<?= $data['project_pic'] ?>')">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="display-4"><?= $data['project_title'] ?></h3>
                            <p class="lead"><?= $data['project_detail'] ?></p>
                            <a href="form.php?p=<?= base64_encode($data['project_id']) ?>" class="btn btn-warning btn-lg">ร่วมบริจาคโครงการ</a>
                        </div>
                    </div>
                <?php $i++;
                } ?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
            <h1 class="font-weight-light">ข่าวสารและเรื่องราว</h1>
            <p class="lead">
                <dd>หากคุณเป็นคนหนึ่งที่เคยผ่านการศึกษาแบบไทยต้องเคยเจอกิจกรรมหน้าเสาธงตอนเช้าก่อนเข้าเรียนอย่างแน่นอน สิ่งนี้เกิดขึ้นยาวนานตั้งแต่ยุคคุณพ่อคุณแม่เราจวบจนปัจจุบัน เด็กหลายๆ คนเลือกที่จะอดทนต่อสิ่งที่ทำต่อกันมาโดยไม่ปริปากแม้บางครั้งไม่เห็นด้วย แต่หากเริ่มส่งผลกระทบต่อชีวิตทางการศึกษาแล้วล่ะก็ คงถึงเวลาปกป้องสิทธิของตัวเอง “หนูมองว่าทำไมหลักสูตรการเรียนการสอนถึงมากขนาดนี้ แล้วยังมีกิจกรรมหน้าเสาธงในตอนเช้าที่กินเวลาเรียนเราเข้ามาเพิ่มอีก ทำให้ต้องมีการเพิ่มคาบเรียน เพราะเรียนไม่ทัน ไม่มีเวลาอ่านหนังสือสอบ ไม่มีความรู้ไปทำข้อสอบ” นี่คือสิ่งที่น้องมิ้นท์และเพื่อนๆ ลุกขึ้นมาเรียกร้องต่อสู้กับกิจกรรมหน้าเสาธงของโรงเรียนผ่านวิชาของ “ครูกั๊ก” (วิชาความคิดรวบยอดทางคณิตศาสตร์) ที่ให้นักเรียนได้ใช้ความรู้ที่มีมาประยุกต์กับสถานการณ์ต่างๆ ตามโจทย์ รวมถึงสอนให้เด็กรู้จักแก้ปัญหาที่เกิดขึ้นในสังคม โดยเริ่มจากสิ่งที่ใกล้ตัวที่สุดอย่าง “โรงเรียน”</dd>
                <a href="../view/message.php">ข่าวสารเพิ่มเติม</a>!
            </p>
        </div>
    </section>
    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>


</html>