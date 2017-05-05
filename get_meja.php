<?php
	include 'connection.php';
	$kodemeja = $_GET['meja'];

	$sql = mysqli_query($conn, "SELECT * FROM meja WHERE id_restoran = '$kodemeja'");

	if(mysqli_num_rows($sql) > 0){
		echo "<select name='meja' id='meja'><option>--Choose Table--</option>";
		while($data = mysqli_fetch_array($sql)){
			echo "<option value='".$data[id_restoran]."'>".$data[no_meja]."</option>";
		}
		echo "</select>";
	}
	mysqli_close($conn);
?>
