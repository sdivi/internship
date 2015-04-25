<?php

include 'connection.php';
$conn=dbconnection();

function internlist(){
 $qstr= "select * from internship_opp";
 echo $qstr;
 $result=mysql_query($qstr);
  return $result;
}

function appliedstatus($studentid){
	
	
	$qstr = "select * from placement where  student_id = '"+.$studentid.+"'" ;
	
	
}

?>