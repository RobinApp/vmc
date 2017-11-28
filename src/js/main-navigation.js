export class MainNavigation {
    constructor() {
        this.menuState = false;
        this.menu = document.getElementById('mobile-menu-toggle');
        this.menuToggle = document.getElementById('site-navigation');
        this.menu.addEventListener('click', e => this.mobileMenuToggle(e));
    }
    
    mobileMenuToggle(e) {
        this.menuState === false ? this.menuToggle.classList.add('main-navigation-toggle') : this.menuToggle.classList.remove('main-navigation-toggle');
        this.menuState === false ? this.menuState = true : this.menuState = false;
    }
}