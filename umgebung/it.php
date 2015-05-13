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
		tr:hover {
			background-color:#fafafa;
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
                <a class="navbar-brand" href="index.php" style="color: white;">HTL3R-Curriculum</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Andy Bichl <b class="caret"></b></a>
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
                            <li class="active">
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
                    
                    <li>
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
            <div id="stundentafel">
                <h3>Informationstechnologie</h3><br>
                <table class="table">
				<thead>
				  <tr>
					<th>#</th>
					<th>Jahrgang &#8544;</th>
					<th>Jahrgang &#8545;</th>
					<th>Jahrgang &#8546;</th>
					<th>Jahrgang &#8547;</th>
					<th>Jahrgang &#8548;</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td class="non_center">Mathematik</td>
					<td><a href="editing.php">3</a></td>
					<td>4</td>
					<td>3</td>
					<td>4</td>
					<td>1</td>
				  </tr>
				  <tr>
					<td class="non_center">Deutsch</td>
					<td>4</td>
					<td>3</td>
					<td>7</td>
					<td>8</td>
					<td>1</td>
				  </tr>
				  <tr>
					<td class="non_center">Englisch</td>
					<td>7</td>
					<td>3</td>
					<td>3</td>
					<td>4</td>
					<td>1</td>
				  </tr>
				</tbody>
			  </table>
            </div>
                <!-- /.row -->
            <hr>
            <p>Ein Freifach hinzufügen:</p>
            <div class="input-group div_freifach">
                <form action="" method="get" id="freifach_form">
                    <input type="text" class="form-control" placeholder="Freifach" required name="freifach">
                    <input type="text" class="form-control" placeholder="Stundenanzahl" required name="stunde1">
                    <input type="text" class="form-control" placeholder="Stundenanzahl" required name="stunde2">
                    <input type="text" class="form-control" placeholder="Stundenanzahl" required name="stunde3">
                    <input type="text" class="form-control" placeholder="Stundenanzahl" required name="stunde4">
                    <input type="text" class="form-control" placeholder="Stundenanzahl" required name="stunde5">
                    <span class="input-group-btn">
                        <button class="btn btn-default but_haken" type="submit"><i class="glyphicon glyphicon-ok"></i></button>
                    </span>
                </form>
            </div>
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
            $('.but_haken').click(function(){
                var freifach = $(this).parent().parent().children().first().val();
                var stunde1 = $(this).parent().parent().children().eq(1).val();
                var stunde2 = $(this).parent().parent().children().eq(2).val();
                var stunde3 = $(this).parent().parent().children().eq(3).val();
                var stunde4 = $(this).parent().parent().children().eq(4).val();
                var stunde5 = $(this).parent().parent().children().eq(5).val(); 
                if(freifach.length > 0 && stunde1.length > 0 && stunde2.length > 0 && stunde3.length > 0 && stunde4.length > 0 && stunde5.length > 0){
                $('#stundentafel').children().children().last().append('<tr><td class="non_center">'+freifach+'</td><td>'+stunde1+'</td><td>'+stunde2+'</td><td>'+stunde3+'</td><td>'+stunde4+'</td><td>'+stunde5+'</td></tr>');        }
            });
            
        });
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
