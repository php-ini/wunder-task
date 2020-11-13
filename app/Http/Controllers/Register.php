<?php

namespace App\Http\Controllers;

use App\Domains\User\Services\RepositoryService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use ViewModels\Step;
use App\Domains\User\Services\RegisterService;
use App\Domains\User\Services\ValidatorService;
use Cookie;

class Register extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        if($name = Cookie::get(RegisterService::COOKIE_NAME)){
            dd($name);
        }
        return view('index', []);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function register(Request $request)
    {
        if($request->ajax()) {

            $data = $request->input();
            $formName = $data['form'];
            $repositoryService = new RepositoryService($formName);
            $validatorService = new ValidatorService($formName);
            $registerService = new RegisterService(
                $validatorService->getValidator(),
                $repositoryService->getRepository(),
                $formName,
                $request
            );

            if(($recordId = $registerService->startProcess()) && $formName == 'User'){

                $response = response()->json(['status' => 'success', 'errors' => $registerService->getValidator()->getMessages()]);
                $response->cookie($registerService->setCookie($recordId));
                return $response;

            } else {
                return new JsonResponse(['status' => 'success', 'errors' => $registerService->getValidator()->getMessages()], 200);
            }
        }
    }
}
