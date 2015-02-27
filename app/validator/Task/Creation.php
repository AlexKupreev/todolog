<?php

namespace app\validator\Task;

use app\service as Service;

/**
 * Validator of Task Creation Interactor
 *
 */
class Creation extends Service\Validator
{
    /**
     * Custom validation should be here
     *
     * @return bool
     */
    public function isValid()
    {
        return FALSE;
    }

}
