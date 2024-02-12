<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $age = 34;
    if ($age > 18) {
        echo 'U can go';
    } else {
        echo 'U can not go';
    }

    $a=0;
    while ($a <= 10) {
        echo "<br>" . $a;
        $a++;
    }

    do {
        echo '<br>' . $a;
        $a++;
    } while ($a <= 10);

    for ($i=0; $i < 10; $i++) { 
        echo  "<br>" . $i;
    }

    function printS(){
        echo '<br>5';
    }
    printS()

    ?>
</body>

</html>