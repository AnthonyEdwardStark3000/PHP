<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditionals</title>
</head>
<body>
    <?php
    echo"Conditionals".'<br>';
    $number=3000;
    echo"Number entered is: $number";
    echo'<hr>';

    // if
    echo"if".'<br>';
    if($number===3000)
    {
        echo"Correct";
    }
    echo'<hr>';
    
    // if else
    echo"if else".'<br>';
    if($number===3000)
    {
        echo"Correct";
    }
    else{
        echo"Incorrect";
    }
    echo'<hr>';
    
    // Difference between === and ==
    echo"Difference between === and ==".'<br>';
    if($number==3000)
    {
        echo"Correct";
        echo'<br>';
    }
    if($number==='3000')
    {
        echo"correct value and dtype";
        echo'<br>';
    }
    else    {
        echo"incorrect value and dtype";
        echo'<br>';
    }
    echo'<hr>';
    // NUll coalescing operator
    echo"NUll coalescing operator".'<br>';
    $myname=isset($name)?$name:'Stark';
    echo $myname;
    echo'<br>';
    ?>
</body>
</html>