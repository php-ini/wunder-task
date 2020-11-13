<?php


namespace App\Domains\User\Services;

use App\Domains\User\Validators\UserValidator;
use App\Domains\User\Validators\AddressValidator;
use App\Domains\User\Validators\PaymentInfoValidator;

class ValidatorService
{

    private $formName;

    /**
     * RepositoryService constructor.
     */
    public function __construct(string $formName)
    {
        $this->formName = $formName;
    }

    public function getValidator()
    {
        switch ($this->formName) {
            case 'Address':
                return new AddressValidator();
            case 'Payment':
                return new PaymentInfoValidator();
            default:
                return new UserValidator();
        }
    }


}
