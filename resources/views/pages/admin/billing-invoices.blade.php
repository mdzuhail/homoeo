@extends('layouts.app')


@section('content')
    <div class="p-5">

        <div id="" class="app-content  app-content-stretch ">


            <div id="" class="app-container  container-fluid ">
                <div class="card card-flush">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i> <input type="text"
                                    data-kt-ecommerce-product-filter="search"
                                    class="form-control form-control-solid w-250px ps-12" placeholder="Search Staff">
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
                                Add Staff
                            </a>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <!-- Clinic Table -->
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dt-design">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-70px">Name</th>
                                    <th class="text-end min-w-100px">Role</th>
                                    <th class="text-end min-w-70px">Staff ID</th>
                                    <th class="text-end min-w-70px">Phone</th>
                                    <th class="text-end min-w-100px">Email</th>
                                    <th class="text-end min-w-100px">Status</th>
                                    <th class="text-end min-w-70px">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="#" class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url('{{ asset('images/300-2.jpg') }}');"></span>
                                            </a>
                                            <!--end::Thumbnail-->
                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="#" class="fw-bold">Dr. John Doe</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">ALM#21</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">Doctor</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">+1 123-456-7890</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">john.doe@example.com</span>
                                    </td>
                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Active</div>
                                        <!--end::Badges-->
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



    <script>


    // Function to trigger SweetAlert and close the modal
function handleModalClose(event) {
    // Prevent default action (form reset or immediate modal closing)
    event.preventDefault();

    Swal.fire({
        text: "Are you sure you would like to cancel?",
        icon: "warning",
        showCancelButton: true,  // Show cancel button
        buttonsStyling: false,  // Disable default styling
        confirmButtonText: "Yes, cancel it!",  // Confirm button text
        cancelButtonText: "No, return",  // Cancel button text
        customClass: {
            confirmButton: "btn btn-primary",  // Custom styling for confirm button
            cancelButton: "btn btn-active-light",  // Custom styling for cancel button
        },
    }).then(function(result) {
        var modalElement = document.getElementById("kt_modal_add_staff"); // Get the modal element
        var modal = bootstrap.Modal.getInstance(modalElement); // Get the modal instance
        var form = document.getElementById("kt_modal_add_staff_form"); // Get the form element

        if (result.value) {
            // If confirmed, reset the form and hide the modal
            form.reset();  // Reset the form
            modal.hide();  // Hide the modal
        } else if (result.dismiss === "cancel") {
            // If the user clicks "No, return", close the SweetAlert popup
            Swal.close();  // Close the popup
            Swal.fire({
                text: "Your form has not been cancelled!",
                icon: "error",  // Error icon to show message
                buttonsStyling: false,  // Disable default styling
                confirmButtonText: "Ok, got it!",  // Text for the confirmation button
                customClass: {
                    confirmButton: "btn btn-primary",  // Custom styling for the confirm button
                },
            });
        }
    });
}

// Attach the event listener to the close icon and discard button
document.querySelectorAll('.kt_staff_close').forEach(function(button) {
    button.addEventListener('click', handleModalClose);
});








    </script>

@endsection
