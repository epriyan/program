<html>
    <head>
        <title>
            Result 9
        </title>
    </head>
    <body>
        <?php
            class DivideByNegativeNo extends Exception{
                public function emsg(){
                    return "Cant divide by Negative number";
                }
            }

            function divide($num1,$num2){
                if($num2<0){
                    throw new DivideByNegativeNo();
                }
                else{
                    return $num1/$num2;
                }
            }

            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            try{
                $r = divide($num1,$num2);
                echo $r;
            }
            catch(DivideByNegativeNo $e){
                echo $e->emsg();
            }
            catch(DivisionByZeroError $e){
                echo "Cant divide by zero";
            }
        ?>
    </body>
</html>