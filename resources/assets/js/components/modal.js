import Webservice from '../libs/webservice';

export default {
    open() {
        $('.modal-overlay').addClass('active');
    },

    close(){
        $('.modal-overlay').removeClass('active');
    }
}