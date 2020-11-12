<?php


namespace App\Domains\User\Services;


use App\Domains\User\ViewModels\StepInterface;

class RegisterService
{
    private $step;
    private $validator;

    /**
     * RegisterService constructor.
     */
    public function __construct(StepInterface $step, \ValidatorInterface $validator)
    {
        $this->step = $step;
        $this->validator = $validator;
    }
}
