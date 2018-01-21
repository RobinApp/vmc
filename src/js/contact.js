import { smoothScroll, elmYPosition, currentYPosition } from './utilities';

export class Contact {
    constructor() {
        this.elementID = 'vmc-opening-hours';
        this.scrollBtn = document.querySelector('.opening-hour-button');
        this.ifButtonExist();
    }
    ifButtonExist() {
        this.scrollBtn !== null ? this.scrollBtn.addEventListener('click', e => this.scrollToOpeningHour(e)) : '';
    }
    scrollToOpeningHour(e) {
        smoothScroll(this.elementID);
    }
}