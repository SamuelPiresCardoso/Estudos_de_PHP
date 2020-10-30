<?php

class Passada2{
    var $array2;     
    var $arr;



    public function passada2($mensagem){
        $arr = $mensagem;

        $array2 = array_reverse($arr);      

        return $array2;
    }

    public function getArray2()
    {
        return $this->array2;
    }
} 