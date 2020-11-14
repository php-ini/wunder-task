<?php
declare(strict_types=1);

namespace Domains\WunderFleet\User\Validators;

/**
 * Interface ValidatorInterface
 * @package Domains\WunderFleet\User\Validators
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
interface ValidatorInterface {

    /**
     * @param array $data
     * @return bool
     */
    public function validate(array $data): bool;

    /**
     * @return array
     */
    public function getMessages(): array;
}
