import { smoothScroll, elmYPosition, currentYPosition } from './utilities';

export class Contact {
    constructor() {
        this.elementID = 'vmc-opening-hours';
        this.scrollBtn = document.querySelector('.opening-hour-button');
        this.scrollBtn.addEventListener('click', e => this.scrollToTop(e));
    }
    scrollToTop(e) {
        smoothScroll(this.elementID);
    }
}