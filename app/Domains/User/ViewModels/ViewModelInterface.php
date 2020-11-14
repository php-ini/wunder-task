<?php
/**
 * Repository interface.
 * Interface for setting the main functions will be used during
 * the getting of the User payments information
 */

namespace App\Domains\User\ViewModels;


/**
 * Interface ViewModelInterface
 * @package App\Domains\User\ViewModels
 * @author Mahmoud Abdelsattar <jinkazama_m@yahoo.com>
 */
interface ViewModelInterface
{

    /**
     * @return \stdClass
     */
    public function build() : \stdClass;

}
