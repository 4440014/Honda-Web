<?php
	

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	$user = $_POST["user"];
    $pass = $_POST["pass"];

    if ($user != '' && $pass != '') {
    	$servername = "localhost";
		$username = "root";
		$password = "";
		$mydb = "honda";

		$con = mysqli_connect($servername, $username, $password, $mydb);

	    $query = "SELECT username FROM users WHERE userName = '$user' AND userPass = '$pass'";

	    $result = mysqli_query($con,$query) or die ("Failed Query of " . $query);

	   	$finalresult = mysqli_fetch_row($result);

	   	if ($finalresult != "") {
	   		header("Location:dasboard.html");
	   	}
	   	else{

	   	}
	   	// echo "<pre>";
	   	// print_r($finalresult);
	    // while($row = mysql_fetch_assoc($result))
	    // {
	    //         $_SESSION["user"] = $username;
	    // }
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Honda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">Honda</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			            	<form method='post'>
				                <h6>Sign In</h6>
				                <input class="form-control" name="user" type="text" placeholder="User Name" required="">
				                <input class="form-control" name="pass" type="password" placeholder="Password" required="">
				                <div class="action">
				                    <input type="submit" value="Login" class="btn btn-primary signup">
				                </div>
				            </form>               
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>