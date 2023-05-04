<?php

namespace Astronphp\Utility\Server;
use PHPUnit\Framework\TestCase;
class ServerTest extends TestCase{
    /*
    * @covers util\Server::isHttps()
    */
    public function testIsHttps(){
        $_SERVER['HTTPS'] = null;
        $this->assertFalse( (new Server)->isHttps() );
        $_SERVER['HTTPS'] = 'on';
        $this->assertTrue( (new Server)->isHttps() );
    }


}