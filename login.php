<?php
	session_start();
	$ldaprdn  = htmlspecialchars($_POST["name"]).'@htlw3r.ac.at';
	$ldappass = htmlspecialchars($_POST["pw"]);
	$ldapconn = ldap_connect("ldap://10.0.0.210/") or die("Keine Verbindung zum Server möglich.");
	    
	// Todo: catch errors and handle them appropriately
	
	if ($ldapconn) {
	    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

	    if ($ldapbind) {
		    $result = ldap_search($ldapconn, "ou=Lehrer,dc=HTLW3R,dc=ac,dc=at", "(|(cn=".htmlspecialchars($_POST["name"])."))");
			    
		    foreach(ldap_get_entries($ldapconn, $result) as $val) {
			    if ($val == 0) {
				    session_unset();
					session_destroy();
				    die("Keine ausreichenden Rechte");
			    }
			    else if ($val == 1) {
				    $_SESSION['user'] = htmlspecialchars($_POST["name"]);
				    break;
			    }
		    }

		    ldap_close($ldapconn);		    
			header("Location: dash.php");
			
	    } else {
	        session_unset();
			session_destroy();
	        header("Location: index.html");
	    }
	        
	}
	   
	
?>