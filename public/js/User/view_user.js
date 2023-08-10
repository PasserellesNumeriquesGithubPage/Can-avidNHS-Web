document.addEventListener("DOMContentLoaded", function () {
    // Get the modal
    const editUserModal = document.getElementById("VIEWUser");

    // Get the elements in the modal body to populate the data
    const editUserIdElement = editUserModal.querySelector("#view-user-id");
    const editUserEmailElement = editUserModal.querySelector("#view-user-email");
    const editUserNameElement = editUserModal.querySelector("#view-user-name");
    const editUserAgeElement = editUserModal.querySelector("#view-user-age");
    const editUserGenderElement = editUserModal.querySelector("#view-user-gender");
    const editUserPositionElement = editUserModal.querySelector("#view-user-position");
    const editUserDepartmentElement = editUserModal.querySelector("#view-user-department");
    const editUserRoleElement = editUserModal.querySelector("#view-user-role");
    const editUserPhoneNumberElement = editUserModal.querySelector("#view-user-phone_number");
    const viewUserPictureElement = editUserModal.querySelector("#view-user-picture");

    // Add a click event listener to all "EDIT" buttons
    const editButtons = document.querySelectorAll(".action-user-btn");
    editButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const userData = JSON.parse(button.getAttribute("data-user"));
            editUserIdElement.textContent = userData.id;
            editUserEmailElement.textContent = userData.user.email;
            editUserNameElement.textContent = userData.user.name;
            editUserAgeElement.textContent = userData.age;
            editUserGenderElement.textContent = userData.gender;
            editUserPositionElement.textContent = userData.position;
            editUserDepartmentElement.textContent = userData.department;
            editUserRoleElement.textContent = userData.user.role;
            editUserPhoneNumberElement.textContent = userData.phone_number;
            console.log(userData.images)
            viewUserPictureElement.src = "/storage/" + userData.images;
        });
    });
});
