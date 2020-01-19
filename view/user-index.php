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
    <?php include('../shared/header-user.php'); ?>
    <hr>
    <div class="container-fluid">
        <?php include('../components/carousel.php'); ?>
    </div>

    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
            <h1 class="font-weight-light">ข่าวสารและเรื่องราว</h1>
            <p class="lead">
                <dd>หากคุณเป็นคนหนึ่งที่เคยผ่านการศึกษาแบบไทยต้องเคยเจอกิจกรรมหน้าเสาธงตอนเช้าก่อนเข้าเรียนอย่างแน่นอน สิ่งนี้เกิดขึ้นยาวนานตั้งแต่ยุคคุณพ่อคุณแม่เราจวบจนปัจจุบัน เด็กหลายๆ คนเลือกที่จะอดทนต่อสิ่งที่ทำต่อกันมาโดยไม่ปริปากแม้บางครั้งไม่เห็นด้วย แต่หากเริ่มส่งผลกระทบต่อชีวิตทางการศึกษาแล้วล่ะก็ คงถึงเวลาปกป้องสิทธิของตัวเอง “หนูมองว่าทำไมหลักสูตรการเรียนการสอนถึงมากขนาดนี้ แล้วยังมีกิจกรรมหน้าเสาธงในตอนเช้าที่กินเวลาเรียนเราเข้ามาเพิ่มอีก ทำให้ต้องมีการเพิ่มคาบเรียน เพราะเรียนไม่ทัน ไม่มีเวลาอ่านหนังสือสอบ ไม่มีความรู้ไปทำข้อสอบ” นี่คือสิ่งที่น้องมิ้นท์และเพื่อนๆ ลุกขึ้นมาเรียกร้องต่อสู้กับกิจกรรมหน้าเสาธงของโรงเรียนผ่านวิชาของ “ครูกั๊ก” (วิชาความคิดรวบยอดทางคณิตศาสตร์) ที่ให้นักเรียนได้ใช้ความรู้ที่มีมาประยุกต์กับสถานการณ์ต่างๆ ตามโจทย์ รวมถึงสอนให้เด็กรู้จักแก้ปัญหาที่เกิดขึ้นในสังคม โดยเริ่มจากสิ่งที่ใกล้ตัวที่สุดอย่าง “โรงเรียน”</dd>
                <a href="#">ข่าวสารเพิ่มเติม</a>!
            </p>
        </div>
        <div class="owl-carousel owl-theme blog-slider">
            <?php
            $sql = "SELECT * FROM `project` ";
            $result = mysqli_query($conn, $sql);
            while ($data = mysqli_fetch_array($result)) {

            ?>
                <div class="card blog__slide text-center">
                    <div class="blog__slide__img">
                        <img class="card-img rounded-0" src="/project/img/<?php echo $data['project_pic']; ?>" alt="...">
                    </div>
                    <div class="blog__slide__content">
                        <a class="blog__slide__label" href="">Fashion</a>
                        <h3><a href="#">New york fashion week's continued the evolution</a></h3>
                        <p>2 days ago</p>
                    </div>
                </div>
            <?php } ?>

        </div>
    </section>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>


</html>