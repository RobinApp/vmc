import { smoothScroll, elmYPosition, currentYPosition } from './utilities';

export class Contact {
    constructor() {
        this.elementID = 'vmc-opening-hours';
        this.scrollBtn = document.querySelector('.opening-hour-button');
        this.ifButtonExist();
    }
    // Check if opening hour button exists, if so add event listener
    ifButtonExist() {
        this.scrollBtn !== null ? this.scrollBtn.addEventListener('click', e => this.scrollToOpeningHour(e)) : '';
    }
    // Scroll to opening hours
    scrollToOpeningHour(e) {
        smoothScroll(this.elementID);
    }
}