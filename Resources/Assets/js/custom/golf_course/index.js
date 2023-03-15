KTUtil.onDOMContentLoaded(function () {
    // Initialize stepper
    var element = document.querySelector("#kt_create_booking_stepper");
    var formSubmitButton = document.querySelector("#form-submit-button");
    var formContinueButton = document.querySelector("#form-continue-button");
    $('#header-page-booking').html('Choose Course and Date');

    var stepper = new KTStepper(element);

    stepper.on("kt.stepper.next", function (stepper) {

        var stepperIndex = stepper.getNextStepIndex();

        console.log(`next : ${stepperIndex}`);

        if (stepperIndex == 2) {

            // Custom validation
            if (!$('.date-input').val() || $('.date-input').data('availability') == '1') {
                $('#invalid-input').show();
            } else {
                $('#invalid-input').hide();

                // For header text display
                $('#header-page-booking').html('Choose Time and Holes');
                stepper.goNext();
            }
        }

        if (stepperIndex == 3) {
            if (!$('input[name=total_players]').is(':checked') || !$('input[name=hole_id]').is(':checked') || !$('input[name=time_slot_id]').is(':checked')) {
                $('#invalid-input-step-2').show();
            } else {
                $('#invalid-input-step-2').hide();
                $('#header-page-booking').html('Fill In Player Details');
                KTPlayers.init();
                stepper.goNext();
            }
        }

        if (stepperIndex == 4) {
            KTPlayers.validate().then(function (response) {
                if (response) {
                    $('#header-page-booking').html('Confirm All Details');
                    KTBookingDetails.init();
                    formSubmitButton.classList.remove('d-none');
                    formSubmitButton.classList.add('d-inline-block');
                    formContinueButton.classList.add('d-none');
                    stepper.goNext();
                }
            })
        }
    });

    stepper.on("kt.stepper.previous", function (stepper) {

        if (!$('.date-input').val()) {
            $('#invalid-input').show();
        } else {
            $('#invalid-input').hide();

            var stepperIndex = stepper.getPreviousStepIndex();

            console.log(`previous : ${stepperIndex}`);

            // For header text display
            if (stepperIndex == 1) {
                $('#header-page-booking').html('Choose Course and Date');
            }

            // For header text display
            if (stepperIndex == 2) {
                $('#header-page-booking').html('Choose Time and Holes');
            }

            // For header text display
            if (stepperIndex == 3) {
                $('#header-page-booking').html('Fill In Player Details');
            }

            // For header text display
            if (stepperIndex == 4) {
                $('#header-page-booking').html('Confirm All Details');
            }

            formSubmitButton.classList.remove('d-inline-block');
            formSubmitButton.classList.remove('d-none');
            formContinueButton.classList.remove('d-none');

            stepper.goPrevious(); // Go previous step
        }
    });

    $('#form-submit-button').on('click', function (e) {
        e.preventDefault();
        $('#form-golf-course').append(`<input type="hidden" name="_token" value="${token}">`);

        $('#form-golf-course').submit();
    });
});
