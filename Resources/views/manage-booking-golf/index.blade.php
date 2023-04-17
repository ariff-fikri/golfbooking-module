@extends('golfbooking::layouts.app')
@section('content')
    <!--begin::Payment methods-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header card-header-stretch pb-0">
            <!--begin::Title-->
            <div class="card-title">
                <h3 class="m-0">Tee boxes</h3>
            </div>
            <!--end::Title-->
            <!--begin::Toolbar-->
            <div class="card-toolbar m-0">
                <!--begin::Tab nav-->
                <ul class="nav nav-stretch nav-line-tabs border-transparent" role="tablist">
                    <!--begin::Tab item-->
                    <li class="nav-item" role="presentation">
                        <a id="kt_billing_creditcard_tab" class="nav-link fs-5 fw-bold me-5 active" data-bs-toggle="tab"
                            role="tab" href="#kt_billing_creditcard">Tee Box</a>
                    </li>
                    <!--end::Tab item-->
                    <!--begin::Tab item-->
                    <li class="nav-item" role="presentation">
                        <a id="kt_billing_paypal_tab" class="nav-link fs-5 fw-bold" data-bs-toggle="tab" role="tab"
                            href="#kt_billing_paypal">Time Slot</a>
                    </li>
                    <!--end::Tab item-->
                </ul>
                <!--end::Tab nav-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Tab content-->
        <div id="kt_billing_payment_tab_content" class="card-body tab-content">
            <!--begin::Tab panel-->
            <div id="kt_billing_creditcard" class="tab-pane fade show active" role="tabpanel">
                <!--begin::Row-->
                <div class="row gx-9 gy-6">
                    <!--begin::Col-->
                    @foreach ($teeboxes as $teebox)
                        <div class="col-xl-6" data-kt-billing-element="card">
                            <!--begin::Card-->
                            <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                <!--begin::Info-->
                                <div class="d-flex flex-column py-2">
                                    <!--begin::Owner-->
                                    <div class="d-flex align-items-center fs-4 fw-bold mb-5">{{ $teebox->name }}
                                        <span class="badge badge-light-success fs-7 ms-2">{{ $teebox->slot }} slots</span>
                                    </div>
                                    <!--end::Owner-->
                                    <!--begin::Wrapper-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Details-->
                                        <div>
                                            <div class="fs-6 fw-semibold text-gray-400">Available till
                                                {{ optional($teebox->expiration_date)->format('m/y') }}</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center py-2">

                                    <form action="{{ route('facility-booking.manage-booking.destroy', $teebox->id) }}"
                                        method="POST" id="form-delete-teebox-{{ $teebox->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-sm btn-light btn-active-light-primary me-3"
                                            data-kt-billing-action="card-delete" href="javascript:;"
                                            onclick="openModalDeleteTeebox('#form-delete-teebox-{{ $teebox->id }}')">
                                            <span class="indicator-label">Delete</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </a>
                                    </form>

                                    <a class="btn btn-sm btn-light btn-active-light-primary" data-kt-billing-action="card-edit" href="javascript:;" onclick="openModalEditTeebox({{ $teebox->id }})">Edit</a>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Card-->
                        </div>
                    @endforeach

                    <div class="col-xl-6">
                        <!--begin::Notice-->
                        <div
                            class="notice d-flex bg-light-primary rounded border-primary border border-dashed h-lg-100 p-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                <!--begin::Content-->
                                <div class="mb-3 mb-md-0 fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Important Note!</h4>
                                    <div class="fs-6 text-gray-700 pe-7">Please carefully update
                                        <a href="#" class="fw-bold me-1">Time Slots</a>for
                                        <br />every slot you created
                                    </div>
                                </div>
                                <!--end::Content-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"
                                    data-bs-toggle="modal" data-bs-target="#kt_modal_create_teebox">Add New</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Tab panel-->
            <!--begin::Tab panel-->
            <div id="kt_billing_paypal" class="tab-pane fade" role="tabpanel" aria-labelledby="kt_billing_paypal_tab">
                <!--begin::Title-->
                <h3 class="mb-5">My Paypal</h3>
                <!--end::Title-->
                <!--begin::Description-->
                <div class="text-gray-600 fs-6 fw-semibold mb-5">To use PayPal as your payment method, you will need to make
                    pre-payments each month before your bill is due.</div>
                <!--end::Description-->
                <!--begin::Form-->
                <form class="form">
                    <!--begin::Input group-->
                    <div class="mb-7 mw-350px">
                        <select name="timezone" data-control="select2" data-placeholder="Select an option"
                            data-hide-search="true"
                            class="form-select form-select-solid form-select-lg fw-semibold fs-6 text-gray-700">
                            <option>Select an option</option>
                            <option value="25">US $25.00</option>
                            <option value="50">US $50.00</option>
                            <option value="100">US $100.00</option>
                            <option value="125">US $125.00</option>
                            <option value="150">US $150.00</option>
                        </select>
                    </div>
                    <!--end::Input group-->
                    <button type="submit" class="btn btn-primary">Pay with Paypal</button>
                </form>
                <!--end::Form-->
            </div>
            <!--end::Tab panel-->
        </div>
        <!--end::Tab content-->
    </div>
    <!--end::Payment methods-->
    @include('golfbooking::manage-booking-golf.modal.create-teebox')
    {{-- @include('golfbooking::manage-booking-golf.modal.edit-teebox') --}}
@endsection

@push('scripts')
    <script src="{{ Module::asset('golfbooking:js/custom/manage-booking-golf/index.js') }}"></script>
@endpush
