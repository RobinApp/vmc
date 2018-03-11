// This is only a temporary script until VMC want to activate all service modules.
export class DisableLink {
    constructor() {
        this.element = document.getElementById('menu-service-booking');
        this.elementCheck();
    }
    // If menu exists
    elementCheck() {
        this.element !== null ? this.findLink() : '';
    }
    // Find link
    findLink() {
        let arr = Array.prototype.slice.call(document.querySelectorAll("a"));
        arr.map((i)=> {
            i.innerHTML === 'Däckbyte' ? this.disable(i) : '';
          });
    }
    // Disable link
    disable(i) {
        i.setAttribute('class', 'disabled');
        i.setAttribute('title', 'Kommer tidigast till hösten 2018.');
    }

}