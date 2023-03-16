@extends('golfbooking::layouts.app-mobile')
@section('content')
    <style>

        .btn-check:checked+.btn.btn-outline.btn-outline-primary,
        .btn-check:active+.btn.btn-outline.btn-outline-primary,
        .btn.btn-outline.btn-outline-primary:focus:not(.btn-active),
        .btn.btn-outline.btn-outline-primary:hover:not(.btn-active),
        .btn.btn-outline.btn-outline-primary:active:not(.btn-active),
        .btn.btn-outline.btn-outline-primary.active,
        .btn.btn-outline.btn-outline-primary.show,
        .show>.btn.btn-outline.btn-outline-primary {
            color: #ffffff;
            border-color: var(--kt-primary);
            background-color: #009688 !important;
        }

        .overlay:before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border-top-left-radius: var(--bs-card-inner-border-radius);
            border-top-right-radius: var(--bs-card-inner-border-radius);
            background: rgb(17 17 17 / 60%);
        }

        .card-title {
            color: #ffff !important;
        }

        .form-control {
            color: var(--kt-input-color);
            background-color: var(--kt-input-bg);
            border: 1px solid var(--kt-input-border-color);
            /* box-shadow: none !important; */
            box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px !important;
        }
    </style>

    <div class="container-xxl" id="kt_content_container">

        <div class="d-flex align-items-center position-relative my-1 mb-4">
            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                        transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                    <path
                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                        fill="currentColor" />
                </svg>
            </span>
            <!--end::Svg Icon-->
            <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid ps-15" id="search_facility" name="search_facility" placeholder="Search Facility"/>
        </div>
        <div id="facility-list-div"></div>
    </div>

    @include('golfbooking::facility-booking.modal.create-booking')
@endsection

@push('scripts')
    <script>
        $('#header-facility').html('Choose Facility');

        var url = `{{ route('facility-booking.facility.list') }}`;
        var typingTimer;
        var doneTypingInterval = 200;

        $('#search_facility').on('keyup', function () {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping($(this).val()), doneTypingInterval);
        });

        function doneTyping(value) {
            var value = value.toLowerCase().trim();

            $(".facility-card").show().filter(function() {
                return $(this).data('name').toLowerCase().trim().indexOf(value) == -1;
            }).hide();
        }

        refreshList();

        function imageLoad() {
            $('.facility-card').show();
        }

        function refreshList() {
            $("#facility-list-div").load(`${url}?${$.param({ search_facility: $('#search_facility').val()})}`);
        }

    </script>
@endpush