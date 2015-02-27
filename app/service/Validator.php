<?php

namespace app\service;

/**
 * Validator Service handles validation workflow
 *
 */
abstract class Validator
{
    /**
     * Array of registered Errors
     * @var array
     */
    protected $_errors = [];

    /**
     * Custom validation should be here
     *
     * @return bool
     */
    abstract public function isValid();

    public function getErrors()
    {
        return $this->_errors;
    }

    public function addError(array $fields, $message)
    {
        
    }
}
