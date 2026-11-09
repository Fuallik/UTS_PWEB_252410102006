// Dark Mode
const btnDarkMode = document.getElementById("btn-darkmode");
const iconTheme = document.getElementById("icon-theme");

if (localStorage.getItem("tema") === "gelap") {
    document.body.classList.add("dark-mode");
    iconTheme.src = "/asset/light.png";
}

btnDarkMode.addEventListener("click", function (event) {
    event.preventDefault();
    document.body.classList.toggle("dark-mode");

    if (document.body.classList.contains("dark-mode")) {
        iconTheme.src = "/asset/light.png";
        localStorage.setItem("tema", "gelap");
    } else {
        iconTheme.src = "/asset/night.png";
        localStorage.setItem("tema", "terang");
    }
});

// Navbar Responsive
const hamburgerMenu = document.getElementById("hamburger-menu");
const navList = document.getElementById("nav-list");

if (hamburgerMenu) {
    hamburgerMenu.addEventListener("click", function () {
        navList.classList.toggle("aktif");
    });
}
