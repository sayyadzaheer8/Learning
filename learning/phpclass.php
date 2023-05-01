<?php


class friends {

    public $name;
    public $city;

    public $profession;


    public function __construct($name,$city,$profession) 
    {

        $this->name = $name;
        $this->city = $city;
        $this->profession = $profession;
    }


    public function friendsDetail() 
    {
        echo "name is"." " .$this->name. " and he lives in" ." ". $this->city." ". "and by profession he is "." ".$this->profession . ".";
    }
   


}

$friends = new friends("zaheer","Las vegas","manager");
$friends->friendsDetail();
?>