<?php
    echo"CURL".'<br>';
    $url='https://jsonplaceholder.typicode.com/users';
    $resource=curl_init($url);//curl init will return an resource
    $result=curl_exec($resource);
    $user =[
        'name'=>'suresh',
        'username'=>'stark',
        'email'=>'catchmesureshbabu8@gmail.com'
    ];

    // echo $result;
    echo'<pre>';
    var_dump($result);
    echo'</pre>'.'<hr>';
    echo"Get the status information";
    $information= curl_getinfo($resource, CURLINFO_HTTP_CODE);
    echo'<pre>';
    var_dump($information);
    echo'</pre>';
    // echo $information;
    curl_close($resource);
    echo'<hr>';
    // post request
    echo"post request".'<br>';
    $resource=curl_init();
    curl_setopt_array($resource,
    [
        CURLOPT_URL =>$url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST =>true,
        CURLOPT_HTTPHEADER =>['content-type: application/json'],
        CURLOPT_POSTFIELDS =>json_encode($user)
    ]
    );
    $result=curl_exec($resource);
    curl_close($resource);
    echo $result;

?>