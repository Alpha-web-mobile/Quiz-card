<?php

namespace Alpha\Poo;

class Card
{

    // Je crée desux attributs /propriétés 
    private string $question;
    private string $answer;


    // Getter
    public function getQuestion()
    {
        return $this->question;
    }
    // Setter
    public function setQuestion(string $questionValue)
    {

        if ($questionValue && $questionValue !== "") {
            return $this->question = $questionValue;
        }
        return;
    }



    // Getter
    public function getAnswer()
    {
        return $this->answer;
    }
    //   Setter 
    public function setAnswer(string $answerValue)
    {
        if ($answerValue && $answerValue !== "") {
            return $this->answer = $answerValue;
        }
        return;
    }
}
