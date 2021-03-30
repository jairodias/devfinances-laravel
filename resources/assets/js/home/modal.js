import Modal from '../components/modal.js';

$(document).ready(() => {

    $('.new').on('click', () => {
        Modal.open()
    });

    $('.cancel').on('click', () => {
        Modal.close()
    });

})