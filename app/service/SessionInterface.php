<?php

namespace app\service;

/**
 * Session Service Interface
 */
interface SessionInterface
{
    /**
     * Sets signed in user ID
     * @param int $userId ID of logged in user
     */
    public function setLoggedInUserId($userId);

    /**
     * Gets signed in user ID
     * @return int Signed in user ID
     */
    public function getLoggedInUserId();

    /**
     * Cleans th session
     */
    public function clean();
}
