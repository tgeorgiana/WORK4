<?php

session_start();
include __DIR__ . '/autoload.php';
$session = new Utils\Session();
$req = new Utils\Request();
$opt = $req->get('handler');


switch ($opt) {
    case 'auth' :
        $repo = new Repository\UserRepository('users.json');
        $valid = new Utils\Validate();
        $controller = new Controller\UserController($repo, $valid);
        $auth = new Controller\Authentification($controller, $req, $session);

        switch ($req->get('action')) {
            case 'register':

                $auth->register();
                header("Location: view/viewlogin.html");
                exit();
                break;
            case 'login':
                $auth->login();
                header("Location: view/profile.php");
                exit();
                break;
            case 'logoutUser':
  
                $auth->logoutUser();
                exit();
                break;
            case 'loginAdmin':
                $auth->loginAdmin();
                header("Location: view/profileAdmin.php");
                exit();
                break;
            case 'logoutAdmin':
                $auth->logoutAdmin();
                exit();
                break;
            default:
                header("Location: view/viewlogin.html");
                exit();
                break;
        }

    case 'quiz':
            $questionRepository = new Repository\QuestionRepository('questions.json');
            $testRepository = new Repository\TestRepository('tests.json');
            $valide = new Utils\Validate();
            $controller = new Controller\QuizController($testRepository, $questionRepository);
            $editTest = new Controller\TestController($controller, $req);
            $editQuestion = new Controller\QuestionController($controller, $req);
        switch ($req->get('action')) {
            case 'mytests':
                echo "my testsssssssssss";
                exit();
                break;

            case 'showTests':
                include "view/viewUserTest.php";
                exit();
                break;
            case 'takeTest':
                include "view/makeUserQuestion.php";
                exit();
                break;
            case 'submitTest':
                $editTest->result();
                exit();
                break;
            default :
                echo "smecherie";
                exit();
                break;
        }
        
    case 'edit':
            $questionRepository = new Repository\QuestionRepository('questions.json');
            $testRepository = new Repository\TestRepository('tests.json');
            $valide = new Utils\Validate();
            $controller = new Controller\QuizController($testRepository, $questionRepository);
            $editTest = new Controller\TestController($controller, $req);
            $editQuestion = new Controller\QuestionController($controller, $req);
        switch ($req->get('action')) {
            
            case 'addTestTemplate':
                header("Location: view/viewAddTest.html");
                exit();
                break;

            case 'addTest':
                $editTest->addTest();
                header("Location: view/viewAddTest.html");
                exit();
                break;
            case 'loadTest':
                include "view/loadTests.php";
                exit();
                break;
            case 'makeQuestion':
                include 'view/makeQuestion.php';
                exit();
                break;
            case 'deleteTestTemplate':
                header("Location: view/viewDeleteTest.php");
                exit();
                break;
            case 'deleteTest':
                $editTest->delete();
                header("Location: view/viewDeleteTest.php");
                exit();
                break;
            case 'addQuestionTemplate':
                header("Location: view/viewAddQuestion.php");
                exit();
                break;
            case 'addQuestion':
                $editQuestion->addQuestion();
                header("Location: view/viewAddQuestion.php");
                exit();
                break;                
            default :
                echo "smecherie";
                exit();
                break;
        }
    default:

        if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            header("Location: view/profile.php");
            exit();
            break;
        }
        else if (isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {
            header ("Location: view/profileAdmin.php");
            exit(); 
            break;
        }
        else {
            header("Location: view/viewlogin.html");
            exit();
             break;
        }

}









