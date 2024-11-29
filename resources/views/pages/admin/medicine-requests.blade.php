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
                        <form action="" id="">
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
                                        <input class="form-control ms-2 fw-bold pe-5" name="invoice_date" type="text">
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4"
                                    data-bs-toggle="tooltip" data-bs-trigger="hover"
                                    data-bs-original-title="Enter invoice number" data-kt-initialized="1">
                                    <span class="fs-2x fw-bold text-gray-800">Invoice #</span>
                                    <input type="text"
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
                                        <input class="form-control form-control-transparent fw-bold pe-5 flatpickr-input"
                                            placeholder="Select date" name="invoice_due_date" type="text"
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
                                                <th class="min-w-300px w-475px">Medicine Name</th>
                                                <th class="min-w-100px w-100px">Quantity/Unit</th>
                                                <th class="min-w-150px w-150px">Selling Price</th>
                                                <th class="min-w-100px w-150px text-end">MRP</th>
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
                                                    <select class="form-select form-select-solid hp-item-quantity" name="medicine_quantity">
                                                        <option value="1">Full Bottle</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control form-control-solid text-end hp-item-price" name="medicine_price" placeholder="0.00" >
                                                </td>
                                                <td class="pt-8 text-end text-nowrap">
                                                    $<span class="hp-item-total">0.00</span>
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
                                                    $<span id="hp-sub-total">0.00</span>
                                                </th>
                                            </tr>

                                            <tr class="text-gray-500">
                                                <th></th>
                                                <th colspan="2" class="fs-4 ps-0">Discount</th>
                                                <th colspan="2" class="text-end fs-4 text-nowrap">
                                                    $
                                                    <div class="d-inline-block">
                                                        <input type="text" class="form-control form-control-solid w-70px" id="hp-discount" placeholder="0">
                                                    </div>
                                                </th>
                                            </tr>

                                            <tr class="align-top fw-bold text-gray-700">
                                                <th></th>
                                                <th colspan="2" class="fs-4 ps-0">Total</th>
                                                <th colspan="2" class="text-end fs-4 text-nowrap">
                                                    $<span id="hp-grand-total">0.00</span>
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
                            <!--end::Wrapper-->
                        </form>
                        <!--end::Form-->
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
                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="supplier_name" name="supplier_name">
                                <option value="not-a-patients">Not a Patient</option>
                                <option value="2">Option 2</option>
                            </select>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Separator-->
                        <div class="separator separator-dashed mb-8"></div>
                        <!--end::Separator-->

                        <!--begin::Input group-->
                        <div class="mb-8">
                            <!--begin::Option-->
                            <label
                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700">
                                    Payment method
                                </span>

                                <input class="form-check-input" type="checkbox" checked="checked" value="">
                            </label>
                            <!--end::Option-->

                            <!--begin::Option-->
                            <label
                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
                                <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700">
                                    Late fees
                                </span>

                                <input class="form-check-input" type="checkbox" value="">
                            </label>
                            <!--end::Option-->

                            <!--begin::Option-->
                            <label
                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                <span class="form-check-label ms-0 fw-bold fs-6 text-gray-700">
                                    Notes
                                </span>

                                <input class="form-check-input" type="checkbox" value="">
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Separator-->
                        <div class="separator separator-dashed mb-8"></div>
                        <!--end::Separator-->

                        <!--begin::Actions-->
                        <div class="mb-0">
                            <!--begin::Row-->
                            <div class="row mb-5">
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
                            </div>
                            <!--end::Row-->

                            <button type="submit" href="#" class="btn btn-primary w-100"
                                id="kt_invoice_submit_button"><i
                                    class="ki-outline ki-triangle fs-3"></i> Send Invoice
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

  <script>

document.addEventListener('DOMContentLoaded', function() {
    // Function to update totals
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

    // Function to update item total (price * quantity)
    function updateItemTotal(row) {
        const priceInput = row.querySelector('.hp-item-price');
        const quantityInput = row.querySelector('.hp-item-quantity');
        const totalElement = row.querySelector('.hp-item-total');

        const price = parseFloat(priceInput.value) || 0;
        const quantity = parseInt(quantityInput.value) || 0;

        const total = price * quantity;
        totalElement.textContent = total.toFixed(2);
    }

    // Add item button click event
    const addItemButton = document.getElementById('hp-add-item');
    addItemButton.addEventListener('click', function() {
        const tableBody = document.getElementById('hp-items-body');
        const newRow = document.createElement('tr');
        newRow.classList.add('border-bottom', 'border-bottom-dashed');

        // Add content to the new row
        newRow.innerHTML = `
            <td class="pe-7">
                <select class="form-select form-select-solid hp-item-name" name="medicine_name">
                    <option value="not-a-patients">Consultation</option>
                    <option value="2">Option 2</option>
                </select>
                <input type="text" class="form-control form-control-solid mt-3 hp-item-description" name="medicine_description" placeholder="Description">
            </td>
            <td class="ps-0">
                <select class="form-select form-select-solid hp-item-quantity" name="medicine_quantity">
                    <option value="1">Full Bottle</option>
                    <option value="2">Option 2</option>
                </select>
            </td>
            <td>
                <input type="number" class="form-control form-control-solid text-end hp-item-price" name="medicine_price" placeholder="0.00" value="0" step="0.01">
            </td>
            <td class="pt-8 text-end text-nowrap">
                $<span class="hp-item-total">0.00</span>
            </td>
            <td class="pt-5 text-end">
                <a type="button" class="btn btn-sm btn-icon btn-active-color-primary hp-remove-item">
                    <i class="ki-outline ki-trash fs-3"></i>
                </a>
            </td>
        `;

        // Append the new row to the table body
        tableBody.appendChild(newRow);

        // Attach the price change event handler
        attachPriceChangeHandler(newRow);

        // Attach the remove item event handler
        attachRemoveItemHandler(newRow);

        // Update totals after adding a new item
        updateTotals();
    });

    // Function to attach the price change event handler
    function attachPriceChangeHandler(row) {
        const priceInput = row.querySelector('.hp-item-price');
        priceInput.addEventListener('input', function() {
            updateItemTotal(row);
            updateTotals();
        });
    }

    // Function to attach the remove button click event
    function attachRemoveItemHandler(row) {
        const removeButton = row.querySelector('.hp-remove-item');
        removeButton.addEventListener('click', function() {
            row.remove();
            updateTotals();
        });
    }

    // Handle input in the first row to trigger the update of the total
    const firstRow = document.querySelector('#hp-items-body tr');
    if (firstRow) {
        // Attach the price change event handler to the first row
        const firstPriceInput = firstRow.querySelector('.hp-item-price');
        firstPriceInput.addEventListener('input', function() {
            updateItemTotal(firstRow); // Update the first row's total
            updateTotals(); // Recalculate the totals
        });

        // Update the totals for the first row immediately
        updateItemTotal(firstRow); // Update the first row's total
        updateTotals(); // Recalculate the total and subtotal
    }

    // Discount change event
    const discountInput = document.getElementById('hp-discount');
    discountInput.addEventListener('input', updateTotals);
});


  </script>

@endsection
