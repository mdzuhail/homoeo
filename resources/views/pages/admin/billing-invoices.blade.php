@extends('layouts.app')


@section('content')
    <div class="p-5">

        <div id="billing-page" class="billing-page app-content app-content-stretch ">


            <div id="" class="app-container  container-fluid ">


                <div class="card ">
                    <!--begin::Card header-->
                    <div class="card-header card-header-stretch border-bottom border-gray-200">
                        <!--begin::Title-->
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i> <input type="text"
                                    class="form-control form-control-solid w-250px ps-12" placeholder="Search Billing History">
                            </div>
                        </div>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar m-0">
                            <!--begin::Tab nav-->
                            <ul class="nav nav-stretch nav-line-tabs border-transparent" role="tablist">
                                <!--begin::Tab nav item-->
                                <li class="nav-item" role="presentation">
                                    <a id="kt_billing_6months_tab" class="nav-link fs-5 fw-semibold me-3 active" data-bs-toggle="tab" role="tab" href="#kt_billing_months" aria-selected="true">
                                        Month
                                    </a>
                                </li>
                                <!--end::Tab nav item-->

                                <!--begin::Tab nav item-->
                                <li class="nav-item" role="presentation">
                                    <a id="kt_billing_1year_tab" class="nav-link fs-5 fw-semibold me-3" data-bs-toggle="tab" role="tab" href="#kt_billing_year" aria-selected="false" tabindex="-1">
                                        Year
                                    </a>
                                </li>
                                <!--end::Tab nav item-->

                                <!--begin::Tab nav item-->
                                <li class="nav-item" role="presentation">
                                    <a id="kt_billing_alltime_tab" class="nav-link fs-5 fw-semibold" data-bs-toggle="tab" role="tab" href="#kt_billing_all" aria-selected="false" tabindex="-1">
                                        All Time
                                    </a>
                                </li>
                                <!--end::Tab nav item-->
                            </ul>
                            <!--end::Tab nav-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Tab Content-->
                    <div class="tab-content">
                                        <!--begin::Tab panel-->
                        <div id="kt_billing_months" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_billing_months">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-bordered align-middle gy-4 gs-9 dt-design">
                                    <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75">
                                        <tr>
                                            <td class="min-w-150px">Date</td>
                                            <td class="min-w-250px">Description</td>
                                            <td class="min-w-150px">Amount</td>
                                            <td class="min-w-150px">Invoice</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Nov 01, 2020</td>
                                                <td><a href="#">Invoice for Ocrober 2024</a></td>
                                                <td>$123.79</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Oct 08, 2020</td>
                                                <td><a href="#">Invoice for September 2024</a></td>
                                                <td>$98.03</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Aug 24, 2020</td>
                                                <td>Paypal</td>
                                                <td>$35.07</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Aug 01, 2020</td>
                                                <td><a href="#">Invoice for July 2024</a></td>
                                                <td>$142.80</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Jul 01, 2020</td>
                                                <td><a href="#">Invoice for June 2024</a></td>
                                                <td>$123.79</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Jun 17, 2020</td>
                                                <td>Paypal</td>
                                                <td>$523.09</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Jun 01, 2020</td>
                                                <td><a href="#">Invoice for May 2024</a></td>
                                                <td>$123.79</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                            </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tab panel-->
                                        <!--begin::Tab panel-->
                        <div id="kt_billing_year" class="card-body p-0 tab-pane fade " role="tabpanel" aria-labelledby="kt_billing_year">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-bordered align-middle gy-4 gs-9 dt-design">
                                    <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75">
                                        <tr>
                                            <td class="min-w-150px">Date</td>
                                            <td class="min-w-250px">Description</td>
                                            <td class="min-w-150px">Amount</td>
                                            <td class="min-w-150px">Invoice</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Dec 01, 2021</td>
                                                <td><a href="#">Billing for Ocrober 2024</a></td>
                                                <td>$250.79</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Oct 08, 2021</td>
                                                <td><a href="#">Statements for September 2024</a></td>
                                                <td>$98.03</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Aug 24, 2021</td>
                                                <td>Paypal</td>
                                                <td>$35.07</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Aug 01, 2021</td>
                                                <td><a href="#">Invoice for July 2024</a></td>
                                                <td>$142.80</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Jul 01, 2021</td>
                                                <td><a href="#">Statements for June 2024</a></td>
                                                <td>$123.79</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Jun 17, 2021</td>
                                                <td>Paypal</td>
                                                <td>$23.09</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                            </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tab panel-->
                                        <!--begin::Tab panel-->
                        <div id="kt_billing_all" class="card-body p-0 tab-pane fade " role="tabpanel" aria-labelledby="kt_billing_all">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-bordered align-middle gy-4 gs-9 dt-design">
                                    <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75">
                                        <tr>
                                            <td class="min-w-150px">Date</td>
                                            <td class="min-w-250px">Description</td>
                                            <td class="min-w-150px">Amount</td>
                                            <td class="min-w-150px">Invoice</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Nov 01, 2021</td>
                                                <td><a href="#">Billing for Ocrober 2024</a></td>
                                                <td>$123.79</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Aug 10, 2021</td>
                                                <td>Paypal</td>
                                                <td>$35.07</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Aug 01, 2021</td>
                                                <td><a href="#">Invoice for July 2024</a></td>
                                                <td>$142.80</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Jul 20, 2021</td>
                                                <td><a href="#">Statements for June 2024</a></td>
                                                <td>$123.79</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Jun 17, 2021</td>
                                                <td>Paypal</td>
                                                <td>$23.09</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                                    <!--begin::Table row-->
                                            <tr>
                                                <td>Jun 01, 2021</td>
                                                <td><a href="#">Invoice for May 2024</a></td>
                                                <td>$123.79</td>
                                                <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                                <td class="text-right"><a href="#" class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                            </tr>
                                            <!--end::Table row-->
                                                            </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tab panel-->
                            </div>
                    <!--end::Tab Content-->
                </div>
            </div>
        </div>

    </div>




    <!-- Modal  -->

    <div class="modal fade" id="kt_modal_add_staff" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-fullscreen p-9">
            <div class="modal-content">
                <form class="form" action="#" id="kt_modal_add_staff_form" data-kt-redirect="#">
                    <div class="modal-header">
                        <h2 class="fw-bold">Add Staff Details</h2>
                        <div id="" class="kt_staff_close btn btn-icon btn-sm btn-active-icon-primary">
                            <i class="ki-outline ki-cross fs-1"></i>
                        </div>
                    </div>

                    <div class="modal-body py-10 px-lg-17">
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_staff_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_staff_header" data-kt-scroll-wrappers="#kt_modal_add_staff_scroll" data-kt-scroll-offset="300px">

                            <div class="mb-7">
                                <h3 class="fw-bold mb-5">Section 1: Basic Details</h3>
                                <div class="row mb-5">
                                  <div class="col-md-6">
                                    <label class="required fs-5 fw-semibold mb-2">Medicine Name</label>
                                    <input type="text" class="form-control form-control-solid" name="medicine_name" placeholder="Enter medicine name (e.g., Arnica Montana)" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label class="fs-5 fw-semibold mb-2">Potency/Strength</label>
                                    <select class="form-select form-select-solid" name="potency" required>
                                      <option value="" disabled selected>Select potency</option>
                                      <option value="30C">30C</option>
                                      <option value="200C">200C</option>
                                      <option value="1M">1M</option>
                                    </select>
                                    <button type="button" class="btn btn-secondary" id="add-potency-button">+</button>
                                  </div>
                                </div>
                                <div class="mb-5">
                                  <label class="fs-5 fw-semibold mb-2">Description</label>
                                  <textarea class="form-control form-control-solid" name="description" placeholder="Brief details about the medicine's use" rows="3"></textarea>
                                </div>
                                <div class="mb-5">
                                  <label class="fs-5 fw-semibold mb-2">Category</label>
                                  <select class="form-select form-select-solid" name="category" required>
                                    <option value="" disabled selected>Select category</option>
                                    <option value="Pain Relief">Pain Relief</option>
                                    <option value="Immunity Booster">Immunity Booster</option>
                                    <option value="Skin Care">Skin Care</option>
                                  </select>
                                </div>
                              </div>

                              <!-- Section 2: Inventory Details -->
                              <div class="mb-7">
                                <h3 class="fw-bold mb-5">Section 2: Inventory Details</h3>
                                <div class="row mb-5">
                                  <div class="col-md-6">
                                    <label class="required fs-5 fw-semibold mb-2">Stock Quantity</label>
                                    <input type="number" class="form-control form-control-solid" name="stock_quantity" placeholder="Enter stock count (e.g., 50)" min="0" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label class="required fs-5 fw-semibold mb-2">Reorder Level</label>
                                    <input type="number" class="form-control form-control-solid" name="reorder_level" placeholder="Enter reorder threshold (e.g., 10)" min="0" required>
                                  </div>
                                </div>
                                <div class="row mb-5">
                                  <div class="col-md-6">
                                    <label class="required fs-5 fw-semibold mb-2">Cost Price</label>
                                    <input type="number" class="form-control form-control-solid" name="cost_price" placeholder="Enter cost per unit (e.g., ₹50.00)" min="0" step="0.01" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label class="required fs-5 fw-semibold mb-2">Selling Price</label>
                                    <input type="number" class="form-control form-control-solid" name="selling_price" placeholder="Enter selling price (e.g., ₹100.00)" min="0" step="0.01" required>
                                  </div>
                                </div>
                              </div>

                              <!-- Section 3: Batch & Dates -->
                              <div class="mb-7">
                                <h3 class="fw-bold mb-5">Section 3: Batch & Dates</h3>
                                <div class="row mb-5">
                                  <div class="col-md-6">
                                    <label class="fs-5 fw-semibold mb-2">Batch Number</label>
                                    <input type="text" class="form-control form-control-solid" name="batch_number" placeholder="Enter batch number (e.g., B202404)" required>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="fs-5 fw-semibold mb-2">Expiry Date</label>
                                    <input type="date" class="form-control form-control-solid" name="expiry_date" required>
                                  </div>
                                </div>
                              </div>

                              <!-- Section 4: Supplier Information -->
                              <div class="mb-7">
                                <h3 class="fw-bold mb-5">Section 4: Supplier Information</h3>
                                <div class="row mb-5">
                                  <div class="col-md-6">
                                    <label class="fs-5 fw-semibold mb-2">Supplier Name</label>
                                    <input type="text" class="form-control form-control-solid" name="supplier_name" placeholder="Enter supplier's name (e.g., ABC Pharma)" required>
                                  </div>

                                </div>
                              </div>

                              <!-- Section 5: Status -->
                              <div class="mb-7">
                                <h3 class="fw-bold mb-5">Section 5: Status</h3>
                                <label class="fs-5 fw-semibold mb-2">Medicine Status</label>
                                <select class="form-select form-select-solid" name="medicine_status" required>
                                  <option value="Active">Active</option>
                                  <option value="Inactive">Inactive</option>
                                </select>
                              </div>

                              <!-- Submit Button -->
                              <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Save Medicine</button>
                              </div>


                        </div>
                    </div>

                    <div class="modal-footer flex-center">
                        <button type="reset" class="btn btn-light me-3 kt_staff_close">Discard</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



  <style>
    #billing-page .dt-toolbar .form-select.form-select-solid{
        margin-left:27px
    }
    #billing-page .dt-paging{
        margin-right: 27px;
    }
  </style>

@endsection
