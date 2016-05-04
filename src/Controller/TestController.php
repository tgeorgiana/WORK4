<?php


namespace Controller;

use Controller\QuizController;

use Utils\Request;

use Utils\MyException;

class TestController {
    
    
    private $controller;
    private $request;
    
    public function __construct(QuizController $controller, Request $request) {
        $this->controller = $controller;
        $this->request = $request;
    }
    
    public function addTest()
    {
        $testId = $this->request->post('testId');
        $title = $this->request->post('title');
        $questions = $this->request->post('questions');
       
        
        try{
    

            $this->controller->addTest($testId, $title, $questions);
            
        } catch (MyException $e) {
            
            echo '<script type="text/javascript">alert("' . $e->getMessage() . '");</script>';
            header("Refresh:2; url=view/viewAddTest.html");
            exit();
        }


        
    }
    
    public function loadTest()
    {
     
        $this->controller->loadTests();
    }
    
    public function delete()
    {
        $id= $this->request->post('testId');
        
        try{
            
             $this->controller->deleteTest($id);
        } catch (Exception $e) {

            echo '<script type="text/javascript">alert("' . $e->getMessage() . '");</script>';
        }
       
        
    }
    
    public function result()
    {
        $results=$_POST;
        echo $this->controller->results($results);
        
        
    }

}

