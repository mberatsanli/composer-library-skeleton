<?php
namespace mberatsanli\ComposerLibrarySkeleton;

/**
 * Class ExampleClass
 *
 * @package mberatsanli\ComposerLibrarySkeleton
 */
class ExampleClass
{
    /**
     * define here what this variable
     * @var string
     */
    public $publicProperty = "";

    /**
     * define here what this variable
     * @var string
     */
    private $privateProperty = "";

    /**
     * define here what this variable
     * @var array
     */
    public $array = [];

    /**
     * Example public function
     *
     * @param string $param
     * @return string
     */
    public function publicFunction(string $param): string
    {
        if($param == "test")
        {
            return "OK";
        }
        return $param;
    }
}