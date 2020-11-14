<?php
declare(strict_types=1);

namespace Domains\WunderFleet\API\Formatters;

use GuzzleHttp\Psr7\Response;

/**
 * Class WunderFleetFormatter
 * @package App\WunderFleet\API\Formatters
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
     * @param array $data
     * @return array
     */
    public function prepareOutput(array $data): array
    {
        $all = $data['data'];
        $responseArray = json_decode($data['response']->getBody()->getContents(), true);
        $all['payment_data'] = $responseArray['paymentDataId'];
        $all['status'] = $data['response']->getStatusCode();
        $all['response'] = json_encode($responseArray);

        return $all;
    }
}
