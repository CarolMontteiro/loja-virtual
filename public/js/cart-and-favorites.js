

document.addEventListener("DOMContentLoaded", function() {
    const addToCartButtons = document.querySelectorAll(".add-to-cart-btn");
    const addToFavoritesButtons = document.querySelectorAll(".add-to-favorites-btn");
    const cartIcon = document.getElementById("cart-icon");
    const favoritesIcon = document.getElementById("favorites-icon");

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

    addToFavoritesButtons.forEach(button => {
        button.addEventListener("click", function() {
            // Rolando a página para o topo
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });

            // Atualizando o valor do ícone de favoritos
            let currentFavoritesValue = parseInt(favoritesIcon.textContent);
            let newFavoritesValue = currentFavoritesValue + 1;
            favoritesIcon.textContent = newFavoritesValue;
        });
    });
});
