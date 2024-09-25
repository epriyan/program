<html>
    <head>
        <title>Table Creation</title>
    </head>
    <body>
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
                    echo "Connected";    
                }
            }
            catch(Exception $e){
                echo $e->getMessage();
            }

            $db = "Donor";
            $conn->select_db($db);

            $mysql = "Create table donor_table(Name varchar(20),Blood_Group varchar(20),Age int)";
            $mysql2 = "Insert into donor_table(Name,Blood_Group,Age) Values('Priyan','O+ve',21)";
            $mysql3 = "Update donor_table set Name='Riyanz' where Age=20";
            $mysql4 = "Delete from donor_table where Name='Rutwik'";

            $conn->query($mysql);
        ?>
    </body>
</html>