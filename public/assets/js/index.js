// Menu list (html element)
const menuList = document.querySelector('#menu-list');

// Dark Background (html element)
const darkBackground = document.querySelector('#dark-background');

// Click in Menu button (html element event)
function menuMobileEnable() {
    toggleClassActive(menuList);
    toggleClassActive(darkBackground);
}

// Click in Dark Background (html element event)
function menuMobileDisable() {
    removeClassActive(menuList);
    removeClassActive(darkBackground);
}

// Toggle the class "active" in a html element
function toggleClassActive(element) {
    element.classList.toggle('active');
}

// Remove the class "active" in a html element
function removeClassActive(element) {
    element.classList.remove('active');
}