document.addEventListener("DOMContentLoaded", () => {

    /* DELETE CONFIRMATION */

    const deleteButtons = document.querySelectorAll(".delete-btn");

    deleteButtons.forEach(button => {

        button.addEventListener("click", (e) => {

            const confirmDelete = confirm(
                "Are you sure you want to delete this owner?"
            );

            if (!confirmDelete) {

                e.preventDefault();
            }

        });

    });


    /* UPDATE CONFIRMATION */

    const updateButton = document.querySelector(
        'button[name="update_owner"]'
    );

    if(updateButton){

        updateButton.addEventListener("click", (e) => {

            const confirmUpdate = confirm(
                "Are you sure you want to update this owner?"
            );

            if(!confirmUpdate){

                e.preventDefault();
            }

        });

    }

});