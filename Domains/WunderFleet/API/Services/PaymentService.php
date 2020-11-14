<?php
declare(strict_types=1);

namespace Domains\WunderFleet\API\Services;


use Domains\WunderFleet\API\Formatters\FormatterInterface;
use Domains\WunderFleet\API\Sites\PaymentInterface;
use Domains\WunderFleet\API\Sites\WunderFleet;
use Domains\WunderFleet\User\Repositories\PaymentInfo;

/**
 * Class PaymentService
 * @package App\WunderFleet\API\Services
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class PaymentService
{
    /**
     * @var string
     */
    protected $paymentApiSite = WunderFleet::class;

    /**
     * @return PaymentInterface
     */
    public function getPaymentSiteClass(): PaymentInterface
    {
        $class = $this->paymentApiSite;
        return new $class();
    }

    /**
     * @return FormatterInterface
     */
    public function getFormatterClass(): FormatterInterface
    {
        $class = str_replace('Sites', 'Formatters',$this->paymentApiSite . 'Formatter');
        return new $class();
    }

    /**
     * @param int $userId
     * @return string|null
     */
    public function getPaymentCode(int $userId): ?string
    {
        $paymentRepo = new PaymentInfo();
        return $paymentRepo->getPaymentCode($userId);
    }
}
