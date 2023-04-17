<div class="current flex-column" data-kt-stepper-element="content">
    <div class="flex-column my-5">
        <h4> Today Available</h4>
        <h1 style="font-size: 30px; "> {{ $today_available }} Slots</h1>
    </div>
    <div class="w-100">
        <div class="row">
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            @foreach ($courses as $course)
                <div class="col-lg-4 course-div-card d-none">
                    <input type="radio" class="btn-check course_id" id="course_id_{{ $course->id }}" name="course_id" value="{{ $course->id }}" />
                    <label id='show_bg_2' style="background: rgb(255, 255, 255); background: linear-gradient(106DEG, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0.9528186274509804) 60%, rgba(255, 255, 255, 0) 70%, rgba(255, 255, 255, 0) 100%), {{ $course->id == 1 ? 'url(' . Module::asset('golfbooking:media/image/east1.png') . ')' : ($course->id == 2 ? 'url(' . Module::asset('golfbooking:media/image/east2.png') . ')' : 'url(' . Module::asset('golfbooking:media/image/east3.png') . ')') }};" class="btn btn-outline btn-outline-primary btn-outline-dashed btn-active-light-primary px-0 pb-4 pt-0 d-flex mb-10 flex-column" for="course_id_{{ $course->id }}">
                        <div class="bg-white ps-1" style="border-top: 5px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
                            <div class="row hover-scroll-x flex-row py-4 px-3" id="tns-slots-{{ $course->id }}">
                                @foreach ($dates as $date)
                                    @php
                                        $availability = in_array( $date->date_available, $unavailable_date->where('course_id', $course->id)->pluck('date')->toArray());
                                    @endphp
                                    
                                    <div class="col-2">
                                        <a style="min-width: 50px;" href="javascript:;"
                                            onclick="changeDateAndSlot('{{ $date->date_available }}', '{{ $availability }}', {{ $time_slots->whereNotIn('id',$unavailable_time_slots->where('course_id', $course->id)->where('date', Carbon\Carbon::createFromFormat('Y-m-d', $date->date_available)->format('Y-m-d'))->pluck('time_slot_id')->toArray())->count() }}, {{ $course->id }}, '{{ $course->name }}')"
                                            class="btn btn-outline {{ $availability ? 'btn-outline-secondary' : 'btn-outline-primary' }}  date-href-input-class px-0 py-2 fs-5 lh-1"
                                            id="date-href-input-{{ $date->date_available }}-{{ $course->id }}">
                                            <span class="fw-bold">
                                                {{ Carbon\Carbon::createFromFormat('Y-m-d', $date->date_available)->format('d') }}
                                            </span> <br>
                                            <span class="fw-semibold">
                                                {{ Carbon\Carbon::createFromFormat('Y-m-d', $date->date_available)->format('D') }}
                                            </span>
                                        </a>
                                        <div id="date-div-input-{{ $date->date_available }}" class="date-div-input-class"></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="d-block fw-semibold px-5 ">
                            <span class="text-primary fw-bold d-block fs-4 mb-2 text-start" id="date-div-{{ $course->id }}">
                                Date : {{ now()->toFormattedDayDateString() }}
                            </span>
                            <span class="text-dark fw-bold d-block fs-4 mb-2 text-start" id="slot-div-{{ $course->id }}"> 
                                {{ $dates[0]->time_slots_count ?? '0' }} Slots
                            </span>
                        </div>

                        <div class="mt-5 d-flex justify-content-between px-5">
                            <div class="d-flex align-items-center">
                                <span class="svg-icon  svg-icon-1">
                                    <i class="bi bi-geo-alt-fill text-golf fs-3"></i>
                                </span>
                                <span class="text-primary fw-bold d-block fs-3">
                                    {{ $course->name }}
                                </span>
                            </div>
                        </div>
                    </label>
                </div>
            @endforeach
        </div>
        <div class="d-flex align-items-center course-div-card d-none">
            <span class="text-dark fw-bold  fs-5 mb-2"> <i class="fas fa-circle fs-1hx pe-2 text-gray-400"></i>Unavailable </span>
            <span class="text-dark fw-bold  fs-5 mb-2"><i class="fas fa-circle fs-1hx px-2 text-info"></i> Available </span>
            <span class="text-dark fw-bold  fs-5 mb-2"> <i class="fas fa-circle fs-1hx px-2 text-primary"></i> Selected </span>
        </div>
        
        <div id="invalid-input" class="text-danger course-div-card d-none">Please choose at least one.</div>
    </div>
</div>

@push('scripts')
    <script>
        // Initialize slider on load
        var courses = @json($courses);
    </script>
    <script src="{{ Module::asset('golfbooking:js/custom/golf_course/step-1.js') }}"></script>
@endpush
