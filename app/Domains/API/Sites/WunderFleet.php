<?php
declare(strict_types=1);

namespace App\Domains\API\Sites;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

/**
 * Class WunderFleet
 * @package App\Domains\API\Sites
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class WunderFleet implements CrawlerInterface
{
    /**
     * NOT WORKING - returns 502 BAD GATEWAY error
     */
//    const REQUEST_URL = 'https://37f32cl571.execute-api.eu-central-1.amazonaws.com/default/wunderfleet-recruiting-backend-dev-save-payment-data';

    /**
     * Working for a local payment API simulation
     */
    const REQUEST_URL = '/test-url';

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return url(self::REQUEST_URL);
    }

    /**
     * @param array $data
     * @return Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
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
