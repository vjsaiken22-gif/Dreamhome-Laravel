document.addEventListener("DOMContentLoaded", () => {

    const editForm = document.getElementById("editInspectionForm");

    if(editForm){

        editForm.addEventListener("submit", function(e){

            const confirmEdit = confirm(
                "Are you sure you want to update this inspection?"
            );

            if(!confirmEdit){
                e.preventDefault();
            }

        });

    }

    const deleteButtons = document.querySelectorAll(".delete-link");

    deleteButtons.forEach(button => {

        button.addEventListener("click", function(e){

            const confirmDelete = confirm(
                "Delete this inspection permanently?"
            );

            if(!confirmDelete){
                e.preventDefault();
            }

        });

    });

});