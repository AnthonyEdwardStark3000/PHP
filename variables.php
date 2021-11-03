<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    $name='suresh';
    $age=21;
    $weakness=NULL;
    $inLove=FALSE;
    $dummy;
    $a=10;
    $b=20;
    $nonnumber='12f.56';
    ?>
    <?php
    echo"$name".'<br>'.'<hr>';
    echo $name."<br>".'<hr>';
    echo "Printing false value".": ".$inLove."_______ "."<br>".'<hr>';
    echo gettype($name)."<br>"."<hr>";
    var_dump($name, $age, $weakness, $inLove).'<hr>';
    is_string($name).'<br>';
    echo'<hr>';
    echo"Checking without assign::".isset($dummy).'<br>';
    
    define('PI',3.14).'<br>';
    echo'<hr>';
    echo PI.'<br>';
    echo'<hr>';
    echo SORT_ASC.'<br>';
    echo'<hr>';
    echo $a+$b.'<br>';
    echo'<hr>';
    echo$nonnumber;
    echo'<hr>';
    $number=(int)$nonnumber;
    echo $number.'<br>';
    echo"<hr>";
    ?>
    <?php
    echo("\nWorking with number formats").'<hr>';
    echo abs(-3000).'<hr>';
    echo sqrt(12).'<hr>';
    echo floor(12.56).'<hr>';
    echo ceil(12.56).'<hr>';
    echo round(12.56).'<hr>';

    ?>
</body>
</html>