<?php
declare(strict_types=1);

namespace Domains\WunderFleet\Payment\Sites;

use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

/**
 * Class WunderFleet
 * @package Domains\WunderFleet\Payment\Sites
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class WunderFleet implements PaymentInterface
{
    /**
     * NOT WORKING - returns 502 BAD GATEWAY error
     */
//    const REQUEST_URL = 'https://37f32cl571.execute-api.eu-central-1.amazonaws.com/default/wunderfleet-recruiting-backend-dev-save-payment-data';

    /**
     * Working for a local payment Payment simulation
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
    public function sendRequest(array $data): ?Response
    {
        try {

            $client = new Client();
            $result = $client->request('POST', $this->getUrl(), [
                'form_params' => $data
            ]);

            return $result;

        } catch (GuzzleHttp\Exception\ServerException $e) {

            Log::error($e->getMessage());
            return null;

        } catch (\Exception $e) {

            Log::error($e->getMessage());
            return null;

        }

    }
}
