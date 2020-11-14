<?php

namespace App\Domains\API\Formatters;

use GuzzleHttp\Psr7\Response;

/**
 * Interface FormatterInterface
 * @package App\Domains\API\Formatters
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
interface FormatterInterface
{
    /**
     * @param array $data
     * @return array
     */
    public function format(array $data): array;

    /**
     * @param Response $response
     * @param array $data
     * @return array
     */
    public function prepareOutput(Response $response, array $data): array;
}
