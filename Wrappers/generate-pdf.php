<?php
require('mysql_table.php');


class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',18);
	
	$this->Ln(10);
	//Ensure table header is output
	parent::Header();
}
}

//Connect to database
mysql_connect('localhost','root','Aversus147');
mysql_select_db('bookedscheduler');

//declareren
$pdf=new PDF('Landscape','mm','A4'); 


$sql_query="SELECT series_id from reservation_instances`";
$res = mysql_query($sql_query);
$ids=array();
while($row = mysql_fetch_object($res)){
    $ids[]=$row->series_id;
}
$ids=array_filter($ids);
foreach($ids as $id){

$pdf->AddPage();
$pdf->Rect(148, 133,100, 15, 'D');


//opvragen academiejaar 

$SQL9 = "SELECT * from academiejaar WHERE jaar_id = 1";
	
$rs9 = mysql_query($SQL9);
	while($row9 = mysql_fetch_array($rs9)) {
		
$pdf->SetXY(150, 30);
$pdf->Write(0, 'Academiejaar: ' .$row9['acdmj'] );

	}

//opvragen van datum en starttijd van het examen  
$SQL = "SELECT start_date FROM `reservation_instances` WHERE series_id = $id";
$rs1 = mysql_query($SQL);
	while($row1 = mysql_fetch_array($rs1)) {
$dt = $row1['start_date'];
$datum = date("Y-m-d H:i:s", strtotime("$dt + 2 hours"));
//$date = date("jS F Y", strtotime($row1['start_date']));
$date = date('d-m-Y',strtotime($datum));
$time = date('H:i',strtotime($datum));

$pdf->SetXY(150, 50); 
$pdf->Write(0, 'Datum: '. $date );
$pdf->SetXY(150, 100); 
$pdf->Write(0, 'Uur: ' . $time);
	}

//opvragen van toezichter
$SQL2 = "SELECT i.accessory_id, i.accessory_name FROM `reservation_accessories` AS q LEFT JOIN `accessories` AS i ON ( i.accessory_id = q.accessory_id )WHERE q.series_id = $id";
	
$rs2 = mysql_query($SQL2);
	while($row2 = mysql_fetch_array($rs2)) {
		
$pdf->SetXY(150, 140);
$pdf->Write(0, 'Toezicht: ' .$row2['accessory_name'] );

	}
	
//opvragen van lokaalnaam
$SQL3 = "SELECT i.resource_id, i.name FROM `reservation_resources` AS q LEFT JOIN `resources` AS i ON ( i.resource_id = q.resource_id ) where q.series_id = $id";
	
$rs3 = mysql_query($SQL3);
	while($row3 = mysql_fetch_array($rs3)) {
		
$pdf->SetXY(150, 110);
$pdf->Write(0, 'Lokaal: ' .$row3['name'] );

	}
	
//opvragen van aantal
$SQL4 = mysql_query("SELECT COUNT(*) as count FROM reservation_users WHERE reservation_instance_id = $id");
$rs4 = mysql_fetch_object($SQL4);
$count = $rs4->count;

$pdf->SetXY(150, 120);
$pdf->Write(0, 'Aantal: ' .  $count);


//opvragen klas en vak 
$SQL5 = "SELECT name from groups WHERE group_id = (SELECT group_id FROM user_groups WHERE user_id = ( SELECT MAX( user_id ) FROM reservation_users WHERE reservation_instance_id = $id ))";
	
$rs5 = mysql_query($SQL5);
	while($row5 = mysql_fetch_array($rs5)) {

$splitstring = explode("-",$row5['name']);

$pdf->SetXY(150, 60);
$pdf->Write(0, 'Klas: ' .$splitstring[0] );

$pdf->SetXY(150, 75); 
$pdf->Write(0, 'Vak: ' . $splitstring[1]);

	}
		
$SQL6 = "SELECT abv from professors where group_id=(SELECT group_id FROM user_groups WHERE user_id = ( SELECT MAX( user_id ) FROM reservation_users WHERE reservation_instance_id = $id ))"; 

$rs6 = mysql_query($SQL6);
while($row6 = mysql_fetch_array($rs6)) {
$afkorting = strtoupper($row6['abv']);
$pdf->SetXY(150, 85); 
$pdf->Write(0, 'Vaklector: ' . $afkorting);

}
}


$pdf->Output("voorlopig.pdf",'I'); 

?>
