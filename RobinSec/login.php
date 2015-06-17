<?php
session_start();
?>
<html>
 <body>
<?php
if (isset($_SESSION["user"])) {
    echo "<p>Welkkom terug, " . $_SESSION["user"] . "!<br>";
    echo '<a href="logging.php?action=logout">Logout</a></p>';
	echo '<a href="xsrf.html">Ik wil een voorbeeld bekijken van xsrf</a>';
}
else {
?>
  <form action="logging.php?action=login" method="post">
   <p>De gebruikersnaam is: robin</p>
   <input type="text" name="user" size="20">
   <p>Het wachtwoord is: wonderboy</p>
   <input type="password" name="pass" size="20">
   <input type="submit" value="Login">
  </form>
<?php
}
?>
 </body>
</html>

<a href="http://pastebin.com/TJQr3vzg">xrsf login.php</a>
<a href="http://pastebin.com/iZvq6FPC">xrsf xsrf.html</a>
<a href="http://pastebin.com/aKAATU7k">xrsf logging.php</a>
