<?php


namespace App\classes;


class OddEven
{
    public $testingNumber, $result;

    public function __construct($post)
    {
        $this->testingNumber = $post['testing_number'];
    }
    public function getResult()
    {
        if ($this->testingNumber % 2 == 0){
            $this->result = "$this->testingNumber is Even Number";
        }
        else {
            $this->result = "$this->testingNumber is Odd Number";;
        }
        return $this->result;
    }

}