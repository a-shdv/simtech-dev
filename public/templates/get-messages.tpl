<!doctype html>
<html lang="ru">
{include file="partials/head.tpl" title='Сообщения'}
<body>
{* Шапка *}
{include file="partials/header.tpl"}

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
                    <th scope="row">{$id}</th>
                    <td>{$row.id}</td>
                    <td>{$row.email}</td>
                    <td>{$row.phone_number}</td>
                    <td>{$row.gender}</td>
                    <td>{$row.city}</td>
                    <td>{$row.problem_desc}</td>
                    <td>
                        <img src="{$row.filename}" alt="Could not load image"
                             style="max-width: 250px; max-height: = 250px;">
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

{* Футер *}
{include file="partials/footer.tpl"}

<!-- JS-Скрипты -->
<script src="js/validate-active-link.js"></script>
</body>
</html>