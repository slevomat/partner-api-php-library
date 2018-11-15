<?php

namespace Slevomat\Client\Response;

use Slevomat\Client\Response\Failure;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2018-11-15 at 23:34:45.
 */
class FailureTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Failure
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Failure([
            'result' => false,
            'error' => [
                'code' => 1102,
                'message' => 'Invalid token was provided.'
            ]
            ]
            , 403);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers Slevomat\Client\Response\Failure::getData
     */
    public function testGetData()
    {
        $this->object->getData();
    }

    /**
     * @covers Slevomat\Client\Response\Failure::getCode
     */
    public function testGetCode()
    {
        $this->object->getCode();
    }

    /**
     * @covers Slevomat\Client\Response\Failure::getMessage
     */
    public function testGetMessage()
    {
        $this->object->getMessage();
    }
}
