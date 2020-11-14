<!doctype html>
<html lang="en">
<head>
    <title>jQuery Smart Wizard - The awesome jQuery step wizard plugin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Include SmartWizard CSS -->
    <link href="{{ asset('css/smart_wizard_all.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Demo Page Style - You don't need -->
    <style>
        body {
            padding-right: 5%;
            padding-left: 5%;
        }
    </style>

</head>
<body>

<br/>
<p style="display: none">
    <label>Theme:</label>
    <select id="theme_selector">
        <option value="default">Default</option>
        <option value="arrows" selected>Arrows</option>
        <option value="dots">Dots</option>
        <option value="progress">Progress</option>
    </select>

    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="checkbox" id="dark_mode" value="1"/>
    <label for="dark_mode">Dark Mode</label>

    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="checkbox" id="is_justified" value="1" checked/>
    <label for="is_justified">Justified</label>

    &nbsp;&nbsp;&nbsp;&nbsp;
    <label>Animation:</label>
    <select id="animation">
        <option value="none">None</option>
        <option value="fade">Fade</option>
        <option value="slide-horizontal" selected>Slide Horizontal</option>
        <option value="slide-vertical">Slide Vertical</option>
        <option value="slide-swing">Slide Swing</option>
    </select>

    &nbsp;&nbsp;&nbsp;&nbsp;
    <label>Go To:</label>
    <select id="got_to_step">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>

    &nbsp;&nbsp;&nbsp;&nbsp;
    <label>External Buttons:</label>
    <button class="btn btn-secondary" id="prev-btn" type="button">Go Previous</button>
    <button class="btn btn-secondary" id="next-btn" type="button">Go Next</button>
    <button class="btn btn-danger" id="reset-btn" type="button">Reset Wizard</button>
</p>
<br/>


<div class="main">
    @yield('content')
</div>

<br/> &nbsp;

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.5.0.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="4fc1060425828d9f0a9b0eac-text/javascript"></script>
<!-- Include SmartWizard JavaScript source -->
<script type="text/javascript" src="{{ asset('js/jquery.smartWizard.min.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $('#user-form, #address-form, #payment-form').submit(function (e) {
            e.preventDefault();
            postData($(this));
        });

        function getFormData($form){
            var unindexed_array = $form.serializeArray();
            var indexed_array = {};

            $.map(unindexed_array, function(n, i){
                indexed_array[n['name']] = n['value'];
            });

            indexed_array._token = '{{csrf_token()}}';

            return indexed_array;
        }

        function moveNext(){
            $('#smartwizard').smartWizard("next");
        }



        function postData(that){
            let formName = that.data('model');
            let data = getFormData(that);
            console.log(data);
            $.post("/register?form=" + formName,
                data,
                function(data, status){
                if(formName == 'Payment'){
                    $('#paymentCode').html(data.paymentCode);
                }
                    moveNext();
                })
                .fail(function(response) {
                alert('Error: ' + response.responseText);
            });
        }


        // Toolbar extra buttons
        var btnFinish = $('<button></button>').text('Finish')
            .addClass('btn btn-info')
            .on('click', function () {
                alert('Finish Clicked');
            });
        var btnCancel = $('<button></button>').text('Cancel')
            .addClass('btn btn-danger')
            .on('click', function () {
                $('#smartwizard').smartWizard("reset");
            });

        // Step show event
        $("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
            $("#prev-btn").removeClass('disabled');
            $("#next-btn").removeClass('disabled');
            if (stepPosition === 'first') {
                $("#prev-btn").addClass('disabled');
            } else if (stepPosition === 'last') {
                $("#next-btn").addClass('disabled');
            } else {
                $("#prev-btn").removeClass('disabled');
                $("#next-btn").removeClass('disabled');
            }
        });

        // Smart Wizard
        $('#smartwizard').smartWizard({
            selected: 0,
            theme: 'arrows', // default, arrows, dots, progress
            // darkMode: true,
            transition: {
                animation: 'slide-horizontal', // Effect on navigation, none/fade/slide-horizontal/slide-vertical/slide-swing
            },
            toolbarSettings: {
                toolbarPosition: 'none', // both bottom
                toolbarExtraButtons: [btnFinish, btnCancel]
            }
        });

        // External Button Events
        $("#reset-btn").on("click", function () {
            // Reset wizard
            $('#smartwizard').smartWizard("reset");
            return true;
        });

        $("#prev-btn").on("click", function () {
            // Navigate previous
            $('#smartwizard').smartWizard("prev");
            return true;
        });

        $("#next-btn").on("click", function () {
            // Navigate next
            $('#smartwizard').smartWizard("next");
            return true;
        });


        // Demo Button Events
        $("#got_to_step").on("change", function () {
            // Go to step
            var step_index = $(this).val() - 1;
            $('#smartwizard').smartWizard("goToStep", step_index);
            return true;
        });


        $("#dark_mode").on("click", function () {
            // Change dark mode
            var options = {
                darkMode: $(this).prop("checked")
            };

            $('#smartwizard').smartWizard("setOptions", options);
            return true;
        });

        $("#is_justified").on("click", function () {
            // Change Justify
            var options = {
                justified: $(this).prop("checked")
            };

            $('#smartwizard').smartWizard("setOptions", options);
            return true;
        });

        $("#animation").on("change", function () {
            // Change theme
            var options = {
                transition: {
                    animation: $(this).val()
                },
            };
            $('#smartwizard').smartWizard("setOptions", options);
            return true;
        });

        $("#theme_selector").on("change", function () {
            // Change theme
            var options = {
                theme: $(this).val()
            };
            $('#smartwizard').smartWizard("setOptions", options);
            return true;
        });

        @if(isset($data->user))
        for(i = {{ $data->user->getCompletedStep()}}; i--; i >= 0){
            $('#smartwizard').smartWizard("stepState", [i], "disable");
        }

        $('#smartwizard').smartWizard("goToStep", {{ $data->user->getCompletedStep() }});
        @endif


    });
</script>
</body>
</html>
