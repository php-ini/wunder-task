<?php
declare(strict_types=1);

namespace App\Domains\API\Formatters;

use GuzzleHttp\Psr7\Response;

/**
 * Class WunderFleetFormatter
 * @package App\Domains\API\Formatters
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class WunderFleetFormatter implements FormatterInterface
{

    /**
     * @param array $data
     * @return array
     */
    public function format(array $data): array
    {
        $new['customerId'] = $data['user_id'];
        $new['iban'] = $data['iban'];
        $new['owner'] = $data['account_owner_name'];

        return $new;
    }

    /**
     * @param Response $response
     * @param array $data
     * @return array
     */
    public function prepareOutput(Response $response, array $data): array
    {
        $all = $data;
        $responseArray = json_decode($response->getBody()->getContents(), true);
        $all['payment_data'] = $responseArray['paymentDataId'];
        $all['status'] = $response->getStatusCode();
        $all['response'] = json_encode($responseArray);

        return $all;
    }
}
