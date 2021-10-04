<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php
            $name = $_POST['name'];
            echo "Hi, " . $name . "!";
            ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

</head>

<body>

    <h1><?php
        $name = $_POST['Var'];
        echo "Hi, " . $name . "!";
        ?></h1>
    <p class="text">
        <?php
        $name = $_POST['Var'];
        $pril = $_POST['Var1'];
        $hoby = $_POST['Var2'];
        $age = $_POST['Var3'];
        $animal = $_POST['Var4'];
        $color = $_POST['Var5'];
        $corabl = $_POST['Var6'];
        $brend = $_POST['Var7'];
        $drink = $_POST['Var8'];
        $sik = $_POST['Var9'];
        echo  $name . "очень долго занимался ".$hoby ." с ".$age." лет. В этом деле он самый ".$pril.", потому что он очень любит пить перед тренировками ".$drink." и от этого ".$sik." не сказывается на нём так фатально, как мог бы. Когда на улице ".$corabl." он предпочитает носить ".$color." носок в своём кармане, как бы это не казалось странно, но это не осложнение от ".$sik.". ".$name." купил себе кента-питомца, а это оказался ".$animal." и теперь ".$name." каждый раз, когда на улице ".$corabl." из-за депрессии идёт покупать ".$brend." стоя в очереди со своим кентиком."
        ?></p>

</body>

</html>