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
                        Medicine Management
                    </h1>
                    <!--end::Title-->


                </div>
                <!--end::Page title-->

                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">


                    <a href="" class="btn btn-sm btn-flex btn-outline btn-active-primary bg-body"
                        data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                        <i class="ki-outline ki-eye fs-4"></i> Export
                    </a>

                    <a href="" class="btn btn-sm btn-flex btn-primary"
                    data-bs-toggle="modal" data-bs-target="#kt_modal_import_medicine" >
                        <i class="ki-outline ki-exit-up fs-4"></i> Import
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


                <!--begin::Main column-->
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_add_medicine_list">Medicine List</a>
                        </li>
                        <!--end:::Tab item-->

                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_add_medicine">Add
                                New Medicine</a>
                        </li>
                        <!--end:::Tab item-->

                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_supplier">Supplier
                                Details</a>
                        </li>
                        <!--end:::Tab item-->


                    </ul>
                    <!--end:::Tabs-->
                    <!--begin::Tab content-->
                    <div class="tab-content">
                        <!--begin::Tab pane 1-->
                        <div class="tab-pane fade show active" id="kt_add_medicine_list" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <div class="card py-4">
                                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                        <div class="card-title">
                                            <div class="d-flex align-items-center position-relative my-1">
                                                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i> <input type="text"
                                                    data-kt-ecommerce-product-filter="search"
                                                    class="form-control form-control-solid w-250px ps-12" placeholder="Search Medicine">
                                            </div>
                                        </div>

                                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                            <div class="w-100 mw-150px">
                                                <!--begin::Select2-->
                                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                                    data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                                                    <option></option>
                                                    <option value="all">All</option>
                                                    <option value="active">Active</option>
                                                    <option value="inactive">Inactive</option>
                                                    <option value="suspend">Suspend</option>
                                                </select>
                                                <!--end::Select2-->
                                            </div>

                                            <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_staff">
                                                Add Medicine
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card-body pt-0">
                                        <!-- Medicine Stock Table -->
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5 dt-design">
                                            <thead>
                                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="min-w-70px">Medicine Name</th>
                                                    <th class="text-end min-w-100px">Potency/Strength</th>
                                                    <th class="text-end min-w-70px">Stock Quantity</th>
                                                    <th class="text-end min-w-100px">Reorder Level</th>
                                                    <th class="text-end min-w-70px">MRP</th>
                                                    <th class="text-end min-w-70px">Discount</th>
                                                    <th class="text-end min-w-70px">Total</th>
                                                    <th class="text-end min-w-100px">Expiry Date</th>
                                                    <th class="text-end min-w-70px">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fw-semibold text-gray-600">
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Title-->
                                                            <a href="#" class="fw-bold">Paracetamol</a>
                                                            <!--end::Title-->
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="fw-bold">500 mg</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="fw-bold">150</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="fw-bold">50</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="fw-bold">$3.00</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="fw-bold">10%</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="fw-bold">$2.70</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="fw-bold">2025-01-31</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                            Actions
                                                            <i class="ki-outline ki-down fs-5 ms-1"></i>
                                                        </a>
                                                        <!--begin::Menu-->
                                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                            data-kt-menu="true">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Edit
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
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

                                </div>
                            </div>



                        </div>
                        <!--end::Tab pane-->

                        <!--begin::Tab pane 2-->
                        <div class="tab-pane fade" id="kt_add_medicine" role="tab-panel">
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
                                        <div class="mb-8">
                                            <div class="row mb-5">
                                                <div class="col-md-3">
                                                    <label class="required fs-5 fw-semibold mb-2">Medicine Name</label>
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="medicine_name" placeholder="e.g., Arnica Montana" required>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <label class="fs-5 fw-semibold mb-0">Potency/Strength</label>
                                                        <button type="button" class="btn btn-sm"
                                                            style="color: #b02a00;padding: 0px 7px;"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_potency_add">
                                                            <i class="fas fa-plus add-select"></i> Add
                                                        </button>
                                                    </div>


                                                    <select class="form-select form-select-solid" data-control="select2"
                                                        data-placeholder="Potency/Strength" name="potency">
                                                        <option value="" disabled selected>Select potency</option>
                                                        <option value="30C">30C</option>
                                                        <option value="200C">200C</option>
                                                        <option value="1M">1M</option>
                                                    </select>
                                                </div>


                                                <div class="col-md-2">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <label class="fs-5 fw-semibold mb-0">Unit Type</label>
                                                        <button type="button" class="btn btn-sm"
                                                            style="color: #b02a00;padding: 0px 7px;"
                                                            data-bs-toggle="modal" data-bs-target="#kt_modal_unit_type_add">
                                                            <i class="fas fa-plus add-select"></i> Add
                                                        </button>
                                                    </div>
                                                    <select class="form-select form-select-solid" data-control="select2"
                                                        data-placeholder="Unit Type" name="unit">
                                                        <option value="" disabled selected></option>
                                                        <option value="30C">Tablet</option>
                                                        <option value="200C">Bottle</option>
                                                        <option value="1M">Drops</option>
                                                    </select>
                                                </div>


                                            </div>

                                        </div>


                                        <div class="mb-8">
                                            <div class="row mb-5">

                                                <div class="col-md-3">
                                                    <label class="required fs-5 fw-semibold mb-2">Stock Quantity</label>
                                                    <input type="number" class="form-control form-control-solid"
                                                        name="stock_quantity" placeholder="Stock count" min="0"
                                                        required>
                                                </div>
                                                <div class="col-md-3">
                                                    <label class=" fs-5 fw-semibold mb-2">Reorder Level</label>
                                                    <input type="number" class="form-control form-control-solid"
                                                        name="reorder_level" placeholder="Reorder threshold "
                                                        min="0">
                                                </div>
                                                <div class="col-md-3">
                                                    <label class=" fs-5 fw-semibold mb-2">Location</label>
                                                    <input type="number" class="form-control form-control-solid"
                                                        name="reorder_level" placeholder="(e.g., Rack A, Shelf 3)"
                                                        min="0">
                                                </div>

                                            </div>

                                        </div>

                                        <!-- Section 2: Inventory Details -->
                                        <div class="mb-8">
                                            <div class="row mb-7">
                                                <div class="col-md-3">
                                                    <label class="required fs-5 fw-semibold mb-2">MRP</label>
                                                    <input type="number" class="form-control form-control-solid"
                                                        id="cost_price" name="cost_price" min="0" step="0.01"
                                                        required>
                                                </div>

                                                <div class="col-md-1">
                                                    <label class="required fs-5 fw-semibold mb-2">Discount</label>
                                                    <input type="number" class="form-control form-control-solid"
                                                        placeholder="In %" id="discount_price" name="discount_price"
                                                        min="0" max="100" required>
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="required fs-5 fw-semibold mb-2">Total</label>
                                                    <input type="number" class="form-control form-control-solid"
                                                        id="selling_price" name="selling_price" readonly>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="mb-8">
                                            <div class="row mb-7">

                                                <div class="col-md-3">
                                                    <label class="fs-5 fw-semibold mb-2">Selling Price</label>
                                                    <input type="number" class="form-control form-control-solid"
                                                        name="selling_price" min="10">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Section 3: Batch & Dates -->
                                        <div class="mb-8">
                                            <div class="row mb-5">
                                                <div class="col-md-2">
                                                    <label class="fs-5 fw-semibold mb-2">Batch Number</label>
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="batch_number">
                                                </div>

                                                <div class="col-md-2">
                                                    <label for="" class="form-label">Expiry Date</label>
                                                    <div class="position-relative d-flex align-items-center">
                                                        <!--begin::Icon-->
                                                        <i
                                                            class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>

                                                        <input
                                                            class="form-control form-control-solid ps-12 flatpickr-input date-picker"
                                                            placeholder="Select a date" name="due_date" type="text"
                                                            readonly="readonly">
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <label class="fs-5 fw-semibold mb-2">Supplier Name</label>
                                                    <select class="form-select form-select-solid" data-control="select2"
                                                        data-placeholder="supplier_name" name="supplier_name">
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="fs-5 fw-semibold mb-2">Medicine Status</label>
                                                    <select class="form-select form-select-solid" name="medicine_status">
                                                        <option value="Active">Active</option>
                                                        <option value="Inactive">Inactive</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="fs-5 fw-semibold mb-2">Remarks</label>
                                                    <input type="text" class="form-control form-control-solid"
                                                        name="(e.g., Store in a cool place)">
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <!--end::Card header-->

                                    <div class="card-footer">
                                        <div class="d-flex justify-content-end">
                                            <!--begin::Button-->
                                            <a href="" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
                                                Cancel
                                            </a>
                                            <!--end::Button-->

                                            <!--begin::Button-->
                                            <button type="submit" id="kt_ecommerce_add_product_submit mt-3" class="btn btn-primary">
                                                <span class="indicator-label">
                                                    Save Changes
                                                </span>
                                                <span class="indicator-progress">
                                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                            </button>
                                            <!--end::Button-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Inventory-->



                            </div>

                        </div>
                        <!--end::Tab pane-->

                        <!--begin::Tab pane-->

                        <div class="tab-pane fade" id="kt_supplier" role="tab-panel">
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
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">

                                        <label class="form-label">Supplier</label>
                                        <!--end::Label-->

                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <div class="d-flex flex-column gap-3">
                                                <div class="form-group d-flex flex-wrap align-items-center gap-5">
                                                    <!--begin::Select2-->
                                                    <div class="w-100 w-md-200px">
                                                        <input type="text" class="form-control mw-100 w-200px"
                                                            name="sup_name" placeholder="Supplier Name">
                                                    </div>
                                                    <!--end::Select2-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control mw-100 w-200px"
                                                        name="sup_phone" placeholder="Phone">
                                                    <!--end::Input-->

                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control mw-100 w-200px"
                                                        name="sup_address" placeholder="Address">
                                                    <!--end::Input-->

                                                    <!--begin::Input-->
                                                    <input type="email" class="form-control mw-100 w-200px"
                                                        name="sup_mail" placeholder="Email">
                                                    <!--end::Input-->

                                                    <button type="button" data-repeater-delete=""
                                                        class="btn btn-sm btn-icon btn-light-success">
                                                        <i class="ki-outline ki-check fs-1"></i>

                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mt-5">
                                            <div class="card-body pt-0">
                                                <!-- Supplier Table -->
                                                <!--begin::Table-->
                                                <table class="table align-middle table-row-dashed fs-6 gy-5 dt-design">
                                                    <thead>
                                                        <tr
                                                            class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                            <th class="min-w-10px">No</th>
                                                            <th class="min-w-100px">Supplier Name</th>
                                                            <th class="text-start min-w-100px">Supplier ID</th>
                                                            <th class="text-end min-w-70px">Phone</th>
                                                            <th class="text-end min-w-150px">Address</th>
                                                            <th class="text-end min-w-100px">Status</th>
                                                            <th class="text-end min-w-70px">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="fw-semibold text-gray-600">
                                                        <tr>
                                                            <td class="text-start pe-0">
                                                                <span class="fw-bold">1</span>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center">

                                                                    <div class="ms-5">
                                                                        <!--begin::Title-->
                                                                        <a href="#" class="fw-bold">ABC Supplies</a>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-start pe-0">
                                                                <span class="fw-bold">SUP#101</span>
                                                            </td>
                                                            <td class="text-end">
                                                                <span class="fw-bold">+1 234-567-8901</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <span class="fw-bold">123 Elm Street, Cityville</span>
                                                            </td>
                                                            <td class="text-end pe-0" data-order="Published">
                                                                <!--begin::Badges-->
                                                                <div class="badge badge-light-success">Active</div>
                                                                <!--end::Badges-->
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                                    data-kt-menu-trigger="click"
                                                                    data-kt-menu-placement="bottom-end">
                                                                    Actions
                                                                    <i class="ki-outline ki-down fs-5 ms-1"></i>
                                                                </a>
                                                                <!--begin::Menu-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                                    data-kt-menu="true">
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">
                                                                            Edit
                                                                        </a>
                                                                    </div>
                                                                    <!--end::Menu item-->

                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3"
                                                                            data-kt-ecommerce-product-filter="delete_row">
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
                                        </div>

                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Inventory-->



                            </div>


                        </div>
                        <!--end::Card header-->



                    </div>
                    <!--end::Tab content-->



                </div>
                <!--end::Main column-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content container-->
    </div>

    <!--end::Content-->


    <!-- Modal Start Import-->



    <!-- Potency/Strength Modal -->
    <div class="modal fade" id="kt_modal_potency_add" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px p-9">

            <div class="modal-content">
                <form class="form" action="#" id="kt_potency_add_form" data-kt-redirect="#">
                    <div class="modal-header">
                        <h2 class="fw-bold">Add Potency Details</h2>
                        <div class="kt_modal_close btn btn-icon btn-sm btn-active-icon-primary"
                            data-target="kt_modal_potency_add">
                            <i class="ki-outline ki-cross fs-1"></i>
                        </div>
                    </div>

                    <div class="modal-body py-10 px-lg-17">
                        <div class="scroll-y me-n7 pe-7" id="kt_potency_add_scroll" data-kt-scroll="true"
                            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                            data-kt-scroll-dependencies="#kt_Potency_add_header"
                            data-kt-scroll-wrappers="#kt_Potency_add_scroll" data-kt-scroll-offset="300px">

                            <!-- Potency Details Section -->

                            <div class="form-group">
                                <div class="d-flex flex-column gap-3">
                                    <div class="form-group d-flex flex-wrap align-items-center gap-5">
                                        <!--begin::Select2-->
                                        <div class="w-200 w-md-400px">
                                            <input type="text" class="form-control mw-200 w-400px"
                                                name="new_potency_name" placeholder="Potency Name">
                                        </div>
                                        <!--end::Select2-->



                                        <!--begin::Input-->

                                        <!--end::Input-->

                                        <button type="button" data-repeater-delete=""
                                            class="btn btn-sm btn-icon btn-light-success">
                                            <i class="ki-outline ki-check fs-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>



                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <label class="fs-6 fw-bold mb-2 mt-5">Potency List</label>
                                <!--begin::Potency-->
                                <div
                                    class="d-flex align-items-center justify-content-between p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Potency 1</span>
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Delete-->
                                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary">
                                        <i class="ki-outline ki-trash fs-3"></i>
                                    </button>
                                    <!--end::Delete-->
                                </div>
                                <!--end::Potency-->

                                <!--begin::Potency-->
                                <div
                                    class="d-flex align-items-center justify-content-between p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Potency 1</span>
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Delete-->
                                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary">
                                        <i class="ki-outline ki-trash fs-3"></i>
                                    </button>
                                    <!--end::Delete-->
                                </div>
                                <!--end::Potency-->

                                <!--begin::Potency-->
                                <div
                                    class="d-flex align-items-center justify-content-between p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Potency 1</span>
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Delete-->
                                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary">
                                        <i class="ki-outline ki-trash fs-3"></i>
                                    </button>
                                    <!--end::Delete-->
                                </div>
                                <!--end::Potency-->

                                <!--begin::Potency-->
                                <div
                                    class="d-flex align-items-center justify-content-between p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Potency 2</span>
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Delete-->
                                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary">
                                        <i class="ki-outline ki-trash fs-3"></i>
                                    </button>
                                    <!--end::Delete-->
                                </div>
                                <!--end::Potency-->

                                <!--begin::Potency-->
                                <div
                                    class="d-flex align-items-center justify-content-between p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Potency 3</span>
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Delete-->
                                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary">
                                        <i class="ki-outline ki-trash fs-3"></i>
                                    </button>
                                    <!--end::Delete-->
                                </div>
                                <!--end::Potency-->

                                <!--begin::Potency-->
                                <div
                                    class="d-flex align-items-center justify-content-between p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Potency 4</span>
                                    </div>
                                    <!--end::Info-->

                                    <!--begin::Delete-->
                                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary">
                                        <i class="ki-outline ki-trash fs-3"></i>
                                    </button>
                                    <!--end::Delete-->
                                </div>
                                <!--end::Potency-->
                            </div>

                        </div>
                    </div>

                    <div class="modal-footer d-flex justify-content-end">
                        <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Potency</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Unit Type Modal -->
    <div class="modal fade" id="kt_modal_unit_type_add" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px p-9">
            <div class="modal-content">
                <form class="form" action="#" id="kt_unit_type_add_form" data-kt-redirect="#">
                    <div class="modal-header">
                        <h2 class="fw-bold">Add Unit Type Details</h2>
                        <div class="kt_modal_close btn btn-icon btn-sm btn-active-icon-primary"
                            data-target="kt_modal_unit_type_add">
                            <i class="ki-outline ki-cross fs-1"></i>
                        </div>
                    </div>

                    <div class="modal-body py-10 px-lg-17">
                        <div class="scroll-y me-n7 pe-7" id="kt_unit_type_add_scroll" data-kt-scroll="true"
                            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                            data-kt-scroll-dependencies="#kt_unit_type_add_header"
                            data-kt-scroll-wrappers="#kt_unit_type_add_scroll" data-kt-scroll-offset="300px">

                            <!-- Unit Type Details Section -->
                            <div class="form-group">
                                <div class="d-flex flex-column gap-3">
                                    <div class="form-group d-flex flex-wrap align-items-center gap-5">
                                        <!-- Input for Unit Type Name -->
                                        <div class="w-200 w-md-400px">
                                            <input type="text" class="form-control mw-200 w-400px"
                                                name="new_unit_type_name" placeholder="Unit Type Name">
                                        </div>

                                        <button type="button" data-repeater-delete=""
                                            class="btn btn-sm btn-icon btn-light-success">
                                            <i class="ki-outline ki-check fs-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <label class="fs-6 fw-bold mb-2 mt-5">Uploaded File</label>

                                <!-- List of Unit Types -->
                                <div class="d-flex align-items-center justify-content-between p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Unit Type 1</span>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary">
                                        <i class="ki-outline ki-trash fs-3"></i>
                                    </button>
                                </div>
                                <div class="d-flex align-items-center justify-content-between p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Unit Type 2</span>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary">
                                        <i class="ki-outline ki-trash fs-3"></i>
                                    </button>
                                </div>
                                <div class="d-flex align-items-center justify-content-between p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Unit Type 3</span>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary">
                                        <i class="ki-outline ki-trash fs-3"></i>
                                    </button>
                                </div>
                                <div class="d-flex align-items-center justify-content-between p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Unit Type 4</span>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary">
                                        <i class="ki-outline ki-trash fs-3"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer d-flex justify-content-end">
                        <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Unit Type</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Import Medicines Modal -->
    <div class="modal fade" id="kt_modal_import_medicine" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h2 class="fw-bold">Import Medicines</h2>
                    <button type="button" class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body py-10 px-lg-17">
                    <div class="scroll-y me-n7 pe-7" id="kt_import_medicine_scroll">
                        <!-- Instruction Section -->
                        <div class="form-group mb-5">
                            <label class="form-label fw-semibold">Instructions</label>
                            <p class="text-muted">
                                Please upload the Excel file with the correct format. Ensure all mandatory fields like
                                medicine name, dosage, and stock are filled in the template.
                                <a href="/templates/medicine-import-template.xlsx" download>
                                    Download Template
                                </a>
                            </p>
                        </div>

                        <!-- File Upload Section -->
                        <button type="button" class="btn btn-primary file-button me-4">Choose File</button>
                        <span class="spinner-border text-primary" role="status" style="display: none" id="import-loader">
                            <span class="visually-hidden">Loading...</span>
                        </span>
                        <input type="file" id="file-upload" name="filename" style="display: none;" />
                        <span id="file-name-display"></span>

                    </div>
                </div>

                <!-- Loader -->


                <!-- Modal Footer -->
                <div class="modal-footer d-flex justify-content-end">
                    <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="import-medicine-btn">Import Medicines</button>
                </div>
            </div>
        </div>
    </div>





    <script>
        $("#kt_datepicker").flatpickr();

        // Get the input fields
        const costPriceInput = document.getElementById("cost_price");
        const discountPriceInput = document.getElementById("discount_price");
        const sellingPriceInput = document.getElementById("selling_price");

        discountPriceInput.addEventListener("blur", calculateTotal);

        function calculateTotal() {
            const costPrice = parseFloat(costPriceInput.value) || 0; // Get MRP, default to 0 if empty
            const discount = parseFloat(discountPriceInput.value) || 0; // Get Discount, default to 0 if empty

            if (discount >= 0 && discount <= 100) {
                // Calculate the total after discount
                const total = costPrice - (costPrice * discount) / 100;
                sellingPriceInput.value = total.toFixed(2); // Display total with 2 decimal places
            } else {
                // If discount is out of bounds, show an alert
                alert("Please enter a discount value between 0 and 100.");
                discountPriceInput.value = ""; // Reset invalid discount
                sellingPriceInput.value = ""; // Clear total
            }
        }










    </script>

<script>
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

    //JavaScript for Loader Functionality

    document.addEventListener('DOMContentLoaded', function () {
    // Get the button and loader elements
    const importButton = document.getElementById('import-medicine-btn');
    const loader = document.getElementById('import-loader');

    // Add click event listener to the button
    importButton.addEventListener('click', function () {
        // Show the loader
        loader.style.display = 'inline-block';

        // Disable the button to prevent multiple clicks
        importButton.disabled = true;

        // Hide the loader after 10 seconds
        setTimeout(function () {
            loader.style.display = 'none';
            importButton.disabled = false;
        }, 10000); // 10 seconds
    });
});


</script>

@endsection
