<?php

namespace App\Rules;

use App\Services\CepService;
use Illuminate\Contracts\Validation\Rule;

class CepRule implements Rule
{
    public $cepService;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(CepService $cepService)
    {
        $this->cepService = $cepService;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $this->cepService->validar($value); // If is valid return true
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message. cep passado invalido';
    }
}
