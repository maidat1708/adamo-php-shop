<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CustomNameRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //

        if (!is_string($value) || !preg_match('/^[A-Z][a-zA-Z0-9]*$/', $value)) {
            // $fail("The $attribute must be a single capitalized word"); // cach 1
            $fail('The :attribute must be a single capitalized word'); // cach 2
        }

        if (!str($value)->endsWith('a')) {
            $fail('The :attribute must end with a');
        }

    }
}
