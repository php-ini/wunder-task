<?php
declare(strict_types=1);

namespace Domains\WunderFleet\User\Services;

use Domains\WunderFleet\User\Validators\UserValidator;
use Domains\WunderFleet\User\Validators\AddressValidator;
use Domains\WunderFleet\User\Validators\PaymentInfoValidator;

/**
 * Class ValidatorService
 * @package App\WunderFleet\User\Services
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
