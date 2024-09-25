<html>
    <body>

    <?php
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $u=$_POST["username"];
                echo "Welcome ".$u." !";
            }
            else{
                echo "Data not submitted";
            }
    ?>
    </body>
</html>