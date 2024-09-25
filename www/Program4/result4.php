<html>
    <head>
        <title>Donor Table</title>
    </head>
    <body>
        <h1>Donor Details</h1>
        <?php
            $u = "root";
            $pass="";
            $ser = "localhost";

            try{
                $conn = mysqli_connect($ser,$u,$pass);
                if($conn->connect_error){
                    echo "Failed";
                }
                else{
                    
                }
            }
            catch(Exception $e){
                echo $e->getMessage();
            }

            $db = "Donor";
            $conn->select_db($db);

            $mysql = "SELECT * FROM Donor_Table";

            $result = $conn->query($mysql);
            echo "<br>";


            if($result->num_rows>0){
                echo "<table>";
                echo "<tr><th>Name</th><th>Blood Group</th><th>Age</th></tr>";

                while($row=$result->fetch_assoc()){
                    echo "<tr><td>".$row["Name"]."</td>"."<td>".$row["Blood_Group"]."</td>"."<td>".$row["Age"]."</td></tr>";
                }
                echo "</table>";
            }
        ?>
    </body>
</html>