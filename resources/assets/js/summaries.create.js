$(document).ready(function() {

    // Comboboxes
    $('.select2School').select2({
        placeholder: 'School',
    }).val(null).trigger('change');

    $('.select2Education').select2({
        placeholder: 'Opleiding',
        disabled: true,
    });

    $('.select2Course').select2({
        placeholder: 'Vak',
        disabled: true,
    });

});
