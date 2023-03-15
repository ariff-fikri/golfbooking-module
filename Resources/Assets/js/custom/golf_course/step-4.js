"use strict"
var KTBookingDetails = function () {

    var form;
    var timeSlot;
    var holes;
    let totalPlayer = 0;

    var displayInfo = function () {
        $('#step-4-date-display').html($('#step-3-date-display').html());
        $('#step-4-course-display').html($('#step-3-course-display').html());
        $('#step-4-no-of-pax-display').html($('#step-3-no-of-pax-display').html());
        $('#step-4-time-slot-display').html($('#step-3-time-slot-display').html());
        $("#step-4-holes-display").html($('#step-3-holes-display').html());
        $("#step-4-book-id-display").html($('#step-3-book-id-display').html());
        $("#step-4-pax").html(`x${$('#step-3-no-of-pax-display').html()} Pax`);
    }

    var paymentDetails = function () {
        $('#holes-div-step-4').html($('#step-3-holes-display').html());

        var member_count = 0;
        $('.member_type[value="member"]:checked').each(function () {
            member_count = ++member_count;
        });

        var guest_count = 0;
        $('.member_type[value="guest"]:checked').each(function () {
            guest_count = ++guest_count;
        });

        $('#member-price-label-step-4').html(`Member x${member_count}`);
        $('#guest-price-label-step-4').html(`Guest x${guest_count}`);

        if (isWeekend($('#step-2-date-display').data('date'))) {
            var member_price = $('input[name="hole_id"]:checked').data('member-weekend') * member_count;
            var guest_price = $('input[name="hole_id"]:checked').data('guest-weekend') * guest_count;
        } else {
            var member_price = $('input[name="hole_id"]:checked').data('member-weekday') * member_count;
            var guest_price = $('input[name="hole_id"]:checked').data('guest-weekend') * guest_count;
        }

        $("#member-price-div-step-4").html(`RM ${member_price.toFixed(2)}`);
        $("#guest-price-div-step-4").html(`RM ${guest_price.toFixed(2)}`);

        $("#total_member_amount_input").val(`${member_price.toFixed(2)}`);
        $("#total_guest_amount_input").val(`${guest_price.toFixed(2)}`);

        var grand_total = member_price + guest_price;
        $('#grand_total').html(`RM ${grand_total.toFixed(2)}`);
        $("#total_payment_input").val(`${grand_total.toFixed(2)}`);
    }

    var isWeekend = function (date) {
        var dt = new Date(date);

        if (dt.getDay() == 6 || dt.getDay() == 0) {
            return true;
        }

        return false;
    }

    var addPlayer = function () {
        let playersHtml = '';
        for (var x = 1; x < totalPlayer; x++) {
            let currentPlayer = x + 1;

            playersHtml += getPlayerHTML(currentPlayer);
        }

        $(`#player-2-step-4`).append(playersHtml);
    }

    var getPlayerHTML = function (currentPlayer, isFirst = false) {
        var playerName = $(`input[name="players[${currentPlayer - 1}][name]"]`).val();
        var playerMemberID = $(`input[name="players[${currentPlayer - 1}][id]"]`).val();
        var playerEmail = $(`input[name="players[${currentPlayer - 1}][email]"]`).val();
        var member_type = $(`input[name="players[${currentPlayer - 1}][type]"]:checked`).val();
        var playerHtml = `
        ${!isFirst ? '<div class="mt-8">' : ''}
            <span class="text-gray-500 fw-semibold fs-6 mt-3">Player ${currentPlayer}</span>
            <hr>

            <div class="d-flex align-items-center justify-content-between">
                <span class="text-gray-500 fw-semibold fs-6">Name</span>
                <span class="text-dark fw-bold fs-6">${playerName}</span>
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <span class="text-gray-500 fw-semibold fs-6">Member ID</span>
                <span class="text-dark fw-bold fs-6">${member_type == 'member' ? playerMemberID : 'Guest'}</span>
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <span class="text-gray-500 fw-semibold fs-6">Email</span>
                <span class="text-dark fw-bold fs-6">${playerEmail}</span>
            </div>
            ${!isFirst ? '</div>' : ''}`;

        return playerHtml;
    }

    return {
        init: function () {
            const initTotalPlayer = $('input[name="total_players"]:checked').val();
            timeSlot = $(`#time-slot-display-${$('input[name="time_slot_id"]:checked').val()}`).html();
            holes = $(`#holes-display-${$('input[name="hole_id"]:checked').val()}`).html();

            form = document.querySelector('#form-golf-course');

            $(`#player-1-step-4`).empty();
            $(`#player-2-step-4`).empty();

            totalPlayer = initTotalPlayer;

            var playersHtml = getPlayerHTML(1, true);
            $(`#player-1-step-4`).append(playersHtml);

            if (initTotalPlayer > 1) {
                addPlayer();
            }

            displayInfo();
            paymentDetails();
        },
    }
}();
