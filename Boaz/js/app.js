class MenuManager {
    constructor(hamburgerId, menuId, navbarSelector) {

        this.hamburger = document.getElementById(hamburgerId);
        this.menu = document.getElementById(menuId);
        this.navbar = document.querySelector(navbarSelector);

        this.hamburger.addEventListener('click', this.toggle.bind(this));
    }

    toggle = () => {
        this.menu.classList.toggle('active');
        this.navbar.classList.toggle('active');
    };
}

const menuManager = new MenuManager('hamburger', 'menu', '.navbar');