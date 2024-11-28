@extends('layouts.app')


@section('content')
 <!--begin::Toolbar-->
 <div id="kt_app_toolbar" class="app-toolbar  pt-10 mb-0 ">

    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container"
        class="app-container  container-fluid d-flex align-items-stretch ">
        <!--begin::Toolbar wrapper-->
        <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">


            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                <!--begin::Title-->
                <h1
                    class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                    Registration Form
                </h1>
                <!--end::Title-->

                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="#"
                            class="text-muted text-hover-primary">
                            Home </a>
                    </li>
                    <!--end::Item-->

                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-500 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        New Registration </li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->

            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <a href="#" class="btn btn-sm btn-flex btn-transparent btn-hover-outline"
                    data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
                    Save
                </a>

                <a href="" class="btn btn-sm btn-flex btn-outline btn-active-primary bg-body"
                    data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                    <i class="ki-outline ki-eye fs-4"></i> Preview
                </a>

                <a href="" class="btn btn-sm btn-flex btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_campaign">
                    <i class="ki-outline ki-exit-up fs-4"></i> Push
                </a>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar wrapper-->
    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->

<!--begin::Content-->
<div id="kt_app_content" class="app-content  flex-column-fluid ">


    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-fluid ">
        <!--begin::Form-->
        <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"
            data-kt-redirect="/metronic8/demo60/apps/ecommerce/catalog/products.html">
            <!--begin::Aside column-->
            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                <!--begin::Thumbnail settings-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Patient Profile</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body text-center pt-0">
                        <!--begin::Image input-->
                        <!--begin::Image input placeholder-->
                        <style>
                            .image-input-placeholder {
                                background-image: url('images/blank-image.svg');
                            }

                            [data-bs-theme="dark"] .image-input-placeholder {
                                background-image: url('images/blank-image-dark.svg');
                            }
                        </style>
                        <!--end::Image input placeholder-->

                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                            data-kt-image-input="true">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-150px h-150px"></div>
                            <!--end::Preview existing avatar-->

                            <!--begin::Label-->
                            <label
                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                title="Change avatar">
                                <i class="ki-outline ki-pencil fs-7"></i>
                                <!--begin::Inputs-->
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                <input type="hidden" name="avatar_remove">
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->

                            <!--begin::Cancel-->
                            <span
                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                title="Cancel avatar">
                                <i class="ki-outline ki-cross fs-2"></i> </span>
                            <!--end::Cancel-->

                            <!--begin::Remove-->
                            <span
                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                title="Remove avatar">
                                <i class="ki-outline ki-cross fs-2"></i> </span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->

                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set the profile image. Only
                            *.png, *.jpg and *.jpeg image files are accepted</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Thumbnail settings-->
                <!--begin::Status-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Contact Method</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">

                        <div class="mb-7 fv-row">
                            <label class="form-label mb-5"> Preferred Contact Method</label>
                            <div class="row">
                                <div class="col-md-12 mb-5">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="contact_via[]" value="WhatsApp" checked id="contact_via_whatsapp">
                                        <label class="form-check-label" for="contact_via_whatsapp">WhatsApp</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-5">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="contact_via[]" value="Email" id="contact_via_email">
                                        <label class="form-check-label" for="contact_via_email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="contact_via[]" value="SMS" checked id="contact_via_sms">
                                        <label class="form-check-label" for="contact_via_sms">SMS</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Status-->

                <!--begin::Weekly sales-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Emergency Contacts</h2>
                        </div>
                        <!--end::Card title-->
                    </div>


                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <div class="mb-7 fv-row">
                            <label class="form-label">Emergency Contact Name</label>
                            <input type="text" name="emergency_contact_name" class="form-control mb-2" value="">
                        </div>

                        <div class="mb-7 fv-row">
                            <label class="form-label">Emergency Contact Number</label>
                            <input type="tel" name="emergency_contact_number" class="form-control mb-2"  value="">
                        </div>

                        <div class="mb-7 fv-row">
                            <label class="form-label">Select a relationship</label>
                            <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select a Option" id="relationship_select">
                                <option></option>
                                <option value="spouse">Spouse</option>
                                <option value="parent">Parent</option>
                                <option value="child">Child</option>
                                <option value="sibling">Sibling</option>
                                <option value="friend">Friend</option>
                                <option value="guardian">Guardian</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <span class="text-muted">Emergency Contact is not mandatory for now. You can add it in the future if needed.</span>
                    </div>
                    <!--end::Card body-->
                </div>

                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Referral Source</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Select store template-->
                        <label for="kt_ecommerce_add_product_store_template"
                            class="form-label">How Did You Find Us? </label>
                        <!--end::Select store template-->

                        <!--begin::Select2-->
                        <select class="form-select mb-2" name="hear_about_us" id="hear_about_us" data-control="select2"
                                data-hide-search="true" data-placeholder="Select an option">
                            <option></option>
                            <option value="Online">Online</option>
                            <option value="Referral">Referral</option>
                            <option value="Social Media">Social Media</option>
                            <option value="Other">Other</option>
                        </select>
                        <!--end::Select2-->

                        <!-- Referral source dropdown (hidden initially) -->
                        <div id="referral_source" class="mt-5" style="display:none;">
                            <label for="referral_details" class="form-label">Patient Name?</label>
                            <select class="form-select form-select-solid" id="referral_details" name="referral_details" data-control="select2" data-hide-search="true" data-placeholder="Expiry Status">
                                <option disabled>Expiry Status</option>
                                <option value="all">All</option>
                                <option value="name1">name 1</option>
                                <option value="name1">name 1</option>
                                <option value="name1">Expires in 3 Months</option>
                                <option value="name1">Expires in 6 Months</option>
                                <option value="name1">Expires in 1 Year</option>
                            </select>
                        </div>

                    </div>
                    <!--end::Card body-->
                </div>

                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Patient Report</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <div class="fv-row mb-2">
                            <!--begin::Dropzone-->
                            <button type="button" class="btn btn-primary file-button me-4">Choose File</button>
                        <span class="spinner-border text-primary" role="status" style="display: none" id="import-loader">
                            <span class="visually-hidden">Loading...</span>
                        </span>
                        <input type="file" id="file-upload" name="filename" style="display: none;" />
                        <span id="file-name-display"></span>
                            <!--end::Dropzone-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Description-->
                        <div class="text-muted fs-7 mt-3">Choose and Select the Patient Report
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
            <!--end::Aside column-->

            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <!--begin:::Tabs-->
                {{-- <ul
                    class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                            href="#kt_ecommerce_add_product_general">General</a>
                    </li>
                    <!--end:::Tab item-->

                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                            href="#kt_ecommerce_add_product_advanced">Advanced</a>
                    </li>
                    <!--end:::Tab item-->

                </ul> --}}
                <!--end:::Tabs-->
                <!--begin::Tab content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
                        role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">

                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>General</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="fv-row w-100">
                                                    <label class="required form-label">Patient Name</label>
                                                    <input type="text" class="form-control" id="patient_name" name="patient_name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="fv-row w-100">
                                                    <label class="form-label required">Age</label>
                                                    <input type="number" class="form-control" id="age" name="age" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="fv-row w-100 flex-md-root">
                                                    <label class="required form-label">Contact Number</label>
                                                    <input type="tel" name="phone_number" class="form-control mb-2" value="" required>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="fv-row mb-10 mt-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">
                                            Gender
                                            <span class="ms-1" data-bs-toggle="tooltip" title="Select the gender of the patient">
                                                <i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
                                            </span>
                                        </label>
                                        <!--End::Label-->

                                        <!--begin::Row-->
                                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" name="gender" value="male" checked="checked">
                                                    </span>
                                                    <!--end::Radio-->

                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Male</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" name="gender" value="female">
                                                    </span>
                                                    <!--end::Radio-->

                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Female</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" name="gender" value="other">
                                                    </span>
                                                    <!--end::Radio-->

                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Other</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="fv-row w-100 ">
                                                <label class="form-label">Occupation</label>
                                                <input type="text" name="occupation" class="form-control mb-2" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="fv-row w-100">
                                                <label class="form-label">Email Address</label>
                                                <input type="tel" name="phone_number" class="form-control mb-2" value="">
                                            </div>
                                        </div>

                                    </div>





                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->

                            <!--begin::Medical History-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Medical History</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!-- Existing fields here (Base Price, Discount Type, etc.) -->

                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2 required form-label">
                                            Condition Type
                                        </label>
                                        <!--End::Label-->
                                    <!-- Condition Type Section -->
                                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" name="condition_type" value="acute" checked="checked">
                                                    </span>
                                                    <!--end::Radio-->

                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Acute</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" name="condition_type" value="chronic">
                                                    </span>
                                                    <!--end::Radio-->

                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Chronic</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                    </div>

                                    <div class="mb-10 fv-row">
                                        <label class="form-label d-block">Known Allergies</label>
                                        <input id="known_allergies_input" name="known_allergies_input" class="form-control mb-2" value="">
                                    </div>

                                    <div class="mb-7 fv-row">
                                        <label for="current_medications" class="form-label">Current Medications:</label>
                                        <textarea class="form-control" id="current_medications" rows="2" placeholder="List current medications with dosages"></textarea>
                                    </div>

                                    <div class="mb-7 fv-row">
                                        <label for="previous_treatments" class="form-label">Previous Treatments (if any):</label>
                                        <textarea class="form-control" id="previous_treatments" rows="2" placeholder="Describe any past treatments"></textarea>
                                    </div>

                                    <!-- Diagnosis Section -->
                                    <div class="mb-10 fv-row">
                                        <label class="form-label d-block">Diagnosis</label>
                                        <input id="diagnosis_input" name="diagnosis_input" class="form-control mb-2" value="">
                                    </div>


                                    <div class="mb-7 fv-row">
                                        <label for="surgical_history" class="form-label">Surgical History:</label>
                                        <textarea class="form-control" id="surgical_history" rows="2" placeholder="Describe any surgeries with dates"></textarea>
                                    </div>

                                    <div class="mb-7 fv-row">
                                        <label for="family_history" class="form-label">Family History of Illnesses (if relevant to homoeopathic treatment):</label>
                                        <textarea class="form-control" id="family_history" rows="2" placeholder="List any relevant family illnesses"></textarea>
                                    </div>



                                    <div class="mb-7 fv-row">
                                        <label class="form-label">Residential Address</label>
                                        <textarea name="residential_address" class="form-control mb-2"></textarea>
                                    </div>

                                    <div class="mb-7 fv-row">
                                        <label class="form-label">Reason for Visit</label>
                                        <textarea name="reason_for_visit" class="form-control mb-2"></textarea>
                                    </div>


                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Medical History-->


                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Lifestyle Information
                                        </h2>
                                    </div>
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!-- Existing fields here (Base Price, Discount Type, etc.) -->

                                    <div class="fv-row mb-10">
                                        <label class="fs-6 fw-semibold mb-2 form-label">Diet</label>
                                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                            <div class="col">
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" name="diet" value="vegetarian">
                                                    </span>
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Vegetarian</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col">
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" name="diet" value="non-vegetarian">
                                                    </span>
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Non-Vegetarian</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col">
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" name="diet" value="vegan">
                                                    </span>
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Vegan</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-10 fv-row">
                                        <label for="exercise_routine" class="form-label">Exercise Routine:</label>
                                        <textarea class="form-control" id="exercise_routine" rows="2" placeholder="Describe your exercise routine"></textarea>
                                    </div>

                                    <div class="fv-row mb-10">
                                        <label class="fs-6 fw-semibold mb-2 form-label">Sleep Pattern</label>
                                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                            <div class="col">
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" name="sleep_pattern" value="poor">
                                                    </span>
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Poor</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col">
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" name="sleep_pattern" value="average">
                                                    </span>
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Average</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col">
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" name="sleep_pattern" value="good">
                                                    </span>
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Good</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fv-row mb-10">
                                        <label class="fs-6 fw-semibold mb-2 form-label">Alcohol/Tobacco Consumption</label>
                                        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                            <div class="col">
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" name="alcohol_tobacco" value="yes">
                                                    </span>
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">Yes</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col">
                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                    <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                        <input class="form-check-input" type="radio" name="alcohol_tobacco" value="no">
                                                    </span>
                                                    <span class="ms-5">
                                                        <span class="fs-4 fw-bold text-gray-800 d-block">No</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- Optional Frequency Input -->
                                        <textarea class="form-control mt-3" id="consumption_frequency" rows="2" placeholder="If yes, specify frequency"></textarea>
                                    </div>





                                </div>
                                <!--end::Card body-->
                            </div>


                            <div class="card card-flush py-4">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Presenting Complaints
                                        </h2>
                                    </div>
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">

                                    <div class="fv-row mb-10">
                                        <label class="fs-6 fw-semibold mb-2 form-label">Main Health Concerns</label>
                                        <textarea class="form-control" name="main_health_concerns" rows="3" placeholder="Describe the main health concerns"></textarea>
                                    </div>

                                    <div class="fv-row mb-10">
                                        <label class="fs-6 fw-semibold mb-2 form-label">Duration of Symptoms</label>
                                        <input type="text" class="form-control" name="duration_of_symptoms" placeholder="How long have the symptoms been present?">
                                    </div>

                                    <div class="fv-row mb-10">
                                        <label class="fs-6 fw-semibold mb-2 form-label">Previous Consultations (if any for the same issue)</label>
                                        <textarea class="form-control" name="previous_consultations" rows="3" placeholder="Details of any previous consultations for the same issue"></textarea>
                                    </div>

                                </div>

                            </div>

                            <div class="card card-flush py-4">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Previous Homoeopathic Treatment
                                        </h2>
                                    </div>
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="fv-row mb-10">
                                        <label class="fs-6 fw-semibold mb-2 form-label">Previous Homoeopathic Treatment (if any)</label>
                                        <textarea class="form-control" name="previous_homoeopathic_treatment" rows="3" placeholder="Details of any previous homoeopathic treatments"></textarea>
                                    </div>

                                    <div class="fv-row mb-10">
                                        <label class="fs-6 fw-semibold mb-2 form-label">Previous Homoeopath Consulted</label>
                                        <input type="text" class="form-control" name="previous_homoeopath" placeholder="Name of the previous homoeopath consulted">
                                    </div>

                                    <div class="fv-row mb-10">
                                        <label class="fs-6 fw-semibold mb-2 form-label">Past Remedies Taken</label>
                                        <textarea class="form-control" name="past_remedies" rows="3" placeholder="List any past remedies taken"></textarea>
                                    </div>

                                    <div class="fv-row mb-10">
                                        <label class="fs-6 fw-semibold mb-2 form-label">Results/Response to Treatment</label>
                                        <textarea class="form-control" name="response_to_treatment" rows="3" placeholder="How did the patient respond to the past treatment?"></textarea>
                                    </div>


                                </div>

                            </div>

                            <div class="card card-flush py-4">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Date of Registration
                                        </h2>
                                    </div>
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">

                                    <div class="mb-7 fv-row">
                                        <label class="form-label">First Registered Date</label>
                                        <div class="position-relative d-flex align-items-center">
                                            <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>
                                            <input class="form-control form-control-solid ps-12 flatpickr-input date-picker"
                                            placeholder="Select a date" name="registration_date" type="text" value="<?php echo date('d, M Y'); ?>">
                                        </div>
                                        <div class="text-muted fs-7 mt-2 pr-3">Registration date is auto-filled.</div>
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                    <!--end::Tab pane-->

                    {{-- <!--begin::Tab pane-->
                    <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced"
                        role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">

                            <!--begin::Inventory-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Inventory</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">SKU</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" name="sku" class="form-control mb-2"
                                            placeholder="SKU Number" value="">
                                        <!--end::Input-->

                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Enter the product SKU.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Barcode</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" name="barcode"
                                            class="form-control mb-2"
                                            placeholder="Barcode Number" value="">
                                        <!--end::Input-->

                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Enter the product barcode
                                            number.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Quantity</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <div class="d-flex gap-3">
                                            <input type="number" name="shelf"
                                                class="form-control mb-2" placeholder="On shelf"
                                                value="">
                                            <input type="number" name="warehouse"
                                                class="form-control mb-2"
                                                placeholder="In warehouse">
                                        </div>
                                        <!--end::Input-->

                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Enter the product quantity.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">Allow Backorders</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <div
                                            class="form-check form-check-custom form-check-solid mb-2">
                                            <input class="form-check-input" type="checkbox"
                                                value="">
                                            <label class="form-check-label">
                                                Yes
                                            </label>
                                        </div>
                                        <!--end::Input-->

                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Allow customers to purchase
                                            products that are out of stock.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Inventory-->

                            <!--begin::Variations-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Variations</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class=""
                                        data-kt-ecommerce-catalog-add-product="auto-options">
                                        <!--begin::Label-->
                                        <label class="form-label">Add Product Variations</label>
                                        <!--end::Label-->

                                        <!--begin::Repeater-->
                                        <div id="kt_ecommerce_add_product_options">
                                            <!--begin::Form group-->
                                            <div class="form-group">
                                                <div data-repeater-list="kt_ecommerce_add_product_options"
                                                    class="d-flex flex-column gap-3">
                                                    <div data-repeater-item=""
                                                        class="form-group d-flex flex-wrap align-items-center gap-5">
                                                        <!--begin::Select2-->
                                                        <div class="w-100 w-md-200px">
                                                            <select class="form-select"
                                                                name="product_option"
                                                                data-placeholder="Select a variation"
                                                                data-kt-ecommerce-catalog-add-product="product_option">
                                                                <option></option>
                                                                <option value="color">Color
                                                                </option>
                                                                <option value="size">Size
                                                                </option>
                                                                <option value="material">
                                                                    Material</option>
                                                                <option value="style">Style
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <!--end::Select2-->

                                                        <!--begin::Input-->
                                                        <input type="text"
                                                            class="form-control mw-100 w-200px"
                                                            name="product_option_value"
                                                            placeholder="Variation">
                                                        <!--end::Input-->

                                                        <button type="button"
                                                            data-repeater-delete=""
                                                            class="btn btn-sm btn-icon btn-light-danger">
                                                            <i
                                                                class="ki-outline ki-cross fs-1"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Form group-->

                                            <!--begin::Form group-->
                                            <div class="form-group mt-5">
                                                <button type="button" data-repeater-create=""
                                                    class="btn btn-sm btn-light-primary">
                                                    <i class="ki-outline ki-plus fs-2"></i> Add
                                                    another variation
                                                </button>
                                            </div>
                                            <!--end::Form group-->
                                        </div>
                                        <!--end::Repeater-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Variations-->

                            <!--begin::Shipping-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Shipping</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Input-->
                                        <div
                                            class="form-check form-check-custom form-check-solid mb-2">
                                            <input class="form-check-input" type="checkbox"
                                                id="kt_ecommerce_add_product_shipping_checkbox"
                                                value="1">
                                            <label class="form-check-label">
                                                This is a physical product
                                            </label>
                                        </div>
                                        <!--end::Input-->

                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set if the product is a
                                            physical or digital item. Physical products may
                                            require shipping.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Shipping form-->
                                    <div id="kt_ecommerce_add_product_shipping"
                                        class="d-none mt-10">
                                        <!--begin::Input group-->
                                        <div class="mb-10 fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Weight</label>
                                            <!--end::Label-->

                                            <!--begin::Editor-->
                                            <input type="text" name="weight"
                                                class="form-control mb-2"
                                                placeholder="Product weight" value="">
                                            <!--end::Editor-->

                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Set a product weight in
                                                kilograms (kg).</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="form-label">Dimension</label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <div class="d-flex flex-wrap flex-sm-nowrap gap-3">
                                                <input type="number" name="width"
                                                    class="form-control mb-2"
                                                    placeholder="Width (w)" value="">
                                                <input type="number" name="height"
                                                    class="form-control mb-2"
                                                    placeholder="Height (h)" value="">
                                                <input type="number" name="length"
                                                    class="form-control mb-2"
                                                    placeholder="Lengtn (l)" value="">
                                            </div>
                                            <!--end::Input-->

                                            <!--begin::Description-->
                                            <div class="text-muted fs-7">Enter the product
                                                dimensions in centimeters (cm).</div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Shipping form-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Shipping-->
                            <!--begin::Meta options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Meta Options</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->

                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label">Meta Tag Title</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" class="form-control mb-2"
                                            name="meta_title" placeholder="Meta tag name">
                                        <!--end::Input-->

                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set a meta tag title.
                                            Recommended to be simple and precise keywords.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label">Meta Tag Description</label>
                                        <!--end::Label-->

                                        <!--begin::Editor-->
                                        <div id="kt_ecommerce_add_product_meta_description"
                                            name="kt_ecommerce_add_product_meta_description"
                                            class="min-h-100px mb-2"></div>
                                        <!--end::Editor-->

                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set a meta tag description
                                            to the product for increased SEO ranking.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="form-label">Meta Tag Keywords</label>
                                        <!--end::Label-->

                                        <!--begin::Editor-->
                                        <input id="kt_ecommerce_add_product_meta_keywords"
                                            name="kt_ecommerce_add_product_meta_keywords"
                                            class="form-control mb-2">
                                        <!--end::Editor-->

                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set a list of keywords that
                                            the product is related to. Separate the keywords by
                                            adding a comma <code>,</code> between each keyword.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Meta options-->
                        </div>
                    </div>
                    <!--end::Tab pane--> --}}

                </div>
                <!--end::Tab content-->

                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href="/metronic8/demo60/apps/ecommerce/catalog/products.html"
                        id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
                        Cancel
                    </a>
                    <!--end::Button-->

                    <!--begin::Button-->
                    <button type="submit" id="kt_ecommerce_add_product_submit"
                        class="btn btn-primary">
                        <span class="indicator-label">
                            Save Changes
                        </span>
                        <span class="indicator-progress">
                            Please wait... <span
                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Main column-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content container-->
</div>
<!--end::Content-->

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize Flatpickr on all inputs with the class "date-picker"
        flatpickr('.date-picker', {
            enableTime: false,  // Disable time selection
            dateFormat: "d, M Y",  // Format as "day, Month Year"
            defaultDate: "<?php echo date('d, M Y'); ?>"  // Set the current date as default
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        const fileButton = document.querySelector('.file-button');
        const fileInput = document.querySelector('#file-upload');
        const fileNameDisplay = document.querySelector('#file-name-display');

        // Bind click event to custom button
        fileButton.addEventListener('click', function () {
            console.log('File button clicked');
            fileInput.click();
        });

        // Show selected file name
        fileInput.addEventListener('change', function (event) {
            console.log('File input changed');
            const fileName = event.target.files[0]?.name || 'No file chosen';
            fileNameDisplay.textContent = fileName;
        });
    });
</script>
@endsection

