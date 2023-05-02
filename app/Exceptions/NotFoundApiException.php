<?php

namespace App\Exceptions;

class NotFoundApiException extends ApiException
{
    public function __construct(string $message)
    {
        parent::__construct($message);
        $this->status = 404;
    }
}
