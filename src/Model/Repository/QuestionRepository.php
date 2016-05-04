<?php

namespace Repository;

use Repository\InterfaceRepository as InterfaceRepository;

class QuestionRepository implements InterfaceRepository
{
    private $file;
    
    public function __construct($file) {
        $this->file = $file;
    }
    
    
    public function found($id)
    {
        $json = json_decode(file_get_contents($this->file),true);
   
        foreach($json as $data)
        {
            if($data['id'] === $id)
            {
                return $data;
            }
        }   
        return "";

    }
    
    public function save($entity)
    {
        
        /* @var $entity Entity\Question */
        $content = json_decode(file_get_contents($this->file),true);
        
        $content[] = $entity->serialize();
        
        $content = json_encode($content);
        
        file_put_contents($this->file,$content);
        
        
    }
    
    public function loadAll()
    {
        $file = json_decode(file_get_contents($this->file),true);
        
        return $file;
    }
    
}