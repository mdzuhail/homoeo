@extends('layouts.app')


@section('content')
    <div id="kt_app_content_container" class="app-container  container-fluid ">
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



    <!-- Modal for Pending Bills -->

    <div class="modal fade" id="pendingBillsModal" tabindex="-1" aria-labelledby="pendingBillsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pendingBillsModalLabel">Pending Bills</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Pay</th>
                            </tr>
                        </thead>
                        <tbody id="pendingBillsList">
                            <!-- Bill items will be populated here -->
                        </tbody>
                    </table>

                    <!-- Dropdown for Partial or Full Payment -->
                    <div class="mb-3">
                        <label class="form-label">Select Payment Type</label>
                        <select id="paymentType" class="form-select">
                            <option value="full">Full Amount</option>
                            <option value="partial">Partial Amount</option>
                        </select>
                    </div>

                    <!-- Input for Partial Payment Amount -->
                    <div class="mb-3" id="partialAmountInput" style="display: none;">
                        <label class="form-label">Enter Amount to Pay</label>
                        <input type="number" id="partialAmount" class="form-control" placeholder="Enter amount to pay">
                    </div>

                    <!-- Total Amount to Pay (for full payment or selected bills) -->
                    <div id="totalAmount" style="display: none;">
                        <strong>Total Amount: ₹<span id="totalAmountValue">0</span></strong>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="savePaymentBtn">Save Payment</button>
                </div>
            </div>
        </div>
    </div>



@push('js')

  <script>



document.addEventListener('DOMContentLoaded', function() {
    // Function to update the total of a single item row
    function updateItemTotal(row) {
        const unitInput = row.querySelector('.hp-item-unit');
        const priceInput = row.querySelector('.hp-item-price');
        const totalElement = row.querySelector('.hp-item-total');

        const unit = parseFloat(unitInput.value) || 1; // Default to 1 if no unit is specified
        const price = parseFloat(priceInput.value) || 0;

        // Total calculation is only based on price and unit (ignoring size)
        const total = price * unit;

        totalElement.textContent = total.toFixed(2); // Update the total price for this row
    }

    // Function to update overall totals
    function updateTotals() {
        let subtotal = 0;

        // Loop through each row to calculate the subtotal
        const rows = document.querySelectorAll('#hp-items-body tr');
        rows.forEach(function(row) {
            updateItemTotal(row); // Update the total for each item
            const totalElement = row.querySelector('.hp-item-total');
            const total = parseFloat(totalElement.textContent) || 0;
            subtotal += total;
        });

        // Update subtotal
        document.getElementById('hp-sub-total').textContent = subtotal.toFixed(2);

        // Update grand total after discount
        const discount = parseFloat(document.getElementById('hp-discount').value) || 0;
        const grandTotal = subtotal - discount;
        document.getElementById('hp-grand-total').textContent = grandTotal.toFixed(2);
    }

    // Event delegation to handle changes in input fields and trigger update
    const hpItemsBody = document.getElementById('hp-items-body');

    // Handle any changes inside the item rows
    hpItemsBody.addEventListener('input', function(event) {
        const target = event.target;

        // Check if the target is one of the editable fields (unit, price, or description)
        if (target.classList.contains('hp-item-unit') || target.classList.contains('hp-item-price')) {
            updateTotals(); // Recalculate totals when unit or price changes
        }
    });

    // Add item button click event (to add new rows)
    const addItemButton = document.getElementById('hp-add-item');
    addItemButton.addEventListener('click', function() {
        const tableBody = document.getElementById('hp-items-body');
        const newRow = document.createElement('tr');
        newRow.classList.add('border-bottom', 'border-bottom-dashed');

        newRow.innerHTML = `
            <td class="pe-7">
                <select class="form-select form-select-solid hp-item-name" name="medicine_name">
                    <option value="not-a-patients">Consultation</option>
                    <option value="2">Option 2</option>
                </select>
                <input type="text" class="form-control form-control-solid mt-3 hp-item-description" name="medicine_description" placeholder="Description">
            </td>
            <td class="ps-0">
                <select class="form-select form-select-solid size_bottle" name="medicine_size">
                    <option value="no-size">No Size</option>
                    <option value="full-bottle">Full Bottle</option>
                    <option value="dram-1">1/2 Dram</option>
                </select>
            </td>
            <td>
                <input type="number" class="form-control form-control-solid text-end hp-item-price" name="medicine_price" placeholder="0.00" value="0">
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
        `;

        tableBody.appendChild(newRow);
        updateTotals(); // Recalculate totals after adding a new item
    });

    // Handle the remove item button click event
    hpItemsBody.addEventListener('click', function(event) {
    const target = event.target;

    if (target && (target.matches('.hp-remove-item') || target.closest('.hp-remove-item'))) {
        const row = target.closest('tr');
        if (row) {
            row.remove(); // Remove the item row
            updateTotals(); // Update totals
        }
    }
});

    // Handle discount input field
    const discountInput = document.getElementById('hp-discount');
    discountInput.addEventListener('input', updateTotals); // Recalculate totals when discount changes
});

flatpickr('.date-picker', {
        enableTime: false,  // Disable time selection
        dateFormat: "d, M Y",  // Format as "day, Month Year"
        defaultDate: "<?php echo date('d, M Y'); ?>"  // Set the current date as default
    });

   // Due Amount




  </script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const patientSelect = document.getElementById('patientSelect');
    const previousBillsLink = document.getElementById('previousBillsLink');
    const pendingBillsModal = new bootstrap.Modal(document.getElementById('pendingBillsModal'));
    const savePaymentBtn = document.getElementById('savePaymentBtn');
    const pendingBillsList = document.getElementById('pendingBillsList');
    const paymentTypeSelect = document.getElementById('paymentType');
    const partialAmountInput = document.getElementById('partialAmountInput');
    const partialAmount = document.getElementById('partialAmount');
    const totalAmountDiv = document.getElementById('totalAmount');
    const totalAmountValue = document.getElementById('totalAmountValue');

    // Static sample data (replace with backend data later)
    const patientBills = {
        "2": [
            { billDate: "2024-11-10", amount: 500, status: "Pending", id: 1 },
            { billDate: "2024-11-12", amount: 300, status: "Pending", id: 2 },
            { billDate: "2024-11-15", amount: 200, status: "Pending", id: 3 }
        ]
    };

    // Function to simulate fetching pending bills from the backend
    function fetchBillsData(patientId) {
        const bills = patientBills[patientId];
        if (bills && bills.length > 0) {
            populateBillsTable(bills);
            pendingBillsModal.show();
            previousBillsLink.style.display = 'block';
            previousBillsLink.style.color = ''; // Reset color for pending bills
        } else {
            alert('No pending bills for this patient.');
            previousBillsLink.style.display = 'block';
            previousBillsLink.style.color = '#cac2c2'; // Color for no pending bills
        }
    }

    // Populate the table with bill data
    function populateBillsTable(bills) {
        pendingBillsList.innerHTML = ''; // Clear existing rows
        bills.forEach(bill => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${bill.billDate}</td>
                <td>₹<span class="bill-amount">${bill.amount}</span></td>
                <td>${bill.status}</td>
                <td><input type="checkbox" class="payBill" data-id="${bill.id}" data-amount="${bill.amount}" /></td>
            `;
            pendingBillsList.appendChild(row);
        });
        updateTotalAmount(); // Immediately calculate total amount after populating bills
    }

    // Handle the "Previous Bills to Pay" link click
    previousBillsLink.addEventListener('click', function (e) {
        e.preventDefault();
        const selectedPatientId = patientSelect.value;
        if (selectedPatientId !== 'not-a-patient') {
            fetchBillsData(selectedPatientId);
        }
    });

    // Handle patient select change using Select2 and jQuery
    $(patientSelect).on('change', function () {
        const selectedPatientId = $(this).val();
        if (selectedPatientId === '2') {
            fetchBillsData(selectedPatientId);
        } else {
            previousBillsLink.style.display = 'none'; // Hide if no pending bills
            previousBillsLink.style.color = '#cac2c2'; // Apply color when no pending bills
        }
    });

    // Handle payment type change (full or partial)
    paymentTypeSelect.addEventListener('change', function () {
        if (paymentTypeSelect.value === 'partial') {
            partialAmountInput.style.display = 'block';
            totalAmountDiv.style.display = 'none';
            updateTotalAmount(); // Update total on changing to partial
        } else {
            partialAmountInput.style.display = 'none';
            totalAmountDiv.style.display = 'block';
            updateTotalAmount(); // Calculate total amount for selected bills
        }
        toggleCheckboxVisibility(); // Show/Hide checkboxes based on payment type
    });

    // Show or hide checkboxes based on payment type
    function toggleCheckboxVisibility() {
        const checkboxes = document.querySelectorAll('.payBill');
        if (paymentTypeSelect.value === 'partial') {
            checkboxes.forEach(checkbox => checkbox.style.display = 'none'); // Hide checkboxes for partial
        } else {
            checkboxes.forEach(checkbox => checkbox.style.display = 'inline-block'); // Show checkboxes for full
        }
    }

    // Update the total amount based on selected checkboxes
    function updateTotalAmount() {
        let totalAmount = 0;
        if (paymentTypeSelect.value === 'full') {
            const selectedBills = document.querySelectorAll('.payBill:checked');
            selectedBills.forEach(bill => {
                totalAmount += parseFloat(bill.dataset.amount);
            });
        } else if (paymentTypeSelect.value === 'partial') {
            const partialAmountValue = parseFloat(partialAmount.value);
            if (!isNaN(partialAmountValue) && partialAmountValue > 0) {
                totalAmount = partialAmountValue;
            }
        }
        totalAmountValue.textContent = totalAmount.toFixed(2);
    }

    // Listen for changes in checkboxes to immediately update total
    pendingBillsList.addEventListener('change', function (e) {
        if (e.target && e.target.classList.contains('payBill')) {
            updateTotalAmount();
        }
    });

    // Save payment (if needed)
    savePaymentBtn.addEventListener('click', function () {
    const selectedBills = document.querySelectorAll('.payBill:checked');
    let totalPayment = 0;

    // Show SweetAlert confirmation dialog
    Swal.fire({
        title: "Confirm Payment",
        text: "Are you sure the payment is paid by the patient? This action cannot be undone",
        icon: "warning",
        showCancelButton: true,  // Show cancel button
        buttonsStyling: false,  // Disable default styling
        confirmButtonText: "Yes, cancel it!",  // Confirm button text
        cancelButtonText: "No, return",  // Cancel button text
        customClass: {
            confirmButton: "btn btn-primary",  // Custom styling for confirm button
            cancelButton: "btn btn-active-light",  // Custom styling for cancel button
        },

    }).then((result) => {
        if (result.isConfirmed) {
            // Payment logic
            if (paymentTypeSelect.value === 'partial') {
                let remainingAmount = parseFloat(partialAmount.value);
                if (isNaN(remainingAmount) || remainingAmount <= 0) {
                    Swal.fire("Error", "Please enter a valid partial amount.", "error");
                    return;
                }

                // Reduce the bill amounts based on partial amount entered
                selectedBills.forEach(bill => {
                    const billAmount = parseFloat(bill.dataset.amount);
                    if (remainingAmount >= billAmount) {
                        remainingAmount -= billAmount; // Fully pay the bill
                        bill.checked = false; // Uncheck after full payment
                    } else {
                        bill.dataset.amount = (billAmount - remainingAmount).toString();
                        remainingAmount = 0;
                    }
                });
            } else if (paymentTypeSelect.value === 'full') {
                // For full payment, mark all selected bills as paid
                selectedBills.forEach(bill => {
                    bill.checked = false; // Uncheck after payment
                });
            }

            // Update total amount and notify user
            updateTotalAmount();
            Swal.fire("Payment Saved", "Your payment has been successfully recorded.", "success");
        }
    });
});


    // Initial setup: Ensure checkboxes are visible and total is updated for full payment
    paymentTypeSelect.value = 'full'; // Default to full
    paymentTypeSelect.dispatchEvent(new Event('change')); // Trigger change event on load
});


document.getElementById('notes-checkbox').addEventListener('change', function() {
        var notesInput = document.getElementById('notes-input');
        if (this.checked) {
            notesInput.style.display = 'block';  // Show input field
        } else {
            notesInput.style.display = 'none';  // Hide input field
        }
    })

    document.getElementById('due-amount-checkbox').addEventListener('change', function() {
        var dueAmountInput = document.getElementById('due-amount');
        if (this.checked) {
            dueAmountInput.style.display = 'block';  // Show input field
        } else {
            dueAmountInput.style.display = 'none';  // Hide input field
        }
    });
</script>


@endpush


@endsection
