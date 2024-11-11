document.addEventListener("DOMContentLoaded", function() {
    const addToFavoritesButtons = document.querySelectorAll(".add-to-favorites-btn");
    const favoritesIcon = document.getElementById("favorites-icon");

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
