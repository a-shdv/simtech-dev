<?php
/* Smarty version 4.3.4, created on 2023-10-20 19:44:02
  from '/Applications/MAMP/htdocs/public/templates/partials/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6532d88237ee34_24592955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd862c9585e90e8623710665d40067eb02efbfbb5' => 
    array (
      0 => '/Applications/MAMP/htdocs/public/templates/partials/pagination.tpl',
      1 => 1697830815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6532d88237ee34_24592955 (Smarty_Internal_Template $_smarty_tpl) {
?><nav>
    <ul class="pagination mt-5">
                <li class="page-item">
            <a class="page-link" href="get-messages.php?page=<?php $_smarty_tpl->_assignInScope('currentPage', $_smarty_tpl->tpl_vars['currentPage']->value-1);?>" >
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>

                <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['page']->value = 0;
if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['pagesTotal']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['pagesTotal']->value; $_smarty_tpl->tpl_vars['page']->value++) {
?>
            <?php $_smarty_tpl->_assignInScope('currentPage', $_smarty_tpl->tpl_vars['page']->value);?>
            <li class="page-item"><a class="page-link" href="get-messages.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
</a></li>
        <?php }
}
?>

                <li class="page-item">
            <a class="page-link" href="get-messages.php?page=<?php echo $_smarty_tpl->tpl_vars['currentPage']->value++;?>
">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>

    </ul>
</nav><?php }
}
