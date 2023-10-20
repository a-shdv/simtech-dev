<!doctype html>
<html lang="en">
{include file="partials/head.tpl" title='Панель администратора'}
<body>
{* Шапка *}
{include file="partials/header.tpl"}

<main>
    <h5 class="mt-5 mb-5 text-center">Панель администратора</h5>
    <div class="container-fluid" style="width: 75%">
        <form action="../app/admin_register.php" method="post" onsubmit="return validatePassword()">

            <!-- Электронная почта -->
            <div class="form-row justify-content-center">
                <div class="col-md-5 mb-3">
                    <label for="my-email">Электронная почта</label>
                    <input type="email" class="form-control" id="my-email" name="email" placeholder="admin@gmail.com"
                           required>
                </div>
            </div>

            <!-- Пароль -->
            <div class="form-row justify-content-center">
                <div class="col-md-5 mb-3">
                    <label for="my-password">Пароль</label>
                    <input type="password" class="form-control" id="my-password" name="password" placeholder="12345678"
                           required>
                </div>
            </div>

            <!-- Подтвердите пароль -->
            <div class="form-row justify-content-center">
                <div class="col-md-5 mb-3">
                    <label for="my-password-confirm">Подтвердите пароль</label>
                    <input type="password" class="form-control" id="my-password-confirm" name="password" placeholder="12345678"
                           required>
                </div>
            </div>

            <!-- Кнопка "Зарегистрироваться" -->
            <div class="form-row justify-content-center mt-5">
                <a class="btn btn-md btn-dark mr-3" href="javascript:history.back()">Назад</a>

                <button class="btn btn-md btn-danger mr-3" type="submit">Зарегистрироваться</button>
            </div>

        </form>
    </div>
</main>


{* Футер *}
{include file="partials/footer.tpl"}
<script src="js/validate-password.js"></script>
</body>
</html>