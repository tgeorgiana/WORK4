<?php

namespace Entity;

class Question {

    private $id;
    private $question;
    private $answers;
    private $correctAnswerIndex;

    function __construct($id = null, $question = null, $answers, $correctAnswer) {
        $this->id = $id;
        $this->question = $question;
        $this->answers = $answers;
        $this->correctAnswer = $correctAnswer;
    }

    function serialize() {
        return array(
            "id" => $this->id,
            "question" => $this->question,
            "answers" => $this->answers,
            "correctAnswer" => $this->correctAnswer
        );
    }

    function getID() {
        return $this->id;
    }

    function setID($id) {
        $this->id = $id;
    }

    function getQuestion() {
        return $this->question;
    }

    function setQuestion($question) {
        $this->question = $question;
    }

    function getAnswers() {
        return $this->answers;
    }

    function setAnswers($answers) {
        $this->answers = $answers;
    }
    
    function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }
    
    function setCorrectAnswer($index)
    {
        $this->correctAnswer = $index;
    }

}
