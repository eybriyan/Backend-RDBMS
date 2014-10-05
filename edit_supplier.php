<html>
<head>
	<title>Edit Supplier Info</title>
</head>
<body>
<div>
	<?php
session_start();
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
	 			<div>
	 					<!--<p><strong>Client ID:</strong> <?php echo $supplier_id; ?></p>	-->
 							<strong>Client Name: *</strong> <input type="text" name="supplier_name" value="<?php echo $supplier_name; ?>"/>
 							<br/>
 							<strong>Contact Person: *</strong> <input type="text" name="supplier_contactperson" value="<?php echo $supplier_contactperson; ?>"/>
 							<br/>
 							<strong>Address: *</strong> <input type="text" name="supplier_address" value="<?php echo $supplier_address; ?>"/>
 							<br/>
	 						<p>* Required</p>
 							<input type="submit" name="submit_supplier" value="Save">
 							<input type= "submit" name = "canceleditsupplier" value = "Cancel">
 				</div>
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