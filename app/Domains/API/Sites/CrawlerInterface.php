<?php

namespace App\Domains\API\Sites;

interface CrawlerInterface{

    public function getUrl(): string;

    public function sendRequest(array $data);

}
