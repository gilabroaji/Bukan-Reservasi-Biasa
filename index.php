<!DOCTYPE html>
<?php
	session_start();
	if (empty($_SESSION['username'])) {
		header("location: login.php"); 
	}
?>
<html>
<head>
<title>DASHBOARD</title>
<link rel='stylesheet' type='text/css' href='css/navbar-style.css'>
<link rel='stylesheet' type='text/css' href='css/tes.css'>
<script type='text/javascript' src='ajax/ajax.js'></script> // edited by arsyan
</head>
<body>

<ul>
  <li><a href="#home"></a></li>
  <li><a href="#"> </a></li>
  <li><a href="#"> </a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Arsyan</a> //edited by Arsyan
    <div class="dropdown-content">
    
      <a href="#">Profile</a>
      <a href="logout.php">Logout</a>
    </div>
  </li>
</ul>
<hr>
<div class="sidebar">
    <h3 align ="center" color= "white";>Dashboard</h3>
	<ul>
	
	//edited by Arsyan
      <li><a href="index.php">Reservation</a></li> 
      <li><a href="#">View Data</a></li>
      <li><a href="#">Update Data</a></li> 
      <li><a href="#">Delete Data</a></li> 
    </ul> 
  </div>
  
  //edited by Arsyan
  <div class="reservasi">
  <form method = "get">
  <center>
  <pre>
  Name Customer	<input type = "text" name = "namacust" placeholder= "Input Customer Name"><br>
  <select name = "Restaurant" id="restaurant" onChange="showMeja(this.value)">
  <option>-- Choose Restaurant--</option><br>
  <?php 
  include 'connection.php';
  $sql = mysqli_query($conn, "SELECT * FROM restoran");
  while($data = mysqli_fetch_array($sql)){
  echo "<option value='".$data['id_restoran']."'>".$data['nama_restoran']."</option>";
  }
  ?>
  </select><br>
  <input type = "submit" name = "reservasi" value = "Reserve" class="btn btn=small btn-primary">
  <input type = "submit" formaction = "register.php" name = "register" value = "Register" class="btn btn=small btn-primary"> 
  </pre>
  </center>
  </form>		
  </div>
  //akhir dari bagian yang diedit
  
</body>
</html>
