document.addEventListener('DOMContentLoaded', function () {
    // Get references to menu sections
    const featuredMenuList = document.getElementById('featured-menu-list');
    const hotMenuList = document.getElementById('hot-menu-list');
    const coldMenuList = document.getElementById('cold-menu-list');
    const frappeMenuList = document.getElementById('frappe-menu-list');
    const mocktailsMenuList = document.getElementById('mocktails-menu-list');
    const dessertMenuList = document.getElementById('dessert-menu-list');


    // Add event listeners to menu items
    document.getElementById('hot').addEventListener('click', function () {
        // Show hot menu, hide others
        featuredMenuList.style.display = 'none';
        hotMenuList.style.display = 'block';
        coldMenuList.style.display = 'none';
        frappeMenuList.style.display = 'none';
        mocktailsMenuList.style.display = 'none';
        dessertMenuList.style.display = 'none';
    });

    document.getElementById('cold').addEventListener('click', function () {
        // Show cold menu, hide others
        featuredMenuList.style.display = 'none';
        hotMenuList.style.display = 'none';
        coldMenuList.style.display = 'block';
        frappeMenuList.style.display = 'none';
        mocktailsMenuList.style.display = 'none';
        dessertMenuList.style.display = 'none';
    });

    document.getElementById('frappe').addEventListener('click', function () {
        // Show cold menu, hide others
        featuredMenuList.style.display = 'none';
        hotMenuList.style.display = 'none';
        coldMenuList.style.display = 'none';
        frappeMenuList.style.display = 'block';
        mocktailsMenuList.style.display = 'none';
        dessertMenuList.style.display = 'none';
    });

    document.getElementById('mocktails').addEventListener('click', function () {
        // Show cold menu, hide others
        featuredMenuList.style.display = 'none';
        hotMenuList.style.display = 'none';
        coldMenuList.style.display = 'none';
        frappeMenuList.style.display = 'none';
        mocktailsMenuList.style.display = 'block';
        dessertMenuList.style.display = 'none';
    });

    document.getElementById('dessert').addEventListener('click', function () {
        // Show cold menu, hide others
        featuredMenuList.style.display = 'none';
        hotMenuList.style.display = 'none';
        coldMenuList.style.display = 'none';
        frappeMenuList.style.display = 'none';
        mocktailsMenuList.style.display = 'none';
        dessertMenuList.style.display = 'block';
    });
});