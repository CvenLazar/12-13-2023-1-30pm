<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
    
	</head>
	<style>
		.card{
			width:400px;
			margin-left:auto;
			margin-right:auto;
			margin-top:100px;
			text-align:center;
			padding:30px;	
			border:4px #a517ba solid;
			border-radius:5px;
			border-color: green;	
		}
	</style>
	<body>
	<div class="container-fluid" id="cont-3">
<header id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href=index.html style="color: white; font-weight: 600; margin-top: 15px;">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="color: white;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
        <li class="nav-item" >
          <a class="nav-link" href="VoterCheck.php" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Vote</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php" style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Admin</a>
        </li>
      
        <li class="nav-item" >
          <a class="nav-link" href="about.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">About</a>
        </li>
      
      </ul>
    </div>
  </nav>
</header>


		<section class="sec">
			<div class="card">
				<div class="row">
					<div class="col-md-12">
						<h3>Voters Checker</h3>
	<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}	if($_SERVER['REQUEST_METHOD'] == "POST")
			{
				$Snum = $_POST['StudentNo'];
				$name = $_POST['Lname'];
				$username = "a";
		
				if(($Snum) && ($name))
				{
					$query = "select * from students where studentno = $Snum limit 1 " ;
					$result = mysqli_query($conn, $query);

					if($result){
						if($result && mysqli_num_rows($result) > 0)
                    	   $user_data = mysqli_fetch_assoc($result);

						   if(strcasecmp($user_data['Lname'] === $name,$username)){

						   if($user_data['DeptId'] === "1"){
								header("Location: Position-CITCS.php");
								}
						   else if($user_data['DeptId'] === "2"){
							 header("Location: Position-CAS.php");	
							}

						   else if($user_data['DeptId'] === "3"){
							 header("Location: Position-CCJ.php");	
							}
						}
							else{
								echo "You Are Not Qualified To Vote.";
							}
					}
					
				}
				
			}
		
	?>

	<form method="post">
    <div class="form-floating mb-3">
        <input required type="text" name="StudentNo" maxlength="8"  max="99999999" class="form-control" id="floatingInput" placeholder="StudentNo">
        <label for="StudentNO">Student Number</label>
    </div>
    <div class="form-floating">
        <input required type="text" name="Lname" class="form-control" id="floatingPassword" placeholder="Name">
        <label for="LastName">Enter Last Name</label><br>
    </div>

	<br>
    <div class="col-12">
  <button class="btn btn-primary" type="submit">CHECK</button>
  </div>
    </form>
				</div>
			</div>
		</div>
	</section>
	
	<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="js/popper.min.js"></script>    
		<script src="js/bootstrap.min.js"></script> 
	</body>
	</html>

