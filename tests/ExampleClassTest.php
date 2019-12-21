<?php
use PHPUnit\Framework\TestCase; // For test

/**
 * Class ExampleClassTest
 */
class ExampleClassTest extends TestCase
{

    /**
     * testIsThereAnySyntaxError
     *
     * just a simple check to make sure your library has no syntax error.
     */
    public function testIsThereAnySyntaxError()
    {
        $class = new \mberatsanli\ComposerLibrarySkeleton\ExampleClass();
        $this->assertTrue(is_object($class));
        unset($class); // delete $class
    }

    /**
     * testPublicFunction
     *
     * just a simple return check to make sure your function is working
     */
    public function testPublicFunction()
    {
        $class = new \mberatsanli\ComposerLibrarySkeleton\ExampleClass();
        $this->assertTrue($class->publicFunction("test") == "OK");
        unset($class);
    }
}