<?php

class Admin{
    function inherit($name){
        return "your name is ${name}";
    }

    public function html(){
        echo 'html';
    }

    protected function javascript(){
        echo 'javascript';
    }

    private function php(){
        echo 'php';
    }
   
}

class User extends Admin{
    public function laravel(){
        echo 'laravel';
    }
    protected function bootstrap(){
        echo 'bootstrap';
    }
    private function python(){
        echo 'python';
    }

    function many(){
        $this-> html();
    }
    function boot(){
        $this-> bootstrap();
    }
}
















