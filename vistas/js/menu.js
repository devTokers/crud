document.addEventListener("DOMContentLoaded", function() {
    // Obtener todos los elementos de menú
    var menuItems = document.querySelectorAll(".sidebar-menu li");

    // Recorrer cada elemento del menú
    menuItems.forEach(function(item) {
        // Agregar un evento para que se ejecute cuando se haga clic en el elemento del menú
        item.addEventListener("click", function() {
            // Eliminar la clase 'active' de todos los elementos del menú
            menuItems.forEach(function(menuItem) {
                menuItem.classList.remove("active");
            });
            // Agregar la clase 'active' solo al elemento seleccionado
            this.classList.add("active");
        });
    });

    // Mantener el menú activo después de la recarga (según URL actual)
    var currentUrl = window.location.href;
    menuItems.forEach(function(item) {
        var link = item.querySelector("a");
        if (link.href === currentUrl) {
            item.classList.add("active");
        }
    });
});
