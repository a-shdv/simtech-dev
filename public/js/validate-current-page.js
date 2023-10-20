$(document).ready(() => {
    const url = window.location.href;
    const queryString = new URL(url).search;
    const searchParams = new URLSearchParams(queryString);
    const pageUrlValue = searchParams.get('page');

    if (pageUrlValue !== null) {
        const pagesLinks = $('html body div.container-fluid div.row.justify-content-center nav ul.pagination.mt-5 li.page-item a.page-link');

        pagesLinks.each(function () {
            currentPage = Number(pageUrlValue) + 1
            if ($(this).text() === String(currentPage)) {
                $(this).parent().addClass('active');
            }
        });
    }
    else {
        const defaultActivePage = $('html body div.container-fluid div.row.justify-content-center nav ul.pagination.mt-5 li.page-item a.page-link:eq(1)');
        defaultActivePage.parent().addClass('active');
    }
});
