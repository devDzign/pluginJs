<?php
/**
 * Created by PhpStorm.
 * User: mc
 * Date: 01/11/2015
 * Time: 11:34
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Plugin Recherche</title>
    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container recherche">
    <div class="row">
       <div class="col-sm-12 search">
           <div class="form-group has-success has-feedback">
               <label>Ici Filtre weezy:</label>
               <div class="input-group">
                   <span class="input-group-addon">
                       <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                   </span>
                   <input type="text" class="form-control" id="filtreCategory" name="recherche" >
               </div>
           </div>
           <div class="col-sm-12">

               <ul class="list-group" id="filtre">
                   <li class="list-group-item">
                       <a href="#">
                           <img src="img/php.jpg" style="vertical-align: middle;margin-right: 5px; height: 30px; width: 30px">
                           <span>PHP</span>
                       </a>
                   </li>
                   <li class="list-group-item">
                       <a href="#">
                           <img src="img/symfony.jpg" style="vertical-align: middle;margin-right: 5px; height: 30px; width: 30px">
                           <span>Jquery</span>
                       </a>
                   </li>
                   <li class="list-group-item">
                       <a href="#">
                           <img src="img/js.jpg" style="vertical-align: middle;margin-right: 5px; height: 30px; width: 30px">
                           <span>JavaScript</span>
                       </a>
                   </li>
                   <li class="list-group-item">
                       <a href="#">
                           <img src="img/jquery.jpg" style="vertical-align: middle;margin-right: 5px; height: 30px; width: 30px">
                           <span>Jquery</span>
                       </a>
                   </li>
                   <li class="list-group-item">
                       <a href="#">
                           <img src="jpgimg/java." style="vertical-align: middle;margin-right: 5px; height: 30px; width: 30px">
                           <span>Java</span>
                       </a>
                   </li>
                   <li class="list-group-item">
                       <a href="#">
                           <img src="img/ps.jpg" style="vertical-align: middle;margin-right: 5px; height: 30px; width: 30px">
                           <span>Photoshop</span>
                       </a>
                   </li>
                   <li class="list-group-item">
                       <a href="#">
                           <img src="img/cake.jpg" style="vertical-align: middle;margin-right: 5px; height: 30px; width: 30px">
                           <span>CakePhp</span>
                       </a>
                   </li>
                   <li class="list-group-item">
                       <a href="#">
                           <img src="img/html.jpg" style="vertical-align: middle;margin-right: 5px; height: 30px; width: 30px">
                           <span>HTML-CSS</span>
                       </a>
                   </li>

               </ul>
           </div>
       </div>
    </div>

</div><!-- /.container -->


<script src="js/jquery-2.1.4.js"></script>
<script src="lib/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script src="js/filtre.js"></script>

<script type="text/javascript">
//    jQuery(document).ready(function () {
//        $("#filtreCategory").wizzyFilter();
//    });
</script>


</body>
</html>
