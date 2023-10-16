<!doctype html>
<html lang="en">
<head>
    <?php require_once 'partials/head.html' ?>
    <title>Главная</title>
</head>
<body>
<!-- Шапка -->
<?php require_once 'partials/header.html' ?>


<!-- Главная форма -->
<main>
    <h5 class="mt-5 mb-5 text-center">Связаться с нами</h5>
    <div class="container-fluid" style="width: 75%">
        <form>
            <div class="form-row justify-content-center">
                <!-- Имя -->
                <div class="col-md-2 mb-3">
                    <label for="my-name">Имя</label>
                    <input type="text" class="form-control" id="my-name" required>
                </div>

                <!-- Номер телефона -->
                <div class="col-md-3 mb-3">
                    <label for="my-tel">Номер телефона</label>
                    <input type="tel" class="form-control" id="my-tel" required>
                </div>
            </div>

            <!-- Электронная почта -->
            <div class="form-row justify-content-center">
                <div class="col-md-5 mb-3">
                    <label for="my-email">Электронная почта</label>
                    <input type="email" class="form-control" id="my-email" required>
                </div>
            </div>

            <!-- Пол -->
            <div class="form-row justify-content-center">
                <div class="col-md-5 mb-3">
                    <label>Пол</label> <br>
                    <!-- Мужской -->
                    <div class="form-check-inline mr-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaultMale">
                        <label class="form-check-label" for="flexRadioDefaultMale">
                            Мужской
                        </label>
                    </div>
                    <!-- Женский -->
                    <div class="form-check-inline mr-3">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefaultFemale"
                               checked>
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
                        <select class="form-select" required>
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
                    <label for="my-textarea" class="form-label">Опишите вашу проблему</label>
                    <textarea id="my-textarea" class="form-control" rows="5" required></textarea>
                </div>
            </div>


            <!-- Загрузка файла -->
            <div class="form-row mb-3 justify-content-center">
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <input type="file" class="form-control" accept="image/png, image/jpeg, image/jpg, image/svg">
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

<!-- Подвал -->
<?php require_once 'partials/footer.html' ?>

<script src="js/validate-active-link.js"></script>
</body>
</html>