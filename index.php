<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
          <a class="nav-link active" href="user.php">Users</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="transaction.php">Transfer Money</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="transactionhistory.php">Transaction History</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/C31.jpg" alt="bank" width="1500" height="600">
      <div class="carousel-caption">
        <h3 ><b>Online Banking System</b></h3>
        <p>Welcome to our website</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/C24.jpg" alt="bank" width="1500" height="600">
      <div class="carousel-caption">
        <h3 ><b>Online Banking System</b></h3>
        <p>Welcome to our website</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/C26.jpg" alt="bank" width="1500" height="600">
      <div class="carousel-caption">
        <h3 ><b>Online Banking System</b></h3>
        <p>Welcome to our website</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py=5">
	<h2 class="text-center"><b>About Us<b></h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 mx-auto">
          <img class=" mt-3 " src="images/C21.jpg" alt="VNSBank">
        </div>
		<div class="col-md-6 mx-auto mt-4">
          <div>
            <span class="text"><h4><b>VNS Bank</b></h4></span>
          </div>
          <div class="mt-2">
            <span class="sub-content">It is a financial institue .It is a Basic Banking System for making transactions between customers.
              It can transfer Money between multiple accounts,view Customer's details and view all past
              transactions history.</span>
              <span class="sub-content">It is a free online website that helps in transferring money on one click.</span>
          </div>
			
		</div>
		</div>
	</div>
</section>




<section class="my-5">
	<div class="py=5">
	<h2 class="text-center"><b>Our services<b></h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  <img class="card-img-top" src="images/C5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Customers</h4>
    <p class="card-text">View all Customers Details</p>
    <a href="user.php" class="btn " style="background-color:black; color:white;">Click here</a>
  </div>
</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card1" >
  <img class="card-img-top" src="images/C6.jpg" style="width:400px;" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Transfer Cash</h4>
    <p class="card-text">To Transfer Money </p>
    <a href="transaction.php" class="btn " style="background-color:black; color:white;"
     >Click here</a>
  </div>
</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" >
  <img class="card-img-top" src="images/C7.jpg"  alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Transaction History</h4>
    <p class="card-text">View all transaction history</p>
    <a href="transactionhistory.php" class="btn " style="background-color:black; color:white;">Click here</a>
  </div>
</div>
			</div>
		</div>
	</div>
</section>




<footer>
  
	<p class="p-3 bg-dark text-white text-center">Copyright@2021 <br>made by-@shauryasrivastava</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>