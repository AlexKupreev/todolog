<?php

namespace app\service;

/**
 * Base Response class
 *
 */
abstract class Response {

    const OK = 200;
    const ERROR_VALIDATION = 400;
    const ERROR_ACCESS = 401;
    const ERROR = 500;

    /**
     * Response status from available constants
     * @var int
     */
    protected $status = self::ERROR;

    /**
     * Detailed errors
     * @var array
     */
    protected $errorArray = [];

    /**
     * Set status as OK
     */
    public function setStatusOk()
    {
        $this->status = self::OK;
    }

    public function isStatusOk()
    {
        return (bool)($this->status === self::OK);
    }
}
