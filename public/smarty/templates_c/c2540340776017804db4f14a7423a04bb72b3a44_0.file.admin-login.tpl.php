<?php
/* Smarty version 4.3.4, created on 2023-10-20 20:27:48
  from '/opt/lampp/htdocs/public/templates/admin-login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6532c6a40ca107_34636639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2540340776017804db4f14a7423a04bb72b3a44' => 
    array (
      0 => '/opt/lampp/htdocs/public/templates/admin-login.tpl',
      1 => 1697826434,
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
function content_6532c6a40ca107_34636639 (Smarty_Internal_Template $_smarty_tpl) {
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
            <?php if (($_smarty_tpl->tpl_vars['message']->value)) {?>
                <div class="alert alert-dark" role="alert">
                    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                </div>
            <?php }?>
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


<?php $_smarty_tpl->_subTemplateRender("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
