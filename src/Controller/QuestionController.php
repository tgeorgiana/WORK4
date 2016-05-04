<?php

namespace Controller;

use Controller\QuizController as QuizController;
use Utils\Request as Request;
use Utils\MyException;


class QuestionController {
    
    private $controller;
    private $request;
    
    public function __construct(QuizController $controller, Request $request) {
        $this->controller=$controller;
        $this->request = $request;
    }
    
    public function addQuestion()
    {
        $id = $this->request->post('id');
        $question = $this->request->post('question');
        $answers = $this->request->post('answers');
        $correctAnswerIndex = $this->request->post('correctAnswerIndex');
        
        try
        {
           $this->controller->addQuestion($id, $question, $answers, $correctAnswerIndex);
        } catch (Exception $e) {
            
            echo '<script type="text/javascript">alert("' . $e->getMessage() . '");</script>';

        }
    }


}
