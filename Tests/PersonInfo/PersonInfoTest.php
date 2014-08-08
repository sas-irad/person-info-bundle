<?php

namespace SAS\IRAD\PersonInfoBundle\Tests\PersonInfo;

use PHPUnit_Framework_TestCase;
use SAS\IRAD\PersonInfoBundle\PersonInfo\PersonInfo;

class PersonInfoTest extends PHPUnit_Framework_TestCase {
    
    public function testAll() {
    
        // test initialization
        $params = array('penn_id'    => '99999999',
                        'pennkey'    => 'bfrank',
                        'first_name' => 'Ben',
                        'last_name'  => 'Franklin');
        
        $info = new PersonInfo($params);
        
        $this->assertEquals($params['penn_id'], $info->getPennId());
        $this->assertEquals($params['pennkey'], $info->getPennkey());
        $this->assertEquals($params['first_name'], $info->getFirstName());
        $this->assertEquals($params['last_name'],  $info->getLastName());
        
        // now test getters and setters (writing this for thoroughness)
        $info->setPennId('88888888');
        $this->assertEquals('88888888', $info->getPennId());

        $info->setPennkey('gwash');
        $this->assertEquals('gwash', $info->getPennkey());

        $info->setFirstName('George');
        $this->assertEquals('George', $info->getFirstName());
        
        $info->setLastName('Washington');
        $this->assertEquals('Washington', $info->getLastName());
    }
}