// Menu
const menuButton = document.querySelector('#menu-button');
const menuList = document.querySelector('#menu-list');

// Dark Background
const darkBackground = document.querySelector('#dark-background');

// Click in Menu button
menuButton.addEventListener('click', () => {
    menuList.classList.toggle('active');
    darkBackground.classList.toggle('active');
})

function leaveMenuMobile() {
    menuList.classList.remove('active');
    darkBackground.classList.remove('active');
}