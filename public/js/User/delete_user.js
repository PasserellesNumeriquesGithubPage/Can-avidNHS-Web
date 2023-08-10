document.addEventListener("DOMContentLoaded", function () {
    const editUserModal = document.getElementById("DELETEUser");
    const deleteUserIdElement = editUserModal.querySelector("#delete-user-id");
    const deleteUserPictureElement = editUserModal.querySelector("#delete-user-picture");
    const deleteUserForm = document.getElementById("deleteUserForm");

    const editButtons = document.querySelectorAll(".action-user-btn");
    editButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const userData = JSON.parse(button.getAttribute("data-user"));
            editUserIdElement.textContent = userData.id;
            viewUserPictureElement.src = "/storage/" + userData.images;
        });
    });
});
