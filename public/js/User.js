$(document).ready(function () {
    var selectedGender = "{{ $profile->gender }}";
    if (selectedGender === 'Male') {
        $('#gender_male').prop('checked', true);
    } else if (selectedGender === 'Female') {
        $('#gender_female').prop('checked', true);
    }
});