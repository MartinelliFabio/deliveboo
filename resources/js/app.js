import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);

const deleteSubmitButtons = document.querySelectorAll('.delete-button');
const restoreSubmitButtons = document.querySelectorAll('.restore-button');


deleteSubmitButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        event.preventDefault();

        const dataTitle = button.getAttribute('data-item-title');

        const modal = document.getElementById('deleteModal');

        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();

        const modalItemTitle = modal.querySelector('#modal-item-title');
        modalItemTitle.textContent = dataTitle;

        const buttonDelete = modal.querySelector('button.btn-danger');

        buttonDelete.addEventListener('click', () => {
            button.parentElement.submit();
        })
    })
});

restoreSubmitButtons.forEach((button) => {
    button.addEventListener('click', (event) => {
        event.preventDefault();

        const dataTitle = button.getAttribute('data-item-title');

        const modal = document.getElementById('restoreModal');

        const bootstrapModal = new bootstrap.Modal(modal);
        bootstrapModal.show();

        const modalItemTitle = modal.querySelector('#modal-item-title');
        modalItemTitle.textContent = dataTitle;

        const buttonRestore = modal.querySelector('button.btn-primary');

        buttonRestore.addEventListener('click', () => {
            button.parentElement.submit();
        })
    })
});

const previewImage = document.getElementById('create_cover_image');
previewImage.addEventListener('change', (event) => {
    var oFReader = new FileReader();
    // console.log(image);
    oFReader.readAsDataURL(previewImage.files[0]);

    oFReader.onload = function (oFREvent) {
        //console.log(oFREvent);
        document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
});
