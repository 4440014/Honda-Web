<?php
	$servername = "localhost"; 
	$username = "root";
	$password = "";
	$mydb = "honda";

	$con = mysqli_connect($servername, $username, $password, $mydb);

	$query = "SELECT * FROM `tblproducts`";

	$result = mysqli_query($con,$query) or die ("Failed Query of " . $query);

	// $countrow = mysqli_fetch_row($result);
	// while ($row = mysqli_fetch_assoc($result)) {
	// 	echo "<pre>";
	// 	print_r($row);
	// 	echo "</pre>"; 
	// }

	if(isset($_POST['delete'])) {
			
	    $emp_id = $_POST['emp_id'];
	    
	    $query = "DELETE FROM `tblproducts` WHERE `productId` = $emp_id";

		$myresult = mysqli_query($con,$query) or die ("Failed Query of " . $query);
		header("Refresh:0");
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

    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


<!-- <script type="text/javascript">
function myFunction(id) {
    // alert("I am an alert box!"+id);
}
</script> --> 
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Honda</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <!-- <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span> -->
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Delete Products <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="dasboard.html"><i class="glyphicon glyphicon-home"></i> Menu</a></li>
                    <li><a href="products.php"><i class="glyphicon glyphicon-tasks"></i> Add Product</a></li>
                    <li><a href="deleteProduct.php"><i class="glyphicon glyphicon-tasks"></i> Delete Product</a></li>
                    <li><a href="updateProduct.php"><i class="glyphicon glyphicon-tasks"></i> Update Product</a></li>
                    <li class="submenu">
                         <!-- <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a> -->
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div style="height: auto;" class="content-box-large">
		  				<div class="content-box-large">
		  					<div class="panel-heading">
					            <div class="panel-title"><b>Products</b></div>
					        </div>
		  					<div class="panel-body">

		  						<?php

		  							while ($row = mysqli_fetch_assoc($result)) {

										?>
										<div class="form-group col-md-3">
											<form method = "post" action = "<?php $_PHP_SELF ?>">
												<input type="hidden" name="emp_id" value="<?=$row['productId']?>">
												<input type="submit" name="delete" value="Delete" class="btn">
											</form> 
										<!-- <button onclick="myFunction();return false">Click me</button> -->
											<!-- <button onclick="myFunction()" type="button" class="btn btn-danger" style=" left:220px;">Delete</button> -->
											<br/>
											<?php $a = $row['productpic']; 
											?>
											<img src="images/<?=$a?>" height="150px" width="150px"><br/><label><?=$row['productName']?></label>
										</div>
							<?php
									}

		  					?>
		  						
		  					</div>
			  				
			  			</div>
		  			</div>
		  		</div>
		  	</div>
		  </div>
		</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  </body>
</html>