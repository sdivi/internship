<?php
session_start();
$session_id_val = '';
//echo "Session echo  ".$_SESSION["userId"];
	if(isset($_SESSION["userId"]))
	{
		$session_id_val = $_SESSION["userId"];
	} 

?> 
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/Login.css">
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/loginscript.js"></script>
		
		
		
	<div class="loginDiv">
	<h2>Login</h2>
	<form method="post" action="LoginValidate.php" class="form-horizontal" id="loginform">
	
	<div class="form-group" >
		<label for="name" class="col-md-4 control-label">Email Id</label>
		<div class="col-md-6">
			<input name="name" type="text" id="email" class="form-control" placeholder="UserName"  required />
		</div>
	</div>
	<div class="form-group">
		<label for="pwd" class="col-md-4 control-label">Password</label>
		<div class="col-md-6">
			<input name="pwd" type="password" id="pwd" class="form-control" placeholder="********" required/>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-md-offset-4 col-md-6">
			<button type="submit" class="btn btn-default" id="login">Login</button>
			<button type="reset" class="btn btn-default" >Reset</button>
		</div>
	</div>
	<input type="hidden" name="session_name" id="session_id" value="<?php echo $session_id_val;?>" />
	</form>
	</div>
	<div id="target">
	</div>

