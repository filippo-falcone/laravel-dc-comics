import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

/* Window Redirect */
const showAllElementBtn = document.querySelector('.show-all-element');
if (showAllElementBtn) {
    showAllElementBtn.addEventListener('click', function () {
        window.location.href = 'comics';
    });
}

const addElementBtn = document.querySelector('.add-element');
if (addElementBtn) {
    addElementBtn.addEventListener('click', function () {
        const comicsCreate = 'comics/create';
        window.location.href = comicsCreate;
    });
}

const showElementBtn = document.querySelectorAll('.show-element');
if (showElementBtn) {
    showElementBtn.forEach((element) => {
        element.addEventListener('click', function () {
            const elementId = this.dataset.elementId;
            window.location.href = `comics/${elementId}`;
        });
    });
}

const editElementBtn = document.querySelector('.edit-element');
if (editElementBtn) {
    editElementBtn.addEventListener('click', function () {
        const elementId = this.dataset.elementId;
        const comicsEdit = `${elementId}/edit`;
        window.location.href = comicsEdit;
    });
}

/* Modal */
const deleteElement = document.querySelector('.delete-element');
if (deleteElement) {
    deleteElement.addEventListener('click', function (event) {
        event.preventDefault();
        const deleteModal = document.getElementById('delete-modal');
        const elementTitle = this.dataset.elementTitle;
        deleteModal.querySelector('.modal-body').innerHTML = `Are you sure you want to delete ${elementTitle}?`;
        const bootstrapDeleteModal = new bootstrap.Modal(deleteModal);
        bootstrapDeleteModal.show();
        const deleteConfirmedBtn = document.getElementById('delete-confirmed');
        deleteConfirmedBtn.addEventListener('click', function () {
            deleteElement.parentElement.submit();
        });
    });
}