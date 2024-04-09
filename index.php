<?php
session_start();
?>
<html>
<head>
    <title>.:: Sql Injection Sample ::.</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    
<!-- generate a responsive estructure with navbar and sidebar and footer -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include 'view/template/header.php'; ?>
        </div>
    </div>
    <div class="row">
        <?php include 'view/template/menu.php'; ?>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Content</div>
                <div class="panel-body
                ">
                    <?php
                    include 'view/routes.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php include 'view/template/footer.php'; ?>
        </div>
    </div>
</div>
</body>
</html>
