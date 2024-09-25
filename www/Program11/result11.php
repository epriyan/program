<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <h1>Credentials are: </h1>
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

            $username = $_POST['username'];
            $password = $_POST['password'];

            $mysql = "SELECT * FROM User_Auth";

            $result = $conn->query($mysql);
            echo "<br>";


            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    $u=$row["Username"];
                    $p=$row["Password"];
                }
            }

            if($u==$username && $p==$password){
                echo "Correct";
            }
            else{
                echo "Incorrect Details";
            }
        ?>
    </body>
</html>