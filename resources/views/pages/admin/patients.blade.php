@extends('layouts.app')


@section('content')


<div id="kt_app_content_container" class="app-container container-fluid mt-7">
    <div class="card-rounded py-2 bg-light d-flex flex-stack flex-wrap p-5">
        <!--begin::Nav-->
        <div class="nav flex-wrap border-transparent fw-bold">
            <!--begin::Nav item-->
            <li class="nav-item my-1">
                <div style="border: 1px solid #ffcebe;"
                    class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                    data-bs-toggle="tooltip" data-bs-toggle="tooltip" data-bs-delay-show="0" data-bs-placement="top"
                    title="Patient Name">
                    Mohamed Zuhail Barakthullah
                </div>
            </li>
            <!--end::Nav item-->

            <!--begin::Nav item-->
            <li class="nav-item my-1">
                <div class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                    data-bs-toggle="tooltip" data-bs-toggle="tooltip" data-bs-delay-show="0" data-bs-placement="top"
                    title="Age">
                    Age 25
                </div>
            </li>
            <!--end::Nav item-->
            <!--begin::Nav item-->
            <li class="nav-item my-1">
                <div class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                    data-bs-toggle="tooltip" data-bs-toggle="tooltip" data-bs-delay-show="0" data-bs-placement="top"
                    title="Phone">
                    7448874485
                </div>
            </li>

            <li class="nav-item my-1">
                <div class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase"
                    data-bs-toggle="tooltip" data-bs-toggle="tooltip" data-bs-delay-show="0" data-bs-placement="top"
                    title="Patient ID">
                    ID - DN256
                </div>
            </li>

        </div>
        <!--end::Nav-->





        <!--begin::Action-->
        <div href="#" class="btn btn-primary fw-bold fs-8 fs-lg-base" data-bs-toggle="tooltip"
            data-bs-toggle="tooltip" data-bs-delay-show="0" data-bs-placement="top" title="Actual Follow Date">01 Jan 2024
        </div>


            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row  pt-5">
                <!--begin::Content-->
                <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body p-12">
                            <!--begin::Form-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start flex-xxl-row">
                                    <!--begin::Input group-->
                                    <div class="d-flex align-items-center flex-equal fw-row me-4 order-2"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover">
                                        <!--begin::Date-->
                                        <div class="fs-6 fw-bold text-gray-700 text-nowrap">Phone:</div>
                                        <!--end::Date-->

                                        <!--begin::Input-->
                                        <div class="position-relative d-flex align-items-center w-150px">
                                            <!--begin::Datepicker-->
                                            <input class="form-control ms-2 fw-bold pe-5" name="phone_num" id="phoneNum" type="text">

                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-original-title="Enter invoice number" data-kt-initialized="1">
                                        <span class="fs-2x fw-bold text-gray-800">Invoice #</span>
                                        <input type="text" name="invoice-number"
                                            class="form-control form-control-flush fw-bold text-muted fs-3 w-125px"
                                            value="2021001" placehoder="...">
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="d-flex align-items-center justify-content-end flex-equal order-3 fw-row"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-original-title="Specify invoice due date" data-kt-initialized="1">
                                        <!--begin::Date-->
                                        <div class="fs-6 fw-bold text-gray-700 text-nowrap">Date:</div>
                                        <!--end::Date-->

                                        <!--begin::Input-->
                                        <div class="position-relative d-flex align-items-center w-150px">
                                            <!--begin::Datepicker-->
                                            <input class="form-control form-control-transparent fw-bold pe-5 flatpickr-input date-picker"
                                                placeholder="Select date" name="invoice_due_date" id="kt_invoiceDate" type="text" value="<?php echo date('d, M Y'); ?>"
                                                readonly="readonly">


                                            <!--end::Datepicker-->

                                            <!--begin::Icon-->
                                            <i class="ki-outline ki-down fs-4 position-absolute end-0 ms-4"></i>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Top-->

                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-10"></div>
                                <!--end::Separator-->



                                <!--begin::Wrapper-->
                                <div class="mb-0">

                                    <!--begin::Table wrapper-->
                                    <div class="table-responsive mb-10">
                                        <!--begin::Table-->
                                        <table class="table g-5 gs-0 mb-0 fw-bold text-gray-700">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="border-bottom fs-7 fw-bold text-gray-700 text-uppercase">
                                                    <th class="min-w-200px w-375px">Medicine Name</th>
                                                    <th class="min-w-50px w-50px">I.N</th>
                                                    <th class="min-w-150px w-150px">Size</th>
                                                    <th class="min-w-150px w-150px">Price</th>
                                                    <th class="min-w-100px w-100px">Unit</th>
                                                    <th class="min-w-100px w-150px text-end">Purchase Price </th>
                                                    <th class="min-w-75px w-75px text-end">Action</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->

                                            <!--begin::Table body-->
                                            <tbody id="hp-items-body">
                                                <!-- Default Row (first row to show when the page loads) -->
                                                <tr class="border-bottom border-bottom-dashed">
                                                    <td class="pe-7">
                                                        <select class="form-select form-select-solid hp-item-name" name="medicine_name">
                                                            <option value="not-a-patients">Consultation</option>
                                                            <option value="2">Option 2</option>
                                                        </select>
                                                        <input type="text" class="form-control form-control-solid mt-3 hp-item-description" name="medicine_description" placeholder="Description">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-solid text-end hp-item-price" name="" placeholder="0.00">
                                                    </td>
                                                    <td class="ps-0">
                                                        <select class="form-select form-select-solid size_bottle" name="medicine_size">
                                                            <option value="no-size">No Size</option>
                                                            <option value="full-bottle">Full Bottle</option>
                                                            <option value="dram-1">1/2 Dram</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-solid text-end hp-item-price" name="medicine_price" placeholder="0.00">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control form-control-solid text-end hp-item-unit" name="medicine_unit" value="1">
                                                    </td>
                                                    <td class="pt-8 text-end text-nowrap">
                                                        ₹<span class="hp-item-total">0.00</span>
                                                    </td>
                                                    <td class="pt-5 text-end">
                                                        <a type="button" class="btn btn-sm btn-icon btn-active-color-primary hp-remove-item">
                                                            <i class="ki-outline ki-trash fs-3"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->

                                            <!--begin::Table foot-->
                                            <tfoot>
                                                <tr class="border-top border-top-dashed align-top fs-6 fw-bold text-gray-700">
                                                    <th class="text-primary">
                                                        <a class="btn btn-link py-1" id="hp-add-item">Add item</a>
                                                    </th>
                                                    <th colspan="2" class="border-bottom border-bottom-dashed ps-0">
                                                        <div class="d-flex flex-column align-items-start">
                                                            <div class="fs-5">Subtotal</div>
                                                        </div>
                                                    </th>
                                                    <th colspan="2" class="border-bottom border-bottom-dashed text-end">
                                                        ₹<span id="hp-sub-total">0.00</span>
                                                    </th>
                                                </tr>

                                                <tr class="text-gray-500">
                                                    <th></th>
                                                    <th colspan="2" class="fs-4 ps-0">Discount</th>
                                                    <th colspan="2" class="text-end fs-4 text-nowrap">
                                                        ₹
                                                        <div class="d-inline-block">
                                                            <input type="text" class="form-control form-control-solid w-70px" id="hp-discount" placeholder="0">
                                                        </div>
                                                    </th>
                                                </tr>

                                                <tr class="align-top fw-bold text-gray-700">
                                                    <th></th>
                                                    <th colspan="2" class="fs-4 ps-0">Total</th>
                                                    <th colspan="2" class="text-end fs-4 text-nowrap">
                                                        ₹<span id="hp-grand-total">0.00</span>
                                                    </th>
                                                </tr>
                                            </tfoot>
                                            <!--end::Table foot-->
                                        </table>
                                    </div>




                                    <!--end::Table-->



                                    <!--begin::Notes-->
                                    <div class="mb-0">
                                        <label class="form-label fs-6 fw-bold text-gray-700">Notes</label>

                                        <textarea name="notes" class="form-control form-control-solid" rows="3"
                                            placeholder="Thanks for your business"></textarea>
                                    </div>
                                    <!--end::Notes-->
                                </div>

                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content-->

                <!--begin::Sidebar-->
                <div class="flex-lg-auto min-w-lg-300px">
                    <!--begin::Card-->
                    <div class="card">

                        <!--begin::Card body-->
                        <div class="card-body p-10">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold fs-6 text-gray-700">Patient Name</label>
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="patient_name" name="patient_name" id="patientSelect">
                                    <option value="not-a-patients">Not a Patient</option>
                                    <option value="2" id="pending">Option 2</option>
                                </select>
                                <!-- Previous Bills to Pay in a new line, aligned to the right -->
                                <a href="#" class="previous-bill text-end d-block mt-2" id="previousBillsLink" style="display: none;    color: #cac2c2;">Previous Bills to Pay</a>
                            </div>


                            <!--end::Input group-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-8"></div>
                            <!--end::Separator-->

                            <!--begin::Input group-->
                            <div class="mb-8">

                                    <label class="form-label fw-bold fs-6 text-gray-700">  Payment method</label>

                                    <select class="form-select form-select-solid mb-7" data-control="select2" data-placeholder="v" name="payment_type">
                                        <option value="cash">Cash </option>
                                        <option value="upi">UPI</option>
                                        <option value="card">Card</option>
                                        <option value="other">Other</option>
                                    </select>


                                <!--begin::Option-->
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                    <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700">
                                        Due Amount
                                    </span>
                                    <input class="form-check-input" type="checkbox" id="due-amount-checkbox" value="">
                                </label>

                                <input class="form-control form-control-solid text-start mb-7" id="due-amount" type="text" name="payemnt-due-amount" value="" style="display:none;">
                                <!--end::Option-->


                                <!--begin::Option-->
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                    <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700">
                                        Notes
                                    </span>
                                    <input class="form-check-input" type="checkbox" id="notes-checkbox" value="">
                                </label>

                                <textarea class="form-control form-control-solid text-start mb-7 mt-5" name="payment-notes" id="notes-input" type="text" value="" style="display:none;"></textarea>
                                <!--end::Option-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed mb-8"></div>
                            <!--end::Separator-->

                            <!--begin::Actions-->
                            <div class="mb-0">
                                <!--begin::Row-->
                                {{-- <div class="row mb-5">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <a href="#" class="btn btn-light btn-active-light-primary w-100">Preview</a>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col">
                                        <a href="#" class="btn btn-light btn-active-light-primary w-100">Download</a>
                                    </div>
                                    <!--end::Col-->
                                </div> --}}
                                <!--end::Row-->

                                <button type="submit" href="#" class="btn btn-primary w-100"
                                    id="kt_invoice_submit_button"><i
                                        class="ki-outline ki-triangle fs-3"></i> Save
                                </button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Sidebar-->
            </div>
            <!--end::Layout-->
        </div>
        <!--end::Action-->
    </div>
    <!-- Toggle Button -->
    <button id="kt_app_layout_builder_toggle" class="btn btn-dark app-layout-builder-toggle lh-1 py-4">
        <i class="ki-outline ki-setting-4 fs-4 me-1"></i> Patient History
    </button>

    <!-- Drawer -->
    <div id="kt_app_layout_builder" class="bg-body drawer drawer-end">
        <div class="card border-0 shadow-none rounded-0 w-100">
            <div class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4"
                id="kt_app_layout_builder_header" style="background:#000">
                <!-- Card Title -->
                <h3 class="card-title fs-3 fw-bold text-white flex-column m-0">
                    Patient History
                    <small class="text-white opacity-50 fs-7 fw-semibold pt-1">
                        Previous Consultations and Updates
                    </small>
                </h3>
                <!-- Card Toolbar -->
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-color-white p-0 w-20px h-20px rounded-1"
                        id="kt_app_layout_builder_close">
                        <i class="ki-outline ki-cross-square fs-2"></i>
                    </button>
                </div>


            </div>
            <div class="card">
                <!--begin::Card head-->
                <div class="card-header card-header-stretch">
                    <!--begin::Title-->
                    <div class="card-title d-flex align-items-center">
                        <i class="ki-outline ki-calendar-8 fs-1 text-primary me-3 lh-0"></i>

                        <div>
                            <h6 class="fw-bold m-0 text-gray-800">Patient Name</h6>
                            <span class="text-muted fs-7">Patient ID: 12345</span>
                        </div>
                    </div>

                    <!--begin::Toolbar-->
                    <div class="card-toolbar m-0">
                        <!--begin::Tab nav-->
                        <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bold" role="tablist">
                            <li class="nav-item" role="presentation">
                                <div class="nav-link justify-content-center text-active-gray-800 active"
                                    data-bs-toggle="tab" role="tab" href="#kt_activity_today" aria-selected="true">
                                    27 Visit
                                </div>
                            </li>
                        </ul>
                        <!--end::Tab nav-->
                    </div>
                    <!--end::Toolbar-->
                </div>

                <!--begin::Card body-->
                <div class="card-body position-relative ps-4 scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_layout_builder_body"
                    data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer"
                    data-kt-scroll-offset="5px" style="height: 612px;width: 100%;">
                    <!--begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::Tab panel-->
                        <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel"
                            aria-labelledby="kt_activity_today_tab">
                            <!--begin::Timeline-->
                            <div class="timeline timeline-border-dashed">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->

                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-6 fw-semibold mb-2"><label class="fw-bold">Chief
                                                    Complaints:</label> Migraine, Insomnia
                                                Migraine, Insomnia Migraine, Insomnia Migraine, Insomnia Migraine, Insomnia
                                                Migraine, Insomnia Migraine, Insomnia
                                            </div>
                                            <div class="fs-6 fw-semibold mb-2"><label class="fw-bold">Diagnosis:</label>
                                                Chronic stress-related issues
                                            </div>

                                            <!--end::Title-->
                                            <div class="overflow-auto pb-5">
                                                <label class="fw-bold mb-2">Prescribed Remedies: <span
                                                        class="badge badge-light-success">Improved</span></label>
                                                <!--begin::Notice-->
                                                <div
                                                    class="notice d-flex bg-light-primary rounded min-w-550px border-primary border border-dashed flex-shrink-0 p-6">
                                                    <a href="" class="my-2 me-5" data-bs-toggle="tooltip"
                                                        data-bs-toggle="tooltip" data-bs-delay-show="0"
                                                        data-bs-placement="top"
                                                        title="Patient Docs Available ( Click To Download)"> <i
                                                            class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i></a>

                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                        <!--begin::Content-->

                                                        <div class="mb-3 mb-md-0 fw-semibold">
                                                            <ul class="fs-6 text-gray-700 pe-7 mb-0">
                                                                <li>Sos - Arnica</li>
                                                                <li>1 - Belladonna</li>
                                                                <li>2 - Thuja</li>
                                                            </ul>
                                                        </div>
                                                        <!--end::Content-->
                                                        <div class="btn btn-primary px-6 align-self-center text-nowrap">
                                                            ₹ 700
                                                        </div>
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Notice-->
                                            </div>


                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <div class="text-muted me-2 fs-7">
                                                    01 Dec 2024, 4:23 PM - Dr. A
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--end::Timeline item-->

                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->

                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon me-4">
                                        <i class="ki-outline ki-flag fs-2 text-gray-500"></i>
                                    </div>

                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-6 fw-semibold mb-2"><label class="fw-bold">Chief
                                                    Complaints:</label> Migraine, Insomnia
                                                Migraine, Insomnia Migraine, Insomnia Migraine, Insomnia Migraine, Insomnia
                                                Migraine, Insomnia Migraine, Insomnia
                                            </div>
                                            <div class="fs-6 fw-semibold mb-2"><label class="fw-bold">Diagnosis:</label>
                                                Chronic stress-related issues
                                            </div>

                                            <!--end::Title-->
                                            <div class="overflow-auto pb-5">
                                                <label class="fw-bold mb-2">Prescribed Remedies: <span
                                                        class="badge badge-light-success">Improved</span></label>
                                                <!--begin::Notice-->
                                                <div
                                                    class="notice d-flex bg-light-primary rounded min-w-550px border-primary border border-dashed flex-shrink-0 p-6">
                                                    <a href="" class="my-2 me-5" data-bs-toggle="tooltip"
                                                        data-bs-toggle="tooltip" data-bs-delay-show="0"
                                                        data-bs-placement="top"
                                                        title="Patient Docs Available ( Click To Download)"> <i
                                                            class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i></a>

                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                        <!--begin::Content-->

                                                        <div class="mb-3 mb-md-0 fw-semibold">
                                                            <ul class="fs-6 text-gray-700 pe-7 mb-0">
                                                                <li>Sos - Arnica</li>
                                                                <li>1 - Belladonna</li>
                                                                <li>2 - Thuja</li>
                                                            </ul>
                                                        </div>
                                                        <!--end::Content-->
                                                        <div class="btn btn-primary px-6 align-self-center text-nowrap">
                                                            ₹ 700
                                                        </div>
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Notice-->
                                            </div>


                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <div class="text-muted me-2 fs-7">
                                                    01 Dec 2024, 4:23 PM - Dr. A
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--end::Timeline item-->

                            </div>
                            <!--end::Timeline-->
                        </div>
                        <!--end::Tab panel-->

                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Card body-->
            </div>
        </div>
    </div>
    <style>
        /* Drawer Hidden State */
        #kt_app_layout_builder {
            position: fixed;
            top: 0;
            right: -400px;
            /* Hidden off-screen */
            height: 100%;
            width: 380px;
            background: #f8f9fa;
            z-index: 1050;
            display: none;
            /* Initially hidden */
            transition: right 0.3s ease;
            /* Smooth slide effect */
        }

        /* Drawer Visible State */
        #kt_app_layout_builder.drawer-on {
            display: block;
            right: 0;
            /* Slide into view */
        }

        /* Backdrop for Better UX */
        .drawer-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Semi-transparent */
            z-index: 1049;
            /* Below the drawer */
            display: none;
            /* Initially hidden */
            opacity: 0;
            transition: opacity 0.3s ease;
            /* Fade in/out effect */
        }

        .drawer-backdrop.active {
            display: block;
            opacity: 1;
        }

        .btn-icon:hover .ki-outline.ki-cross-square {
            color: var(--bs-primary);
        }
    </style>

    @push('js')
        <script>
            $(document).ready(function() {
                $("#kt_app_layout_builder_toggle").click(function() {
                    toastr.success("Patient history is activated", "Success", {
                        closeButton: true, // Show close button
                        progressBar: true, // Enable progress bar
                        timeOut: 3000, // Duration of the notification in milliseconds
                        positionClass: "toastr-top-left" // Position at the top-right corner
                    });
                });
            });



            // Toggle Button Click Event
            document.getElementById('kt_app_layout_builder_toggle').addEventListener('click', function() {
                const drawer = document.getElementById('kt_app_layout_builder');
                let backdrop = document.querySelector('.drawer-backdrop');

                // Check if backdrop exists, create if not
                if (!backdrop) {
                    backdrop = document.createElement('div');
                    backdrop.className = 'drawer-backdrop';
                    document.body.appendChild(backdrop);
                }

                if (!drawer.classList.contains('drawer-on')) {
                    // Open Drawer
                    drawer.classList.add('drawer-on');
                    drawer.style.display = 'block';
                    backdrop.classList.add('active');
                } else {
                    // Close Drawer
                    closeDrawer(drawer, backdrop);
                }

                // Backdrop Click Event
                backdrop.addEventListener('click', function() {
                    closeDrawer(drawer, backdrop);
                });
            });

            // Close Button Click Event
            document.getElementById('kt_app_layout_builder_close').addEventListener('click', function() {
                const drawer = document.getElementById('kt_app_layout_builder');
                const backdrop = document.querySelector('.drawer-backdrop');
                closeDrawer(drawer, backdrop);
            });

            // Close Drawer Function
            function closeDrawer(drawer, backdrop) {
                if (drawer.classList.contains('drawer-on')) {
                    drawer.classList.remove('drawer-on');
                    setTimeout(() => (drawer.style.display = 'none'), 300); // Wait for animation to complete
                    if (backdrop) {
                        backdrop.classList.remove('active');
                    }
                }
            }
        </script>
    @endpush
@endsection
