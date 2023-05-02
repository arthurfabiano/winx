<?php

namespace App\Traits;

use App\Exceptions\ApiException;

trait ApiTrait
{
    protected function validateDate(string $date): void {
        if (!preg_match('/^\d{2}\/?\d{2}\/?\d{4}$/', $date)) {
            throw new ApiException("Dada informada não é compativel: dd/mm/aaaa");
        }
    }

    /***
     * @param mixed|null $value
     * @return bool
     * @throws ApiException
     */
    protected function getBoolean(mixed $value): bool
    {
        if(is_bool($value)) return $value;
        if(is_null($value)) return false;

        switch($value) {
            case '1':
            case 'true':
                return true;
            case '0':
            case 'false':
                return false;
            default: throw new ApiException("Valor informado não é um boleando: {$value}");
        }
    }
}
