<?php


namespace App\classes;


class WordCharacterCount
{
    public $inputSentence;

    public function __construct($post)
    {
        $this->inputSentence = $post['test_sentence'];
    }
    public function getResult()
    {
        return $this->inputSentence = 'Total words are '. str_word_count($this->inputSentence) .' & Total characters are '.strlen($this->inputSentence);

    }

}