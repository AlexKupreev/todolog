<?php

namespace app\service;

/**
 * Abstract Request class providing common useful methods
 *
 */
abstract class Request
{

    /**
     * Extracts value from array
     * @param array $data
     * @param string $param
     * @param mixed $default
     */
    protected function extractFromArray(array $data, $param, $default = null)
    {
        return empty($data[$param]) ? $default : $data[$param];
    }
}
