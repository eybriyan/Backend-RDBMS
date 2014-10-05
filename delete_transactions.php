<?php
include 'home.php';
connect();
deleteSupplier();
deleteClient();
function deleteSupplier(){
$supplier_id = $_GET['supplier_id'];
if(isset($supplier_id) && 	is_numeric($_GET['supplier_id'])){
	mysql_query("DELETE tbl_transaction FROM tbl_transaction
	 INNER JOIN tbl_supplier where tbl_transaction.supplier_id = '$supplier_id'") or die(mysql_error());
	header("Location: supplier_transaction.php?supplier_id=". $supplier_id		);
}
}
function deleteClient(){
$client_id = $_GET['client_id'];
if(isset($client_id) && is_numeric($_GET['client_id'])){
	mysql_query("DELETE tbl_transaction FROM tbl_transaction
	 INNER JOIN tbl_client where tbl_transaction.client_id = '$client_id'") or die(mysql_error());
	header("Location: client_transaction.php?client_id=". $client_id		);
}

}

?>