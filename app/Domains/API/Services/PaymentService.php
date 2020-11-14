<?php
declare(strict_types=1);

namespace App\Domains\API\Services;


use App\Domains\API\Formatters\FormatterInterface;
use App\Domains\API\Sites\CrawlerInterface;
use App\Domains\API\Sites\WunderFleet;
use App\Domains\User\Repositories\PaymentInfo;

/**
 * Class PaymentService
 * @package App\Domains\API\Services
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
class PaymentService
{
    /**
     * @var string
     */
    protected $paymentApiSite = WunderFleet::class;

    /**
     * @return CrawlerInterface
     */
    public function getPaymentSiteClass(): CrawlerInterface
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
