<html>
    <body>
        <?php
            class result7{
                protected $empname;
                protected $empid;

                public function __construct($empname,$empid){
                    $this->empname=$empname;
                    $this->empid=$empid;
                    echo $empname;
                    echo "<br>";
                    echo $empid;
                }
            }    
            
            class Details extends result7{
                protected $basicpay;
                protected $hra;
                protected $da;
                function gross($basicpay,$hra,$da){
                    $this->basicpay=$basicpay;
                    $this->hra=$hra;
                    $this->da=$da;

                    $gross = $basicpay + $hra + $da ;

                    return $gross;
                }
            }

            class Sal extends Details{
                protected $tax;
                

                function calcsal($tax,$gross){
                    $this->tax=$tax;
                    $netpay = $gross - $tax;
                    echo "<br>";
                    echo $netpay;
                }
            }

            $empname = $_POST['name'];
            $empid = "22bcm043";
            $a = new Sal($empname,$empid);
            $g = $a->gross(50000,10000,10000);
            $a->calcsal(5000,$g);
            
        ?>
    </body>
</html>   
