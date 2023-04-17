<!--begin::Modal - New Card-->
<div class="modal fade" id="kt_modal_create_teebox" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Add New Tee Box</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form action="{{ route('facility-booking.manage-booking.store') }}" method="POST" enctype="multipart/form-data" novalidate="novalidate" id="form-create-teebox">
                    @csrf
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">Name</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control" placeholder="" name="name" value="" />
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-10">
                        <!--begin::Col-->
                        <div class="col-md-8 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                            <!--end::Label-->
                            <input class="form-control" placeholder="Pick a date" id="expiration_date" name="expiration_date" />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                <span class="required">Total Slot</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input type="text" class="form-control" minlength="3" maxlength="4" placeholder="Slot" name="slot" />
                                <!--end::Input-->
                                <!--begin::CVV icon-->
                                <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                    <span class="svg-icon svg-icon-2x">
                                        <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.40094 3.4401V2.10677C7.40033 1.76658 7.52977 1.43903 7.76277 1.19116C7.99577 0.943285 8.3147 0.793848 8.65427 0.773438H16.0009C16.3381 0.797099 16.6538 0.947953 16.884 1.19548C17.1142 1.44301 17.2418 1.76874 17.2409 2.10677V3.4401C17.2418 3.77813 17.1142 4.10386 16.884 4.35139C16.6538 4.59892 16.3381 4.74978 16.0009 4.77344H8.65427C8.3147 4.75303 7.99577 4.60359 7.76277 4.35572C7.52977 4.10785 7.40033 3.78029 7.40094 3.4401ZM24.0009 10.3068V19.9334C24.0168 20.8755 23.847 21.8114 23.5011 22.6878C23.1552 23.5642 22.6401 24.3639 21.9851 25.0412C21.3301 25.7185 20.5481 26.2601 19.6837 26.6351C18.8194 27.0101 17.8897 27.2111 16.9476 27.2268H7.08094C5.18074 27.2022 3.36795 26.4246 2.04054 25.0646C0.713134 23.7047 -0.0204132 21.8737 0.000939745 19.9734V10.3468C-0.0270515 8.61371 0.571086 6.92871 1.68552 5.60118C2.79996 4.27366 4.35589 3.39271 6.06761 3.1201V3.4401C6.06729 4.1337 6.33724 4.80013 6.82016 5.29799C7.30309 5.79585 7.96099 6.08596 8.65427 6.10677H16.0009C16.6919 6.08257 17.3464 5.79097 17.8265 5.29348C18.3066 4.79598 18.5747 4.13147 18.5743 3.4401V3.21344C20.1405 3.62092 21.5255 4.54049 22.5088 5.82584C23.4921 7.1112 24.0174 8.68849 24.0009 10.3068ZM7.80094 15.4134L10.9743 19.3334C11.0666 19.4457 11.1826 19.5362 11.314 19.5985C11.4454 19.6607 11.5889 19.6931 11.7343 19.6934C11.8856 19.6924 12.0345 19.6557 12.1689 19.5861C12.3033 19.5166 12.4193 19.4163 12.5076 19.2934L16.8543 13.4401C16.9828 13.2317 17.0357 12.9855 17.0041 12.7427C16.9726 12.4999 16.8585 12.2754 16.6809 12.1068C16.4748 11.9647 16.2224 11.9064 15.9748 11.9435C15.7272 11.9806 15.503 12.1105 15.3476 12.3068L11.7476 17.1468L9.33427 14.1601C9.17326 13.9701 8.94633 13.8479 8.69903 13.8183C8.45172 13.7886 8.20234 13.8536 8.00094 14.0001C7.79628 14.1676 7.66209 14.4059 7.62504 14.6677C7.58799 14.9296 7.65078 15.1958 7.80094 15.4134Z" fill="currentColor"/>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::CVV icon-->
                            </div>
                            <!--end::Input wrapper-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                     <!--begin::Input group-->
                     <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">Disabling specific dates</span>
                        </label>
                        <!--end::Label-->
                        <input class="form-control" placeholder="Pick a date" id="disable_dates" name="disable_date"/>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">Discard</button>
                        <button type="submit" id="create-teebox-submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Card-->
