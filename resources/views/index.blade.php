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
                <h3>Step 1 Content</h3>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                <h3>Step 2 Content</h3>
                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                    only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                    Ipsum.
                </div>
            </div>
            <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                <h3>Step 4 Content</h3>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>
    </div>
@endsection
