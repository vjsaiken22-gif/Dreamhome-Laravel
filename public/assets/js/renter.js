const deleteButtons = document.querySelectorAll('.delete-btn');

deleteButtons.forEach(button => {

    button.addEventListener('click', function(event){

        const confirmDelete = confirm(
            "Delete this renter permanently?"
        );

        if(!confirmDelete){
            event.preventDefault();
        }

    });

});

const editButtons = document.querySelectorAll('.edit-btn');

editButtons.forEach(button => {

    button.addEventListener('click', function(event){

        const confirmEdit = confirm(
            "Proceed to edit this renter?"
        );

        if(!confirmEdit){
            event.preventDefault();
        }

    });

});