<?php

namespace App\Domains\API\Sites;

/**
 * Interface CrawlerInterface
 * @package App\Domains\API\Sites
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
interface CrawlerInterface{

    /**
     * @return string
     */
    public function getUrl(): string;

    /**
     * @param array $data
     * @return mixed
     */
    public function sendRequest(array $data);

}