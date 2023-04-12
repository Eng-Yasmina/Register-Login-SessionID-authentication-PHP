<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>مطعم ياسمينا- الصفحة الرئيسية</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card text-center">
                        <div class="card-header">
                            <h4> <?php echo $_SESSION["name"]; ?> منور الدنيا يا </h4>
                        </div>
                        <div class="card-body">
                            <img src="https://lh3.googleusercontent.com/p/AF1QipNJkIAbjrPGaFO_9lH0bG0uqTyVOowCpzQcvhcC" class="img-fluid" alt="compo">
                            <h5 class="card-title mt-3">عرض الصحاب</h5>
                            <p class="card-text">المنيو_الجديد 🤩🤩 جربوا عرض الصحااب من عندنا... - مطعم كومبو</p>
                        </div>
                        <div class="card-footer text-muted">
                            <p>السعر: 150 جنيه</p>
                        </div>
                        <a href="logout.php" class="btn btn-primary">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>
