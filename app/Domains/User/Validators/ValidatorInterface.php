<?php
declare(strict_types=1);

namespace App\Domains\User\Validators;

/**
 * Interface ValidatorInterface
 * @package App\Domains\User\Validators
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
