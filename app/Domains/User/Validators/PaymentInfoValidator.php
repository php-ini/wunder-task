<?php


namespace App\Domains\User\Validators;


use Illuminate\Support\Facades\Validator;

class PaymentInfoValidator implements ValidatorInterface
{
    private $messages = [];

    public function validate(array $data): bool
    {
        $validator = Validator::make($data, [
            'account_owner_name' => 'required',
            'iban' => 'required'
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
