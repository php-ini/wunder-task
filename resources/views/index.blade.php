@extends('layouts.main')

@section('content')
    <!-- SmartWizard html -->
    <div id="smartwizard">

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#step-1">
                    <strong>Personal Details</strong> <br>Please enter your personal information
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#step-2">
                    <strong>Address</strong> <br>Please enter your current address details
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#step-3">
                    <strong>Payment Information</strong> <br>Please enter your payment information
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#step-4">
                    <strong>Success</strong> <br>All Done!
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                <h3>Personal Details</h3>
                <div>
                    @include('forms.user')
                </div>
            </div>
            <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                <h3>Step 2 Content</h3>
                <div>
                    @include('forms.address')
                </div>
            </div>
            <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                <div>
                    @include('forms.payment')
                </div>
            </div>
            <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                <h3>Success</h3>
                Thank you for the registration..
                <br>
                <br>
                Your Payment ID: <span id="paymentCode" style="font-weight: bold">{{ isset($data->payment) ? $data->payment->getPaymentData() : ''  }}</span>
            </div>
        </div>
    </div>


@endsection
