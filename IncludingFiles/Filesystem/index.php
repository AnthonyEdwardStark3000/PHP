<?php

    //magic constants
    echo"magic constants".'<br>';
    echo"The directory is :". __DIR__.'<br>';
    echo"The file is :". __FILE__.'<br>';
    echo"The Line is :". __LINE__.'<br>';
    echo'<hr>';
    // create directory
    echo"create directory".'<br>';
    mkdir('test');
    echo'<hr>';

    // Rename directory
    echo"Rename directory".'<br>';
    rename('test','file');
    echo'<hr>';
    // delete directory
    echo"delete directory".'<br>';
    rmdir('file');
    echo'<hr>';
    
    // read contents from a file
    echo"read contents from a file :".'<br>';
    echo(file_get_contents('lorem.txt'));
    echo'<hr>';
    
    // file get and put contents
    echo"file get and put contents:".'<br>';
    $files=scandir('../');
    echo'<pre>';
    var_dump($files);
    echo'</pre>';
    echo'<hr>';

    // writing into a file
    echo"writing into a file".'<br>';
    file_put_contents('sample.txt','Hello is the text entered add some content here and it will get reflected in the file.');

    // read data from the url
    // echo"read data from the url".'<br>';
    // $datas=file_get_contents('path');
    // echo $datas;
    // $properArray=json_decode($datas); to decode into proper array
    // echo '<pre>';
    // var_dump($properArray);
    // echo'</pre>'; print the decoded array

    // file exists
    echo"file exists".'<br>';
    echo (file_exists('lorem.txt'));
    echo'<hr>';
    // check directory
    echo"check directory".'<br>';
    is_dir('text');
    echo'<hr>';
    
?>  