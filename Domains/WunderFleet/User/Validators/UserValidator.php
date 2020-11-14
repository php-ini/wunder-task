<?php
declare(strict_types=1);

namespace Domains\WunderFleet\User\Validators;

use Illuminate\Support\Facades\Validator;

/**
 * Class UserValidator
 * @package Domains\WunderFleet\User\Validators
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class UserValidator implements ValidatorInterface
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email'
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
