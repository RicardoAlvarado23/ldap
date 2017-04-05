<?php
	#https://gist.github.com/theredstapler/f440d9cf19c03094e6627cfca6aa1d8a
	$ldap_dn = "cn=read-only-admin,dc=example,dc=com";
	$ldap_pw = "password";
	$ldap_conn = ldap_connect("ldap.forumsys.com");
	echo "La conexion es: " . $ldap_conn . " <br/>";
	ldap_set_option($ldap_conn,LDAP_OPT_PROTOCOL_VERSION,3);
	if(ldap_bind($ldap_conn,$ldap_dn , $ldap_pw)){
		$filter = "(uid=*)";
		$result = ldap_search($ldap_conn, "dc=example,dc=com", $filter) or exit("Unable to search");
		$entries = ldap_get_entries($ldap_conn, $result);
		
		print "<pre>";
		print_r ($entries);
		print "</pre>";
	}else{
		echo "Error de conexion";
	}
?>