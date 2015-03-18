<?php
	session_start();
	$ldaprdn  = htmlspecialchars($_POST["name"]).'@htlw3r.ac.at';//cn=user, cn=Users, dc=HTLW3R, dc=ac, dc=at';
	$ldappass = htmlspecialchars($_POST["pw"]);  // entsprechendes password

// verbinden zum ldap server
	$ldapconn = ldap_connect("ldap://10.0.0.210/") or die("Keine Verbindung zum LDAP server möglich.");
	    
	// Todo catch errors and handle them appropriately
	if ($ldapconn) {
	
	    // binden zum ldap server
	    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);
	
	    // Bindung überpfrüfen
	    if ($ldapbind) {
		    $_SESSION['user'] = htmlspecialchars($_POST["name"]);
		    ldap_close($ldapconn);
			header("Location: dash.php");
			
	    } else {
	        session_unset();
			session_destroy();
	        header("Location: index.html");
	    }
	        
	}
	   
	
?>