<?php
class Event{
    
    public $listeners = []; 

    public function listen($name, $cb, $once = false){
        $this->listeners[$name][] = [ 
            "callback" => $cb,
            "once" => $once
        ];  
    }   

    public function remove($name, $index = null){
        if(isset($this->listeners[$name]) && !empty($this->listeners[$name])){
            if(is_numeric($index)){
                unset($this->listeners[$name][$index]);
            }else{
                unset($this->listeners[$name]);
            }   
        }   
    }   
    
    public function trigger($name){
        $args = func_get_args();
        var_dump($args);
        array_shift($args);
        var_dump($args);
        if(!empty($this->listeners[$name])){
            forEach($this->listeners[$name] as $v){
                call_user_func_array($v['callback'], $args);
            }   
        }   
    }   

}

$event = new Event();
$event->listen("walk", function(){
    echo "walk cb1\n";
});
$event->listen("walk", function($name, $name2){
    echo "walk cb2, $name, $name2\n";
});
$event->trigger("walk", "fly", "lijinling");
//$event->trigger("walk");
//echo "remove a event:\n";
//$event->trigger("walk");
