<html>
<head>
	<title>Add Supplier</title>
</head>
<body>
<div>
<?php
session_start();
if(isset($_SESSION['username'])){
function addForm($supplier_name, $supplier_contactperson, $supplier_address, $error)
{
?>
<?php 
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }

 ?>
 <form action = "" method = "post">
 	<div>
 		<strong>Add Supplier</strong><br/><br/>
 			<strong>Client Name: *</strong><input type = "text" name = "supplier_name" values = "<?php echo $supplier_name?>" placeholder = "Company Name"> <br/>
 			<strong>Contact Person: *</strong><input type = "text" name = "supplier_contactperson" value = "<?php echo $supplier_contactperson?>" placeholder = "Manager"> <br/>
 			<strong>Address: *</strong><input type= "text" name = "supplier_address" value = "<?php echo $supplier_address?>" placeholder= "Company Adress"> <br/>
 			<p>* Required</p>
 			<input type= "submit" name = "addsupplier" value = "Add">
 			<input type = "submit" name ="canceladdsupplier" value = "Cancel">
 	</div>
 </form>
<?php 
}
include'home.php';
 connect();
 if (isset($_POST['addsupplier']))
 {
 	$supplier_name = mysql_real_escape_string($_POST['supplier_name']);
 	$supplier_contactperson = mysql_real_escape_string($_POST['supplier_contactperson']);
 	$supplier_address = mysql_real_escape_string($_POST['supplier_address']);
 	if ($supplier_name == "" || $supplier_contactperson == "" || $supplier_address == "")
 	{
 		$error = "Error. Please Enter Require Fields";
 		addForm($supplier_name, $supplier_contactperson , $supplier_address, $error);
 	}
 	else 
 	{
 		mysql_query("INSERT INTO tbl_supplier SET supplier_name= '$supplier_name', 
 			supplier_contactperson = '$supplier_contactperson', 
 			supplier_address = '$supplier_address'")
 			or die(mysql_error());
 			//echo "success";
 			header("Location: Homepage.php");

 	}
 }
 else if (isset($_POST['canceladdsupplier']))
 {
 	header("Location: Homepage.php");
 }
else{
 addForm('','','', '');
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