document.addEventListener("DOMContentLoaded", function () {
    const tables = document.querySelectorAll(".dt-design"); // Select all tables with the .dt-design class

    tables.forEach((table) => {
        // Initialize DataTable
        const dataTable = new DataTable(table, {
            info: false, // Disable info footer
            order: [], // Disable default ordering
            pageLength: 10, // Number of rows per page
            columnDefs: [
                { orderable: false, targets: 0 }, // Disable sorting on "Select" column
                { orderable: false, targets: table.querySelectorAll('th').length - 1 }, // Disable sorting on last column ("Actions")
            ],
        });

        // Search filter (optional)
        const searchInput = table.querySelector('[data-kt-ecommerce-product-filter="search"]');
        if (searchInput) {
            searchInput.addEventListener("keyup", function (event) {
                dataTable.search(event.target.value).draw();
            });
        }

        // Status filter (optional)
        // const statusFilter = table.querySelector('[data-kt-ecommerce-product-filter="status"]');
        // if (statusFilter) {
        //     $(statusFilter).on("change", (event) => {
        //         let value = event.target.value;
        //         if (value === "all") value = "";
        //         const statusColumnIndex = table.querySelectorAll('th').length - 2; // Assuming the second last column is status
        //         dataTable.column(statusColumnIndex).search(value).draw(); // Status column index
        //     });
        // }
    });
});
