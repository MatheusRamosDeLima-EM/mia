const productsFlavors = document.querySelectorAll("label.product-flavor");
const productsPrices = document.querySelectorAll(".product-price");

productsFlavors[0].classList.add('selected');
productsPrices[0].classList.add('selected');

productsFlavors.forEach(productFlavor => {
    productFlavor.addEventListener('click', () => {
        clearSelected();
        productFlavor.classList.toggle('selected');
        if (productFlavor.classList.contains('selected')) {
            const productPriceId = productFlavor.getAttribute('for');
            const productPrice = document.querySelector(`#${productPriceId}`);
            productPrice.classList.toggle('selected');
        }
    })
});

function clearSelected() {
    productsFlavors.forEach(productFlavor => {
        if (productFlavor.classList.contains('selected')) productFlavor.classList.remove('selected');
    })
    productsPrices.forEach(productPrice => {
        if (productPrice.classList.contains('selected')) productPrice.classList.remove('selected');
    })
}