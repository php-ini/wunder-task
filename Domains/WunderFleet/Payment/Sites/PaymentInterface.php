<?php
declare(strict_types=1);

namespace Domains\WunderFleet\Payment\Sites;

/**
 * Interface CrawlerInterface
 * @package Domains\WunderFleet\Payment\Sites
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
interface PaymentInterface{

    /**
     * @param array $data
     * @return mixed
     */
    public function sendRequest(array $data);

}
