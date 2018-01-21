import { hasClass } from './utilities';

export class MainNavigation {
    constructor() {
        this.menuState = false;
        this.menu = document.getElementById('mobile-menu-toggle');
        this.menuToggle = document.getElementById('site-navigation');
        this.menuMobile = document.getElementById('site-navigation-mobile');
        this.menuSymbol = document.getElementById('mobile-menu-toggle');
        this.menu.addEventListener('click', e => this.mobileMenuToggle(e));
        this.menuList = [].slice.call(document.querySelectorAll('.menu-item'));
        this.manufacturer;
        this.currentMenuItem();
    }
    // Toggle menu in mobile/tablet view
    mobileMenuToggle(e) {
        this.menuSymbol.innerHTML === 'Meny' ? this.menuSymbol.innerHTML = '&#x02A2F' : this.menuSymbol.innerHTML = 'Meny';
        this.menuState === false ? this.menuToggle.classList.add('main-navigation-toggle') : this.menuToggle.classList.remove('main-navigation-toggle');
        this.menuState === false ? this.menuState = true : this.menuState = false;
        return true;
    }
    // Check if element has class "current-menu-item"
    currentMenuItem() {
        let current;
        this.menuList.map((i)=> {
            current = hasClass(i, 'current-menu-item');
            current === true ? this.manufacturerMenuStyling() : '';
        });
    }
    // If current page is a manufacturer page, apply their color to menu item
    manufacturerMenuStyling() {
        this.manufacturer = document.querySelector('.current-menu-item');
        let currentManufacturer = this.manufacturer.children[0].innerHTML;

        switch (currentManufacturer) {
            case 'Volov':
                this.manufacturer.style.borderColor = '#003057';
                break;
            case 'Renault':
                this.manufacturer.style.borderColor = '#fc3';
                break;
            case 'Nissan':
                this.manufacturer.style.borderColor = '#C3002F';
                break;
            case 'Dacia':
                this.manufacturer.style.borderColor = '#003057';
                break;
        }
        return true;
    }
}