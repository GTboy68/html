<?php
$conf['settings']['domain.controllers'] = 'srv-ldap-001.alpaca.int';
$conf['settings']['port'] = '389';
$conf['settings']['username'] = 'sa_ldap_ti_01@ap.be';
$conf['settings']['password'] = 'DlfN55b8yf6O8IJRDjIn';
$conf['settings']['basedn'] = 'ou=users,ou=DWAP,DC=alpaca,DC=int';
$conf['settings']['version'] = '3';
$conf['settings']['use.ssl'] = 'false';
$conf['settings']['account.suffix'] = '@alpaca.int';
$conf['settings']['database.auth.when.ldap.user.not.found'] = 'false';
$conf['settings']['attribute.mapping'] = 'sn=sn,givenname=givenname,mail=mail,telephonenumber=telephonenumber,physicaldeliveryofficename=physicaldeliveryofficename,title=title';
?>