<?php
declare(strict_types=1);

namespace App\Domains\User\Validators;

use Illuminate\Support\Facades\Validator;

/**
 * Class PaymentInfoValidator
 * @package App\Domains\User\Validators
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class PaymentInfoValidator implements ValidatorInterface
{
    /**
     * @var array
     */
    private $messages = [];

    /**
     * @param array $data
     * @return bool
     */
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

    /**
     * @return array
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
}
