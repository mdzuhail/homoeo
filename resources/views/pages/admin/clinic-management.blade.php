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
        <div class="modal-dialog modal-dialog-centered mw-900px p-9">
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

                            <!-- Select Role -->
                            <div class="mb-7">
                                <label class="fs-5 fw-semibold mb-2">Role</label>
                                <select class="form-select form-select-solid" id="roleSelect">
                                    <option value="doctor" selected>Doctor</option>
                                    <option value="receptionist">Receptionist</option>
                                </select>
                            </div>

                            <!-- Doctor Details -->
                            <div id="doctorDetails" class="role-section mt-7 mx-2">
                                <h3 class="fw-bold mb-5">Doctor Details</h3>
                                <div class="row mb-7">
                                    <div class="col-md-6">
                                        <label class="required fs-5 fw-semibold mb-2">Doctor Name</label>
                                        <input type="text" id="doctor_name" class="form-control form-control-solid" name="doctor_name" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="required fs-5 fw-semibold mb-2">Phone</label>
                                        <input type="tel" class="form-control form-control-solid" id="doctor_phone" name="doctor_phone" pattern="^\+91[0-9]{10}$" placeholder="e.g., +91 7448874485" value="+91" maxlength="13" required>

                                    </div>
                                </div>

                                <div class="row mb-7">
                                    <div class="col-md-6">
                                        <label class="fs-5 fw-semibold mb-2">Email</label>
                                        <input type="mail" class="form-control form-control-solid" name="doctor_email" >
                                    </div>
                                    <div class="col-md-6">
                                        <label class="fs-5 fw-semibold mb-2">Who Will Give Medicine</label>
                                        <select class="form-select form-select-solid" id="doctorStatus" name="doctor_status">
                                            <option value="self">Self</option>
                                            <option value="receptionist1">Receptionist 1</option>
                                            <option value="receptionist2">Receptionist 2</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-7">
                                    <div class="col-md-6">
                                        <label class="required fs-5 fw-semibold mb-2">Specialty</label>
                                        <input type="text" class="form-control form-control-solid" name="doctor_specialty" placeholder="e.g., General Practice, Pediatrics">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="required fs-5 fw-semibold mb-2">Qualification</label>
                                        <input type="text" class="form-control form-control-solid" name="doctor_qualification" placeholder="">
                                    </div>
                                </div>

                                <div class="row mb-7">
                                    <div class="col-md-6">
                                        <label class="required fs-5 fw-semibold mb-2">Experience (Years)</label>
                                        <input type="number" class="form-control form-control-solid" name="doctor_experience">
                                    </div>
                                </div>

                                <div class="row mb-7">
                                    <div class="col-md-6">
                                        <label class="fs-5 fw-semibold mb-2">Staff ID</label>
                                        <input type="text" class="form-control form-control-solid" name="receptionist_employee_id" placeholder="Enter employee ID">
                                    </div>
                                </div>



                                <div class="mb-7">
                                    <label class="fs-5 fw-semibold mb-2">Available Days</label>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="Monday" id="monday">
                                            <label class="form-check-label" for="monday">Monday</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="Tuesday" id="tuesday">
                                            <label class="form-check-label" for="tuesday">Tuesday</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="Wednesday" id="wednesday">
                                            <label class="form-check-label" for="wednesday">Wednesday</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="Thursday" id="thursday">
                                            <label class="form-check-label" for="thursday">Thursday</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="Friday" id="friday">
                                            <label class="form-check-label" for="friday">Friday</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="Saturday" id="saturday">
                                            <label class="form-check-label" for="Saturday">Saturday</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="Sunday" id="sunday">
                                            <label class="form-check-label" for="Sunday">Sunday</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-7">
                                    <label class="fs-5 fw-semibold mb-2">Consultation Type</label>
                                    <div class="d-flex flex-wrap">
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="consultation_type" value="Online" id="online">
                                            <label class="form-check-label" for="online">Online</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="consultation_type" value="Offline" id="offline">
                                            <label class="form-check-label" for="offline">Offline</label>
                                        </div>
                                        <div class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="radio" name="consultation_type" value="Both" id="both">
                                            <label class="form-check-label" for="both">Both</label>
                                        </div>
                                    </div>
                                </div>


                                <!-- Status Management -->
                                <div class="mb-7 pt-7 border-top">
                                    <h3 class="fw-bold mb-5">Status Management</h3>
                                    <div class="row mb-5">
                                        <div class="col-md-6">
                                            <label class="fs-5 fw-semibold mb-2">Status</label>
                                            <select class="form-select form-select-solid" id="doctorStatus" name="doctor_status">
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                                <option value="Suspended">Suspended</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6" id="doctorReasonContainer" style="display: none;">
                                            <label class="fs-5 fw-semibold mb-2">Reason</label>
                                            <input type="text" class="form-control form-control-solid" id="doctorStatusReason" name="doctor_status_reason" placeholder="Enter reason (optional)">
                                        </div>
                                    </div>
                                </div>

                                <!-- Login Credentials -->
                                <div class="mb-7 pt-7 border-top">
                                    <h3 class="fw-bold mb-5">Login Credentials</h3>
                                    <div class="row mb-5">
                                        <div class="col-md-6">
                                            <label class="fs-5 fw-semibold mb-2">Username</label>
                                            <input type="text" id="doctorUsername" class="form-control form-control-solid" id="doctorUsername" name="doctor_username" readonly>
                                            <button type="button" onclick="copyToClipboard('doctorUsername')">Copy</button><br><br>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="fs-5 fw-semibold mb-2">Password</label>
                                            <input type="password" id="doctorPassword" class="form-control form-control-solid" id="doctorPassword" name="doctor_password" readonly>
                                            <button type="button" onclick="copyToClipboard('doctorPassword')">Copy</button><br><br>
                                        </div>
                                    </div>
                                    <div class="form-check form-check-solid">
                                        <input class="form-check-input" type="checkbox" id="doctorSendCredentials" name="doctor_send_credentials" value="yes">
                                        <label class="form-check-label fs-5 fw-semibold" for="doctorSendCredentials">Send credentials via email</label>
                                    </div>
                                </div>


                            </div>

                            <!-- Receptionist Details -->
                            <div id="receptionistDetails" class="role-section mt-7 d-none mx-2">
                                <h3 class="fw-bold mb-5">Receptionist Details</h3>
                                <div class="row mb-7 mt-4">
                                    <div class="col-md-6">
                                        <label class="required fs-5 fw-semibold mb-2">Receptionist Name</label>
                                        <input type="text" class="form-control form-control-solid" name="receptionist_name" id="receptionist_name">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="required fs-5 fw-semibold mb-2">Phone</label>
                                        <input type="tel" class="form-control form-control-solid" id="receptionist_phone" name="receptionist_phone" pattern="^\+91[0-9]{10}$" placeholder="e.g., +91 7448874485" value="+91" maxlength="13" required>
                                    </div>
                                </div>

                                <div class="row mb-7">
                                    <div class="col-md-12">
                                        <label class="fs-5 fw-semibold mb-2">Email</label>
                                        <input type="mail" class="form-control form-control-solid" name="receptionist_email" >
                                    </div>
                                </div>

                                <div class="row mb-7">
                                    <div class="col-md-6">
                                        <label class="fs-5 fw-semibold mb-2">Staff ID</label>
                                        <input type="text" class="form-control form-control-solid" name="receptionist_employee_id" placeholder="">
                                    </div>
                                </div>


                                 <!-- Status Management -->
                                <div class="mb-7 pt-7 border-top">
                                    <h3 class="fw-bold mb-5">Status Management</h3>
                                    <div class="row mb-5">
                                        <div class="col-md-6">
                                            <label class="fs-5 fw-semibold mb-2">Status</label>
                                            <select class="form-select form-select-solid" id="receptionistStatus" name="receptionist_status">
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                                <option value="Suspended">Suspended</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6" id="receptionistReasonContainer" style="display: none;">
                                            <label class="fs-5 fw-semibold mb-2">Reason</label>
                                            <input type="text" class="form-control form-control-solid" id="receptionistStatusReason" name="receptionist_status_reason" placeholder="Enter reason (optional)">
                                        </div>
                                    </div>
                                </div>

                                <!-- Login Credentials -->
                                <div class="mb-7 pt-7 border-top">
                                    <h3 class="fw-bold mb-5">Login Credentials</h3>
                                    <div class="row mb-5">
                                        <div class="col-md-6">
                                            <label class="fs-5 fw-semibold mb-2">Username</label>
                                            <input type="text" class="form-control form-control-solid" id="receptionistUsername" name="receptionist_username" readonly>
                                            <button type="button" onclick="copyToClipboard('receptionistUsername')">Copy</button><br><br>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="fs-5 fw-semibold mb-2">Password</label>
                                            <input type="password" class="form-control form-control-solid" id="receptionistPassword" name="receptionist_password" readonly>
                                            <button type="button" onclick="copyToClipboard('receptionistPassword')">Copy</button><br><br>
                                        </div>
                                    </div>
                                    <div class="form-check form-check-solid">
                                        <input class="form-check-input" type="checkbox" id="receptionistSendCredentials" name="receptionist_send_credentials" value="yes">
                                        <label class="form-check-label fs-5 fw-semibold" for="receptionistSendCredentials">Send credentials via email</label>
                                    </div>
                                </div>



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
        document.getElementById('roleSelect').addEventListener('change', function () {
            const selectedRole = this.value;
            const doctorDetails = document.getElementById('doctorDetails');
            const receptionistDetails = document.getElementById('receptionistDetails');

            if (selectedRole === 'doctor') {
                doctorDetails.classList.remove('d-none');
                receptionistDetails.classList.add('d-none');
            } else {
                receptionistDetails.classList.remove('d-none');
                doctorDetails.classList.add('d-none');
            }
        });


        //Username and Password Creation

         // Function to generate username and password
        // Function to generate username and password
        const generateCredentials = (nameInput, phoneInput, usernameField, passwordField) => {
            const name = nameInput.value.trim();
            const phone = phoneInput.value.trim();

            if (name && phone) {
                // Generate username: lowercase name with spaces replaced by _ + last 4 digits of phone
                const username = `${name.toLowerCase().replace(/\s+/g, "_")}_${phone.slice(-4)}`;
                // Generate password: Random alphanumeric string
                const password = Math.random().toString(36).slice(-8);

                // Set the values in the fields
                usernameField.value = username;
                passwordField.value = password;
            }
        };

        // Copy to clipboard function
        const copyToClipboard = (fieldId) => {
            const field = document.getElementById(fieldId);
            field.select(); // Select the text
            field.setSelectionRange(0, 99999); // For mobile devices
            navigator.clipboard.writeText(field.value)
                .then(() => alert(`Copied: ${field.value}`))
                .catch(err => console.error('Failed to copy text:', err));
        };

        // Attach event listeners
        document.addEventListener("DOMContentLoaded", () => {
            // Doctor Fields
            const doctorNameField = document.getElementById("doctor_name");
            const doctorPhoneField = document.getElementById("doctor_phone");
            const doctorUsernameField = document.getElementById("doctorUsername");
            const doctorPasswordField = document.getElementById("doctorPassword");

            doctorNameField.addEventListener("blur", () =>
                generateCredentials(doctorNameField, doctorPhoneField, doctorUsernameField, doctorPasswordField)
            );
            doctorPhoneField.addEventListener("blur", () =>
                generateCredentials(doctorNameField, doctorPhoneField, doctorUsernameField, doctorPasswordField)
            );

            // Receptionist Fields
            const receptionistNameField = document.getElementById("receptionist_name");
            const receptionistPhoneField = document.getElementById("receptionist_phone");
            const receptionistUsernameField = document.getElementById("receptionistUsername");
            const receptionistPasswordField = document.getElementById("receptionistPassword");

            receptionistNameField.addEventListener("blur", () =>
                generateCredentials(receptionistNameField, receptionistPhoneField, receptionistUsernameField, receptionistPasswordField)
            );
            receptionistPhoneField.addEventListener("blur", () =>
                generateCredentials(receptionistNameField, receptionistPhoneField, receptionistUsernameField, receptionistPasswordField)
            );
        });
    </script>



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
