<?php
echo "<h3>LDAP query Test</h3>";
echo "Verbindung ...";

$ldaprdn  = htmlspecialchars($_POST["name"]).'@htlw3r.ac.at';//cn=user, cn=Users, dc=HTLW3R, dc=ac, dc=at';
$ldappass = htmlspecialchars($_POST["pw"]);  // entsprechendes password

// verbinden zum ldap server
$ldapconn = ldap_connect("ldap://10.0.0.210/")/*ldap://10.0.0.210/*/
    or die("Keine Verbindung zum LDAP server möglich.");
    
// Todo catch errors and handle them appropriately

if ($ldapconn) {

    // binden zum ldap server
    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

    // Bindung überpfrüfen
    if ($ldapbind) {
	    
        echo "LDAP bind erfolgreich...<br/>";
        
        /*echo "Suche nach (sn=S*) ...";
	    // Suchen des Nachnamen-Eintrags
	    $sr=ldap_search($ldapconn,"dc=ac,dc=at", "(sn=*)");
	    echo "Ergebnis der Suche ".$sr."<br />";
	
	    echo "Anzahl gefundenen Einträge ".ldap_count_entries($ldapconn,$sr)."<br />";
	
	    echo "Einträge holen ...<br />";
	    $info = ldap_get_entries($ldapconn, $sr);
	    echo "Daten für ".$info["count"]." Items gefunden:<br />";
	
	    for ($i=0; $i<$info["count"]; $i++) {
	        echo "dn ist: ". $info[$i]["dn"] ."<br />";
	        echo "erster cn Eintrag: ". $info[$i]["cn"][0] ."<br />";
	        echo "erster email Eintrag: ". $info[$i]["mail"][0] ."<br /><hr />";
	    }
        
        
        $sr=ldap_search($ldapconn,"*", "");
		echo "Ergebnis der Suche ".$sr."<br />";
		echo ldap_next_entry($ldapconn, $sr);*/
		echo "Verbindung schließen";
		ldap_close($ldapconn);
		
    } else {
        echo "LDAP bind fehlgeschlagen...";
    }
        
}
   

?>