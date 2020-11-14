<?php
declare(strict_types=1);

namespace Domains\WunderFleet\User\Validators;


use Illuminate\Support\Facades\Validator;

/**
 * Class AddressValidator
 * @package App\WunderFleet\User\Validators
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class AddressValidator implements ValidatorInterface
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

    /**
     * @return array
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
}
