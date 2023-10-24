<h4>Задание</h4>
1. Необходимо создать форму со всеми возможными элементами:
    - input с типами - email, text, checkbox, file, radio, reset
    - textarea
    - select
    - button

2. Добавить проверку обязательных полей формы.

3. Подготовить таблицу и сохранить результаты отправки формы в базу данных.

4. Создать страницу со списком результатов.

5. Дополнительный функционал:
- форма должны быть создана используя bootstrap 4
- необходимо отправлять результаты на электронную почту администратораАдминистратив
- добавить функционал постраничной навигации для списка с результатами

6. После выполнения задания необходимо отправить архив с бэкапом базы данных и всех файлов приложения, а также добавить файл с инструкцией по установке и использованию приложения.
<h4>Стек технологий</h4>

Проект:
<ul>
    <li>PHP: 7.4</li>
    <li>Smarty: 4.3</li>
    <li>MariaDB: 10.4.28 </li>
    <li>Apache2: 2.4.56 (Unix)</li>
    <li>Composer: 2.2.6</li>
    <li>PhpStorm: 2023.2.3</li>
</ul>
Окружение:
<ul>
    <li>Linux Ubuntu: 22.04.1</li>
    <li>XAMPP: 8.0.28-0</li>
</ul>
<h4>Структура проекта</h4>
<ul>
    <li>
        <b>app/</b> - php-скрипты, отвечающие за бизнес-логику приложения
        <ul>
            <li><b>conf/</b> - конфигурационные файлы (например, для БД)</li>
            <li><b>helpers/</b> - классы-помощники, необходимые для вспомогательной функциональности (настройка соединения с БД, загрузка файлов и переменных окружения)</li>
            <li><b>repos/</b> - классы, необходимые для работы с хранилищем  данных</li>
        </ul>
    </li>
</li>
</ul>
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/be70e68d-689d-4ffc-b3f8-ffcb291a4f6a)" width="200px" height="350px">

<ul>
    <li>
        <b>public</b> - точка входа в приложение
        <ul>
            <li><b>css/</b> - подключаемые стили для приложения</li>
            <li><b>img/</b> - папка для загрузки изображений</li>
            <li><b>js/</b> - javascript-файлы</li>
            <li><b>smarty/</b> - smarty файлы и папки шаблонизатора</li>
            <li><b>templates</b> - html-шаблоны приложения</li>
        </ul>
    </li>
</li>
</ul>
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/f45359bd-9cee-4247-9bb4-87f6ad1f3abd](https://github.com/a-shdv/simtech-dev-app/assets/54847558/68262f28-4ed6-4b29-a6f3-2b19de21e7f0)" width="200px" height="250px">

<ul>
    <li><b>vendor/</b> - папка со всеми зависимостями</li>
    <li><b>.env</b> - файл с переменными окружениями</li>
    <li><b>.gitignore</b> - файл, исключающий некоторые файлы для git </li>
    <li><b>composer.json</b> - файл с перечнем зависимостей, загружающихся composer</li>
    <li><b>requirements.sh</b> - bash-скрипт, создающий необходимые папки для работы приложения (скомпилированные шаблоны smarty, папка для загрузки изображений)</li>
    <li><b>simtech_dev_app.sql(ранее sql-scripts.sql)</b> - дамп базы данных</li>
</li>
</ul>
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/68262f28-4ed6-4b29-a6f3-2b19de21e7f0" width="200px" height="250px">

<h4>Инструкция по запуску приложения</h4>
<ol>
    <li>Создать базу данных через запрос <i>create database simtech_dev_app;</i> и восстановить базу данных из файла simtech_dev_app.sql (можно сделать через phpmyadmin)</li>
    <li>Находясь в корневой директории проекта, выполнить команду: <i>bash requirements.sh</i> (без sudo) <br><img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/b63366f0-ee06-4557-8344-e9c3b12e9ef7"></li>
    <li>Заполнить файл .env, например, так: <br><img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/a3542094-816e-44ef-8d0e-58500eb2cc50"></li>
</ol>
<h4>Скриншоты работы приложения</h4>
<h5>Главная страница</h5>
Главная страница с формой отправки сообщения. Если пользователь не заполнит необходимые поля, то будет выдано уведомление.
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/94331512-31ae-40fa-bc9c-ce5d2cf00100">
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/f2a467d1-0251-4f65-ac2d-d4259dc62ed5">

<h5>Отправка сообщения</h5>
По умолчанию сообщения отправляются на почту, указанную в файле .env. В случае успешной отправки письма, будет выдано соответствующее уведомление.
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/03f9bbce-e147-469a-90d3-76085bbba4bf">
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/5e0a0c4e-a998-4864-8150-f8b0cc0faea4">
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/8b01756b-2ae2-4eab-ac61-263cd0573bcb">

<h5>Страница о нас</h5>
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/85301054-a349-4d79-9a7c-54eefe61be6a">

<h5>Авторизация и регистрация</h5>
Страницы с авторизацией и регистрацией для администратора приложения. На поля формы регистрации действуют условия валидации: пароль должен быть > 5 символов, и пароли должны совпадать.
А если пользователь введет неверные данные на форме авторизации, то будет выдано соответствующее уведомление. 
<h6>Авторизация</h6>
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/e56cfc17-f806-4872-a84f-53983b332cf7">
<h6>Валидация полей</h6>
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/f08b4379-8928-4f35-b047-fce4bb6522f1">
<h6>Регистрация</h6>
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/5f201d9d-cecb-4b77-a93b-55acd3e9fcbf">
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/3ca3a4f9-e102-4cb7-87ec-915200c0c41d">
<h6>Валидация полей</h6>
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/8ef84366-a6a9-4314-9c78-9eceee9f44bb">
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/746a9e21-2e7d-4caf-b596-e6673b2476cf">
<h5>Страница с результатами</h5>
Если администратор успешно зарегистрировался и авторизован, то ему будет отображена страница с сообщениями от пользователей, которые заполнили форму на главной странице.
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/bc4b7bba-0110-437a-b73c-ec3af0ffad99">
<h5>Сообщения</h5>
Если администратор авторизован, то ему будут приходить сообщения от пользователей, которые заполнили форму на главной странице. По умолчанию все сообщения приходят на почту, указанную в файле .env.
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/1ca53df7-e791-4cf4-85d3-27a7412cd795">
<h5>Пагинация</h5>
Для оптимизации запросов к БД был реализован механизм пагинации.
<img src="https://github.com/a-shdv/simtech-dev-app/assets/54847558/1a71df89-c474-4160-a294-983137432467">

