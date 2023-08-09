var room = 1;
function region_fields() {

    room++;
    var objTo = document.getElementById('boundary-container')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass"+room);
    var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="row"><div class="col-lg-2 mb-2"><div class="form-group"> <input type="text" class="form-control" id="country" name="country[]" value="" placeholder="Country" list="countryList"></div></div><div class="col-lg-2 mb-2"><div class="form-group"> <input type="text" class="form-control" id="boundary1" name="boundary1[]" value="" placeholder="Administrative Boundary 1"></div></div><div class="col-lg-2 mb-2"><div class="form-group"> <input type="text" class="form-control" id="boundary2" name="boundary2[]" value="" placeholder="Administrative Boundary 2"></div></div><div class="col-lg-2 mb-2"><div class="form-group"> <input type="text" class="form-control" id="boundary3" name="boundary3[]" value="" placeholder="Administrative Boundary 3"></div></div><div class="input-group-btn"> <button class="btn btn-outline-danger" type="button" onclick="remove_region_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Remove Region</button></div></div></div></div><div class="clear"></div></div>';

    objTo.appendChild(divtest)
}
function remove_region_fields(rid) {
    $('.removeclass'+rid).remove();
}

$(document).ready(function() {
    $('.select2-tags').select2({
        tags: true,
        tokenSeparators: [','],
        createTag: function(params) {
            var term = $.trim(params.term);
            if (term === '') {
                return null;
            }
            return {
                id: term,
                text: term,
                newTag: true
            }
        }
    });
});


// document.addEventListener("DOMContentLoaded", function () {
//     const countrySelect = document.getElementById('country');
//     const countryIdInput = document.getElementById('country_id');
//
//     console.log(countrySelect); // Check if countrySelect is defined
//     console.log(countryIdInput); // Check if countryIdInput is defined
//
//     countrySelect.addEventListener('change', function () {
//         console.log('Change event fired');
//
//         console.log(countrySelect.selectedIndex); // Check the selectedIndex value
//         console.log(countrySelect.options); // Check the options property
//
//         const selectedOption = countrySelect.options[countrySelect.selectedIndex];
//         console.log(selectedOption); // Check if selectedOption is defined
//
//         const selectedCountryId = selectedOption.getAttribute('data-country-id');
//         console.log(selectedCountryId); // Check if selectedCountryId is defined
//
//         countryIdInput.value = selectedCountryId;
//     });
//
// });

$(document).ready(function() {
    $(document).on('input', '.country-input', function() {
        const selectedOption = $(`#countryList option[value="${this.value}"]`);
        if (selectedOption.length > 0) {
            const countryId = selectedOption.data('countryId');
            $(this).closest('.form-group').find('.country-id-input').val(countryId);
        } else {
            $(this).closest('.form-group').find('.country-id-input').val('');
        }
    });
});
