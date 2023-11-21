// Html elements (collection)
const productsFlavors = document.querySelectorAll("button.product-flavor");
const productsPrices = document.querySelectorAll(".product-price");

// Define the first element of the collections to selected (class)
productsFlavors[0].classList.add('selected');
productsPrices[0].classList.add('selected');

// Transform the values of product prices (float numbers -> currency values)
productsPrices.forEach(productPrice => {
    const numberPrice = Number(productPrice.innerHTML);
    const brlPrice = numberPrice.toLocaleString('pt-br', {style: 'currency', currency: 'BRL'});
    productPrice.innerHTML = brlPrice;
});

productsFlavors.forEach(productFlavor => {
    // Add click event listeners in all product flavors:
    productFlavor.addEventListener('click', () => {
        clearClassSelectedInFlavorsAndPrices();
        // Add class selected in the product flavor clicked
        productFlavor.classList.add('selected');
        // Get the attribute "for" in the product flavor (label element) and attribute this to product price id
        const flavorData = productFlavor.getAttribute('data-flavor');
        // Search the product price element with your id
        const productPrice = document.querySelector(`.product-price[data-price="${flavorData}"]`);
        // Add class selected in the product price search
        productPrice.classList.add('selected');
    })
});

// Clear the class selected in all collections (flavors and prices)
function clearClassSelectedInFlavorsAndPrices() {
    productsFlavors.forEach(productFlavor => {
        removeClassSelected(productFlavor);
    })
    productsPrices.forEach(productPrice => {
        removeClassSelected(productPrice);
    })
}
// Remove the class selected in one element
function removeClassSelected(element) {
    if (element.classList.contains('selected')) element.classList.remove('selected');
}

// Click in "see more details" (html element event)
function seeMoreDetails() {
    // Turn visible information (more details) and rotate the arrow icon in the button
    const information = document.querySelector('#information');
    const arrow = document.querySelector('#arrow');
    information.classList.toggle('visible');
    arrow.classList.toggle('rotate');
}