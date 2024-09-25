<html>
    <head>
        <title>
            Program 10 Result
        </title>
    </head>
    <body>
        <?php
            class WrongPassword extends Exception{
                public function emsg(){
                    return "Incorrect Password";
                }
            }   

            if($_SERVER["REQUEST_METHOD"]=="POST"){
                try{
                    $u = $_POST['username'];
                    $p = $_POST['password'];
                    $vp = "priyan";

                    if($p!=$vp){
                        throw new WrongPassword();
                    }
                    else{
                        echo "Welcome $u";
                    }

                }catch(WrongPassword $e){
                    echo $e->emsg();
                }
            }
        ?>
    </body>
</html>