<!doctype html>
<html lang="ru">
{include file="partials/head.tpl" title='Сообщения'}
<body>
{* Шапка *}
{include file="partials/header.tpl"}

<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <table class="table mt-5 ml-5" style="width: 75%">
                <thead class="thead">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Email</th>
                    <th scope="col">Номер телефона</th>
                    <th scope="col">Пол</th>
                    <th scope="col">Город</th>
                    <th scope="col">Описание проблемы</th>
                    <th scope="col">Изображение</th>
                </tr>
                </thead>

                <tbody>
                {foreach item=row from=$table}
                    <tr>
                        <th scope="row">{$row.id}</th>
                        <td>{$row.username}</td>
                        <td>{$row.email|truncate:20}</td>
                        <td>{$row.phone_number|truncate:15}</td>
                        <td>{$row.gender}</td>
                        <td>{$row.city|truncate: 20}</td>
                        <td>{$row.problem_desc|truncate: 20}</td>
                        <td>
                            <img src="{$row.filename}" alt="Could not load image"
                                 style="max-width: 50px; max-height: = 50px;">
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
        {* Пагинация *}
        <div class="row justify-content-center">
            {include file="partials/pagination.tpl"}
        </div>
    </div>
</main>

{* Футер *}
{include file="partials/footer.tpl"}

<!-- JS-Скрипты -->
<script src="js/validate-active-link.js"></script>
<script src="js/validate-current-page.js"></script>
</body>
</html>