<html>
    <head>
        <title>Result</title>
    </head>
    <body>
        <?php
            $a=$_POST['user_string'];

            function Palindrome($a) {
                $ogstr=strtolower($a);
                $rstr=strrev($ogstr);
                if($ogstr==$rstr){
                    echo "Palindrome";
                }
                else{
                    echo " Not Palindrome";    
                }
            }

            Palindrome($a);
        ?>
    </body>
</html>