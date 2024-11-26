document.querySelectorAll('.kt_close').forEach(function(button) {
    button.addEventListener('click', handleModalClose);
});


document.addEventListener("DOMContentLoaded", function () {
    // Initialize Flatpickr on all inputs with the class "date-picker"
    flatpickr('.date-picker', {
        enableTime: false,  // Disable time selection
        dateFormat: "d, M Y",  // Format as "day, Month Year"
    });
});

// Function to handle modal close with SweetAlert confirmation
function handleModalClose(event) {
    event.preventDefault();

    // Retrieve modal and form IDs dynamically
    var modalId = event.currentTarget.getAttribute('data-target');
    if (!modalId || !document.getElementById(modalId)) {
        console.error("Invalid modal ID or modal element not found.");
        return;
    }
    var formId = modalId + '_form';

    Swal.fire({
        text: "Are you sure you would like to cancel?",
        icon: "warning",
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonText: "Yes, cancel it!",
        cancelButtonText: "No, return",
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: "btn btn-active-light",
        },
    }).then(function(result) {
        var modalElement = document.getElementById(modalId);
        var modal = bootstrap.Modal.getInstance(modalElement);
        var form = document.getElementById(formId);

        if (result.value) {
            // If confirmed, reset the form and hide the modal
            if (form) {
                form.reset(); // Reset form if it exists
            }
            modalElement.querySelector('.scroll-y').scrollTop = 0; // Reset scroll position
            modal.hide();
        } else if (result.dismiss === "cancel") {
            Swal.close(); // Close the confirmation dialog
            Swal.fire({
                text: "Your form has not been cancelled!",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn btn-primary",
                },
            });
        }
    });
}

// Attach the event listener to relevant close buttons
document.querySelectorAll('.kt_modal_close').forEach(function(button) {
    button.addEventListener('click', handleModalClose);
});
