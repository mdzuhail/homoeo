@extends('layouts.app')


@section('content')






 <!--begin::Toolbar-->
 <div id="kt_app_toolbar" class="app-toolbar  pt-10 mb-0 ">

<!--begin::Toolbar container-->
<div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex align-items-stretch ">
    <!--begin::Toolbar wrapper-->
    <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">


        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                Patient List
            </h1>
            <!--end::Title-->

            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="/#" class="text-muted text-hover-primary">
                        Home </a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    Patients </li>
                <!--end::Item-->

            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->

        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <a href="#" class="btn btn-sm btn-flex btn-transparent btn-hover-outline" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
                Save
            </a>

            <a href="" class="btn btn-sm btn-flex btn-outline btn-active-primary bg-body" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                <i class="ki-outline ki-eye fs-4"></i> Preview
            </a>

            <a href="" class="btn btn-sm btn-flex btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
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
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-outline ki-magnifier fs-3 position-absolute ms-5"></i> <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Customers">
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                    <!--begin::Filter-->
                    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-outline ki-filter fs-2"></i> Filter
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-4 text-gray-900 fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->

                        <!--begin::Separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Separator-->

                        <!--begin::Content-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fs-5 fw-semibold mb-3">Month:</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-customer-table-filter="month" data-dropdown-parent="#kt-toolbar-filter">
                                            <option></option>
                                            <option value="aug">August</option>
                                            <option value="sep">September</option>
                                            <option value="oct">October</option>
                                            <option value="nov">November</option>
                                            <option value="dec">December</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label fs-5 fw-semibold mb-3">Year:</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-customer-table-filter="month" data-dropdown-parent="#kt-toolbar-filter">
                                            <option></option>
                                            <option value="2024">2024</option>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                        </select>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-5 fw-semibold mb-3">Payment Type:</label>
                                <!--end::Label-->

                                <!--begin::Options-->
                                <div class="d-flex flex-column flex-wrap fw-semibold" data-kt-customer-table-filter="payment_type">
                                    <!--begin::Option-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                        <input class="form-check-input" type="radio" name="payment_type" value="all" checked="checked">
                                        <span class="form-check-label text-gray-600">
                                            All
                                        </span>
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                        <input class="form-check-input" type="radio" name="payment_type" value="Cash">
                                        <span class="form-check-label text-gray-600">
                                            Cash
                                        </span>
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                                        <input class="form-check-input" type="radio" name="payment_type" value="Gpay">
                                        <span class="form-check-label text-gray-600">
                                            Gpay
                                        </span>
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" name="payment_type" value="american_express">
                                        <span class="form-check-label text-gray-600">
                                            Card
                                        </span>
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true" data-kt-customer-table-filter="reset">Reset</button>

                                <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true" data-kt-customer-table-filter="filter">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Menu 1--> <!--end::Filter-->

                    <!--begin::Export-->
                    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal">
                        <i class="ki-outline ki-exit-up fs-2"></i> Export
                    </button>
                    <!--end::Export-->

                    <!--begin::Add customer-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">
                        Add Patient
                    </button>
                    <!--end::Add customer-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-customer-table-select="selected_count"></span> Selected
                    </div>

                    <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">
                        Delete Selected
                    </button>
                </div>
                <!--end::Group actions-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body pt-0">

            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1">
                            </div>
                        </th>
                        <th class="min-w-125px">Patient Name</th>
                        <th class="min-w-125px">Email</th>
                        <th class="min-w-125px">Company</th>
                        <th class="min-w-125px">Payment Method</th>
                        <th class="min-w-125px">Created Date</th>
                        <th class="text-end min-w-70px">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">smith@kpmg.com</a>
                        </td>
                        <td>
                            - </td>
                        <td data-filter="mastercard">
                            <img src="images/mastercard.svg" class="w-35px me-3" alt="">
                            **** 8884
                        </td>
                        <td>
                            14 Dec 2020, 8:43 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Melody Macy</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">melody@altbox.com</a>
                        </td>
                        <td>
                            Google </td>
                        <td data-filter="visa">
                            <img src="images/visa.svg" class="w-35px me-3" alt="">
                            **** 6744
                        </td>
                        <td>
                            01 Dec 2020, 10:12 am </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Max Smith</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">max@kt.com</a>
                        </td>
                        <td>
                            Bistro Union </td>
                        <td data-filter="mastercard">
                            <img src="images/mastercard.svg" class="w-35px me-3" alt="">
                            **** 3081
                        </td>
                        <td>
                            12 Nov 2020, 2:01 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">sean@dellito.com</a>
                        </td>
                        <td>
                            Astro Limited </td>
                        <td data-filter="american_express">
                            <img src="images/american-express.svg" class="w-35px me-3" alt="">
                            **** 9769
                        </td>
                        <td>
                            21 Oct 2020, 5:54 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Brian Cox</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">brian@exchange.com</a>
                        </td>
                        <td>
                            - </td>
                        <td data-filter="visa">
                            <img src="images/visa.svg" class="w-35px me-3" alt="">
                            **** 1917
                        </td>
                        <td>
                            19 Oct 2020, 7:32 am </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Mikaela Collins</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">mik@pex.com</a>
                        </td>
                        <td>
                            dheeshan </td>
                        <td data-filter="american_express">
                            <img src="images/american-express.svg" class="w-35px me-3" alt="">
                            **** 3073
                        </td>
                        <td>
                            23 Sep 2020, 12:37 am </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Francis Mitcham</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">f.mit@kpmg.com</a>
                        </td>
                        <td>
                            Paypal </td>
                        <td data-filter="mastercard">
                            <img src="images/mastercard.svg" class="w-35px me-3" alt="">
                            **** 1437
                        </td>
                        <td>
                            11 Sep 2020, 3:15 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Olivia Wild</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">olivia@corpmail.com</a>
                        </td>
                        <td>
                            - </td>
                        <td data-filter="american_express">
                            <img src="images/american-express.svg" class="w-35px me-3" alt="">
                            **** 7402
                        </td>
                        <td>
                            03 Sep 2020, 1:08 am </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Neil Owen</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">owen.neil@gmail.com</a>
                        </td>
                        <td>
                            Paramount </td>
                        <td data-filter="visa">
                            <img src="images/visa.svg" class="w-35px me-3" alt="">
                            **** 3014
                        </td>
                        <td>
                            01 Sep 2020, 4:58 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Dan Wilson</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">dam@consilting.com</a>
                        </td>
                        <td>
                            Trinity Studio </td>
                        <td data-filter="visa">
                            <img src="images/visa.svg" class="w-35px me-3" alt="">
                            **** 2295
                        </td>
                        <td>
                            18 Aug 2020, 3:34 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Bold</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">emma@intenso.com</a>
                        </td>
                        <td>
                            B&amp;T Legal Services </td>
                        <td data-filter="mastercard">
                            <img src="images/mastercard.svg" class="w-35px me-3" alt="">
                            **** 9708
                        </td>
                        <td>
                            14 Aug 2020, 1:21 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Ana Crown</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">ana.cf@limtel.com</a>
                        </td>
                        <td>
                            Paysafe Security </td>
                        <td data-filter="american_express">
                            <img src="images/american-express.svg" class="w-35px me-3" alt="">
                            **** 4056
                        </td>
                        <td>
                            11 Aug 2020, 5:13 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">smith@kpmg.com</a>
                        </td>
                        <td>
                            - </td>
                        <td data-filter="mastercard">
                            <img src="images/mastercard.svg" class="w-35px me-3" alt="">
                            **** 8884
                        </td>
                        <td>
                            14 Dec 2020, 8:43 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Melody Macy</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">melody@altbox.com</a>
                        </td>
                        <td>
                            Google </td>
                        <td data-filter="visa">
                            <img src="images/visa.svg" class="w-35px me-3" alt="">
                            **** 6744
                        </td>
                        <td>
                            01 Dec 2020, 10:12 am </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Max Smith</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">max@kt.com</a>
                        </td>
                        <td>
                            Bistro Union </td>
                        <td data-filter="mastercard">
                            <img src="images/mastercard.svg" class="w-35px me-3" alt="">
                            **** 3081
                        </td>
                        <td>
                            12 Nov 2020, 2:01 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">sean@dellito.com</a>
                        </td>
                        <td>
                            Astro Limited </td>
                        <td data-filter="american_express">
                            <img src="images/american-express.svg" class="w-35px me-3" alt="">
                            **** 9769
                        </td>
                        <td>
                            21 Oct 2020, 5:54 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Brian Cox</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">brian@exchange.com</a>
                        </td>
                        <td>
                            - </td>
                        <td data-filter="visa">
                            <img src="images/visa.svg" class="w-35px me-3" alt="">
                            **** 1917
                        </td>
                        <td>
                            19 Oct 2020, 7:32 am </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Mikaela Collins</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">mik@pex.com</a>
                        </td>
                        <td>
                            dheeshan </td>
                        <td data-filter="american_express">
                            <img src="images/american-express.svg" class="w-35px me-3" alt="">
                            **** 3073
                        </td>
                        <td>
                            23 Sep 2020, 12:37 am </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Francis Mitcham</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">f.mit@kpmg.com</a>
                        </td>
                        <td>
                            Paypal </td>
                        <td data-filter="mastercard">
                            <img src="images/mastercard.svg" class="w-35px me-3" alt="">
                            **** 1437
                        </td>
                        <td>
                            11 Sep 2020, 3:15 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Olivia Wild</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">olivia@corpmail.com</a>
                        </td>
                        <td>
                            - </td>
                        <td data-filter="american_express">
                            <img src="images/american-express.svg" class="w-35px me-3" alt="">
                            **** 7402
                        </td>
                        <td>
                            03 Sep 2020, 1:08 am </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Neil Owen</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">owen.neil@gmail.com</a>
                        </td>
                        <td>
                            Paramount </td>
                        <td data-filter="visa">
                            <img src="images/visa.svg" class="w-35px me-3" alt="">
                            **** 3014
                        </td>
                        <td>
                            01 Sep 2020, 4:58 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Dan Wilson</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">dam@consilting.com</a>
                        </td>
                        <td>
                            Trinity Studio </td>
                        <td data-filter="visa">
                            <img src="images/visa.svg" class="w-35px me-3" alt="">
                            **** 2295
                        </td>
                        <td>
                            18 Aug 2020, 3:34 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Bold</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">emma@intenso.com</a>
                        </td>
                        <td>
                            B&amp;T Legal Services </td>
                        <td data-filter="mastercard">
                            <img src="images/mastercard.svg" class="w-35px me-3" alt="">
                            **** 9708
                        </td>
                        <td>
                            14 Aug 2020, 1:21 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Ana Crown</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">ana.cf@limtel.com</a>
                        </td>
                        <td>
                            Paysafe Security </td>
                        <td data-filter="american_express">
                            <img src="images/american-express.svg" class="w-35px me-3" alt="">
                            **** 4056
                        </td>
                        <td>
                            11 Aug 2020, 5:13 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">smith@kpmg.com</a>
                        </td>
                        <td>
                            - </td>
                        <td data-filter="mastercard">
                            <img src="images/mastercard.svg" class="w-35px me-3" alt="">
                            **** 8884
                        </td>
                        <td>
                            14 Dec 2020, 8:43 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Melody Macy</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">melody@altbox.com</a>
                        </td>
                        <td>
                            Google </td>
                        <td data-filter="visa">
                            <img src="images/visa.svg" class="w-35px me-3" alt="">
                            **** 6744
                        </td>
                        <td>
                            01 Dec 2020, 10:12 am </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Max Smith</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">max@kt.com</a>
                        </td>
                        <td>
                            Bistro Union </td>
                        <td data-filter="mastercard">
                            <img src="images/mastercard.svg" class="w-35px me-3" alt="">
                            **** 3081
                        </td>
                        <td>
                            12 Nov 2020, 2:01 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">sean@dellito.com</a>
                        </td>
                        <td>
                            Astro Limited </td>
                        <td data-filter="american_express">
                            <img src="images/american-express.svg" class="w-35px me-3" alt="">
                            **** 9769
                        </td>
                        <td>
                            21 Oct 2020, 5:54 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Brian Cox</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">brian@exchange.com</a>
                        </td>
                        <td>
                            - </td>
                        <td data-filter="visa">
                            <img src="images/visa.svg" class="w-35px me-3" alt="">
                            **** 1917
                        </td>
                        <td>
                            19 Oct 2020, 7:32 am </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Mikaela Collins</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">mik@pex.com</a>
                        </td>
                        <td>
                            dheeshan </td>
                        <td data-filter="american_express">
                            <img src="images/american-express.svg" class="w-35px me-3" alt="">
                            **** 3073
                        </td>
                        <td>
                            23 Sep 2020, 12:37 am </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Francis Mitcham</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">f.mit@kpmg.com</a>
                        </td>
                        <td>
                            Paypal </td>
                        <td data-filter="mastercard">
                            <img src="images/mastercard.svg" class="w-35px me-3" alt="">
                            **** 1437
                        </td>
                        <td>
                            11 Sep 2020, 3:15 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Olivia Wild</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">olivia@corpmail.com</a>
                        </td>
                        <td>
                            - </td>
                        <td data-filter="american_express">
                            <img src="images/american-express.svg" class="w-35px me-3" alt="">
                            **** 7402
                        </td>
                        <td>
                            03 Sep 2020, 1:08 am </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Neil Owen</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">owen.neil@gmail.com</a>
                        </td>
                        <td>
                            Paramount </td>
                        <td data-filter="visa">
                            <img src="images/visa.svg" class="w-35px me-3" alt="">
                            **** 3014
                        </td>
                        <td>
                            01 Sep 2020, 4:58 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Dan Wilson</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">dam@consilting.com</a>
                        </td>
                        <td>
                            Trinity Studio </td>
                        <td data-filter="visa">
                            <img src="images/visa.svg" class="w-35px me-3" alt="">
                            **** 2295
                        </td>
                        <td>
                            18 Aug 2020, 3:34 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Bold</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">emma@intenso.com</a>
                        </td>
                        <td>
                            B&amp;T Legal Services </td>
                        <td data-filter="mastercard">
                            <img src="images/mastercard.svg" class="w-35px me-3" alt="">
                            **** 9708
                        </td>
                        <td>
                            14 Aug 2020, 1:21 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Ana Crown</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">ana.cf@limtel.com</a>
                        </td>
                        <td>
                            Paysafe Security </td>
                        <td data-filter="american_express">
                            <img src="images/american-express.svg" class="w-35px me-3" alt="">
                            **** 4056
                        </td>
                        <td>
                            11 Aug 2020, 5:13 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">smith@kpmg.com</a>
                        </td>
                        <td>
                            - </td>
                        <td data-filter="mastercard">
                            <img src="images/mastercard.svg" class="w-35px me-3" alt="">
                            **** 8884
                        </td>
                        <td>
                            14 Dec 2020, 8:43 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Melody Macy</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">melody@altbox.com</a>
                        </td>
                        <td>
                            Google </td>
                        <td data-filter="visa">
                            <img src="images/visa.svg" class="w-35px me-3" alt="">
                            **** 6744
                        </td>
                        <td>
                            01 Dec 2020, 10:12 am </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Max Smith</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">max@kt.com</a>
                        </td>
                        <td>
                            Bistro Union </td>
                        <td data-filter="mastercard">
                            <img src="images/mastercard.svg" class="w-35px me-3" alt="">
                            **** 3081
                        </td>
                        <td>
                            12 Nov 2020, 2:01 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="/homoeo/demo60/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
                        </td>
                        <td>
                            <a href="#" class="text-gray-600 text-hover-primary mb-1">sean@dellito.com</a>
                        </td>
                        <td>
                            Astro Limited </td>
                        <td data-filter="american_express">
                            <img src="images/american-express.svg" class="w-35px me-3" alt="">
                            **** 9769
                        </td>
                        <td>
                            21 Oct 2020, 5:54 pm </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-outline ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="/homoeo/demo60/apps/customers/view.html" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

    <!--begin::Modals-->
    <!--begin::Modal - Customers - Add-->
    <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-850px p-9">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Form-->
                <form class="form" action="#" id="kt_modal_add_customer_form" data-kt-redirect="#">
                    <!--begin::Modal header-->
                    <div class="modal-header" id="kt_modal_add_customer_header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bold">New Appointment</h2>
                        <!--end::Modal title-->

                        <!--begin::Close-->
                        <div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                            <i class="ki-outline ki-cross fs-1"></i>
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--end::Modal header-->

                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                            <div class="row mb-3">
                                <div class="col-md-12 fv-row">
                                    <input type="text" class="form-control form-control-solid mb-3" name="name" placeholder="Search Existing Name or Mobile Number here" style="border: 1px solid #cbcbce;">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 fv-row">
                                    <label class="required fs-5 fw-semibold mb-2">Name</label>
                                    <input type="text" class="form-control form-control-solid" name="name" placeholder="Enter full name">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-md-6 fv-row">
                                    <label class="required fs-5 fw-semibold mb-2">Age</label>
                                    <input type="number" class="form-control form-control-solid" name="age" placeholder="Enter age">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-md-6 mt-5 fv-row">
                                    <label class="required fs-5 fw-semibold mb-2">Gender</label>
                                    <select data-control="select2" data-placeholder="gender" class="form-select form-select-solid fw-bold">
                                        <option value="" disabled selected>Select gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-md-6 mt-5 fv-row">
                                    <label class="required fs-5 fw-semibold mb-2">Phone Number</label>
                                    <input type="tel" class="form-control form-control-solid" name="phone" placeholder="Enter phone number">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="col-md-12 mt-7 fv-row">
                                    <label class="fs-5 fw-semibold mb-2">Email Address</label>
                                    <input type="email" class="form-control form-control-solid" name="email" placeholder="Enter email">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>

                            <!-- Row 2: Contact Information -->
                            <div class="row mb-3">


                                <div class="col-md-12 fv-row">
                                    <label class="fs-5 fw-semibold mb-2">Address</label>
                                    <textarea class="form-control form-control-solid" name="address" placeholder="Enter address" rows="2"></textarea>
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>

                            <!-- Row 3: Main Complaint -->
                            <div class="row mt-5 mb-3">
                                <div class="col-md-12 fv-row">
                                    <label class="fs-5 fw-semibold mb-2">Appointment Request Through</label>
                                    <select data-control="select2" data-placeholder="Select request method" class="form-select form-select-solid fw-bold">
                                        <option value="" disabled selected>Select request method</option>
                                        <option value="Website">Website</option>
                                        <option value="WhatsApp">WhatsApp</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Phone">Phone</option>
                                        <option value="Email">Email</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Telegram">Telegram</option>
                                        <option value="Walkin">Walk-in</option>
                                        <option value="Referral">Referral</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a valid request method.</div>
                                </div>
                            </div>


                            <div class="fw-bold fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_add_customer_billing_info" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">

                            <!--end::Billing form-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->

                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">
                            Discard
                        </button>
                        <!--end::Button-->

                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
    <!--end::Modal - Customers - Add--><!--begin::Modal - Adjust Balance-->

    <!--end::Modal - New Card--><!--end::Modals-->
</div>
<!--end::Content container-->
</div>
<!--end::Content-->


@endsection
