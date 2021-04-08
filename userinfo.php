<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$database="bank";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit']))
{
	$from=$_GET['id'];
	$to=$_POST['to'];
	$amount=$_POST['amount'];

	$sql="Select *from users where id=$from";
	$query=mysqli_query($conn,$sql);
	$sql1=mysqli_fetch_array($query);
	$sql="select *from users where id=$to";
	$query=mysqli_query($conn,$sql);
	$sql2=mysqli_fetch_array($query);


	if(($amount)<0)
	{
		echo '<script type="text/javascript">';
		echo ' alert("Negative amount!")';
		echo '</script>';
	}
	else if($amount>$sql['balance'])
	{
		echo '<script type="text/javascript">';
		echo 'alert("Insufficient Balance")';
		echo '</script>';
	}

	else if($amount==0)
	{
		echo '<script type="text/javascript">';
		echo 'alert("Invalid Amount")';
		echo '</script>';
	}

	else{
		$newbalance=$sql1['balance']-$amount;
		$sql="update users set balance=$newbalance where id=$from";
		mysqli_query($conn,$sql);

		$newbalance=$sql2['balance']+$amount;

		$sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }

	}


?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  

  <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">VNS Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userinfo.php">Users</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="transaction.php">Transfer Money</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="transactionhistory.php">Transaction History</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<div class="container">
	<h2 class="text-center pt-4" style="color:black;">Transaction</h2>

	<?php
    $servername = "localhost:3307";
$username = "root";
$password = "";
$database="bank";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


    $sid=$_GET['id'];
    $sql="select *from users where id=$sid";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
    	echo "Error:".$sql."<br>".mysqli_error($conn);
    }
    $rows=mysqli_fetch_assoc($result);
?>
<form method="post" name="tcredit" class="tabletext"><br>
	<div>
		<table class="table table-striped table-condensed table-bordered">
			<tr style="color:black">
				<th class="text-center">Id</th>
				<th class="text-center">Name</th>
				<th class="text-center">E-mail</th>
				<th class="text-center">Balance</th>
			</tr>
			<tr style="color:black;">
				<td class="py-2"><?php echo $rows['id'] ?></td>
                <td class="py-2"><?php echo $rows['name'] ?></td>
                <td class="py-2"><?php echo $rows['email'] ?></td>
                <td class="py-2"><?php echo $rows['balance'] ?></td>
             </tr>


			
		</table>
	</div>
	<br>
	<hr>




	<label style="color : black;"><b>Transfer To:</b></label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>


          <div>
        </select>
        <br>
        <br>
            <label style="color : black;"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn mt-3" name="submit" type="submit" id="myBtn" >Transfer</button>
            </div>
 </div>
</form>

<footer>
	<p class="p-3 bg-dark text-white text-center">Copyright@2021 <br>made by-@shauryasrivastava</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>