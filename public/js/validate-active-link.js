document.addEventListener("DOMContentLoaded", function () {
    const templatesPath = window.location.pathname.substring(0, window.location.pathname.lastIndexOf('/') + 1);
    const navbarLinks = document.querySelectorAll(".nav-link");

    navbarLinks.forEach(function (navbarLink) {
        const pathToDelete = window.location.pathname;
        const browserLink = pathToDelete.replace(templatesPath, '');

        if (navbarLink.getAttribute("href") === browserLink) {
            navbarLink.classList.add("active");
        }
    });
});