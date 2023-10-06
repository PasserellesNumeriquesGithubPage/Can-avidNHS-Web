document.addEventListener("DOMContentLoaded", function () {
    // Get the modal
    const editUserModal = document.getElementById("EDITUser");

    // Get the elements in the modal body to populate the data
    const editUserIdElement = editUserModal.querySelector("#edit-user-id");
    const editUserEmailElement = editUserModal.querySelector("#edit-user-email");
    const editUserNameElement = editUserModal.querySelector("#edit-user-name");
    const editUserAgeElement = editUserModal.querySelector("#edit-user-age");
    const editUserGenderMaleElement = editUserModal.querySelector("#gender_male");
    const editUserGenderFemaleElement = editUserModal.querySelector("#gender_female");
    const editUserPositionElement = editUserModal.querySelector("#position");
    const editUserDepartmentElement = editUserModal.querySelector("#edit-user-department");
    const editUserRoleElement = editUserModal.querySelector("#role");
    const editUserPhoneNumberElement = editUserModal.querySelector("#edit-user-phone_number");

    // Add a click event listener to all "EDIT" buttons
    const editButtons = document.querySelectorAll(".action-user-btn");
    editButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const userData = JSON.parse(button.getAttribute("data-user"));
            editUserIdElement.value = userData.id;
            editUserEmailElement.value = userData.user.email;
            editUserNameElement.value = userData.name;
            editUserAgeElement.value = userData.age;
            if (userData.gender === "Male") {
                editUserGenderMaleElement.checked = true;
            } else if (userData.gender === "Female") {
                editUserGenderFemaleElement.checked = true;
            }
            editUserPositionElement.value = userData.position;
            editUserDepartmentElement.value = userData.department;
            editUserRoleElement.value = userData.user.role;
            editUserPhoneNumberElement.value = userData.phone_number;
        });
    });
});
