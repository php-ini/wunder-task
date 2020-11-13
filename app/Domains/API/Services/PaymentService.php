<?php


namespace App\Domains\API\Services;


use App\Domains\API\Formatters\FormatterInterface;
use App\Domains\API\Sites\CrawlerInterface;
use App\Domains\API\Sites\WunderFleet;
use App\Domains\User\Repositories\PaymentInfo;

class PaymentService
{
    protected $paymentApiSite = WunderFleet::class;

    public function getPaymentSiteClass(): CrawlerInterface
    {
        $class = $this->paymentApiSite;
        return new $class();
    }

    public function getFormatterClass(): FormatterInterface
    {
        $class = str_replace('Sites', 'Formatters',$this->paymentApiSite . 'Formatter');
        return new $class();
    }

    /**
     * @return string|null
     */
    public function getPaymentCode($userId): ?string
    {
        $paymentRepo = new PaymentInfo();
        return $paymentRepo->getPaymentCode($userId);
    }
}
