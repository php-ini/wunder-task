<?php
declare(strict_types=1);

namespace App\Domains\User\Services;

use App\Domains\User\Validators\UserValidator;
use App\Domains\User\Validators\AddressValidator;
use App\Domains\User\Validators\PaymentInfoValidator;

/**
 * Class ValidatorService
 * @package App\Domains\User\Services
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class ValidatorService
{

    /**
     * @var string
     */
    private $formName;

    /**
     * RepositoryService constructor.
     */
    public function __construct(string $formName)
    {
        $this->formName = $formName;
    }

    /**
     * @return AddressValidator|PaymentInfoValidator|UserValidator
     */
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
