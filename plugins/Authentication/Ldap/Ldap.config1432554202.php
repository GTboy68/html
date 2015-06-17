<?php
$conf['settings']['host'] = 'srv-ldap-001.alpaca.int';
$conf['settings']['port'] = '389';
$conf['settings']['version'] = '3';
$conf['settings']['starttls'] = 'true';
$conf['settings']['binddn'] = '';
$conf['settings']['bindpw'] = '';
$conf['settings']['basedn'] = 'ou=users,ou=DWAP,DC=alpaca,DC=int';
$conf['settings']['filter'] = '';
$conf['settings']['scope'] = '';
$conf['settings']['required.group'] = '';
$conf['settings']['database.auth.when.ldap.user.not.found'] = 'true';
$conf['settings']['ldap.debug.enabled'] = 'true';
$conf['settings']['attribute.mapping'] = 'cn=cn,sn=sn,givenName=givenName,mail=mail';
$conf['settings']['user.id.attribute'] = 'userPrincipalName';
?>