<?php

class Passada3{
    var $array3;
    var $string;

    public function passada3($mensagem){

        $this->array3 = $mensagem;

            for($i = (count($this->array3) - 1)/2 ; $i < count($this->array3) ; $i++ ){
            $this->array3[$i] = chr(ord($this->array3[$i])-1);
            }

            return $this->arr3;
        }

        public function transformaString(){

            $this->string = implode($this->arr3);

            return $this->string;

        }


    public function getArray3()
    {
        return $this->array3;
    }


    public function getString()
    {
        return $this->string;
    }