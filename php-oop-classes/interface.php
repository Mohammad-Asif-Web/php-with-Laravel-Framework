<?php

/* interface rules:
1. works as abstract
2. write interface instead of class
3. declare the function into it, don't implement otherwise it will throw error
4. don't use access modifier like private, protected, default it public
5. don't write any property like declare variables
6. don't create any object otherwise it will throw error

benefits: we can access so many classes into on class. In inhertance only we can access one class but in the interface we can access multiple classes.

implementations: write implements which class we are accessing. in the implements function here we can declare and initial the variable and we can add access modifiers. here we can make objects for each one function methods. In one implements class we can access al interface classes and we can make a single object.

*/

// making interface
// don't declare any variables and properties as we do in __constructor function
interface test1{
    function sum($a, $b);
}

interface test2{
    function sub($c, $d);
}

// interface classes are implementing in this class, as inheritance do
// here we can declare variables and properties
// here we can not make _construct function but we can make function methods like div function as we made in the below
class childClass implements test1, test2{

    public $name;
    public $id;

    public function sum($a, $b){
        return 'The sum is '. $a + $b;
    }
    public function sub($c, $d){
        return 'The sub is '. $c - $d;
    }
    public function div($e, $f){
        $this->name = $e;
        $this->id = $f;
        $res = $this->name / $this->id;
        return 'the division is '.$res;
    }
}

// making object for sum
$sum = new childClass;
echo $sum->sum(10, 20);
echo '<br>';

// making object for sub
$sub = new childClass;
echo $sub->sub(50, 10);
echo '<br>';

// making object for div
$div = new childClass;
echo $div->div(50, 10);


