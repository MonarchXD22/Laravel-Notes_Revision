<?php

namespace App\Rules;
// here you go with your custom validation rules
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class uppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(strtoupper($value)!=$value){
            $fail('the :attribute musr be in uppercase');
        }
    }
}
