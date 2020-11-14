<?php
declare(strict_types=1);

namespace Domains\WunderFleet\Payment\Services;


use Domains\WunderFleet\Payment\Formatters\FormatterInterface;
use Domains\WunderFleet\Payment\Sites\PaymentInterface;
use Domains\WunderFleet\Payment\Sites\WunderFleet;
use Domains\WunderFleet\User\Repositories\PaymentInfo;

/**
 * Class PaymentService
 * @package Domains\WunderFleet\Payment\Services
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class PaymentService
{
    /**
     * @var string
     */
    protected $paymentProvider = WunderFleet::class;

    /**
     * @return PaymentInterface
     */
    public function getPaymentSiteClass(): PaymentInterface
    {
        $class = $this->paymentProvider;
        return new $class();
    }

    /**
     * @return FormatterInterface
     */
    public function getFormatterClass(): FormatterInterface
    {
        $class = str_replace('Sites', 'Formatters',$this->paymentProvider . 'Formatter');
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
