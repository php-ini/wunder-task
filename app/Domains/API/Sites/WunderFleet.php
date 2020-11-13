<?php


namespace App\Domains\API\Sites;

use GuzzleHttp\Client;
use App\Domains\API\Sites\CrawlerInterface;
use GuzzleHttp\Exception;
use GuzzleHttp\Psr7\Response;

class WunderFleet implements CrawlerInterface
{
//    const REQUEST_URL = 'https://37f32cl571.execute-api.eu-central-1.amazonaws.com/default/wunderfleet-recruiting-backend-dev-save-payment-data';
    const REQUEST_URL = 'http://wunder.test/test-url';

    public function getUrl(): string
    {
        return self::REQUEST_URL;
    }

    public function sendRequest(array $data): Response
    {
        $data = ["customerId" => 10567, "iban" => "DE8234765765756775", "owner" => "Max Mustermann"];

        try {
            $client = new Client();
            $result = $client->request('POST', $this->getUrl(), [
                'form_params' => $data
            ]);

            return $result;

        } catch (GuzzleHttp\Exception\ServerException $e) {
            return false;
        }

    }
}
