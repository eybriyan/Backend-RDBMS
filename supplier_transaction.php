<html>
<head>
	<title>View Transaction</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
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
		<form action = "Homepage.php">
			<input type = "submit"  value= "Back">
		</form>
	</div>
<div>
<?php
include 'home.php';
connect();
	if (isset($_GET['supplier_id'])){
		$supplier_id = $_GET['supplier_id'];
		$query = mysql_query("SELECT Distinct tbl_transaction.transaction_name , tbl_transaction.transaction_id,
			tbl_transaction.transaction_date, tbl_transaction.supplier_id,
			tbl_transaction.transaction_desc
			FROM tbl_transaction inner join tbl_supplier 
			on tbl_transaction.supplier_id = $supplier_id") 
		or die(mysql_error());
		$supplier_name = mysql_query("SELECT supplier_name from tbl_supplier where supplier_id= $supplier_id")
		or die(mysql_error());
		$sup_name= mysql_fetch_array($supplier_name);
		echo '<p> View Supplier '.$sup_name['supplier_name'].'</p>
			<table border="1" cellpadding="10">
	 		<tr>
	 		<th>Transaction Name</th>
	 		<th>Transaction Date</th> 
	 		<th>Transaction Description</th>
	 		</tr>';
	 		/*if (empty(mysql_fetch_array($query)))
	 	{
	 		echo 'No Transactions Yet. Add?
	 			</table>
      			<div>
      			<form method = "post" action ="add_suppliertransaction.php?supplier_id='.$_GET['supplier_id'].'">
			<input type = "submit" name = "submittransact" value = "Add New Record">
	  </form>
	  </div>';
	 	}
	 	else { */
	 	while ($row = mysql_fetch_array($query)) 
	 	{
	 	
		echo '<td>' . $row['transaction_name'] . '</td>
		<td>' . $row['transaction_date'] . '</td>
		<td>' . $row['transaction_desc'] . '</td>
		<td>
		<form method = "post" action="edit_supplier_transaction.php?transaction_id=' . $row['transaction_id'] . '">
			<input type = "submit" name= "submitfromhome" value = "Edit">
		</form>
		</td>
		<td>
		<form method = "post" action ="delete_transactions.php?supplier_id=' . $row['supplier_id'] . '">
			<input type = "submit" name = "delsubmithome" value = "Delete">
		</form>
		</td>
		</tr>';
	 	}
	 	echo '</table>
      <div>
      <form method = "post" action ="add_suppliertransaction.php?supplier_id='.$_GET['supplier_id'].'">
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
	<script src="./js/vendors/jquery.js"></script>
    <script src="./js/vendors/bootstrap.min.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>