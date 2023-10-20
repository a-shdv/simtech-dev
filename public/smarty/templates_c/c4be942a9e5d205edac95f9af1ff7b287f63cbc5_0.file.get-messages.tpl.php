<?php
/* Smarty version 4.3.4, created on 2023-10-20 22:06:12
  from '/Applications/MAMP/htdocs/public/templates/get-messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6532f9d463f2c2_35661052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4be942a9e5d205edac95f9af1ff7b287f63cbc5' => 
    array (
      0 => '/Applications/MAMP/htdocs/public/templates/get-messages.tpl',
      1 => 1697839572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/head.tpl' => 1,
    'file:partials/header.tpl' => 1,
    'file:partials/pagination.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
),false)) {
function content_6532f9d463f2c2_35661052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/MAMP/htdocs/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!doctype html>
<html lang="ru">
<?php $_smarty_tpl->_subTemplateRender("file:partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Сообщения'), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
    <div class="container-fluid">
        <div class="text-center mt-5"><b>email: <?php echo $_smarty_tpl->tpl_vars['admin_email']->value;?>
</b></div>

        <div class="row justify-content-center">
            <table class="table mt-5 ml-5" style="width: 75%">
                <thead class="thead">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Email</th>
                    <th scope="col">Номер телефона</th>
                    <th scope="col">Пол</th>
                    <th scope="col">Город</th>
                    <th scope="col">Описание проблемы</th>
                    <th scope="col">Изображение</th>
                </tr>
                </thead>

                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                    <tr>
                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['username'];?>
</td>
                        <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['email'],20);?>
</td>
                        <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['phone_number'],15);?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['gender'];?>
</td>
                        <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['city'],20);?>
</td>
                        <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['problem_desc'],20);?>
</td>
                        <td>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['filename'];?>
" alt="Could not load image"
                                 style="max-width: 50px; max-height: = 50px;">
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
                <div class="row justify-content-center">
            <?php $_smarty_tpl->_subTemplateRender("file:partials/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- JS-Скрипты -->
<?php echo '<script'; ?>
 src="js/validate-active-link.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/validate-current-page.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
