<?php
declare(strict_types=1);
/**
 * Repository interface.
 * Interface for setting the main functions will be used during
 * the getting of the User payments information
 */

namespace Domains\WunderFleet\User\ViewModels;

/**
 * Interface ViewModelInterface
 * @package App\WunderFleet\User\ViewModels
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
interface ViewModelInterface
{

    /**
     * @return \stdClass
     */
    public function build() : \stdClass;

}
