<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HTL3R-Curriculum</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .top-nav>li>a {
            color:white;   
        }
    </style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="color: white;">HTL3R-Curriculum</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Einstellungen</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i>  Ausloggen</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="glyphicon glyphicon-education"></i> Ausbildungszweige <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="it.php">Informationstechnologie</a>
                            </li>
                            <li>
                                <a href="#">Mechatronik</a>
                            </li> 
                            <li>
                                <a href="#">Fachschule</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="lehrplaene.php"><i class="glyphicon glyphicon-book"></i> Lehrpläne</a>
                    </li>
                    
                    <li class="active">
                        <a href="profil.php"><i class="fa fa-fw fa-user"></i>Profil</a>
                    </li>
                    
                    <li>
                        <a href="faq.php"><i class="glyphicon glyphicon-question-sign"></i> FAQ</a>
                    </li>
                    <li>
                        <a href="impressum.php"><i class="glyphicon glyphicon-list-alt"></i> Impressum</a>
                    </li>
      
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                <h3>Profileinstellungen</h3><br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Andi Bichl" style="width:300px;" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="lalla@aon.at" style="width:300px;" disabled>
                </div>
                <hr>
                <h3>Favoriten</h3><br>
                <div class="panel panel-default div_favoriten">
                    <div class="panel-body">
                        <div style="float:left; padding-top:4px">Favorit 1</div>
                        <div class="fa fa-minus-circle fa-2x icon_favoriten" style="float:right;"></div>
                    </div>
                </div>
                <div class="panel panel-default div_favoriten">             
                    <div class="panel-body">
                        <div style="float:left; padding-top:4px">Favorit 2</div>
                        <div class="fa fa-minus-circle fa-2x icon_favoriten" style="float:right"></div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script>
    $(document).ready(function(){
        $('.icon_favoriten').click(function(){
    });
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

	<!--Favortien-->
	<script src="js/favoriten.js"></script>	
		
</body>

</html>
