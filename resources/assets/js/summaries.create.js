$(document).ready(function() {

    let domainName = 'http://' + window.location.host;

    // Comboboxes
    $('.select2School').select2({
        placeholder: 'School',
        selected: 0
    }).val(null).trigger('change');

    $('.select2Education').select2({
        placeholder: 'Opleiding',
        disabled: true,
    });
    
    $('.select2Course').select2({
        placeholder: 'Vak',
        disabled: true,
    });

    let updateSelectbox = function(className, url, placeholder) {
        $.ajax(url, {
            success: function(object) {
                var formatted = [];
                Object.keys(object).map(function(key, index) {
                    formatted.push({'id': key, 'text': object[key]});
                });
                formatted.unshift({'id': '', text: null});
                $(className).empty()
                .select2({placeholder: placeholder, data: formatted})
                .prop('disabled', false)
                .trigger('change');
            }
        });
    }

    let resetSelectBox = function(className, placeholder) {
        $(className).empty()
        .select2({placeholder: placeholder, data: [{id: '', text: null}]})
        .prop('disabled', true)
        .trigger('change');
    }
    
    $('.select2School').on('select2:select', function (e) {        
        var schoolId = e.params.data.id;
        var url = domainName + '/api/educations-for-school/' + schoolId;
        updateSelectbox('.select2Education', url, 'Opleiding');
        resetSelectBox('.select2Course', 'Vak');
    });

    $('.select2Education').on('select2:select', function (e) {        
        var educationId = e.params.data.id;
        var url = domainName + '/api/courses-for-education/' + educationId;
        updateSelectbox('.select2Course', url, 'Vak');
    });
});