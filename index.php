<?php

use living\Test;

include_once "./Helpers/ImageUpload.php";
include_once "./Test.php";
include_once "./Bikash.php";

// spl_autoload_register(function($class){
//     include_once $class.".php";
// });

class Human{

    use ImageUpload;

    public static $votingAge = 18;
    public static $ai = "Akhi";
    
function __construct(private $UserName, private $age)
{
    $this->UserName = $UserName;
    $this->age = $age;
}


public function uploadProfileImage(){
    $this->uploadProfile();
}

    public function getname(){
        
        echo "I am $this->UserName";
        echo "<br>";
        echo "I am $this->age";
    }

    public static function canVote(){
    echo " yes if you are ". self::$votingAge .", you can vote";
    }
    
    public static function greeting(){
        echo " Hello There";
          }
};

$fname = new  Human("fatema",18);
$fname->getname();

echo "<br>";

$lname = new Human("musa", 27);
$lname->getname();
echo "<br>";


class AI extends Human{
    
    public static $ai = "Jannat";

    public static function greeting(){
        echo " Hello There ," . self::$ai;
        echo "<br>";
        echo " Hello There ," . parent::$ai;
          }

}
$vote = new Human("Farhan", 2);
echo Human::$votingAge;
echo "<br>";

echo AI::greeting();


class Image {

    use ImageUpload;
    public function uploadProfileImage(){
       $this->uploadProfile();
    }
}

$profile = new Image("faria" , 20);
echo $profile->uploadProfile();


$test = new living\Test();
echo $test->getTest();


?>