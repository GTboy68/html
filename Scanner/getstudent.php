
<?php


//studnr opvragen uit tekstveld
if($_POST["studentenNr"])
{
$studnr = $_POST["studentenNr"];

//DB details 
$user_name = "root";
$password = "Aversus147";
$database = "bookedscheduler";
$hostname = "127.0.0.1";

$db_handle = mysql_connect($hostname, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

    
  if ($db_found) {
      
    //Proberen connectie te leggen met DB
    if (!$db_handle) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
    }
    //kijken of database aanspreekbaar is
    if (!mysql_select_db("bookedscheduler")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
    }  

//opvragen series_id

//$timeStart = date("H:i",strtotime($time));
//$newTestQuery = mysql_query("SELECT CONVERT(VARCHAR(9),RIGHT(start_date,9),108) FROM reservation_instances WHERE NOW() BETWEEN DATE(start_date) AND DATE(end_date) ");
//$row10 = mysql_fetch_row($newTestQuery);

//echo " UUR : " + $row10[0];
      
//$result = mysql_query( "select series_id from reservation_instances where DATE(start_date) = CURDATE()"); 


    
  $result = mysql_query( "select series_id from reservation_instances WHERE (TIME((NOW()-INTERVAL 2 HOUR  ))
BETWEEN TIME( start_date )
AND TIME( end_date)) and (DATE(start_date) = CURDATE())
 ");     
    
$row = mysql_fetch_row($result);
$sid= $row[0]; 

         
//opvragen userdetails
$email = $studnr ."@ap.be";
$result2 = mysql_query("SELECT fname,lname from users WHERE username = '$email'");
$row2 = mysql_fetch_row($result2);

//opvragen lokaal
 $result3 = mysql_query("SELECT i.resource_id, i.name FROM `reservation_resources` AS q LEFT JOIN `resources` AS i ON ( i.resource_id = q.resource_id ) where q.series_id = '$sid]'");     
$row3 = mysql_fetch_row($result3);

  
      
//opvragen examentijd  
$SQL5 = "SELECT * from reservation_instances where series_id = '$sid'";
$rs5 = mysql_query($SQL5);
	while($row5 = mysql_fetch_array($rs5)) {
$dt = $row5['start_date'];
$dt2 = $row5['end_date'];
$begin = date("Y-m-d H:i:s", strtotime("$dt + 2 hours"));
$einde = date("Y-m-d H:i:s", strtotime("$dt2 + 2 hours"));
$timeStart = date('H:i',strtotime($begin));
$timeStop = date('H:i',strtotime($einde));
	}


//echo $timeStart . " & " . $row5[0] . $timeStartOK . "  " . $datum ;
        
        
      //opvragen vakdetails
$result6 = mysql_query("SELECT name from groups WHERE group_id = (SELECT group_id FROM user_groups WHERE user_id = ( SELECT MAX( user_id ) FROM reservation_users WHERE reservation_instance_id = '$sid' ))");
$row6= mysql_fetch_row($result6);

//waarden gelijkstellen
$splitstring = explode("-",$row6[0]);
$voornaam = $row2[0];
$achternaam = $row2[1];
$lokaal = $row3[1];
$groepnaam = $splitstring[0];
$vak = $splitstring[1];
 
      
//weergeven naam en voornaam
      if($row2){
echo " " . $voornaam . " " . $achternaam . "<br/>"
     ;
      
      }
      
	  //kijken docent of student
      $start = 0;
      $length = 1;
      $a = substr ($studnr, 0 , 1);
      
      if($a == "s"){
      
      echo "<div style ='font:11px/21px tahoma,sans-serif;color:#121212'>Student, $email </div>";
      }
      if($a == "p"){
      
      echo "<div style ='font:11px/21px tahoma,sans-serif;color:#121212'>Docent, $email </div>";
      }

      
//opvragen lokaal      
echo "<br/>"."lokaal : " . $lokaal ;
      if(!$lokaal){
      echo "n.v.t" ;
      
      } 
      
//opvragen vak
      
      
echo  "<br/>"."<br/>"."Vak: " . $vak ;
      if(!$vak){
      echo "n.v.t";
      
      }
//opvragen examentijd
        
              
              
echo "<br/>"."<br/>Tijdstip : " .$timeStart . " - " . $timeStop . "<br/>"."<br/>";
              
        
//opvragen groepsnaam
echo "Groep: " . $groepnaam;
    //. " volledig : " . $row5[0] . $time
    
}
    if (mysql_num_rows($result) == 0) {
    echo " Geen rijen gevonden, probeer het later nog eens";
    exit;
}
     if (mysql_num_rows($result2) == 0) {
    echo " geen naam,voornaam gevonden";
    exit;
} 
        mysql_close($dbhandle);
}
    
    
    
    
    
    
    
    
    
    
    
    


























    
    
// hakuna matata ! : https://plus.google.com/u/0/105461583459058519497/posts/ZuSuinzNRcK?pid=6149562480394309970&oid=105461583459058519497



  /*
$result= mysql_query($SQL1);
    while($row1 = mysql_fetch_array($rs1)){
    
    
    }
    
    
  ----  
    
$rs1 = mysql_query($SQL1);
	while($row1 = mysql_fetch_array($rs1)) {

$hoi = $row1['name'];

    */







    /*Query
$Query = "SELECT users.fname,users.lname,groups.name,resources.name,reservation_instances.start_date,reservation_instances.end_date from users,groups,resources,reservation_instances
Where 


"*/
    
    /*oude query's
    
$result = mysql_query( "SELECT naam,voornaam FROM student where studentenNr= '$studnr'
"); 
    
$row = mysql_fetch_row($result);
    */
//user_id --> vak_id --> series_id
 /*
$studnr = htmlspecialchars($_POST['studentenNr']);

if(isset($studnr)){
    $username = "root";
    $password = "Aversus147";
    $hostname = "localhost"; 
    $database = "Student";

    $db = new PDO("mysql:dbname=" . $database . ";host=" .$hostname, $username, $password);



    mysql_connect("localhost", "root", "Aversus147") or die("Connection Failed");
     mysql_select_db("Student")or die("Connection Failed");
     

     $studnr = $_POST['studentenNr']; $query = "select * from Student where studentenNr = '$studnr'";
       $result = mysql_query($query); while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
        { echo $line['naam']; echo $line['studentenNr']; echo "<br>\n"; }


Old sql statements

  $sql = $db->prepare("select * from student where studentenNr=:studnr");
    $sql->execute(array(":studnr" => $studnr));
http://193.191.187.253:8054/
*/
/*
$sql = $db->prepare("select*from student");
$sql->execute($arraytest = array(':studnr' => studentenNr,naam );)

  
    //$sql->execute(array(":studentenNr" => $studnr));

    $data = $sql->fetchAll();

    foreach($item as $data){
        print($item["naam"]);
        log($item["naam"]);
    }

    $db->close();
}]


//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("Student",$dbhandle) 
  or die("Could not select examples");

//execute the SQL query and return records
$result = mysql_query("SELECT studentenNr, vak FROM student");

//fetch tha data from the database 
while ($row = mysql_fetch_array($result)) {
   echo "studentenNr:".$row{'studentenNr'}." vak:".$row{'vak'} //display the results
   ."<br>";
}
//close the connection
mysql_close($dbhandle);*/
?>