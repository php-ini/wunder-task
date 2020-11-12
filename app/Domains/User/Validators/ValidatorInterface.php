<?php

interface ValidatorInterface {

    public function validate( array $data): bool;

    public function getMessages(): array;
}
