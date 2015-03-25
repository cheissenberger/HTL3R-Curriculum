<!doctype html>
<html>
    <head>
		<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
		<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HTL3R-Curriculum</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>	    
        <div id="div_login_form">
			<div style="height:50px; border-bottom:1px solid #ededed; text-align:center; color:grey; font-size:30px;"><img style="margin-top:-10px;" src="pictures/Login_Safe.png" alt="Login-Symbol" height="28" width="28"><span style="margin-right:31px;">Login</span></div>
			<div style="margin-top:85px;">
				<table>
					<form method="post" action="login.php">
						<tr><td><label for="Name">Name</label><br /><input class="form-control" type="text" id="Name" name="name" size="50" autofocus required></td></tr>
						<tr><td><label for="passwort">Passwort</label><br /><input type="password" class="form-control" id="passwort" name="pw" size="50" autocomplete="off" required></td></tr>
						<tr><td><br /><input type="submit" value="Login" class="btn btn-default" style="width:420px;"></td></tr>
						<tr><td><a href="#">Passwort vergessen?</a></td></tr>
					</form>
				</table>
			</div>
			<div id="div_links_ikf" style="height:50px; border-top:1px solid #ededed; text-align:center; color:grey; padding:20px; margin-top:110px;"><a href="impressum.html">Impressum</a> - <a href="contact.html">Kontakt</a> - <a href="faq.html">FAQ</a></div>
		</div>
        
        <script src="js/main.js"></script>
    </body>
</html>