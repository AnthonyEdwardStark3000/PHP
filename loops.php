<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
    echo"Loops".'<br>';
    // for
    echo"for".'<br>';
    for($i=0;$i<=5;$i++)
    {
        echo"Hi".'<br>';
    }
    echo'<hr>';
    // for each
    echo"for each".'<br>';
    $array=["One","Two","THree"];
    foreach($array as $data)
    {
        echo $data.'<br>';
    }
    echo'<hr>';

    // Iterating over an associative array
    echo"Iterating over an associative array".'<br>';
    $me=[
        "name"=>'suresh',
        "Talent"=>'None',
        "Positive"=>'Never giving up',
        "age"=>21,
        "future"=>'Next musk',
        "Rolemodels"=>["RDj","Musk","Zuckenberg"],
    ];
    foreach($me as $key => $value)
    {
        if(is_array($value))
        {
            echo $key.' : '.implode(',',$value).'<br>';
        }
        else
        {
            echo $key.' : '.$value.'<br>';
        }

        }
       
    ?>
</body>
</html>