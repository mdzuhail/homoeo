// Listen for changes in the 'How Did You Find Us?' select field
$('#hear_about_us').change(function() {
    // Show the referral dropdown if 'Referral' is selected
    if ($(this).val() === 'Referral') {
        $('#referral_source').show();
    } else {
        $('#referral_source').hide();
    }
});

$(document).ready(function() {
    $('#consumption_frequency').hide();
    // Listen for change events on the radio buttons
    $('input[name="alcohol_tobacco"]').change(function() {
        var frequencyInput = $('#consumption_frequency');

        if ($(this).val() === 'yes') {
            frequencyInput.show();  // Show the textarea
        } else {
            frequencyInput.hide();  // Hide the textarea
        }
    });
});
