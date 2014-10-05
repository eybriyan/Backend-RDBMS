<html>
<head>
	<title>View Transaction</title>
</head>
<body>
	<div>
		<form action = "Homepage.php">
			<input type = "submit"  value= "Back">
		</form>
	</div>
<div>
<?php
include 'home.php';
connect();
	if (isset($_GET['client_id'])){
		$client_id = $_GET['client_id'];
		$query = mysql_query("SELECT Distinct tbl_transaction.transaction_name , tbl_transaction.transaction_id,
			tbl_transaction.transaction_date, tbl_transaction.client_id,
			tbl_transaction.transaction_desc
			FROM tbl_transaction inner join tbl_client 
			on tbl_transaction.client_id = $client_id") 
		or die(mysql_error());
		$client_name = mysql_query("SELECT client_name from tbl_client where client_id= $client_id")
		or die(mysql_error());
		//$row = mysql_fetch_array($query);
		$cli_name = mysql_fetch_array($client_name);
		echo '<p> View Client '.$cli_name['client_name'].'</p>
			<table border="1" cellpadding="10">
	 		<tr>
	 		<th>Transaction Name</th>
	 		<th>Transaction Date</th> 
	 		<th>Transaction Description</th>
	 		</tr>';
	 /*	if (empty(mysql_fetch_array($query)))
	 	{
	 		echo '</table>
	 		NO Transactions 
      			<form method = "post" action ="add_clienttransaction.php?client_id='.$_GET['client_id'].'">
			<input type = "submit" name = "submittransact" value = "Add New Record">
	  </form>
	  </div>';
	 	}
	 	else {*/
	 	while ($row = mysql_fetch_array($query)) 
	 	{
	 	
		echo '<td>' . $row['transaction_name'] . '</td>
		<td>' . $row['transaction_date'] . '</td>
		<td>' . $row['transaction_desc'] . '</td>
		<td>
		<form method = "post" action="edit_client_transaction.php?transaction_id=' . $row['transaction_id'] . '">
			<input type = "submit" name= "submitfromhome" value = "Edit">
		</form>
		</td>
		<td>
		<form method = "post" action ="delete_transactions.php?client_id=' . $row['client_id'] . '">
			<input type = "submit" name = "delsubmithome" value = "Delete">
		</form>
		</td>
		</tr>';
	 	}
	 	echo '</table>
      <div>
      <form method = "post" action ="add_clienttransaction.php?client_id='.$_GET['client_id'].'">
			<input type = "submit" name = "submittransact" value = "Add New Record">
	  </form>
	  </div>';
	//}
}

else {

	echo "Error";
}
?>
</div>
</body>
</html>