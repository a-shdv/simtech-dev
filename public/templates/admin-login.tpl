<!doctype html>
<html lang="en">
{include file="partials/head.tpl" title='Сообщения'}
<body>
{* Шапка *}
{include file="partials/header.tpl"}

<main>
    <h5 class="mt-5 mb-5 text-center">Панель администратора</h5>
    <div class="container-fluid" style="width: 75%">
        <form action="../app/admin_login.php" method="post">

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

            <!-- Кнопка "Отправить" -->
            <div class="form-row justify-content-center">
                <button class="btn btn-danger mr-3" type="submit">Войти</button>
            </div>

        </form>
    </div>
</main>


{* Футер *}
{include file="partials/footer.tpl"}
</body>
</html>