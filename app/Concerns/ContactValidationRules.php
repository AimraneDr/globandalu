<?php

namespace App\Concerns;

use Illuminate\Contracts\Validation\ValidationRule;

trait ContactValidationRules
{
    /**
     * Validation rules for the store contact and shipping fields.
     *
     * @return array<string, array<int, ValidationRule|string>>
     */
    protected function contactRules(): array
    {
        return [
            'phone' => ['nullable', 'string', 'max:32', 'regex:/^[0-9+\-\s().]+$/'],
            'address_line' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:255'],
            'postal_code' => ['nullable', 'string', 'max:20'],
            'country' => ['nullable', 'string', 'size:2'],
        ];
    }
}
