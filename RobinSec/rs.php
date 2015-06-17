<?php
	echo "sinds php 4.7 is HTTP Response Splitting onmogelijk. Dit is een redirect voorbeeld voor scripts te injecteren.";
    header ("Location: " . $_GET['redirect']);
?>

<a href="http://pastebin.com/74bJJBDv">rs code</a>