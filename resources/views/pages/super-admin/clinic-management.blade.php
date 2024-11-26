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
                                    class="form-control form-control-solid w-250px ps-12" placeholder="Search Clinic">
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

                            <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_clinic">
                                Add Clinic
                            </a>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <!-- Clinic Table -->
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dt-design">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" value="1">
                                        </div>
                                    </th>
                                    <th class="min-w-100px">Logo & Clinic Name</th>
                                    <th class="text-end min-w-100px">Address</th>
                                    <th class="text-end min-w-70px">Phone</th>
                                    <th class="text-end min-w-100px">Email</th>
                                    <th class="text-end min-w-100px">Specialization</th>
                                    <th class="text-end min-w-100px">Status</th>
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
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="#"
                                                class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url('{{ asset('images/300-2.jpg') }}');"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a  class="fw-bold" url="">Aleems Homoeo Clinic</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">123 Wellness St., City</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">(123) 456-7890</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">contact@healthysmile.com</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        154 </td>

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
                                            <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href=""
                                                    class="menu-link px-3">
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
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Thumbnail-->
                                            <a href="#"
                                                class="symbol symbol-50px">
                                                <span class="symbol-label"
                                                    style="background-image:url('{{ asset('images/300-2.jpg') }}');"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a  class="fw-bold" url="">Aleems Homoeo Clinic</a>
                                                <!--end::Title-->
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">123 Wellness St., City</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">(123) 456-7890</span>
                                    </td>
                                    <td class="text-end pe-0">
                                        <span class="fw-bold">contact@healthysmile.com</span>
                                    </td>

                                    <td class="text-end pe-0">
                                        154 </td>

                                    <td class="text-end pe-0" data-order="Published">
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-warning">Inactive</div>
                                        <!--end::Badges-->
                                    </td>
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <i class="ki-outline ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href=""
                                                    class="menu-link px-3">
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
        </div>

    </div>




    <!-- Modal  -->

    <div class="modal fade" id="kt_modal_add_clinic" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-900px p-9">
            <div class="modal-content">
                <form class="form" action="#" id="kt_modal_add_clinic_form" data-kt-redirect="#">
                    <div class="modal-header">
                        <h2 class="fw-bold">Add Clinic Details</h2>
                        <div id="" class="kt_clinic_close btn btn-icon btn-sm btn-active-icon-primary">
                            <i class="ki-outline ki-cross fs-1"></i>
                        </div>
                    </div>

                    <div class="modal-body py-10 px-lg-17">
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_clinic_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_clinic_header" data-kt-scroll-wrappers="#kt_modal_add_clinic_scroll" data-kt-scroll-offset="300px">

                            <!-- Basic Information -->
                            <div class="mb-7">
                                <h3 class="fw-bold mb-5">Basic Information</h3>
                                <div class="row mb-5">
                                    <div class="col-md-12">
                                        <label class="required fs-5 fw-semibold mb-2">Logo</label>
                                        <input type="file" class="form-control form-control-solid" name="clinic_logo">
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <label class="required fs-5 fw-semibold mb-2">Clinic Name</label>
                                        <input type="text" class="form-control form-control-solid" id="clinicName" name="clinic_name" placeholder="Enter clinic name">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="required fs-5 fw-semibold mb-2">Specialization</label>
                                        <input type="text" class="form-control form-control-solid" name="specialization" placeholder="e.g., General Homoeopathy">
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-12">
                                        <label class="required fs-5 fw-semibold mb-2">Address</label>
                                        <textarea class="form-control form-control-solid" name="address" rows="3" placeholder="Enter full clinic address"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <label class="required fs-5 fw-semibold mb-2">Phone</label>
                                        <input type="tel" class="form-control form-control-solid" id="phone" name="phone" placeholder="Enter contact number">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="required fs-5 fw-semibold mb-2">Email</label>
                                        <input type="email" class="form-control form-control-solid" name="email" placeholder="Enter email address">
                                    </div>
                                </div>
                            </div>

                            <!-- Status Management -->
                            <div class="mb-7 pt-7 border-top">
                                <h3 class="fw-bold mb-5">Status Management</h3>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <label class="fs-5 fw-semibold mb-2">Status</label>
                                        <select class="form-select form-select-solid" id="status" name="status" data-gtm-form-interact-field-id="0">
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                            <option value="Suspended">Suspended</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6" id="reasonContainer" style="display: none;">
                                        <label id="reasonLabel" class="fs-5 fw-semibold mb-2"></label>
                                        <input type="text" class="form-control form-control-solid" id="statusReason" name="status_reason" placeholder="Enter reason (optional)">
                                    </div>
                                </div>
                            </div>

                            <!-- Login Credentials -->
                            <div class="mb-7 pt-7 border-top">
                                <h3 class="fw-bold mb-5">Login Credentials</h3>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <label class="fs-5 fw-semibold mb-2">Username</label>
                                        <input type="text" class="form-control form-control-solid" id="username"  name="username" placeholder="Auto-generated or manually entered">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="fs-5 fw-semibold mb-2">Password</label>
                                        <input type="password" class="form-control form-control-solid"  id="password" name="password" placeholder="Auto-generated or manually entered">
                                    </div>
                                </div>
                                <div class="form-check form-check-solid">
                                    <input class="form-check-input" type="checkbox"id="send_credentials" name="send_credentials" value="yes">
                                    <label class="form-check-label fs-5 fw-semibold" for="send_credentials">Send credentials via email</label>
                                </div>
                            </div>

                            <!-- Notifications -->
                        <div class="mb-7 pt-7 border-top">
                            <h3 class="fw-bold mb-5">Notifications</h3>
                            <div class="row mb-5">
                                <div class="col-md-4">
                                    <div class="form-check form-check-solid">
                                        <input class="form-check-input" type="checkbox" id="first_visit_notification" name="first_visit_notification" value="yes">
                                        <label class="form-check-label fs-5 fw-semibold" for="first_visit_notification">First Visit Notification</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-check-solid">
                                        <input class="form-check-input" type="checkbox" id="follow_up_reminder" name="follow_up_reminder" value="yes">
                                        <label class="form-check-label fs-5 fw-semibold" for="follow_up_reminder">Follow-Up Reminder</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check form-check-solid">
                                        <input class="form-check-input" type="checkbox" id="invoice_notifications" name="invoice_notifications" value="yes">
                                        <label class="form-check-label fs-5 fw-semibold" for="invoice_notifications">Invoice Notifications</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                            <!-- Subscription Details -->
                            <div class="mb-7 pt-7 border-top">
                                <h3 class="fw-bold mb-5">Subscription Details</h3>
                                <div class="row mb-5">
                                    <div class="col-md-4">
                                        <label class="fs-5 fw-semibold mb-2">Plan Type</label>
                                        <select class="form-select form-select-solid" name="plan_type">
                                            <option value="Free">Free</option>
                                            <option value="Standard">Standard</option>
                                            <option value="Premium">Premium</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="fs-5 fw-semibold mb-2">Start Date</label>
                                        <input type="date" class="form-control form-control-solid" name="start_date">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="fs-5 fw-semibold mb-2">End Date</label>
                                        {{-- <input type="date" class="form-control form-control-solid" name="end_date"> --}}
                                        <div class="position-relative d-flex align-items-center">
                                            <!--begin::Icon-->
                                            <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>                                <!--end::Icon-->

                                            <!--begin::Datepicker-->
                                            <input class="form-control form-control-solid ps-12 flatpickr-input active" placeholder="Select a date" name="due_date" type="text" readonly="readonly">
                                            <!--end::Datepicker-->
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label class="fs-5 fw-semibold mb-2">Payment Status</label>
                                        <select class="form-select form-select-solid" name="payment_status">
                                            <option value="Paid">Paid</option>
                                            <option value="Unpaid">Unpaid</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional Sections... -->
                            <!-- Add similar sections for Operational Settings, Notifications, and Reporting/Analytics as required -->

                        </div>
                    </div>
                    <div class="modal-footer flex-center">
                        <button type="reset" class="btn btn-light me-3 kt_clinic_close">Discard</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        // Event listeners to trigger username and password generation
        document.getElementById("clinicName").addEventListener("input", generateCredentials);
        document.getElementById("phone").addEventListener("input", generateCredentials);

        function generateCredentials() {
            const clinicName = document.getElementById("clinicName").value.trim().replace(/\s+/g, ''); // Remove spaces
            const phone = document.getElementById("phone").value.trim().replace(/\s+/g, ''); // Remove spaces

            // Ensure there is enough data to generate username
            if (clinicName.length >= 5 && phone.length >= 5) {
                // Generate username: first 5 letters of clinic name + last 5 digits of phone number
                const username = clinicName.substring(0, 5).toLowerCase() + phone.slice(-5);

                // Generate password: Random 8-character password
                const passwordCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()";
                const passwordLength = 8;
                let password = "";
                for (let i = 0; i < passwordLength; i++) {
                    const randomIndex = Math.floor(Math.random() * passwordCharacters.length);
                    password += passwordCharacters[randomIndex];
                }

                // Set the generated username and password
                document.getElementById("username").value = username;
                document.getElementById("password").value = password;
            } else {
                // Clear username and password if conditions aren't met
                document.getElementById("username").value = "";
                document.getElementById("password").value = "";
            }
        }



        document.getElementById("status").addEventListener("change", function () {
        const statusValue = this.value;
        const reasonContainer = document.getElementById("reasonContainer");
        const reasonLabel = document.getElementById("reasonLabel");

        if (statusValue === "Inactive" || statusValue === "Suspended") {
            reasonLabel.textContent = statusValue === "Inactive" ? "Reason for Inactive" : "Reason for Suspended";
            reasonContainer.style.display = "block";
        } else {
            reasonContainer.style.display = "none";
        }
    });

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
        var modalElement = document.getElementById("kt_modal_add_clinic"); // Get the modal element
        var modal = bootstrap.Modal.getInstance(modalElement); // Get the modal instance
        var form = document.getElementById("kt_modal_add_clinic_form"); // Get the form element

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
document.querySelectorAll('.kt_clinic_close').forEach(function(button) {
    button.addEventListener('click', handleModalClose);
});








    </script>

@endsection
