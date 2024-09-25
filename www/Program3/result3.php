<html>
    <body>
    <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $name=$_POST["name"];
                $roll=$_POST["rollnumber"];
                $gender=$_POST["gender"];
                echo "Name: ".$name."<br>"."Roll No: ".$roll."<br>"."Gender: ".$gender;
            }
            else{
                echo "Data not submitted";
            }
    ?>
    </body>
</html>