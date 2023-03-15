const pluck = (arr, key) => arr.map(i => i[key]);

$('#invalid-input-step-2').hide();

$('.time_type').on('click', function () {
    var time_type_input = $(this);
    checkAvailability(time_type_input);
})

function checkAvailability(time_type_input) {

    $.ajax({
        method: "GET",
        url: time_type_url,
        data: {
            time_type: time_type_input.val(),
            course_id: $('#step-2-course-name').data('id'),
            date: $('#step-2-date-display').data('date'),
            _token: token
        },
        success: function (response) {
            $('#time-slots-available-step-2').empty();

            response.time_slots.forEach(element => {
                var time = new Date(element.time).toLocaleTimeString('en', {
                    timeStyle: 'short',
                    hour12: false,
                    timeZone: 'UTC'
                });

                var disabled = pluck(response.unavailable_time_slots, 'time_slot_id').includes(element.id) ? 'disabled' : '';

                $('#time-slots-available-step-2').append(`
                    <div class="col-3">
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 mt-2 ${disabled} time-slot-label-step-2" for="time_slot_id_${element.id}" onclick="timeSlotCheck(${element.id}, '${element.time}')">
                            <input type="radio" class="btn-check time-slot-input-step-2" name="time_slot_id" id="time_slot_id_${element.id}"
                                value="${element.id}" />
                            <span class="fw-bold fs-5" id="time-slot-display-${element.id}">${time}</span>
                        </label>
                    </div>
                `);
            });
        },
    });
}

function timeSlotCheck(id, time) {
    var main = $(this);
    $('.time-slot-label-step-2').each(function (index) {
        $(this).removeClass('active');
    });

    $('.time-slot-input-step-2').each(function (index) {
        $(this).prop('checked', false);
    });

    $(`label[for=time_slot_id_${id}]`).addClass('active');
    $(`#time_slot_id_${id}`).prop('checked', true);


    $.ajax({
        method: "GET",
        url: holes_available_url,
        data: {
            date: $('#step-2-date-display').data('date'),
            time: time,
            time_slot_id: id,
            _token: token
        },
        success: function (response) {
            console.log(response);

            $('#holes-div-select').empty();

            all_holes.forEach(element => {

                var disabled = pluck(response.available_holes, 'id').includes(element.id) ? '' : 'disabled';

                $('#holes-div-select').append(`
                    <div class="col-4">
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 ${disabled} hole-label-step-2" for="hole_id_${element.id}" onclick="selectHole(${element.id})">
                            <input type="radio" class="btn-check hole-input-step-2" name="hole_id" id="hole_id_${element.id}" data-member-weekday="${element.member_weekday_amount}" data-member-weekend="${element.member_weekend_amount}"
                                data-guest-weekday="${element.visitor_weekday_amount}" data-guest-weekend="${element.visitor_weekend_amount}"
                                value="${element.id}" />
                            <span class="fw-bold fs-6" id="holes-display-${element.id}">${element.name}</span>
                        </label>
                    </div>
                `);
            });

            $('#pax-div-select').empty();

            for (let i = 2; i <= 4; i++) {

                $('#pax-div-select').append(`
                    <div class="col-3">
                        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary w-100 p-4 pax-label-step-2 ${i == 2 && response.time_slot.isWeekend ? 'disabled' : '' }" for="total_players_${i}" onclick="selectPax(${i})">
                            <input type="radio" class="btn-check pax-input-step-2" name="total_players" id="total_players_${i}"
                                value="${i}" />
                            <span class="fw-bold fs-4">${i}</span>
                        </label>
                    </div>
                `);

            }
        },
        complete: function () {
            main.data('requestRunning', false);
        }
    });
}

function selectHole(id) {
    $('.hole-label-step-2').each(function (index) {
        $(this).removeClass('active');
    });

    $('.hole-input-step-2').each(function (index) {
        $(this).prop('checked', false);
    });

    $(`label[for=hole_id_${id}]`).addClass('active');
    $(`#hole_id_${id}`).prop('checked', true);
}

function selectPax(id) {
    $('.pax-label-step-2').each(function (index) {
        $(this).removeClass('active');
    });

    $('.pax-input-step-2').each(function (index) {
        $(this).prop('checked', false);
    });

    $(`label[for=total_players_${id}]`).addClass('active');
    $(`#total_players_${id}`).prop('checked', true);
}
