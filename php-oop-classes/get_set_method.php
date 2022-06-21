<?php

// get method gets the value -- it makes visible to a private class
class find{
    private $arr = ['name' =>'Asif', 'age'=>28, 'passion'=>'developer'];

    // the array_key_exists method has two paramer. first parameter takes a key and second paramer search that key if it is exists or not.
    public function __get($key)
    {
        if(array_key_exists($key, $this->arr)){
            return $this->arr[$key];
        }
        else{
            echo "This key ($key) is not defined";
        }
    }
}

$get = new find();
// the defined array
echo $get->name;
echo $get->age;

// the undefined array
echo $get->salary;


// set method sets a value-- automaticly this will run if user want to set some non existing or private property. it takes two parameter. first one $property, second is $value.



