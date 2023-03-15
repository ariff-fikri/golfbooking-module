"use strict"
var KTPlayers = function () {

    var form;
    var validator;
    let totalPlayer = 0;
    let timeSlot;
    let holes;
    let defaultPlayerHtml;
    const typeValidatorOption = {
        validators: {
            notEmpty: {
                message: 'Player type is required',
            },
        },
    };
    const nameValidatorOption = {
        validators: {
            notEmpty: {
                message: 'Player name is required',
            },
        },
    };
    const emailValidatorOption = {
        validators: {
            notEmpty: {
                message: 'Player email is required',
            },
        },
    };

    var displayInfo = function () {
        $('#step-3-no-of-pax-display').html(totalPlayer);
        $('#step-3-time-slot-display').html(timeSlot);
        $('#step-3-course-display').html($('#step-2-course-name').html());
        $("#step-3-holes-display").html(holes);
        $("#booking_id_input").val(`#${(new Date).valueOf()}`);
    }

    var addPlayer = function () {
        let playersHtml = '';
        for (var x = 1; x < totalPlayer; x++) {
            let currentPlayer = x + 1;

            playersHtml += getPlayerHTML(currentPlayer);
        }

        $(`#player-1`).after(playersHtml);
    }

    var getPlayerHTML = function (currentPlayer) {
        let playerHtml = defaultPlayerHtml.prop('id', `player-${currentPlayer}`);

        $(playerHtml).children().first().attr('data-bs-target', `#player-${currentPlayer}-collapse`).children().first().text(`Player ${currentPlayer}`);
        let contentHtml = $(playerHtml).children().first().next().prop('id', `player-${currentPlayer}-collapse`).children(0);
        $(contentHtml).first().children().children().first().children(0).prop('name', `players[${currentPlayer - 1}][type]`);
        $(contentHtml).first().children().children().first().children(0).prop('id', `player-type-${currentPlayer - 1}-member`);
        $(contentHtml).first().children().children().first().children(1).prop('for', `player-type-${currentPlayer - 1}-member`);
        $(contentHtml).first().children().children().next().children(0).prop('name', `players[${currentPlayer - 1}][type]`);
        $(contentHtml).first().children().children().next().children(0).prop('id', `player-type-${currentPlayer - 1}-guest`);
        $(contentHtml).first().children().children().next().children(1).prop('for', `player-type-${currentPlayer - 1}-guest`);
        $(contentHtml).next().children(0).first().children(0).prop('name', `players[${currentPlayer - 1}][name]`);
        $(contentHtml).next().children(0).next().children(0).prop('name', `players[${currentPlayer - 1}][id]`);
        $(contentHtml).next().next().children(0).children(0).prop('name', `players[${currentPlayer - 1}][email]`);

        return $(playerHtml).prop('outerHTML');
    }

    var addFieldValidation = function () {
        for (var x = 1; x < totalPlayer; x++) {
            let currentPlayer = x + 1;

            var id_name = `players[${currentPlayer - 1}][id]`;
            if ($(`input[name="players[${currentPlayer - 1}][type]"]:checked`).val() == 'guest') {
                var status = false;
            } else {
                var status = true;
            }

            validator.addField(`players[${currentPlayer - 1}][type]`, typeValidatorOption)
                .addField(`players[${currentPlayer - 1}][name]`, nameValidatorOption)
                .addField(`players[${currentPlayer - 1}][id]`, idValidatorOption(status))
                .addField(`players[${currentPlayer - 1}][email]`, emailValidatorOption);
        }

    }

    var idValidatorOption = function (status) {
        return {
            validators: {
                notEmpty: {
                    enabled: status,
                    message: 'Player id is required',
                },
            },
        };
    }

    var removePlayer = function () {
        for (let index = 2; index <= totalPlayer; index++) {
            $(`#player-${index}`).remove();
            console.log(index);
        }
    }

    var handleForm = function () {
        validator = FormValidation.formValidation(
            form, {
                fields: {
                    "players[0][type]": {
                        validators: {
                            notEmpty: {
                                message: 'Player type is required'
                            },
                        }
                    },
                    "players[0][name]": {
                        validators: {
                            notEmpty: {
                                message: 'Player name is required'
                            }
                        }
                    },
                    "players[0][id]": {
                        validators: {
                            notEmpty: {
                                enabled: true,
                                message: 'Player id is required'
                            },
                        }
                    },
                    "players[0][email]": {
                        validators: {
                            notEmpty: {
                                message: 'Player email is required'
                            }
                        }
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '', // comment to enable invalid state icons
                        eleValidClass: '' // comment to enable valid state icons
                    })
                }
            }
        );
    };

    var validating = async function () {
        var validate = validator.validate().then(function (status) {
            if (status == 'Valid') {
                return true;
            } else {
                return false;
            }
        });

        return await validate;
    };

    return {
        init: function () {
            const initTotalPlayer = $('input[name="total_players"]:checked').val();
            timeSlot = $(`#time-slot-display-${$('input[name="time_slot_id"]:checked').val()}`).html();
            holes = $(`#holes-display-${$('input[name="hole_id"]:checked').val()}`).html();

            if (validator) {
                validator.resetForm(false);
            }

            form = document.querySelector('#form-golf-course');
            handleForm();

            if (totalPlayer != initTotalPlayer) {
                if (totalPlayer != 0) {
                    removePlayer();
                }

                totalPlayer = initTotalPlayer;

                defaultPlayerHtml = $('#player-1').clone();
                addPlayer();
            }

            displayInfo();
        },
        validate: async function () {

            if ($(`input[name="players[0][type]"]:checked`).val() == 'guest') {
                validator.disableValidator(`players[0][id]`);
            } else {
                validator.enableValidator(`players[0][id]`);
            }
            addFieldValidation();


            var validate = validating().then(function (status) {
                return status;
            });

            return await validate;
        }
    }
}();
