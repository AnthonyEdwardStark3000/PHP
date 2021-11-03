<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    echo"Arrays funtions basic concepts".'<br>'.'<hr>';
    // Creation of an array
    $fruits=["Banana","Apple","Orange"];
    echo"Using var dump to print the array";
    var_dump($fruits).'<hr>';
    echo'<hr>';
    // Access an element by index
    echo"Access by index: $fruits[1]";
    
    // setting by index
    $fruits[0]="Strawberry";
    echo'<pre>'; 
    var_dump($fruits).'<hr>';
    echo'</pre>'; 
    echo'<hr>';

    //  check if an element is present
echo(isset($fruits[13]));//returns am boolean value

// Appending
    $fruits[]="Watermelon";
    echo '<pre>';
    var_dump($fruits);
    echo '</pre>';
    echo '<hr>';

    // find length
    echo("Length of the array: ".count($fruits));
    echo"<hr>";
    
    // Append using push
    array_push($fruits,'chocolate');
    echo'<pre>';
    var_dump($fruits);
    echo'</pre>';
    echo'<hr>';
    
    // Remove from end
    echo"Remove an element using pop";
    array_pop($fruits);
    echo'<pre>';
    var_dump($fruits);
    echo'</pre>';
    echo'<hr>';
    
    // Add element at the beginning of the array
    echo"Adding element at the beginning of the array";
    array_unshift($fruits,'Afruit');
    echo'<pre>';
    var_dump($fruits);
    echo'</pre>';
    echo'<hr>';
    
    // Remove from the first position
    echo"Removing element at the beginning of the array";
    array_shift($fruits);
    echo'<pre>';
    var_dump($fruits);
    echo'</pre>';
    echo'<hr>';
    
    // split string into array
    echo"split string into array".'<br>';
    $demostring="Apple,Orange,Pineapple,Guava";
    echo $demostring;
    
    echo'<pre>';
    var_dump(explode(",",$demostring));
    echo'</pre>';
    echo'<hr>';

    // combine arrays to string
    echo"combine arrays to string :".'<br>';
    echo(implode("&",$fruits)).'<hr>';

    $fruits=["Apple","Orange","Banana","Watermelon"];
    // check if an element is present in an array
    echo"check if an element is present in an array".'<br>';
    echo'<pre>';
    var_dump($fruits);
    echo"Presence of apple :";
    var_dump(in_array("Apple",$fruits));
    echo'</pre>';
    echo'<hr>';
    
    // search for the index of an element in the array
    echo"search for the index of an element in the array";
    echo'<pre>';
    var_dump($fruits);
    echo"The presence of the Apple:";
    var_dump(array_search("Apple",$fruits));
    echo'</pre>';
    echo'<hr>';
    
    // Merging two arrays
    echo"Merging two arrays".'<br>';
    $vegetable=["Potato","Brinjal","Onion"];
    echo'<pre>';
    var_dump(array_merge($fruits,$vegetable));
    // var_dump([...$fruits,...$vegetable]);
    echo'</pre>';
    echo'<hr>';
    
    // Sorting the array
    echo"Sorting the array";
    echo'<pre>';
    var_dump($fruits);
    echo'</pre>';
    echo'<pre>';
    sort($fruits);
    var_dump($fruits);
    echo'</pre>';
    echo'<hr>';
    
    // Associative array
    echo"Associative array";
    $me=[
        'name'=>'Suresh',
        'Age'=>21,
        'Hobbies'=>'Coding',
        'Dream'=>'Become next musk'
    ];
        echo'<pre>';
        var_dump($me);
        echo'</pre>';
        echo'<hr>';
        
        // Get element by key
        echo"Get element by key :  ";
        echo $me['name'].'<br>';
        // echo $me['address'].'<br>'; //checking with non existing key

        // set element to the key
        echo"set element to the key";
        $me["Future"]="Greatest person ever existed";
        echo '<pre>';
        var_dump($me);
        echo'</pre>';
        echo'<hr>';

        // Null coaleasing assignment
        echo"Null coaleasing assignment".'<br>';
        $me['address']??='unknown';
        echo" Accessing my address".'<br>';
        echo $me['Address'].'<br>';
        echo'<hr>';

        // check specific key
        // print keys of the array
        echo"print keys of the array".'<br>';
        echo'<pre>';
        var_dump(array_keys($me));
        echo'</pre>';
        echo'<hr>';
        
        // Print values of array
        echo"Print values of array".'<br>';
        echo'<pre>';
        var_dump(array_values($me));
        echo'</pre>';
        echo'<hr>';
        
        
        // Sort values of array
        echo"Sort values of array".'<br>';
        echo'<pre>';
        ksort($me);//ksort for keys and asort for sorting by values
        var_dump($me);
        echo'</pre>';
        echo'<hr>';
        
        // Two dimensional array or associative arrays
        echo"Two dimensional array".'<br>';
        $tasks=[
            ['title'=>'study',
            'completed'=>true
        ],
        ['title'=>'practice',
        'completed'=>false
        ]
    ];
    echo'<pre>';
    var_dump($tasks);
    echo'</pre>';
    echo'<hr>';
    
    ?>
</body> 
</html>