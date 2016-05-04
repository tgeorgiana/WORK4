<?php

namespace Controller;

use Repository\TestRepository as TestRepository;
use Repository\QuestionRepository as QuestionRepository;
use Entity\Question as Question;
use Entity\Test as Test;
use Utils\MyException;

class QuizController {

    private $testRepository;
    private $questionRepository;

    public function __construct(TestRepository $testRepository, QuestionRepository $questionRepository) {
        $this->testRepository = $testRepository;
        $this->questionRepository = $questionRepository;
    }

    public function addTest($testId, $title, $questions) {


        if ($this->testRepository->found($testId) !== "") {
            throw new MyException("The test already exist!");
        }

        $question = explode(',', $questions);

        foreach ($question as $data) {

            if ($this->questionRepository->found($data) === "")
                throw new MyException("The question you want to use don't exist. Please select another question");
        }



        $test = new Test($testId, $title, $question);
        $this->testRepository->save($test);
    }

    public function loadTests() {
        $tests = $this->testRepository->loadAll();
        foreach ($tests as $test) {

            echo $test['title'];
        }
    }

    public function deleteTest($testId) {

        if ($this->testRepository->found($testId) === "") {
            throw new MyException("The test that you want to delete don't exist");
        }

        $this->testRepository->delete($testId);
    }

    public function addQuestion($id, $question, $answers, $correctAnswerIndex) {
        if ($this->questionRepository->found($id) !== "") {
            throw new MyException("The question already exist!");
        }

        $questions = new Question($id, $question, $answers, $correctAnswerIndex);
        $this->questionRepository->save($questions);
    }

   public function results($results)
   {
       $questionNumber = 0;
       $correctResults=0;
       foreach($results as $key=>$value)
       {
           
           $question = $this->questionRepository->found("$key");
           if($question !== "")
           {    
               $questionNumber=$questionNumber+1;
               if($question['correctAnswer'] === $value)
                   $correctResults=$correctResults+1;
           }
         
           
       }

       $points=$correctResults/$questionNumber*100 . '%';
       return $points;
   }
    
}
