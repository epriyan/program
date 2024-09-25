<html>
<head>
<title>Result</title>
</head>
<body>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$u = "root";
		$p = "";
		$s = "localhost";
		$db = "donor";

		$conn = mysqli_connect($s,$u,$p);

		if($conn->connect_error){
			die("Failed");
		}else{
			echo "Connected";
		}

		$conn->select_db($db);
		
		$sql = "SELECT * from donor_table";
		$result = $conn->query($sql);
		
		if($result->num_rows>0){
			echo "<table><tr><th>Name</th><th>Blood Group</th><th>Age</th></tr>";
			while($row = $result->fetch_assoc()){
				echo "<tr><td>".$row['Name']."</td><td>".$row['Blood_Group']."</td><td>".$row['Age']."</td><tr>";
			} 	
		}
		echo "</table>";
		die();
		
	}
?>
</body>
</html>