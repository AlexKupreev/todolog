<?php

namespace app\mock\service;

use app\service as Service;

/**
 * Service to handle sessions
 */
class Session implements Service\SessionInterface
{
    /**
     * Mock session storage
     * @var array
     */
    protected static $session = [];

    /**
     * {@inheritDoc}
     */
    public function setLoggedInUserId($userId) {
        self::$session['userId'] = $userId;
    }

    /**
     * {@inheritDoc}
     */
    public function getLoggedInUserId() {
        if (empty(self::$session['userId'])) {
            return NULL;
        }

        return (int)self::$session['userId'];
    }

    /**
     * {@inheritDoc}
     */
    public function clean() {
        self::$session = [];
    }
}
