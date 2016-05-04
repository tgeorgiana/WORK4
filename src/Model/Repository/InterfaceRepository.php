<?php

namespace Repository;

interface InterfaceRepository
{
    public function found($id);
    
    public function save($entity);
   
    public function loadAll();
    
    
}