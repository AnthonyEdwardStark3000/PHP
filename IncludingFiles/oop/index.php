<?php
    echo"object oriented programming";
    // class and instance
    echo"class and instance".'<br>';
    class suresh
    {
        public $name;
        public $age;
        public $hobbies;
        private $mobilenumber;
        public static $education='MCA';
    }
    // public static $counter=0;

    // public function __construct()
    //     {
    //         self::$counter++;
    //         echo"Constructor";
    //     }
        
    $s= new suresh();
    $s->name='Stark';
    $s->age='21';
    $s->hobbies='coding';
    echo'<pre>';
    var_dump($s);
    echo'</pre>';
    echo $s->name;
    echo'<hr>';
    
    // create class in a class
    echo"create class in a class :".'<br>';
    $new = new suresh();
    $new->name='Suresh';
    echo $new->name;
    echo'<hr>';

    // Accessing static member
    echo"Accessing static member".'<br>';
    echo suresh::$education;
    echo'<hr>';

?>