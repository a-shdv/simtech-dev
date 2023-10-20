<?php
/* Smarty version 4.3.4, created on 2023-10-20 19:40:19
  from '/Applications/MAMP/htdocs/public/templates/about-us.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6532d7a3c4c6e0_58888832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d18c8980e65c2ae1515cb5798342c161475dada' => 
    array (
      0 => '/Applications/MAMP/htdocs/public/templates/about-us.tpl',
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
function content_6532d7a3c4c6e0_58888832 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="ru">
<?php $_smarty_tpl->_subTemplateRender("file:partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Административная панель'), 0, false);
?>
<body>
<?php $_smarty_tpl->_subTemplateRender("file:partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Карточки -->
<main>
    <div class="mt-5 mb-5 ml-5" style="width: 50%">
        <p class="text-justify" style="font-weight: bold">Поставщик комплексных eCommerce-решений на CS-Cart</p>
        <p class="text-justify">Создаём и дорабатываем высоконагруженные интернет-магазины и маркетплейсы для
            торговых,
            финансовых и производственных компаний</p>
        <p class="text-justify">Если тебе интересно реализовывать WOW-проекты, прокачивать навыки, и ты готов
            заявить о
            себе, присоединяйся к нашей команде!</p>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-left ml-3">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">О Simtech Development</h5>
                        <p class="card-text">С 2005 года мы реализовали порядка 5000+ проектов по созданию и
                            доработке высоконагруженных интернет-магазинов и маркетплейсов. Среди клиентов как
                            крупные федеральные компании, так и стартапы с уже сформированной продуктовой концепцией
                            (SMB).</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">По всему миру</h5>
                        <p class="card-text">Наши клиенты — это крупнейший онлайн-супермаркет Великобритании, cамый
                            большой магазин электроники в Грузии, ведущий производитель насосного оборудования,
                            магазин мебели — ВоБаза и проекты лидеров российского рынка (под NDA).</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Достигаем результатов</h5>
                        <p class="card-text">У нас лучшая экспертиза в CS-Cart на рынке. Работаем только с
                            собственными ресурсами. За последний год мы реализовали 750 проектов, начали работать с
                            280 новыми клиентами, увеличили продажи на 51%, штат сотрудников — на 30%.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $_smarty_tpl->_subTemplateRender("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- JS-Скрипты -->
<?php echo '<script'; ?>
 src="js/validate-active-link.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
