<html>
<head>
	<title></title>
</head>
<body>
<div>
<?php
function addForm($client_name, $client_contactperson, $client_address, $error)
{
?>

	<?php if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }

 ?>
 <form action = "" method = "post">
 	<div>
 		<strong>Add Client</strong><br/>
 			<strong>Client Name: *</strong><input type = "text" name = "client_name" values = "<?php echo $client_name?>" placeholder = "Company Name"> <br/>
 			<strong>Contact Person: *</strong><input type = "text" name = "client_contactperson" value = "<?php echo $client_contactperson?>" placeholder= "Contact"> <br/>
 			<strong>Address: *</strong><input type= "text" name = "client_address" value = "<?php echo $client_address?>" placeholder = "Address"> <br/>
 			<p>* Required</p>
 			<input type= "submit" name = "submit" value = "Add">
 			<input type = "submit" name = "canceladdclient" value = "Cancel">
 	</div>
 </form>


<?php 
}

include'home.php';
 connect();

 if (isset($_POST['submit']))
 {
 	$client_name = mysql_real_escape_string($_POST['client_name']);
 	$client_contactperson = mysql_real_escape_string($_POST['client_contactperson']);
 	$client_address = mysql_real_escape_string($_POST['client_address']);
 	if ($client_name == "" OR $client_contactperson == "" OR $client_address == "")
 	{
 		$error = "Error. Please Enter Require Fields";
 		addForm($client_name, $client_contactperson , $client_address, $error);
 	}
 	else 
 	{
 		mysql_query("INSERT INTO tbl_client SET client_name= '$client_name', 
 			client_contactperson = '$client_contactperson', 
 			client_address = '$client_address'")
 			or die(mysql_error());
 			header("Location: Homepage.php");

 	}
 }
 else if (isset($_POST['canceladdclient']))
 {
 	header("Location: Homepage.php");

 }
else{
 addForm('','','', '');
}

?>
</div>
</body>
</html>