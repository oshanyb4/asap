<?php 	//require_once 'etc/config.inc.php';
		//require_once 'etc/session.php';

// the default in the html link tag should be taken out and uncomment the echo
// echo $template; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Service Unit</title>
</head>
<body>

<div id="wrapper">

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/loadpage.js"></script>
<?php 
//check if the user is logged in
//if(logedin()){
	//if the user is logged in the display the front or the index page 
	//include ('templates/'.$template.'/top.php');
	//include ('templates/'.$template.'/body.php');
	include ('templates/bion/index.php');
	
	
//}else{
	// else redirect the user to the login page
	//header('location: login.php');
//}
?>

</div>
</body>
</html>