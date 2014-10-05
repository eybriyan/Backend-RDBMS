<html>
<head>
	<title>Add Content</title>
</head>
<body>
	<div>
		<form action = "Homepage.php">
			<input type = "submit"  value= "Back">
		</form>
	</div>
<div>
<?php

function addForm($transaction_name, $year,$month, $day, $transaction_desc, $error)
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
 		<strong>Add Transaction to Client</strong><br/><br/>
 			<strong>Transaction: *</strong><input type = "text" name = "transaction_name" values = "<?php echo $transaction_name?> "> <br/>
 			<!--<strong>Transaction Date: *</strong><input type = "text" name = "transaction_date" value = "<?php echo $transaction_date ?>"> Format: yyyy-mm-dd <br/>-->
 			<strong>Transaction Date : *</strong>
 			<input type = "text" name = "year" value = "<?php echo $year ?>" placeholder = "Year">
 			<input type = "text" name = "month" value = "<?php echo $month?> " placeholder = "Month">
 			<input type= "text" name = "day" value = "<?php echo $day?>" placeholder= "day"><br/>
 			<strong>Description: *</strong><input type= "text" name = "transaction_desc" value = "<?php echo $transaction_desc ?>"> <br/>
 			<p>* Required</p>
 			<input type= "submit" name = "addtransact" value = "Add Transaction">
 			<input type= "submit" name = "canceladdtrans" value= "Cancel">
 	</div>
 </form>
<?php 
}

include'home.php';
 connect();
// if (isset($_POST['submittransact'])) {
		 if (isset($_POST['addtransact']))
 {
 	$client_id = $_GET['client_id'];
 	$transaction_name = mysql_real_escape_string($_POST['transaction_name']);
 	$year= mysql_real_escape_string($_POST['year']);
 	$month = mysql_real_escape_string($_POST['month']);
 	$day= mysql_real_escape_string($_POST['day']);
 	//$transaction_date = mysql_real_escape_string(htmlspecialchars($_POST['transaction_date']));
 	$transaction_date = $year.'-'.$month.'-'.$day;
 	$transaction_desc = mysql_real_escape_string(($_POST['transaction_desc']));
 	if ($transaction_name == "" OR $transaction_date == "" OR $transaction_desc == "")
 	{
 		$error = "Error. Please Enter Require Fields";
 		addForm($transaction_name, $year,$month, $day , $transaction_desc, $error);
 	}
 	else 
 	{	
 		mysql_query("INSERT INTO tbl_transaction (transaction_name, transaction_date, transaction_desc, client_id)
 			 values ('$transaction_name' , '$transaction_date', '$transaction_desc', '$client_id')")
 			or die(mysql_error());
 			//echo "success";
 			header("Location: client_transaction.php?client_id=" . $_GET['client_id']);

 	}
 }
 else if (isset($_POST['canceladdtrans']))
 {
header("Location: client_transaction.php?client_id=".$_GET['client_id']);
 }
else{
 addForm('','','', '','','');
}
//}
//else {
//	echo "string"; }
?>
</div>
</body>
</html>

