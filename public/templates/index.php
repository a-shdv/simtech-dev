<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>Главная</title>
</head>
<body>
<!-- Навигационное меню-->
<?php require_once 'partials/header.html'; ?>

<!-- Главная форма -->
<main>
    <!--- input с типами - checkbox -->
    <form class="my-form" action="" method="post">
        <!-- Элетронная почта -->
        <label id="my-email-label" for="my-email">Электронная почта</label>
        <input id="my-email" type="email" required>

        <!-- Имя -->
        <label id="my-name-label" for="my-name">Имя</label>
        <input id="my-name" type="text" required>

        <!-- Номер телефона -->
        <label id="my-tel-label" for="my-tel">Номер телефона</label>
        <input id="my-tel" type="tel" required>

        <!-- Пол -->
        <label id="gender-label" for="gender">Пол</label>
        <div id="gender" class="gender">
            <!-- "Мужской" -->
            <label for="my-radio-0">М</label>
            <input id="my-radio-0" name="my-radio" type="radio" checked>

            <!-- "Женский" -->
            <label for="my-radio-1">Ж</label>
            <input id="my-radio-1" name="my-radio" type="radio">
        </div>

        <!-- Город -->
        <label id="my-city-label" for="my-city">Город</label>
        <select id="my-city" required>
            <option disabled>Выберите город</option>
            <option value="Москва">Москва</option>
            <option value="Санкт-Петербург">Санкт-Петербург</option>
            <option value="Екатеринбург">Екатеринбург</option>
            <option value="Новосибирск">Новосибирск</option>
            <option value="Казань">Казань</option>
            <option value="Нижний Новгород">Нижний Новгород</option>
            <option value="Ульяновск" selected>Ульяновск</option>
            <option value="Астрахань">Астрахань</option>
            <option value="Уфа">Уфа</option>
        </select>

        <!-- Проблема -->
        <label id="my-problem-label" for="my-problem">Опишите вашу проблему</label>
        <textarea id="my-problem" cols="30" rows="10" required></textarea>

        <!-- Загрузка файла -->
        <input id="my-file" type="file" accept="image/png, image/jpeg, image/jpg, image/svg">

        <!-- Способ связи -->
        <fieldset>
            <legend>Как с вами можно связаться?</legend>

            <!-- Электронная почта -->
            <div>
                <label for="contact-email">Электронная почта</label>
                <input type="checkbox" id="contact-email" name="contact-email" checked disabled/>
            </div>

            <!-- Социальные сети -->
            <div>
                <label for="contact-social-webs">Социальные сети</label>
                <input type="checkbox" id="contact-social-webs" name="contact-social-webs"/>
            </div>

            <!-- Номер телефона -->
            <div>
                <label for="contact-tel">Номер телефона</label>
                <input type="checkbox" id="contact-tel" name="contact-tel"/>
            </div>

        </fieldset>

        <!-- Кнопки "Отправить", "Сбросить" -->
        <button id="my-submit" type="submit">Отправить</button>
        <input id="my-reset" type="reset" value="Сбросить">

    </form>
</main>

<!-- Подвал -->
<?php require_once 'partials/footer.html'; ?>

<script src="../js/check-active-link.js"></script>
</body>
</html>