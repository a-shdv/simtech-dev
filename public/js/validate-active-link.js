$(document).ready(function() {
    const templatesDir = window.location.pathname.substring(0, window.location.pathname.lastIndexOf('/') + 1);
    const navbarLinks = $(".nav-link");

    let foundActive = false;

    navbarLinks.each(function() {
        const pathToDelete = window.location.pathname;
        const browserLink = pathToDelete.replace(templatesDir, '');

        if ($(this).attr("href") === browserLink) {
            $(this).addClass("active");
            foundActive = true;
        }

        if (!foundActive && browserLink === '') {
            $(this).addClass("active");
            foundActive = true;
        }
    });
});