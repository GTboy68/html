<?php
echo 'Dit is de teststring ge&euml;ncrypteerd:   ';
echo hash_hmac('ripemd160', 'Dit is de teststring ge&euml;ncrypteerd', 'secret');
?>

<a href="http://pastebin.com/aNMVKMiJ">hmac code</a>