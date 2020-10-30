<?php

class Passada1{
    
    var $array;

    public function passada1($mensagem){

     $t = str_split($mensagem);


    for($i=0 ; $i < count($t); $i++){
       if(ctype_alpha($t[$i])==true){

        $t[$i] = chr(ord($t [$i])+3);
       }     
    }     
     
    return $t;

    }
    public function getArray()
    {
        return $this->t;
    }
} 
