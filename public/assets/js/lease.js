document.addEventListener("DOMContentLoaded", () => {

    // DELETE CONFIRMATION
    const deleteButtons = document.querySelectorAll("a[href*='delete']");

    deleteButtons.forEach(button => {

        button.addEventListener("click", function(event) {

            const confirmDelete = confirm(
                "Are you sure you want to delete this lease?"
            );

            if (!confirmDelete) {

                event.preventDefault();

            }

        });

    });



    // EDIT FORM CONFIRMATION
    const editForms = document.querySelectorAll("form");

    editForms.forEach(form => {

        form.addEventListener("submit", function(event) {

            const updateButton =
            form.querySelector("button[name='update_lease']");

            if(updateButton){

                const confirmUpdate = confirm(
                    "Save changes to this lease?"
                );

                if(!confirmUpdate){

                    event.preventDefault();

                }

            }

        });

    });



    // FADE IN EFFECT
    const fadeElements = document.querySelectorAll(".fade-in");

    fadeElements.forEach(element => {

        element.style.opacity = "0";
        element.style.transform = "translateY(20px)";

        setTimeout(() => {

            element.style.transition =
            "all 0.6s ease";

            element.style.opacity = "1";
            element.style.transform = "translateY(0)";

        }, 100);

    });

});