<html>
    <body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $birthdate = $_POST['birthdate'];
        $dob = new DateTime($birthdate);
        $cdate = new DateTime();
        $d = $cdate->diff($dob);
        $age = $d->y;
        echo "Your age is: ".$age;
    }
    ?>
    </body>
</html>

