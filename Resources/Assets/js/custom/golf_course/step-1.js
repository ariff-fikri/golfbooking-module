// Hide validation on load
$('#invalid-input').hide();

courses.forEach(element => {
    tns({
        container: `#tns-slots-${element.id}`,
        items: 5.5,
        nav: false,
        controls: false,
        swipeAngle: false,
        mouseDrag: true,
        loop: false,
        autoplay: false,
        speed: 400,
        oninit: initSlider()
    });
});

function initSlider() {
    $('.course-div-card').removeClass('d-none');
}

// On click slot, change the date, slot display and input
function changeDateAndSlot(date_available_main, status, time_slots_count, course_id, course_name) {

    // Step 1
    date_available = new Date(date_available_main);
    $('#date-div-' + course_id).html(!status ? 'Date: ' + date_available.toDateString() : 'Date: -');
    $('#slot-div-' + course_id).html(!status && time_slots_count ? time_slots_count + ' Slots' : '0 Slots');

    // Initialize input for date
    $('.date-div-input-class').each(function (index) {
        $(this).empty();
    });

    // Remove class active on all slots
    $('.date-href-input-class').each(function (index) {
        $(this).removeClass('active');
    });

    // Add class active on selected slot
    $(`#course_id_${course_id}`).prop('checked', true);

    // Add hidden input date for the selected slot
    $(`#date-div-input-${date_available_main}`).html(
        `<input type="hidden" class="date-input" name="date" value="${date_available_main}" data-availability="${status}">`
    );

    // Step 2 for display only
    $('#today-slot-available').html(time_slots_count ? time_slots_count + ' Slots' : '0 Slots');
    $('#step-2-course-name').html(course_name);
    $('#step-2-course-name').data('id', course_id);
    $('#step-2-date-display').html(date_available.toDateString());
    $('#step-2-date-display').data('date', date_available_main);
    $('#step-3-date-display').html(date_available.toDateString());
    $('#step-3-date-display').data('date', date_available_main);
    $(`#date-href-input-${date_available_main}-${course_id}`).addClass('active');

    checkAvailability($('input[name=time_type]:checked'));
}
