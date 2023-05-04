<?php

namespace Astronphp\Utility\DateTime;
use PHPUnit\Framework\TestCase;
class DateTimeTest extends TestCase{


    /*
    * @covers util\DateTime::dateBR()
    */
    public function testDateBR(){
        $this->assertEquals(new \DateTime('1992-08-14'),(new DateTime('14/08/1992'))->getDateOBJ());
	}

	/*
    * @covers util\DateTime::subYear()
    */
    public function testSubYear(){
        $this->assertEquals(new \DateTime('1991-08-14'),(new DateTime('14/08/1992'))->subYear(1));
	}

	/*
    * @covers util\DateTime::addYear()
    */
    public function testAddYear(){
        $this->assertEquals(new \DateTime('1993-08-14'),(new DateTime('14/08/1992'))->addYear(1));
	}

}