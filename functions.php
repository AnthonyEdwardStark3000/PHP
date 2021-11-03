<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
    echo"Functions".'<br>';
    // simple example
    echo"simple example".'<br>';
    function hello()
    {
        echo "Hello";
    }
    echo"calling the function";
    hello();
    echo'<hr>';
    
    // function with arg
    $name='Stark';
    echo"function with arg".'<br>';
    function hellouser(string $name)
    {
        echo "hello Mr. $name";
    }
    echo"calling the function";
    hellouser($name);
    echo'<hr>';
    
    // using ...$
    echo"using ...$".'<br>';
    function add(...$number)
    {
        $answer=0;
        foreach ($number as $n)
        {
            echo"$n +$answer".'<br>';
            $answer+=$n;
        }
        echo $answer;
    }
    add(1,2,3,4,5);
    echo'<hr>';
    ?>
</body>
</html>