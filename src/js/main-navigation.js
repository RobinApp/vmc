export class MainNavigation {
    constructor() {
        this.menuState = false;
        this.menu = document.getElementById('mobile-menu-toggle');
        this.menuToggle = document.getElementById('site-navigation');
        this.menuMobile = document.getElementById('site-navigation-mobile');
        this.menuSymbol = document.getElementById('mobile-menu-toggle');
        this.menu.addEventListener('click', e => this.mobileMenuToggle(e));
        this.manufacturer = document.querySelector('.current-menu-item');
        this.manufacturerMenuStyling();
    }
    
    mobileMenuToggle(e) {
        this.menuSymbol.innerHTML === 'Meny' ? this.menuSymbol.innerHTML = '&#x02A2F' : this.menuSymbol.innerHTML = 'Meny';
        this.menuState === false ? this.menuToggle.classList.add('main-navigation-toggle') : this.menuToggle.classList.remove('main-navigation-toggle');
        this.menuState === false ? this.menuState = true : this.menuState = false;
        return true;
    }
    manufacturerMenuStyling() {

        if (this.menuMobile.style.display === 'none') {
            
            console.log('ja');
        }
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