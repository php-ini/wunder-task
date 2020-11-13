<?php


namespace App\Domains\User\Validators;


use Illuminate\Support\Facades\Validator;

class AddressValidator implements ValidatorInterface
{

    private $messages = [];

    public function validate(array $data): bool
    {
        $validator = Validator::make($data, [
            'street' => 'required',
            'house_number' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'country' => 'required',
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
