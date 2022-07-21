<?php

    $number1 = isset($_POST["num1"]) ?$_POST["num1"] : NULL;
    $number2 = isset($_POST["num2"]) ?$_POST["num2"] : NULL;

    $total = (float)$number1 + (float)$number2;
?>

<h1><?php echo $number1."+".$number1."=".$total; ?></h1>
<button><a style="text-decoration : none;" href="index.php">HOME</a>
</button>
