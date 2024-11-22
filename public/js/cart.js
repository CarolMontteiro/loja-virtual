
function isEmptyCart() {
    let viewEmptyCart = JSON.parse(localStorage.getItem("cart")) || [];

    return viewEmptyCart.length === 0;
}
function addToCart(item) {

    if (isEmptyCart()) {
        localStorage.setItem("cart", JSON.stringify([item]));
        console.log("Carrinho atualizado: ", JSON.parse(localStorage.getItem("cart")));
        return;
    }

    let cart = JSON.parse(localStorage.getItem("cart"));
    // console.log("carrinho atual", cart)

    const itemIndex = cart.findIndex(cartItem => cartItem.id === item.id);

    if(itemIndex !== -1) {
        cart[itemIndex].quantity += 1;
        console.log("quantidade atualizada", cart[itemIndex]);
    }else {
        cart.push(item);
        console.log("Novo item adicionado:", item)
    }
    localStorage.setItem("cart", JSON.stringify(cart));
}


















// //  PÁGINA INDEX ---> INTERAÇÃO COM OS ÍCONE DE CARRINHO NO MENU
//
// document.addEventListener("DOMContentLoaded", function (){
//     const addToCartButtons = document.querySelectorAll(".add-to-cart-btn");
//     const cartIcon = document.getElementById("cart-icon");
//
//     addToCartButtons.forEach(button => {
//         button.addEventListener("click", function() {
//             // Rolando a página para o topo
//             window.scrollTo({
//                 top: 0,
//                 behavior: "smooth"
//             });
//
//             // Atualizando o valor do ícone do carrinho
//             let currentCartValueMenu = parseInt(cartIcon.textContent);
//             let newCartValueMenu = currentCartValueMenu + 1;
//             cartIcon.textContent = newCartValueMenu;
//         });
//     });
// });
//
// //  PÁGINA DE CARRINHO --->
//
// // Manipulando a adição e remoção de valores no input, como o evento de clique
// // para os botões de incremento ("+") e decremento ("-").
//
// const boxProductCart = document.querySelectorAll('.product-cart');
// boxProductCart.forEach(cardProductCart => {
//     const removeItemProductCart = cardProductCart.querySelector('.remove-item');
//     const addItemProductCart = cardProductCart.querySelector('.add-item');
//     const inputFieldItemProductCart = cardProductCart.querySelector('.product-quantity-input');
//
//     removeItemProductCart.addEventListener('click', () => {
//         let currentValueRemoveItemCart = parseInt(inputFieldItemProductCart.value, 10);
//         if (currentValueRemoveItemCart > 0) {
//             inputFieldItemProductCart.value = currentValueRemoveItemCart - 1;
//         }
//     });
//
//     addItemProductCart.addEventListener('click', () => {
//         let currentValueAddItemCart = parseInt(inputFieldItemProductCart.value, 10);
//         inputFieldItemProductCart.value = currentValueAddItemCart + 1;
//
//         const carrinhoDeCompras = [];
//
//     });
// })
//
// // Remover produto do carrinho
// const removeProductButton = document.getElementsByClassName("remove-product-button");
// for (let i = 0; i < removeProductButton.length; i++) {
//     removeProductButton[i].addEventListener("click", function (event) {
//         event.target.parentElement.parentElement.remove()
//     })
// }
//
//
//

// Função para atualizar o preço total do carrinho
// function updateTotal() {
//
//     let totalAmount = 0;
//     for (let i = 0; i < boxProductCart.length; i++) {
//         const productPrice = boxProductCart[i].getElementsByClassName("cart-product-price")[0].innerText.replace("R$", "").replace(",", ".");
//         const productQuantityCart = boxProductCart[i].getElementsByClassName("product-quantity-input")[0].value;
//
//         totalAmount += productPrice * productQuantityCart;
//     }
//     totalAmount = totalAmount.toFixed(2);
//     totalAmount = totalAmount.replace(".",",");
//     document.querySelector(".subtotal-item-cart span").innerText = "R$" + totalAmount
// }


