<!doctype html>
<html lang="ru">
{include file="partials/head.tpl" title='Главная'}
<body>
{* Шапка *}
{include file="partials/header.tpl"}

<!-- Главная форма -->
<main>
    <h5 class="mt-5 mb-5 text-center">Связаться с нами</h5>
    <div class="container-fluid" style="width: 75%">
        <!-- Сообщение об успешной отправке письма -->
        {if ($mail_sent)}
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="alert alert-dark mb-5" role="alert">
                        {$mail_sent}
                    </div>
                </div>
            </div>
        {/if}

        <form action="../app/create_message.php" method="post" id="contact-form" enctype="multipart/form-data"
              onsubmit="sendEmail()">
            <div class="form-row justify-content-center">
                <!-- Имя -->
                <div class="col-md-2 mb-3">
                    <label for="my-name">Имя</label>
                    <input type="text" class="form-control" id="my-name" name="username" placeholder="Иван" required>
                </div>

                <!-- Номер телефона -->
                <div class="col-md-3 mb-3">
                    <label for="my-tel">Номер телефона</label>
                    <input type="tel" class="form-control" id="my-tel" name="phoneNumber" placeholder="+79876543210"
                           required>
                </div>
            </div>

            <!-- Электронная почта -->
            <div class="form-row justify-content-center">
                <div class="col-md-5 mb-3">
                    <label for="my-email">Электронная почта</label>
                    <input type="email" class="form-control" id="my-email" name="email" placeholder="ivanov@yandex.ru"
                           required>
                </div>
            </div>

            <!-- Пол -->
            <div class="form-row justify-content-center">
                <div class="col-md-5 mb-3">
                    <label>Пол</label> <br>
                    <!-- Мужской -->
                    <div class="form-check-inline mr-3">
                        <input class="form-check-input" type="radio" name="gender" value="Мужской"
                               id="flexRadioDefaultMale"
                               checked>
                        <label class="form-check-label" for="flexRadioDefaultMale">
                            Мужской
                        </label>
                    </div>
                    <!-- Женский -->
                    <div class="form-check-inline mr-3">
                        <input class="form-check-input" type="radio" name="gender" value="Женский"
                               id="flexRadioDefaultFemale">
                        <label class="form-check-label" for="flexRadioDefaultFemale">
                            Женский
                        </label>
                    </div>
                </div>
            </div>

            <!-- Город -->
            <div class="form-row justify-content-center mb-3">
                <div class="col-md-2">
                    <label>Город</label>
                    <label>
                        <select class="form-select" required name="city">
                            <option value="" disabled>Выберите город</option>
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
                    </label>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-1"></div>
            </div>

            <!-- Проблема -->
            <div class="form-row mb-3 justify-content-center">
                <div class="col-md-5">
                    <label for="my-problem" class="form-label">Опишите вашу проблему</label>
                    <textarea id="my-problem" class="form-control" rows="5" name="problemDesc" required></textarea>
                </div>
            </div>

            <!-- Загрузка файла -->
            <div class="form-row mb-3 justify-content-center">
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <input id="my-file" type="file" name="fileUpload" class="form-control"
                           accept="image/png, image/jpeg, image/jpg, image/svg">
                </div>
            </div>

            <!-- Способ связи -->
            <div class="mb-5">
                <!-- Электронная почта -->
                <div class="form-row justify-content-center">
                    <div class="col-md-2">
                        <label>Способ связи</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheckEmail" checked="checked"
                                   disabled>
                            <label class="form-check-label" for="defaultCheckEmail">
                                Элетронная почта
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-1"></div>
                </div>

                <!-- Социальные сети -->
                <div class="form-row justify-content-center">
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheckSocialWeb">
                            <label class="form-check-label" for="defaultCheckSocialWeb">
                                Социальные сети
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-1"></div>
                </div>

                <!-- Номер телефона -->
                <div class="form-row justify-content-center">
                    <div class="col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheckTel">
                            <label class="form-check-label" for="defaultCheckTel">
                                Номер телефона
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-1"></div>
                </div>
            </div>


            <!-- Кнопка "Отправить" -->
            <div class="form-row justify-content-center">
                <button class="btn btn-dark mr-3" type="reset">Сбросить</button>
                <button class="btn btn-danger mr-3" type="submit">Отправить</button>
            </div>

        </form>
    </div>
</main>

{* Футер *}
{include file="partials/footer.tpl"}

<!-- JS-Скрипты -->
<script src="js/validate-active-link.js"></script>
<script src="js/send-email.js"></script>
</body>
</html>