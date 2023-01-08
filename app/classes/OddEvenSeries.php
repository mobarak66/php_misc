<?php


namespace App\classes;


class OddEvenSeries
{
    public $firstNumber, $lastNumber, $result, $choice;

    public function __construct($post)
    {
        $this->firstNumber = $post['first_number'];
        $this->lastNumber = $post['last_number'];
        $this->choice = $post['choice'];
    }

    public function getResult()
    {
        switch ($this->choice) {
            case 'Odd':
                if ($this->firstNumber % 2 != 0){
                    for ($this->i = $this->firstNumber; $this->i<=$this->lastNumber; $this->i+=2)
                    {
                        $this->result .= $this->i . ' ';
                    }
                    return $this->result;
                }
                else return $this->result = "Please input odd first number!";

            case 'Even':
                if ($this->firstNumber % 2 == 0){
                    for ($this->i = $this->firstNumber; $this->i<=$this->lastNumber; $this->i+=2)
                    {
                        $this->result .= $this->i . ' ';
                    }
                    return $this->result;
                }
                else return $this->result = "Please input even first number!";
        }

    }



}