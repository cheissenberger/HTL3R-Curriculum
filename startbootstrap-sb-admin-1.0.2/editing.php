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

        .chooseweek{
            width: 100%;
            text-align: center;
            margin: 0 auto;
        }

        .chooseweek>a{
            margin: 30px;    
        }

        tr {
            cursor: pointer; cursor: hand;
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
            <h1>Mathe - Jahrgang 1</h1><br>
                
                <form name="edit_frm" action="editing.php" method="get">
                    
                    <select name="jahrgang_sel" class="form-control"  style="width: 180px; float:left; margin-right: 10px;" >
                        <option>
                            Jahrgang 1
                        </option>
                        <option>
                            Jahrgang 2
                        </option>
                    </select>
                    <select name="subject_sel" class="form-control" style="width: 180px; margin-right: 10px;" >
                        <option>
                            Naturwissenschaften
                        </option>
                        <option>
                            Mathe
                        </option>
                    </select>
                </form>
                <br>
            <h4>Schulwoche 21-30</h4>
                <br>
                
                
                
            <div id="lehrplaene_edit_lol" class="form-group">

                <table class="table">
                <thead>
                  <tr>
                    <th class="center">Woche</th>
                    <th>Description</th>
                    <th>Kompetenzbereich</th>
                    <th>Kalenderwoche</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Test</td>
                    <td>90</td>
                    <td>Drei</td> 
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>erferf erver</td>
                    <td>90</td>
                    <td>Drei</td>
                  </tr>
                    <tr style="border: 3px solid lightgreen">
                    <td>3</td>
                    <td>Sinuskurven for ervervre people</td>
                    <td>90</td>
                    <td>50</td>
                  </tr>
                    <tr>
                    <td>4</td>
                    <td>wefwef for dumb people</td>
                    <td>90</td>
                    <td>Drei</td>
                  </tr>
                                  <tr>
                    <td>5</td>
                    <td>Sinuskurven for dumb people</td>
                    <td>90</td>
                    <td>Drei</td>
                  </tr>
                                  <tr>
                    <td>6</td>
                    <td>Sinuskurven for dumb people</td>
                    <td>90</td>
                    <td>Drei</td>
                  </tr>
                                  <tr>
                    <td>7</td>
                    <td></td>
                    <td>90</td>
                    <td>Drei</td>
                  </tr>
                                  <tr>
                    <td>8</td>
                    <td>Sinuskurven for dumb people</td>
                    <td>90</td>
                    <td>Drei</td>
                  </tr>
                                  <tr>
                    <td>9</td>
                    <td>Sinuskurven for dumb people</td>
                    <td>90</td>
                    <td>Drei</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Sinuskurven for dumb people</td>
                    <td>90</td>
                    <td>Drei</td>
                  </tr>
                </tbody>
              </table>
              <div class="chooseweek"><br>
              <a href="#">1-10</a><a href="#">11-20</a><a href="#">21-30</a><a href="#">31-40</a>
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
    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            
            $("td").click(function() {
                
               
                $('.container-fluid').append('<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button><h4 class="modal-title" id="myModalLabel">Woche 2</h4></div><div class="modal-body"><h3>iwfowiejfiwjefoiwjefiowjefiowejfiowjfeoiwejfio</h3></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button><button type="button" class="btn btn-primary">Save changes</button></div></div></div></div>');
            
                $('#basicModal').modal(options);
                    var options = {
                        "backdrop" : "static"
                    }
                
               
            });
        });
        
        
    $('#basicModal').modal(options);
        var options = {
    "backdrop" : "static"
}
    </script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
