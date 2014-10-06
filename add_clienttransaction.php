<html>
<?php ob_start(); session_start();?>
<head>
	<title>Add Content to Client</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
</head>
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
   width: 70%;
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
 	<center>
 	<div class="tab1">
 		<p class="Header1">Add Transaction to Client</p>
 		<hr>
 			<p>Transaction: </p><input class="int1" type = "text" name = "transaction_name" values = "<?php echo $transaction_name?> "> <br/>
 			<!--<strong>Transaction Date: *</strong><input type = "text" name = "transaction_date" value = "<?php echo $transaction_date ?>"> Format: yyyy-mm-dd <br/>-->
 			<p>Transaction Date:</p>
 			<p><input class="int2" type = "text" name = "year" value = "<?php echo $year ?>" placeholder = "Year"></p>
 			<p><input class="int2" type = "text" name = "month" value = "<?php echo $month?>" placeholder = "Month"></p>
 			<p><input class="int2" type= "text" name = "day" value = "<?php echo $day?>" placeholder= "Day"></p><br/>
 			<p>Transaction Description: </p><input class="int3" type= "text" name = "transaction_desc" value = "<?php echo $transaction_desc ?>"> <br/>
 			<br> <br>
 			<input class ="mybutton1" type= "submit" name = "addtransact" value = "Add Transaction">
 			<input class ="mybutton1" type= "submit" name = "canceladdtrans" value= "Cancel">
 			<br><br>
 	</div>
 	</center>
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

