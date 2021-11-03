<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates</title>
</head>
<body>
    <?php
    echo"Dates".'<br>';
    echo'<hr>';
    // print current date
    echo"print current date".'<br>';
    echo date('d/m/y').'<br>';
    echo date('d-m-y').'<br>';
    echo date('d+m+y H:i:s').'<br>';
    echo'<hr>';
    // print yesterday
    echo"print yesterday".'<br>';
    echo date('d-m-y H:i:s'), time() - 60 * 60 * 24;
    echo'<hr>';
    // print current timestamp
    echo"print current timestamp".'<br>';
    echo time();
    echo'<hr>';
    // parse date
    echo"parse date".'<br>';
    $parsedDate=date_parse('2021-10-12 09:00:00');
    echo '<pre>'.'<br>';
    var_dump($parsedDate);
    echo '</pre>'.'<br>';
    echo'<hr>';
    ?>
</body>
</html>