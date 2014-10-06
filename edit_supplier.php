<?php session_start(); ob_start();?>
<html>
<head>
	<title>Edit Supplier Information</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<style type="text/css">
.Header1{
	font-size: 22px;
	font-weight: bold;
}

.int1{
   border: 5px solid gray; 
   border-radius: 20px;
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(200,200,200,200.1); 
    padding: 15px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
   width: 50%;
}
.int2	
{
   border: 5px solid gray; 
   border-radius: 20px;
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(200,200,200,200.1); 
    padding: 15px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
    width:50%;
}
.int3{
   border: 5px solid gray; 
   border-radius: 20px;
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(200,200,200,200.1); 
    padding: 15px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
    width:90%;
}

p{
   font-color: black;
   font-size: 20px;
   font-family: Verdana;
   font-style: italic;
}

p.prov{
	font-size:22px;
	font-style: italic;
}

.tab1{
	margin:0px;padding:0px;
	width:45%;
	border-radius: 20px;
	border:5px solid gray;
	-moz-border-radius-bottomleft:15px;
	-webkit-border-bottom-left-radius:15px;
	border-bottom-left-radius:15px;
	
	-moz-border-radius-bottomright:15px;
	-webkit-border-bottom-right-radius:15px;
	border-bottom-right-radius:15px;
	
	-moz-border-radius-topright:15px;
	-webkit-border-top-right-radius:15px;
	border-top-right-radius:15px;
	
	-moz-border-radius-topleft:15px;
	-webkit-border-top-left-radius:15px;
	border-top-left-radius:15px;
}

.tab1 table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:20%;
	margin:0px;padding:0px;
}.tab1 tr:last-child td:last-child {
	-moz-border-radius-bottomright:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px;
}
.tab1 table tr:first-child td:first-child {
	-moz-border-radius-topleft:3px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
}
.tab1 table tr:first-child td:last-child {
	-moz-border-radius-topright:3px;
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
}.tab1 tr:last-child td:first-child{
	-moz-border-radius-bottomleft:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px;
}.tab1 tr:hover td{
	background-color:#e5e5e5;
		

}
.tab1 td{
	vertical-align:middle;
		background:-o-linear-gradient(bottom, #ffffff 5%, #e5e5e5 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #e5e5e5) ); 
	background:-moz-linear-gradient( center top, #ffffff 5%, #e5e5e5 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffff", endColorstr="#e5e5e5");	background: -o-linear-gradient(top,#ffffff,e5e5e5);

	background-color:#ffffff;

	border:1px solid #ffffff;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:10px;
	font-size:15px;
	font-family:Arial;
	font-weight:bold;
	color:#000000;
}.tab1 tr:last-child td{
	border-width:0px 1px 0px 0px;
}.tab1 tr td:last-child{
	border-width:0px 0px 1px 0px;
}.tab1 tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.tab1 tr:first-child td{
		background:-o-linear-gradient(bottom, #cccccc 5%, #b2b2b2 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #cccccc), color-stop(1, #b2b2b2) );
	background:-moz-linear-gradient( center top, #cccccc 5%, #b2b2b2 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#cccccc", endColorstr="#b2b2b2");	background: -o-linear-gradient(top,#cccccc,b2b2b2);

	background-color:#cccccc;
	border:0px solid #ffffff;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:20px;
	font-family:Arial;
	font-weight:bold;
	color:#000000;
}
.tab1 tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #cccccc 5%, #b2b2b2 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #cccccc), color-stop(1, #b2b2b2) );
	background:-moz-linear-gradient( center top, #cccccc 5%, #b2b2b2 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#cccccc", endColorstr="#b2b2b2");	background: -o-linear-gradient(top,#cccccc,b2b2b2);

	background-color:#cccccc;
}
.tab1 tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.tab1 tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}

.myButton:active {
	position:relative;
	top:1px;
}


.myButton1 {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9));
	background:-moz-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-webkit-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-o-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-ms-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9',GradientType=0);
	background-color:#f9f9f9;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:2px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:10px 48px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
	margin-right: 30px;
	margin-left: 30px;
}
.myButton1:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9));
	background:-moz-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-webkit-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-o-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-ms-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:linear-gradient(to bottom, #e9e9e9 5%, #f9f9f9 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9',GradientType=0);
	background-color:#e9e9e9;
}


	</style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="Homepage.php" class=''>Home</a></li>
            </ul>

          <div type="button" class="btn btn-primary navbar-btn navbar-right"> <a href="logout.php">Logout</a></div>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<div>
<div>
	<?php
if(isset($_SESSION['username'])){
 	function renderForm($supplier_id, $supplier_name, $supplier_contactperson, $supplier_address, $error)
 	{
 		?>
		 <?php 
 			if ($error != '')
 				{
 					echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 		}
 		?> 
 
 		<form action="" method="post">
	 		<input type="hidden" name="supplier_id" value="<?php echo $supplier_id; ?>"/>
	 			<center>
	 			<div class="tab1">
	 				<table>
	 				<p class="Header1"> Edit Supplier Information </p>
	 				<hr>
	 					<!--<p><strong>Client ID:</strong> <?php echo $supplier_id; ?></p>	-->
 							<p>Supplier Name:</p> <input class="int1" type="text" name="supplier_name" value="<?php echo $supplier_name; ?>" placeholder ="Company Name" /><br/>
 							<p>Contact Person:</p> <input class="int2" type="text" name="supplier_contactperson" value="<?php echo $supplier_contactperson; ?>" placeholder = "Contact "/><br/>
 							<p>Address:</p> <input class="int3" type="text" name="supplier_address" value="<?php echo $supplier_address; ?>" placeholder ="Supplier Address"/><br/><br/>
 							<input type="submit" name="submit_supplier" value="Save" class="mybutton1">
 							<input type= "submit" name = "canceleditsupplier" value = "Cancel" class="mybutton1">
 					</table>
 					<br/><br/>
 				</div>
 				</center>
 		</form>  

 <?php
 }
 
 include'home.php';
 connect(); 
 	if (isset($_POST['submit_supplier']))
 			{ 
 	if (is_numeric($_POST['supplier_id']))
 			{
 					$supplier_id = $_POST['supplier_id'];
 					$supplier_name = mysql_real_escape_string($_POST['supplier_name']);
 					$supplier_contactperson = mysql_real_escape_string($_POST['supplier_contactperson']);
 					$supplier_address = mysql_real_escape_string($_POST['supplier_address']);
 				if ($supplier_name == '' || $supplier_contactperson == '' || $supplier_address == '')
 						{
							$error = 'ERROR: Please fill in all required fields!';
							 renderForm($supplier_id, $supplier_name, $supplier_contactperson,$supplier_address, $error);
 						}
 				else
 						{
							 mysql_query("UPDATE tbl_supplier SET supplier_name='$supplier_name', 
							 	supplier_contactperson='$supplier_contactperson', 
							 	supplier_address = '$supplier_address' 
							 	WHERE supplier_id='$supplier_id'")
								 or die(mysql_error()); 
 							header ("Location: Homepage.php"); 
						 }
 			}
 	else
 			{
 				echo 'Error1!';
			 }
			 }
	else if (isset($_POST['canceleditsupplier']))
	{

		header("Location: Homepage.php");
	}
 	else
 			{
				 if (isset($_POST['submitfromhome']) && isset($_GET['supplier_id']) && is_numeric($_GET['supplier_id']) && $_GET['supplier_id'] >0)
 			{	
 				$supplier_id = $_GET['supplier_id'];
 				$result = mysql_query("SELECT * FROM tbl_supplier WHERE supplier_id = '$supplier_id'")
 				or die(mysql_error()); 
 				$row = mysql_fetch_array($result);
 					if($supplier_id == $row['supplier_id'])
 							{
 								$supplier_id = $row['supplier_id'];
 								$supplier_name = $row['supplier_name'];
 								$supplier_contactperson = $row['supplier_contactperson'];
 								$supplier_address = $row['supplier_address'];
 								renderForm($supplier_id, $supplier_name, $supplier_contactperson, $supplier_address, '');
 							}
 					else
 							{
 								echo "No results!";
 							}
 			}
 					else
 						{
 								echo 'Error2!';
							}
 			}
 		}

 		else {
		echo file_get_contents("index.php");
		echo "<div style = 'font-size:24'>Please Log-IN</div>";
	}
?>
</div>
</body>
</html>