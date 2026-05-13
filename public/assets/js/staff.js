document.querySelectorAll(".delete-btn").forEach(button => {

    button.addEventListener("click", function(event){

        if(!confirm("Delete this staff member?")){

            event.preventDefault();

        }

    });

});

document.querySelector("form")?.addEventListener("submit", function(event){

    if(!confirm("Save changes?")){

        event.preventDefault();

    }

});