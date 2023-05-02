<?php

namespace App\Exceptions;

use Exception;

class ApiException extends Exception
{
    public $status;
    public function __construct(string $message)
    {
        parent::__construct($message);
        $this->status = 400;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
