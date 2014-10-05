<html>
<head>
	<title>Edit Client Info</title>
</head>
<body>
<div>
	<?php
session_start();
if(isset($_SESSION['username']))
{
 	function renderForm($client_id, $transaction_id, $transaction_name, $transaction_date, $transaction_desc,  $error)
 	{
 		?>
		 <?php 
 			if ($error != '')
 				{
 					echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 		}
 		?> 
 		<form action="" method="post">
 			<input type="hidden" name="client_id" value="<?php echo $client_id; ?>"/>
	 		<input type="hidden" name="transaction_id" value="<?php echo $transaction_id; ?>"/>
	 			<div>
	 					<!--<p><strong>Client ID:</strong> <?php echo $client_id; ?></p>	-->
 							<strong>Transaction Name: *</strong> <input type="text" name="transaction_name" value="<?php echo $transaction_name; ?>"/>
 							<br/>
 							<strong>Transaction Date: *</strong> <input type="text" name="transaction_date" value="<?php echo $transaction_date; ?>"/>
 							<br/>
 							<strong>Transaction Description: *</strong> <input type="text" name="transaction_desc" value="<?php echo $transaction_desc; ?>"/>
 							<br/>
	 						<p>* Required</p>
 							<input type="submit" name="submit_client" value="Save">
 							<input type= "submit" name = "canceleditclient" value = "Cancel">
 <?php
 }
 include'home.php';
 connect();
 	if (isset($_POST['submit_client']))
 			{ 
 	if (is_numeric($_POST['transaction_id']))
 			{
 					$client_id = $_POST['client_id'];
 					$transaction_id = $_POST['transaction_id'];
 					$transaction_name = mysql_real_escape_string($_POST['transaction_name']);
 					$transaction_date = mysql_real_escape_string($_POST['transaction_date']);
 					$transaction_desc = mysql_real_escape_string($_POST['transaction_desc']);
 				if ($transaction_name == '' || $transaction_date == '' || $transaction_desc == '')
 						{
 							$error = 'ERROR: Please fill in all required fields!';
							 renderForm($client, $transaction_id, $transaction_name, $transaction_date,$transaction_desc, $client_id, $error);
 						}
 				else
 						{
							 mysql_query("UPDATE tbl_transaction 
							 	SET transaction_name='$transaction_name', 
							 	transaction_date ='$transaction_date', 
							 	transaction_desc = '$transaction_desc' 
							 	WHERE transaction_id='$transaction_id'") or die(mysql_error()); 
 							header ("Location: client_transaction.php?client_id=" . $client_id); 
						 }
 			}
 	else
 			{
 				echo 'Error1!';
			 }
			 }
		else if (isset($_POST['canceleditclient']))
		{
			$client_id = $_POST['client_id'];	
			header("Location: client_transaction.php?client_id=" . $client_id);
		}
 	else
 			{
				 if (isset($_POST['submitfromhome']) && isset($_GET['transaction_id']) && is_numeric($_GET['transaction_id']) && $_GET['transaction_id'] >0)
 			{	
 				$transaction_id = $_GET['transaction_id'];
 				$result = mysql_query("SELECT * FROM tbl_transaction WHERE transaction_id = '$transaction_id'")
 				or die(mysql_error()); 
 				$row = mysql_fetch_array($result);
 					if($transaction_id == $row['transaction_id'])
 							{
 								$transaction_id = $row['transaction_id'];
 								$transaction_name = $row['transaction_name'];
 								$transaction_date = $row['transaction_date'];
 								$transaction_desc = $row['transaction_desc'];
 								$client_id = $row['client_id'];
 								renderForm($client_id, $transaction_id, $transaction_name, $transaction_date, $transaction_desc, '');
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