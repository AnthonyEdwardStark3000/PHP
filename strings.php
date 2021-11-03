<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
    echo("Strings function").'<hr>';
    $name='Suresh Babu';
    $welcome='hello';
    echo('$name $welcome').'<hr>';
    echo("$name $welcome").'<hr>';
    echo"Hello"."World".'<hr>';
    echo'Hello'.'World'.'<hr>';
    echo trim($name).'<hr>';
    echo ltrim($name).'<hr>';
    echo rtrim($name).'<hr>';
    echo strtoupper($name).'<hr>';
    echo strtolower($name).'<hr>';
    echo ucwords($name).'<hr>';
    echo strpos($name,'Babu').'<hr>';
    echo substr($name,7).'<hr>';
    echo str_replace('Suresh','Anthony Edward Stark',$name).'<hr>';
    echo str_ireplace('Suresh','Anthony Edward Stark',$name).'<hr>';//replaces the word by ignoring the case
    // Multiline text and line breaks
    $longText="
    Hello , My name is $name and

    I am an awesome person
    The <b>problems</b> with me is my <i>badluck</i> and <b>laziness</b>";
    echo "**Multiple line texts**".'<hr>';
    echo "1)$longText".'<br>'.'<hr>';
    echo nl2br("2)".$longText).'<br>'.'<hr>';
    echo htmlentities("3)".$longText).'<br>'.'<hr>';
    echo nl2br(htmlentities("4)".$longText)).'<br>'.'<hr>';
    // echo html_entity_decode('"2)"');
    ?>
</body>
</html>