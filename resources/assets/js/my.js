$(document).ready(function() {

    // Default bootstrap theme for select2
    $.fn.select2.defaults.set('theme', 'bootstrap');
    $.fn.select2.defaults.set('width', '100%');

    // Comboboxes
    $('.select2School').select2({
        placeholder: 'School',
    });
    $('.select2Education').select2({
        placeholder: 'Opleiding',
    });
    $('.select2Course').select2({
        placeholder: 'Vak',
    });
});
