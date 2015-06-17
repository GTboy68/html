<?php
$conf['settings']['host'] = 'srv-ldap-001.alpaca.int';
$conf['settings']['port'] = '389';
$conf['settings']['version'] = '3';
$conf['settings']['starttls'] = 'false';
$conf['settings']['binddn'] = '';
$conf['settings']['bindpw'] = '';
$conf['settings']['basedn'] = 'ou=users,ou=DWAP,DC=alpaca,DC=int';
$conf['settings']['filter'] = '';
$conf['settings']['scope'] = '';
$conf['settings']['required.group'] = '';
$conf['settings']['database.auth.when.ldap.user.not.found'] = 'false';
$conf['settings']['ldap.debug.enabled'] = 'false';
$conf['settings']['attribute.mapping'] = 'sn=sn,givenname=givenname,mail=mail,telephonenumber=telephonenumber,physicaldeliveryofficename=physicaldeliveryofficename,title=title';
$conf['settings']['user.id.attribute'] = 'uid';
?>