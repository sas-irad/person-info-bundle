<?php

namespace SAS\IRAD\PersonInfoBundle\PersonInfo;


interface PersonInfoInterface {
    
    public function getPennkey();
    public function getPennId();
    public function getFirstName();
    public function getLastName();
    
}