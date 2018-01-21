import { smoothScroll, elmYPosition, currentYPosition } from './utilities';

export class Footer {
    constructor() {
        this.elementID = 'page';
        this.scrollBtn = document.querySelector('.scroll-top-btn');
        this.scrollBtn.addEventListener('click', e => this.scrollToTop(e));
    }
    // Scroll to top of page
    scrollToTop(e) {
        smoothScroll(this.elementID);
    }
}