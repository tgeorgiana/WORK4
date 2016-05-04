<?php

namespace Controller;

class ResultController {

    private $repository;
    private $questionRepository;
    private $testRepository;
    
    public function __construct(ResultRepository $repository, QuestionRepository $questionRepository, TestRepository $testRepository) {
        $this->repository = $repository;
        
    }
    
    
    public function addResult($user,$test,$score)
    {
        
        
    }

}
