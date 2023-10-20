<?php
/* Smarty version 4.3.4, created on 2023-10-20 21:00:55
  from '/Applications/MAMP/htdocs/public/templates/admin-login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6532ea87396258_35920760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c7d43541d7002ff24a6cbc41f427051c22f50bc' => 
    array (
      0 => '/Applications/MAMP/htdocs/public/templates/admin-login.tpl',
      1 => 1697835654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/head.tpl' => 1,
    'file:partials/header.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
),false)) {
function content_6532ea87396258_35920760 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<?php $_smarty_tpl->_subTemplateRender("file:partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Панель администратора'), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <h5 class="mt-5 mb-5 text-center">Панель администратора</h5>
    <div class="container-fluid" style="width: 75%">

        <!-- Сообщение об успешной регистрации -->
        <div class="row justify-content-center">
            <?php if (($_smarty_tpl->tpl_vars['registration_success']->value)) {?>
                <div class="alert alert-dark mb-5" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['registration_success']->value;?>

                </div>
            <?php }?>
        </div>

        <!-- Сообщение о неправильном логине или пароле  -->
        <?php if (($_smarty_tpl->tpl_vars['invalid_credentials']->value != '')) {?>
            <div class="row justify-content-center">
                <div class="alert alert-danger mb-5" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['invalid_credentials']->value;?>

                </div>
            </div>
        <?php }?>

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


<?php $_smarty_tpl->_subTemplateRender("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
