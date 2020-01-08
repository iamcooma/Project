<!doctype html>
<html lang="en">
<?php include('checklogin.php');
// include('../components/menu.php'); 
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>message</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/global.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        /* วิดีโอ */
        header {
            position: relative;
            background-color: black;
            height: 75vh;
            min-height: 25rem;
            width: 100%;
            overflow: hidden;
        }

        header video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 0;
            -ms-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        header .container {
            position: relative;
            z-index: 2;
        }

        header .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: black;
            opacity: 0.5;
            z-index: 1;
        }

        @media (pointer: coarse) and (hover: none) {
            header {
                background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
            }

            header video {
                display: none;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
</head>


<body>
    <?php include('../components/navbar.php'); ?>
    <div class="container my-5">
        <center>
            <h2>เรื่องราว</h2>
        </center>
        <!-- Page Heading -->
        <div class="row">
            <div class="col-3">
                <div class="card shadow">
                    <a href="#"><img class="card-img-top" src="https://www.unicef.org/thailand/sites/unicef.org.thailand/files/styles/hero_desktop/public/UN0161358.JPG?itok=p9RerXwj" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">การสนับสนุนงานของยูนิเซฟจากภาคธุรกิจมาร่วมเป็นพันธมิตรกับยูนิเซฟผ่านการบริจาค</a>
                        </h4>
                        <p class="card-text">งานต่างๆของยูนิเซฟจะไม่สามารถสำเร็จได้ หากปราศจากความเอื้อเฟื้อจากพันธมิตรภาคธุรกิจ ยูนิเซฟได้รับการสนับสนุนทั้งได้ด้านอาสาสมัครและการบริจาคจากพันธมิตรองค์กรจากหลากหลายอุตสาหกรรม เพื่อสรรสร้างประโยชน์ในทุกมุมโลก</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <a href="#"><img class="card-img-top" src="https://www.unicef.org/thailand/sites/unicef.org.thailand/files/styles/hero_desktop/public/UN0161358.JPG?itok=p9RerXwj" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">การสนับสนุนงานของยูนิเซฟจากภาคธุรกิจมาร่วมเป็นพันธมิตรกับยูนิเซฟผ่านการบริจาค</a>
                        </h4>
                        <p class="card-text">งานต่างๆของยูนิเซฟจะไม่สามารถสำเร็จได้ หากปราศจากความเอื้อเฟื้อจากพันธมิตรภาคธุรกิจ ยูนิเซฟได้รับการสนับสนุนทั้งได้ด้านอาสาสมัครและการบริจาคจากพันธมิตรองค์กรจากหลากหลายอุตสาหกรรม เพื่อสรรสร้างประโยชน์ในทุกมุมโลก</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <a href="#"><img class="card-img-top" src="https://www.unicef.org/thailand/sites/unicef.org.thailand/files/styles/hero_desktop/public/UN0161358.JPG?itok=p9RerXwj" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">การสนับสนุนงานของยูนิเซฟจากภาคธุรกิจมาร่วมเป็นพันธมิตรกับยูนิเซฟผ่านการบริจาค</a>
                        </h4>
                        <p class="card-text">งานต่างๆของยูนิเซฟจะไม่สามารถสำเร็จได้ หากปราศจากความเอื้อเฟื้อจากพันธมิตรภาคธุรกิจ ยูนิเซฟได้รับการสนับสนุนทั้งได้ด้านอาสาสมัครและการบริจาคจากพันธมิตรองค์กรจากหลากหลายอุตสาหกรรม เพื่อสรรสร้างประโยชน์ในทุกมุมโลก</p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <a href="#"><img class="card-img-top" src="https://www.unicef.org/thailand/sites/unicef.org.thailand/files/styles/hero_desktop/public/UN0161358.JPG?itok=p9RerXwj" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">การสนับสนุนงานของยูนิเซฟจากภาคธุรกิจมาร่วมเป็นพันธมิตรกับยูนิเซฟผ่านการบริจาค</a>
                        </h4>
                        <p class="card-text">งานต่างๆของยูนิเซฟจะไม่สามารถสำเร็จได้ หากปราศจากความเอื้อเฟื้อจากพันธมิตรภาคธุรกิจ ยูนิเซฟได้รับการสนับสนุนทั้งได้ด้านอาสาสมัครและการบริจาคจากพันธมิตรองค์กรจากหลากหลายอุตสาหกรรม เพื่อสรรสร้างประโยชน์ในทุกมุมโลก</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <?php include('../components/footer.php'); ?>
    </footer>

</body>



</html>