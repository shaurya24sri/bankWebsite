


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
        background-color:black;
       color:white;
        transition: 1.5s;
      }
      button:hover{
        
        color: white;
       
      }
      
         

body {
  background-image: url('images/C12.jpg');
}
</style>
    
</head>
<body>
 
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


    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
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
          <a class="nav-link active" href="user.php">Users</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active " href="transaction.php">Transfer Money</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="transactionhistory.php">Transaction History</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>


<div class="container">
  <h2 class="text-center pt-4" style="color:black">Customer's Details</h2>
  <br>
  <div class="row">
    <div class="col">
      <div class="table-responsive-sm">
        <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
          <thead style="color : black;">
            <tr>
              <th scope="col" class="text-center" py-2>ID</th>
              <th scope="col" class="text-center" py-2>Name</th>
              <th scope="col" class="text-center" py-2>E-mail</th>
              <th scope="col" class="text-center" py-2>Balance</th>
              
            </tr>
          </thead>
          <tbody>

           <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        
                    </tr>
                <?php
                    }
                ?>





          </tbody>
        </table>
        <div>
          <a href="transaction.php" class="btn" style="background-color:black; color:white;"
     >Proceed for Transaction</a>
        </div>
      </div>
      
    </div>
    
  </div>

</div>

<footer>
  <p class="p-3 bg-dark text-white text-center">Copyright@2021 <br>made by-@shauryasrivastava </p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>