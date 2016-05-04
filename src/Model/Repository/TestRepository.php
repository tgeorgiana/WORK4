<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Repository;

use Repository\InterfaceRepository as InterfaceRepository;

class TestRepository implements InterfaceRepository {
    
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
        
        /* @var $entity Entity\Test */
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
    
    
    public function delete($id)
    {

        
        $content = json_decode(file_get_contents($this->file),true);
        
        foreach($content as $key=>$value)
        {
 
            if($value['id'] === $id)
            {
                
                unset($content[$key]);
        
            }
        }
        
        $content = array_values($content);
        
        $content = json_encode($content);

        file_put_contents($this->file,$content);

    }
    
    
    
}
