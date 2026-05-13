document.addEventListener("DOMContentLoaded", () => {

    // DELETE CONFIRMATION
    const deleteButtons = document.querySelectorAll(".delete-btn");

    deleteButtons.forEach(button => {

        button.addEventListener("click", (e) => {

            const confirmed = confirm(
                "Are you sure you want to DELETE this property?"
            );

            if (!confirmed) {
                e.preventDefault();
            }

        });

    });


    // EDIT CONFIRMATION
    const editButtons = document.querySelectorAll(".edit-btn");

    editButtons.forEach(button => {

        button.addEventListener("click", (e) => {

            const confirmed = confirm(
                "Do you want to edit this property?"
            );

            if (!confirmed) {
                e.preventDefault();
            }

        });

    });

});