
document.addEventListener("DOMContentLoaded", function (){
    const addToCartButtons = document.querySelectorAll(".add-to-cart-btn");
    const cartIcon = document.getElementById("cart-icon");

    addToCartButtons.forEach(button => {
        button.addEventListener("click", function() {
            // Rolando a página para o topo
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });

            // Atualizando o valor do ícone do carrinho
            let currentCartValue = parseInt(cartIcon.textContent);
            let newCartValue = currentCartValue + 1;
            cartIcon.textContent = newCartValue;
        });
    });
});
