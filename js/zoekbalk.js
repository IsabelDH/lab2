document.addEventListener("DOMContentLoaded", function() {
    const searchIcon = document.getElementById("searchIcon");
    const searchBar = document.getElementById("searchBar");
    const closeSearch = document.getElementById("closeSearch");
    const input = document.querySelector("#searchBar input");

    // Toon de zoekbalk wanneer op het vergrootglaspictogram wordt geklikt
    searchIcon.addEventListener("click", function() {
        searchBar.style.display = "flex";
        searchIcon.style.display = "none";
        input.style.border = "none !important";
        input.style.borderColor = "#93ACC2";
        input.style.color = "#F6F6F6";
  
    });

    // Verberg de zoekbalk wanneer op de sluitknop (X) wordt geklikt
    closeSearch.addEventListener("click", function() {
        searchBar.style.display = "none";
        searchIcon.style.display = "inline";
    });
});
