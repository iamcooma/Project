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
            <h1 class="font-weight-light">เรื่องราว</h1>
            <p class="lead">
                <dd>ในประเทศไทย ยังมีมูลนิธิช่วยเหลือเงินทุนสำหรับค่าใช้จ่ายในการศึกษา แต่ยังไม่เป็นที่รู้จักมากนักทำให้บุคคลกรในมหาวิทยาลัยและกลุ่มนิสิตเก่าที่ยังไม่ได้รับข่าวสารหรือช่องทางในการบริจาค มูลนิธิจัดขึ้นเพื่อหาทุนเพื่อมาช่วยเหลือเด็กยากไร้ ปัจจุบันสำนักงานที่ช่วยส่งเสริมการให้โอกาส รับข่าวสารและได้โอกาสเข้าถึงเงินทุนในการศึกษาและในส่วนต่าง ๆ เพื่อต่อยอดทุนการศึกษาให้ดีขึ้น เนื่องจากมีเด็กนักเรียนที่ประสบปัญหาทางด้านการเงิน ทำให้เกิดการก่อตั้งกองทุนมูลนิธิเกิดขึ้นเพื่อตอบสนองต่อปัญหาเหล่านี้ ซึ่งจะเป็นการระดมทุนจากประชาชนทั่วไปที่ไม่ใช่นักลงทุนโดยตรงและลงทุนในจำนวนน้อย โดยใช้ช่องทางออนไลน์เป็นทางเลือก แน่นอนว่าไม่รวมกับการระดมทุนโดยตรงกับธนาคารทั่วไป
จากปัญหาข้างต้นจึงเกิดเป็น KruKidDee.com เป็นแพลตฟอร์มกลางในการช่วยเหลือเด็กนักเรียนยากไร้ มีจุดเริ่มต้นจากความต้องการช่วยเหลือนักเรียนที่ขาดโอกาสและขาดแคลนคุณทรัพย์ ซึ่งคุณครูจะเป็นผู้ที่ส่งข้อมูลของเด็กนักเรียน หลังจากที่ส่งข้อมูลในการขอรับบริจาคในเว็บไซต์แล้ว คุณครูสามารถมีส่วนช่วยในการกระจายข่าว ผ่านช่องทางของตนเองหรือสื่ออื่น ๆ เพื่อเป็นการกระจายข่าวให้ผู้ที่สนใจมีส่วนร่วมเข้ามาบริจาค โดยจะจัดทำเป็นเว็บไซต์เพื่อการติดต่อข่าวสารและยังสามารถสอบถามข้อมูล เพื่อทำการขอทุนได้และเพิ่มช่องทางข่าวสารไปยังผู้บริจาคโดยผ่านสื่อเทคโนโลยีเช่น Facebook Line และเว็บไซต์ เงินที่ได้มาจากการบริจาคนั้นจะนำมาช่วยเหลือเด็กนักเรียนที่ยากไร้ หรือต้องการรับความช่วยเหลือ เช่น ซื้ออุปกรณ์การเรียน ซื้อยารักษาโรค และค่าใช้จ่ายอื่น ๆ ที่จำเป็นและให้ประโยชน์แก่เด็ก
</dd>
                <a href="../view/message.php">ข่าวสารเพิ่มเติม</a>!
            </p>
        </div>
    </section>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>


</html>