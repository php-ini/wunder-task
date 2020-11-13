<?php
namespace App\Domains\User\Validators;

interface ValidatorInterface {

    public function validate( array $data): bool;

    public function getMessages(): array;
}
