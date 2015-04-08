<?php
	session_start();

	if (!isset($_SESSION['user'])) {
		header("Location: index.html");
		exit(0);
	}
?>

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
        <div id="div_navigation_form">
			<h1><a href="dash.html">Curriculum</a><h1>
			<div style="border-bottom:1px solid #ededed"></div>
			<div class="div_links_navigation"><table><tr><td class="td_bilder"><img src="pictures/ausbildung.png" alt="Ausbilungszweig-Symbol" height="24" width="24"></td><td class="td_text_bilder">Ausbildungszweige</td></tr></table></div>
			<div class="div_links_navigation"><table><tr><td class="td_bilder"><img src="pictures/zweig.png" alt="Lehrplan-Symbol" height="24" width="24"></td><td class="td_text_bilder">Lehrpläne</td></tr></table></div>
			<div class="div_links_navigation"><table><tr><td class="td_bilder"><img src="pictures/profile.png" alt="Profil-Symbol" height="24" width="24"></td><td class="td_text_bilder">Profil</td></tr></table></div>
			<div style="border-bottom:1px solid #ededed"></div>
			<div class="div_links_navigation"><table><tr><td class="td_bilder"><img src="pictures/faq.png" alt="Ausbilungszweig-Symbol" height="24" width="24"></td><td class="td_text_bilder">FAQ</td></tr></table></div>
			<div class="div_links_navigation"><table><tr><td class="td_bilder"><img src="pictures/impressum.png" alt="Ausbilungszweig-Symbol" height="24" width="24"></td><td class="td_text_bilder"><a href="impressum.html">Impressum</a></td></tr></table></div>
			<div style="border-bottom:1px solid #ededed"></div>
			<div class="div_links_navigation"><table><tr><td class="td_bilder"><img src="pictures/logout.png" alt="Ausbilungszweig-Symbol" height="24" width="24"></td><td class="td_text_bilder">Logout</td></tr></table></div>
		</div>
		<div id="div_content_form"><div style="text-align:right; padding:30px; color:grey;">&copy; HTL3R-Curriculum</div></div>
      
        <script src="js/main.js"></script>
                  
    </body>
</html>