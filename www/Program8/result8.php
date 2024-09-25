<html>
    <body>
    <?php
        $string="Hello World!";
        echo "Length of the string:".strlen($string)."<br>";
        echo "Uppercase:".strtoupper($string)."<br>";
        echo "Lowercase:".strtolower($string)."<br>";
        echo "Capitalize first letter:".ucfirst($string)."<br>";
        echo "Lowercase first letter".lcfirst($string)."<br>";
        echo "Reversed string:".strrev($string)."<br>";
        echo "Substring(0,5):".substr($string,0,5)."<br>";
        echo "Postition of World:".strpos($string,'World')."<br>";
        echo "Replace 'World' with 'PHP':".str_replace('World','PHP',$string)."<br>";
        echo "Compare 'Hello' with 'hello':".strcmp('Hello','hello')."<br>";
        $trimmedString="  Hello World!  ";
        echo "Trimmed String:".trim($trimmedString)."<br>";
        echo "Padded String:".str_pad($string,20,".")."<br>";
        echo "Reapeated String:".str_repeat($string,2)."<br>";
        $array=explode(' ',$string);
        echo "Explode string:";
        print_r($array);
        echo "<br>";
        $implodedstring=implode(',',$array);
        echo "Imploded string:".$implodedstring."<br>";
        ?>
    </body>
</html>
