document.addEventListener("DOMContentLoaded", function() {
    const searchIcon = document.getElementById("searchIcon");
    const searchBar = document.getElementById("searchBar");
    const closeSearch = document.getElementById("closeSearch");
    const input = document.querySelector("#searchBar input");

    // Toon de zoekbalk wanneer op het vergrootglaspictogram wordt geklikt
    searchIcon.addEventListener("click", function() {
        searchBar.style.display = "flex"; // Toon de zoekbalk
        searchIcon.style.display = "none"; // Verberg het vergrootglaspictogram
        input.focus(); // Zet de focus op het zoekveld
    });

    // Verberg de zoekbalk wanneer op de sluitknop (X) wordt geklikt
    closeSearch.addEventListener("click", function() {
        searchBar.style.display = "none"; // Verberg de zoekbalk
        searchIcon.style.display = "inline"; // Toon het vergrootglaspictogram weer
        input.value = ""; // Wis de inhoud van het zoekveld
    });
});
