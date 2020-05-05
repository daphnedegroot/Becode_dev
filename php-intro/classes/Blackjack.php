<?php

class Blackjack{

    public $card = [];
    public $score = 0;
    public $turn = true;

    public function hit(){
        $this->card[] = rand(1,11);
        $this->score = array_sum($this->card);
    }

    public function stand(){
        $this->turn = false;
    }

    public function surrender(){
        $_SESSION['message'];
    }
}