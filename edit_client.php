<html>
<head>
	<title>Edit Client Info</title>
</head>
<body>
<div>
	<?php
session_start();
if(isset($_SESSION['username'])){
 	function renderForm($client_id, $client_name, $client_contactperson, $client_address, $error)
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
	 			<div>
	 					<!--<p><strong>Client ID:</strong> <?php echo $client_id; ?></p>	-->
 							<strong>Client Name: *</strong> <input type="text" name="client_name" value="<?php echo $client_name; ?>"/>
 							<br/>
 							<strong>Contact Person: *</strong> <input type="text" name="client_contactperson" value="<?php echo $client_contactperson; ?>"/>
 							<br/>
 							<strong>Address: *</strong> <input type="text" name="client_address" value="<?php echo $client_address; ?>"/>
 							<br/>
	 						<p>* Required</p>
 							<input type="submit" name="submit_client" value="Save">
 							<input type= "submit" name = "canceleditclient" value = "Cancel">
 				</div>
 		</form> 
 <?php
 }
 include'home.php';
 connect();
 	if (isset($_POST['submit_client']))
 			{ 
 	if (is_numeric($_POST['client_id']))
 			{
 					$client_id = $_POST['client_id'];
 					$client_name = mysql_real_escape_string($_POST['client_name']);
 					$client_contactperson = mysql_real_escape_string($_POST['client_contactperson']);
 					$client_address = mysql_real_escape_string($_POST['client_address']);
 				if ($client_name == '' || $client_contactperson == '' || $client_address == '')
 						{
 							$error = 'ERROR: Please fill in all required fields!';
							 renderForm($client_id, $client_name, $client_contactperson,$client_address, $error);
 						}
 				else
 						{
							 mysql_query("UPDATE tbl_client SET client_name='$client_name', 
							 	client_contactperson='$client_contactperson', 
							 	client_address = '$client_address' 
							 	WHERE client_id='$client_id'")
								 or die(mysql_error()); 
 							header ("Location: Homepage.php"); 
						 }
 			}
 	else
 			{
 				echo 'Error1!';
			 }
			 }
		else if (isset($_POST['canceleditclient']))
		{

			header("Location: Homepage.php");
		}
 	else
 			{
				 if (isset($_POST['submitfromhome']) && isset($_GET['client_id']) && is_numeric($_GET['client_id']) && $_GET['client_id'] >0)
 			{
 				
 				$client_id = $_GET['client_id'];
 				$result = mysql_query("SELECT * FROM tbl_client WHERE client_id = '$client_id'")
 				or die(mysql_error()); 
 				$row = mysql_fetch_array($result);
 					if($client_id == $row['client_id'])
 							{
 								$client_id = $row['client_id'];
 								$client_name = $row['client_name'];
 								$client_contactperson = $row['client_contactperson'];
 								$client_address = $row['client_address'];
 								renderForm($client_id, $client_name, $client_contactperson, $client_address, '');
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