<?php

$ldap_server  = "srv-ldap-001.alpaca.int";
$ldap_base_dn = "ou=users,ou=DWAP,DC=alpaca,DC=int";
$ldap_user = "sa_ldap_ti_01@ap.be";
$ldap_pass = "DlfN55b8yf6O8IJRDjIn";
$ldap_auther_group = "GGS-S-DL-2014-15-MC-PBA-TI-Studenten";
$host = 'srv-ldap-001.alpaca.int';
$leden = 'Users';


function ldap_check_auth($userid, $password) {
	global $ldap_server, $ldap_base_dn, $ldap_auth_group;
	$ldap_conn = ldap_connect($ldap_server) or die('Could not connect to LDAP server.');
	if ($ldap_conn) {
		if (ldap_bind($ldap_conn, $userid, $password)) {
			$result = ldap_search($ldap_conn, $ldap_base_dn, "userPrincipalName=$userid");
			$attrs = ldap_get_attributes($ldap_conn, ldap_first_entry($ldap_conn, $result));
			$ldap_data = $attrs;
			echo "<table>";
			for ($i = 0; $i < $ldap_data["count"]; $i++) {
				$key = $ldap_data[$i];
				echo "<tr><td>" . $key . "<ul>";
				//echo "<tr><td>" . $key ."</td><td><ul>";
				$data = $ldap_data[$key];
				if ($key == "memberOf") {
					echo "<li>" . $data[0] . "</li>";
					for ($j = 0; $j < $data["count"]; $j++) {
						echo "<li>" . $data[$j] . "</li>";
					}
				}
				else {
					echo "<li>" . $data[0] . "</li>";
				}
				echo "</ul></td></tr>";
			}
			echo "</table>";
			ldap_unbind($ldap_conn);
			//return $attrs;
		}
		else {
			echo "not";
		}
	}
}

echo '-----------------------------------------------------------------------------------------------------';
function ldap_get_users($leden) {
	global $ldap_server, $ldap_base_dn, $ldap_auth_group;
	$ldap_conn = ldap_connect($ldap_server) or die('Could not connect to LDAP server.');
	if ($ldap_conn) {
		if (ldap_bind($ldap_conn, $userid, $password)) {
			$result = ldap_search($ldap_conn, $ldap_base_dn, "OU=$leden");
			$attrs = ldap_get_attributes($ldap_conn, ldap_first_entry($ldap_conn, $result));
			$ldap_data = $attrs;
			echo "<table>";
			for ($i = 0; $i < $ldap_data["count"]; $i++) {
				$key = $ldap_data[$i];
				echo "<tr><td>" . $key . "<ul>";
				//echo "<tr><td>" . $key ."</td><td><ul>";
				$data = $ldap_data[$key];

				echo "</ul></td></tr>";
			}
			echo "</table>";
			ldap_unbind($ldap_conn);
			//return $attrs;
		}
		else {
			echo "not";
		}
	}
}


include('login.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

		ldap_check_auth($_POST["user"], $_POST["pass"]);
		/*$ldap_data = ldap_get_user_data($_POST["user"], $_POST["pass"]);
		for ($i = 0; $i < $ldap_data["count"]; $i++) {
			$key = $ldap_data[$i];
			echo "<tr>";
			echo "<td>";
			echo $key;
			echo "</td>";
			echo "<td><ul>";
			$data = $ldap_data[$key];
			for ($j = 0; $j < $data["count"]; $j++) {
				echo "<li>";
				echo $data[$j];
				echo "</li>";
			}
			echo "</ul></td>";
			echo "</tr>";
		}*/

}
?>
