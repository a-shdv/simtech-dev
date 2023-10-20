<!doctype html>
<html lang="en">
{include file="partials/head.tpl" title='Панель администратора'}
<body>
{* Шапка *}
{include file="partials/header.tpl"}

<main>
    <h5 class="mt-5 mb-5 text-center">Панель администратора</h5>
    <div class="container-fluid" style="width: 75%">

        <!-- Сообщение об успешной регистрации -->
        <div class="row justify-content-center">
            {if ($message)}
                <div class="alert alert-dark" role="alert">
                    {$message}
                </div>
            {/if}
        </div>


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

            <div class="form-row justify-content-center">
                <div class="col-md-5 mt-2 mb-3 text-right">
                    <a href="admin-register.php">Нет аккаунта?</a>
                </div>
            </div>

            <!-- Кнопка "Войти" -->
            <div class="form-row justify-content-center mt-3">
                <button class="btn btn-md btn-danger mr-3" type="submit">Войти</button>
            </div>

        </form>
    </div>
</main>


{* Футер *}
{include file="partials/footer.tpl"}
</body>
</html>