const products = [
    { id: 1, name: "Chaussures de sport", price: 50 },
    { id: 2, name: "Bottes en cuir", price: 80 },
    // Ajoutez d'autres produits ici
];

const cart = [];

function addToCart(productId) {
    const productToAdd = products.find(product => product.id === productId);
    if (productToAdd) {
        cart.push(productToAdd);
        updateCart();
    }
}

function updateCart() {
    // Mettez à jour l'affichage du panier d'achat ici
}

// Gérez les événements de clic pour ajouter au panier
document.getElementById("products").addEventListener("click", function (event) {
    if (event.target && event.target.tagName === "BUTTON") {
        const productId = parseInt(event.target.dataset.productId);
        addToCart(productId);
    }
});

// Autres fonctions et gestion d'événements pour la commande
