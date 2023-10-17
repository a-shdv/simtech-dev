<nav>
    <ul class="pagination mt-5">
        {* Стрелочка на предыдущую страницу *}
        <li class="page-item">
            <a class="page-link" href="get-messages.php?page={$currentPage--}" >
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>

        {* Перебор всех страниц *}
        {for $page=1; $page <= $pagesTotal; $page++}
            {$currentPage = $page}
            <li class="page-item"><a class="page-link" href="get-messages.php?page={$page}">{$page}</a></li>
        {/for}

        {* Стрелочка на следующую страницу *}
        <li class="page-item">
            <a class="page-link" href="get-messages.php?page={$currentPage++}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>

    </ul>
</nav>