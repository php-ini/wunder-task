<?php


namespace App\Domains\User\ViewModels;


use App\Domains\User\Entities\User;
use Illuminate\View\View;

class Step implements StepInterface
{

    public function render(User $user): string
    {
        return view('index', []);
    }
}
