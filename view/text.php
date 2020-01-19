<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php include('../shared/style.php'); ?>
</head>
<!-- card style-->
<style>
    .card {
        margin: 0 auto;
        /* Added */
        float: none;
        /* Added */
        margin-top: 200px;
        /* Added */
        margin-right: 10px;
    }
</style>

<body>
    <?php include('../shared/header-user.php'); ?>
    <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>

    <div class="container ml-auto">
        <div class="col-mr-6">
            <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>

                    <div class="share-group">
                        <h3 class="title">แชร์ให้พื่อน</h3>
                        <ul class="share-list">
                            <!--<li class="item"><a class="mail link" href="#"><span class="icon-mail"><span class="hide-txt">email</span></span></a></li>-->
                            <li class="item"><a class="facebook link" href="#" target="_blank" aria-label="Share on Facebook" id="top-share-facebook"><span class="icon-facebook"><span class="hide-txt">facebook</span></span></a></li>
                            <li class="item"><a class="twitter link" href="#"><span class="icon-twitter"><span class="hide-txt">twitter</span></span></a></li>
                            <li class="item"><a class="line link js-share-line" href="#"><span class="icon-line"><span class="hide-txt">line</span></span></a></li>
                        </ul>
                    </div>

                </div> <!-- fund-raising -->
            </div>
        </div>
    </div>
    <hr>
    <?php include('../shared/footer.php'); ?>
    <?php include('../shared/script.php'); ?>
</body>

</html>