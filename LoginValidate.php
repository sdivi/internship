<?php
//session_start();
include 'connection.php';
//$postdata = file_get_contents("php://input");
$postdata = $_POST;
//$request = json_decode($postdata);

echo "<pre>";
//print_r($request);
print_r($postdata);

$email = $postdata["name"];
$password = $postdata["pwd"];

echo $email;
echo $password;
//echo json_encode($request);

$conn = dbconnection();
$qstr="select * from login where email='".$email."' and password='".$password."'";

echo $qstr;

$result = mysql_query($qstr);
$numrows = 0;
if($result)
	$numrows = mysql_num_rows($result);

echo $numrows;


if($numrows > 0){	

		//$_SESSION["userId"]=$email;
		
        session_start();
		
        $userId =$email ;
        //echo "Session echo  ".$_SESSION["userId"];
	   if(isset($_SESSION["userId"]))
	   {
		$userId = $_SESSION["userId"];
	   } 
	   else
		{
		$_SESSION["userId"] = $userId;
	    }
		
     	echo $_SESSION["userId"];
		
	    header("Location: Home.php");
	  //  echo "success";
	                          	
        exit;
}
else
	echo "Please enter valid details";
?>