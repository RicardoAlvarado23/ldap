<?php
	
	$ldap_dn = "cn=read-only-admin,dc=example,dc=com";
	$ldap_pw = "password";
	$ldap_conn = ldap_connect("ldap.forumsys.com");
	echo "La conexion es: " . $ldap_conn . " <br/>";
	ldap_set_option($ldap_conn,LDAP_OPT_PROTOCOL_VERSION,3);
	if(ldap_bind($ldap_conn,$ldap_dn , $ldap_pw)){
		echo "Se conecto";
	}else{
		echo "Error de conexion";
	}
?>