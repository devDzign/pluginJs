
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
               <div class="input-group">
                   <span class="input-group-addon">
                       <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                   </span>
                   <input type="text" class="form-control" id="recherche" name="recherche" >
               </div>
           </div>
           <div class="col-sm-12">
               <ul class="result dropdown-menu col-sm-12 result" id="result" >

               </ul>
           </div>
       </div>
    </div>

</div><!-- /.container -->


<script src="js/jquery-2.1.4.js"></script>
<script src="lib/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script src="js/recherche.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function () {
         $("#recherche").recherche();
    });
</script>


</body>
</html>
