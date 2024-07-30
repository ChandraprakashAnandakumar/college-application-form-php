<!DOCTYPE html>
<html>
<head>
<title>Form Handling with PHP</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        echo "<hr>";
        $name = $_POST['name'];
        echo "Submitted Name: $name"."<br>";

        $mnum = $_POST['mnum'];
        echo "Submitted Number: $mnum"."<br>";

        $email = $_POST['email'];
        echo "Submitted Email: $email"."<br>";

        $snm = $_POST['snm'];
        echo "Submitted School Name: $snm"."<br>";

        $fnum = $_POST['fnum'];
        echo "Submitted Father number: $fnum"."<br>";

        $stt = $_POST['stt'];
        echo "Submitted State: $stt"."<br>";

        $cty = $_POST['cty'];
        echo "Submitted City: $cty"."<br>";

        $crs = $_POST['crs'];
        echo "Submitted City: $crs"."<br>";

        echo "<hr>";

    }
    ?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

</form>
</body>
</html>
