let menuVisible = false;

// Función que oculta o muestra el menú
function mostrarOcultarMenu() {
    const nav = document.getElementById("nav");
    const hamburger = document.getElementById("hamburger-icon");

    if (menuVisible) {
        nav.classList = "";
        hamburger.classList.remove("active");
        menuVisible = false;
    } else {
        nav.classList = "responsive";
        hamburger.classList.add("active");
        menuVisible = true;
    }
}