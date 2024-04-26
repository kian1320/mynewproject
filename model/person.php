<?php
//this is person model
class Person
{
    var $id;
    var $fname;
    var $lname;
    var $age;

    function __construct()
    {
        $this->id = 658113;
        $this->fname = "Dhan";
        $this->lname = "Alamo";
        $this->age = 23;
    }

    //setter or mutator
    function setId($id)
    {

        $this->id = $id;
    }
    //getter or accessor
    function getId()
    {
       return $this->id; 
    }

    function setFname($fname)
    {
        $this->fname = $fname;
    }
    function getFname()
    {
        return $this->fname;
    }

    function setLname($lname)
    {

        $this->lname = $lname;
    }
    //getter or accessor
    function getLname()
    {
       return $this->lname; 
    }

    function setAge($age)
    {
        $this->age = $age;
    }

    function getAge()
    {
        return $this->age;
    }


}

?>