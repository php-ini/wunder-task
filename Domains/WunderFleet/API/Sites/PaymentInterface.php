<?php
declare(strict_types=1);

namespace Domains\WunderFleet\API\Sites;

/**
 * Interface CrawlerInterface
 * @package App\WunderFleet\API\Sites
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
interface PaymentInterface{

    /**
     * @param array $data
     * @return mixed
     */
    public function sendRequest(array $data);

}
