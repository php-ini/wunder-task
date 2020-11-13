<?php

namespace App\Domains\API\Formatters;

use GuzzleHttp\Psr7\Response;

interface FormatterInterface
{
    public function format(array $data): array;

    public function prepareOutput(Response $response, array $data): array;
}
