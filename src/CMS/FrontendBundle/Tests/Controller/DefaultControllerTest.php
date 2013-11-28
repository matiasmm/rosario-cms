<?php

namespace CMS\FrontendBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function tIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertTrue($crawler->filter('html:contains("Menu")')->count() > 0);
    }

    public function test_pedo(){
        // Create a mock for the Observer class,
        // only mock the update() method.
        $handler = $this->getMock('ClaseQueTodaviaNoHice', array('getContent'));

        // Set up the expectation for the update() method
        // to be called only once and with the string 'something'
        // as its parameter.
        $handler->expects($this->once())
            ->method('getContent')
            ->will($this->returnValue('something'));



        $this->assertEquals($handler->getContent(), 'something');

    }
}
