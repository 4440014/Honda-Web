<?php
	$servername = "localhost"; 
	$username = "root";
	$password = "";
	$mydb = "honda";

	$con = mysqli_connect($servername, $username, $password, $mydb);

	$query = "SELECT * FROM `tblproducts`";

	$result = mysqli_query($con,$query) or die ("Failed Query of " . $query);

	while ($row = mysqli_fetch_assoc($result)){
		$mydata[] = $row;
	} 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$myid = $_POST["myid"];
		$name = $_POST["name"];
		$price = $_POST["price"];
		$code = $_POST["code"];
		$stock = $_POST["stock"];
		$discount = $_POST["discount"];
		$size = $_POST["size"];
		$detail = $_POST["detail"];

		$con = mysqli_connect($servername, $username, $password, $mydb);

		// check if file already exit in "images" folder.
		if (file_exists("images/" . $_FILES["file"]["name"]))
		{
				$query = "UPDATE `tblproducts` SET `productName`= '".$name."',`productPrice`='".$price."',`productCode`='".$code."',`productStock`='".$stock."',`productDiscount`='".$discount."',`productSize`= '".$size."',`productDetail`='".$detail."' WHERE `productId` = ".$myid." ";
				$myresult = mysqli_query($con,$query) or die ("Failed Query of " . $query);
				header("Refresh:0");
		}
		else
		{  //move_uploaded_file function will upload your image.  if you want to resize image before uploading see this link http://b2atutorials.blogspot.com/2013/06/how-to-upload-and-resize-image-for.html
				if(move_uploaded_file($_FILES["file"]["tmp_name"],"images/" . $_FILES["file"]["name"]))
				{
				// If file has uploaded successfully, store its name in data base
						$query = "UPDATE `tblproducts` SET `productName`= '".$name."', `productpic`= '".$_FILES['file']['name']."', `productPrice`='".$price."',`productCode`='".$code."',`productStock`='".$stock."',`productDiscount`='".$discount."',`productSize`= '".$size."',`productDetail`='".$detail."' WHERE `productId` = ".$myid." ";
						$myresult = mysqli_query($con,$query) or die ("Failed Query of " . $query);
						header("Refresh:0");
				}
		}
	}


?>
<script type="text/javascript">
	
	function jsfunction(){

		var obj = <?php echo json_encode($mydata); ?>;
		// obj = json_decode(obj)
	    var myform = document.getElementById("myform").style.display = "block"; 
	    var e = document.getElementById("myselect");
		var strUser = e.options[e.selectedIndex].value;
		obj.forEach(function(entry) {
			if (entry.productId == strUser) {
				$("#myid").val(entry.productId);
				$("#output").attr("src", "images/"+entry.productpic);
				$('#name').val(entry.productName);
				$('#price').val(entry.productPrice);
				$('#code').val(entry.productCode);
				$('#stock').val(entry.productStock);
				$('#discount').val(entry.productDiscount);
				$('#size').val(entry.productSize);
				$('#detail').val(entry.productDetail);
				console.log(entry);
			}
		});
	}
</script>



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
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Update Product <b class="caret"></b></a>
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
<!--                          <a href="#">
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
					            <div class="panel-title"><b>Update Product</b></div>
					            <div style="float: right;">
					            	<select id="myselect" onChange="jsfunction()">
									    <option selected="selected">Select Product</option>
									    <?php foreach ($mydata as $key => $value)
									    { ?>
									    <option value="<?=$value['productId']?>"><?=$value['productName']?></option>
									    <?php } ?>
									</select>
								</div>
					        </div>
			  				<div class="panel-body">
			  					<form id="myform" style="display: none;" method='post' class="form-horizontal" role="form" enctype="multipart/form-data">
			  					  <div class="form-group">
										<input type="hidden" id="myid" name="myid">
								    <label for="inputEmail3" class="col-sm-2 control-label">Picture:</label>
								    <div class="col-sm-10">
								      	<input type="file" name="file" id="file" onchange="loadFile(event)"/> 
								        <img id="output" height="150px" width="150px" />
            					    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
								    <div class="col-sm-10">
								      <input id="name" type="text" name="name" class="form-control" placeholder="Enter Name" required="">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Price</label>
								    <div class="col-sm-10">
								      <input id="price" type="text" name="price" class="form-control" placeholder="Enter Price" required="">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Code</label>
								    <div class="col-sm-10">
								      <input id="code" type="text" name="code" class="form-control" placeholder="Enter Code" required="">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Stock</label>
								    <div class="col-sm-10">
								      <input id="stock" type="text" name="stock" class="form-control" placeholder="Enter Stock" required="">
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Discount</label>
								    <div class="col-sm-10">
								      <input id="discount" type="text" name="discount" class="form-control" placeholder="Enter Discount" >
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-2 control-label">Size</label>
								    <div class="col-sm-10">
								      <input id="size" type="text" name="size" class="form-control" placeholder="Enter Size">
								    </div>
								  </div>
								  <div class="form-group">
								    <label class="col-sm-2 control-label">Detail</label>
								    <div class="col-sm-10">
								      <textarea id="detail" class="form-control" name="detail" placeholder="Enter Detail" rows="3"></textarea>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary">Save</button>
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
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


<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>