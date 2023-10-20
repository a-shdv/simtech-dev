<?php
/* Smarty version 4.3.4, created on 2023-10-20 19:43:55
  from '/Applications/MAMP/htdocs/public/templates/admin-register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6532d87bd1c6c4_60803037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '686c3679d9bca246eca7689b0b3badfcf6228cc8' => 
    array (
      0 => '/Applications/MAMP/htdocs/public/templates/admin-register.tpl',
      1 => 1697830815,
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
function content_6532d87bd1c6c4_60803037 (Smarty_Internal_Template $_smarty_tpl) {
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
        <form action="../../app/admin_register.php" method="post" onsubmit="return validatePassword()">

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


<?php $_smarty_tpl->_subTemplateRender("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="js/validate-password.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
