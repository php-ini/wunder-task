<?php
declare(strict_types=1);

namespace Domains\WunderFleet\API\Formatters;

use GuzzleHttp\Psr7\Response;

/**
 * Interface FormatterInterface
 * @package App\WunderFleet\API\Formatters
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
     * @param array $data
     * @return array
     */
    public function prepareOutput(array $data): array;
}
