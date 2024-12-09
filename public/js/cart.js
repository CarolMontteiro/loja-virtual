
// const cart = "cart";

function setItem(cart) {
    localStorage.setItem("cart", JSON.stringify(cart));
}
function isEmptyCart() {
    let viewEmptyCart = JSON.parse(localStorage.getItem("cart")) || [];

    return viewEmptyCart.length === 0;
}
function addToCart(item) {

    if (isEmptyCart()) {
        setItem([item]);
        updateIconAddToCart(1);
        return;
    }

    let cart = JSON.parse(localStorage.getItem("cart"));

    const itemIndex = cart.findIndex(cartItem => cartItem.id === item.id);

    if(itemIndex !== -1) {
        cart[itemIndex].quantity += 1;

    }else {
        cart.push(item);
        setItem(cart);
    }

    updateIconAddToCart(cart.length);
}

function removeToCart(itemId) {

    let cart = JSON.parse(localStorage.getItem("cart"));

    const itemIndex = cart.findIndex(cartItem => cartItem.id === itemId);

    if(itemIndex !== -1) {

        if (cart[itemIndex].quantity > 1) {
            cart[itemIndex].quantity -= 1;

        }else {
            cart.splice(itemIndex, 1);
            setItem(cart);
        }

        updateIconAddToCart(cart.length);
    }
}

function removeFromCart(itemId) {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    cart = cart.filter(cartItem => cartItem.id !== itemId);

    setItem(cart);
}

function updateIconAddToCart(count = 0) {
    const cartIcon = document.getElementById("cart-icon");

    if(count !== 0) {
        cartIcon.textContent = count;
    }else {
        cartIcon.textContent = "0";
    }
}

function countItemsCart() {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    let count =  cart.length;

    updateIconAddToCart(count)
}
document.addEventListener("DOMContentLoaded", (event) => {
    countItemsCart()
});


//        PÁGINA DE CARRINHO

function divAddToCart() {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];
    const contentProduct = document.getElementById("content-product");

    if (!contentProduct) {
        console.error("O contêiner não foi encontrado.");
        return;
    }

    contentProduct.innerHTML = "";

    if (cart.length === 0) {
        contentProduct.innerHTML = "<p>Seu carrinho está vazio.</p>";
        return;
    }

    cart.forEach(item => {
        // DESCRIÇÃO DO ITEM
        let divDescriptionProductInCart = document.createElement('div');
        divDescriptionProductInCart.className = "product-description";

        let divDescriptionItemInCart = document.createElement('div');
        divDescriptionItemInCart.className = "description-item-cart";

        let itemTitleInCart = document.createElement("h4");
        itemTitleInCart.className = "item-title";
        itemTitleInCart.textContent = item.name || "Produto sem título";

        divDescriptionItemInCart.appendChild(itemTitleInCart);
        divDescriptionProductInCart.appendChild(divDescriptionItemInCart);

        // QUANTIDADE
        let divQuantityProductInCart = document.createElement('div');
        divQuantityProductInCart.className = "product-quantity";

        let removeItemCartButton = document.createElement("button");
        removeItemCartButton.type = "button";
        removeItemCartButton.className = "remove-item";
        removeItemCartButton.textContent = "-";

        let quantityInputItemInCart = document.createElement("input");
        quantityInputItemInCart.type = "text";
        quantityInputItemInCart.className = "product-quantity-input";
        quantityInputItemInCart.value = item.quantity;
        quantityInputItemInCart.readOnly = true;

        let addItemCartButton = document.createElement("button");
        addItemCartButton.type = "button";
        addItemCartButton.className = "add-item";
        addItemCartButton.textContent = "+";

        divQuantityProductInCart.appendChild(removeItemCartButton);
        divQuantityProductInCart.appendChild(quantityInputItemInCart);
        divQuantityProductInCart.appendChild(addItemCartButton);

        // PREÇO
        let divPriceProductFromTheCart = document.createElement('div');
        divPriceProductFromTheCart.className = "product-price";

        const priceText = document.createElement("h5");
        priceText.textContent = `R$ ${item.value.toFixed(2).replace('.', ',')}`;
        divPriceProductFromTheCart.appendChild(priceText);

        // BOTÃO REMOVER
        let divRemoveFromCart = document.createElement('div');
        divRemoveFromCart.className = "remove-from-cart";

        const removeFromCartButton = document.createElement("button");
        removeFromCartButton.className = "remove-from-cart";
        removeFromCartButton.innerHTML = `<i class="fa-regular fa-circle-xmark"></i>`;
        divRemoveFromCart.appendChild(removeFromCartButton);

        // EVENTOS
        removeItemCartButton.addEventListener("click", () => {
            removeToCart(item.id);
        });

        addItemCartButton.addEventListener("click", () => {
            addToCart(item);
        });

        removeFromCartButton.addEventListener("click", () => {
            removeFromCart(item.id);
        });

        // DIV PRINCIPAL
        let productDiv = document.createElement('div');
        productDiv.className = "product-cart";
        productDiv.appendChild(divDescriptionProductInCart);
        productDiv.appendChild(divQuantityProductInCart);
        productDiv.appendChild(divPriceProductFromTheCart);
        productDiv.appendChild(divRemoveFromCart);

        contentProduct.appendChild(productDiv);
    });
}
divAddToCart();



















// //  PÁGINA INDEX ---> INTERAÇÃO COM OS ÍCONE DE CARRINHO NO MENU
//

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


