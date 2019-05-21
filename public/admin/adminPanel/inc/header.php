<?php include '../db_connect.php'?>
<?php include '../functions.php'?>
<?php include 'tools/jdf.php'?>
<?php if(!isset($_COOKIE["login"])){
    header("Location:login.php");
}
?>

<?php
/*$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}
*/?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>داشبورد </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="css/bootstrap.rtl.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/persianDatepicker-lightorang.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="css/layout2.css" rel="stylesheet" />
    <link href="css/sweetalert.css" rel="stylesheet" />
    <!--<link href="assets/plugins/flot/examples/examples.css" rel="stylesheet" />-->
    <script src="js/jquery.min.1.11.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/sweetalert.min.js"></script>
<!--    behzadi date picker-->
    <script src="js/persianDatepicker.js"></script>
    <script src="js/admin-custom.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END PAGE LEVEL  STYLES -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!--chart.js-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>

</head>