<?php
///**
//* person class
//*/
class Person{

    private $name = '';

    public function __construct($name){
        $this->name = $name;
    }

    public function say($p){
        echo "say: $this->name\n" . "$p\n";
    }
}

$p = new ReflectionClass("Person");
echo $p->getDocComment();
$methods = $p->getMethods();
forEach($methods as $m){
    //$m->invokeArgs($p->newInstance("fly"), []); //这里如果是空数组的话就会报错。
    $m->invokeArgs($p->newInstance("fly"), ["adfa"]);
    //$m->invoke($p->newInstance("fly"), "adfa");
}


echo "\n";

