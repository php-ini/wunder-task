<?php


namespace App\Domains\User\Validators;

use Illuminate\Support\Facades\Validator;

class UserValidator implements ValidatorInterface
{
    private $messages = [];

    public function validate(array $data): bool
    {
        $validator = Validator::make($data, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return false;
        }

        return true;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }
}
