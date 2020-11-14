<?php

namespace App\Http\Controllers;

use Cookie;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Domains\WunderFleet\User\ViewModels\Step;
use Domains\WunderFleet\API\Services\PaymentService;
use Domains\WunderFleet\User\Services\RegisterService;
use Domains\WunderFleet\User\Services\ValidatorService;
use Domains\WunderFleet\User\Services\RepositoryService;


class Register extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        if ($userId = Cookie::get(RegisterService::COOKIE_NAME)) {
            $step = new Step((int)$userId);

            if ($step->hasData()) {
                return view('index', ['data' => $step->build()]);
            }
        }

        return view('index', ['data' => []]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function register(Request $request)
    {
        if ($request->ajax()) {

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
            $paymentService = new PaymentService();

            if (($recordId = $registerService->startProcess()) && $formName == 'User') {

                $response = response()->json(['status' => 'success', 'errors' => $registerService->getValidator()->getMessages()]);
                $response->cookie($registerService->setCookie($recordId));
                return $response;
            }

            if (!empty($registerService->getPaymentClass())) {

                return new JsonResponse(['status' => 'success', 'paymentCode' => $paymentService->getPaymentCode((int)$registerService->getUserIdFromCookie())], 200);
            }

            return new JsonResponse(['status' => 'success', 'errors' => $registerService->getValidator()->getMessages()], 200);
        }
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function testUrl(Request $request)
    {
        return new JsonResponse(["paymentDataId" => "c68644153714ca78e4102c7f54747a5a3c1c06be332bd4c2b26e7b2a41ed228d86975c9997b96b8bb0da030d34a2be95"], 200);
    }
}
