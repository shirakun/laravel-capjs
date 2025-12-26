<?php
namespace Shirakun\LaravelCapjs\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Shirakun\LaravelCapjs\Facades\LaravelCapjs;

class CapjsCheck implements ValidationRule
{
    /**
     * Run the validation rule.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $response = LaravelCapjs::validate($value);

        if (!$response['success']) {
            $fail(__(config('capjs.error_messages.capjs_check_message')));
        }
    }
}
