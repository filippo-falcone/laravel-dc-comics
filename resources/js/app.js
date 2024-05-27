import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

/* Window Redirect */
const addElementBtn = document.querySelector('.add-element');
addElementBtn.addEventListener('click', function () {
    const comicsCreate = 'comics/create';
    window.location.href = comicsCreate;
});

const showElement = document.querySelectorAll('.show-element');
showElement.forEach((element) => {
    element.addEventListener('click', function () {
        const elementId = this.dataset.elementId;
        window.location.href = `comics/${elementId}`;
    });
});