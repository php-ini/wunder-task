<?php
/**
 * Repository interface.
 * Interface for setting the main functions will be used during
 * the getting of the User payments information
 * @author Mahmoud Mostafa <jinkazama_m@yahoo.com>
 */

namespace App\Domains\User\ViewModels;


use App\Domains\User\Entities\User;
use Illuminate\View\View;

interface ViewModelInterface
{

    public function build() : \stdClass;

}
