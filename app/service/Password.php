<?php

namespace app\service;

/**
 * Password processing Service
 */
class Password
{

    /**
     * Hash password
     * @param string $rawPassword
     * @return string
     */
    public function hash($rawPassword)
    {
        // TODO use more secure hashing
        $hashedPassword = sha1($rawPassword);

        return $hashedPassword;
    }
}
