<?php
/* Smarty version 3.1.33, created on 2019-03-06 02:53:11
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/concentrator/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eefc7dd96c1_85154339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbd6215c84265e8329a9c27b500573bb541bc974' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/concentrator/index.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/helpers/head.html' => 1,
    'file:admin/helpers/logo.html' => 1,
    'file:admin/helpers/nav.html' => 1,
    'file:admin/concentrator/helpers/list.html' => 1,
    'file:admin/concentrator/helpers/modal_edit.html' => 1,
    'file:admin/concentrator/helpers/modal_delete.html' => 1,
    'file:admin/helpers/footer.html' => 1,
  ),
),false)) {
function content_5c7eefc7dd96c1_85154339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/helpers/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:admin/helpers/logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:admin/helpers/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Main content-->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="header-title">
                    <h3 class="m-b-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value->line("concentrators.title");?>
</h3>
                </div>
                <hr>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-12 col-xs-12">
                <div class="panel panel-filled">

                    <?php if (!count($_smarty_tpl->tpl_vars['coverters']->value)) {?>

                    <div class="panel-body">
                        <b class="text-danger">У вас нет ни одного конвертера в системе.</b><br>
                        <a href="/admin/converters/">Перейти на страницу добавления</a>
                    </div>

                    <?php } else { ?>
                    <div class="panel-body table-responsive" id="concentrator_list"></div>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php echo '<script'; ?>
 type="text/template" id="concentrator_list_tpl">
    <?php $_smarty_tpl->_subTemplateRender("file:admin/concentrator/helpers/list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/template" id="modal_edit_concentrator_tpl">
    <?php $_smarty_tpl->_subTemplateRender("file:admin/concentrator/helpers/modal_edit.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="modal_delete_concentrator_tpl">
    <?php $_smarty_tpl->_subTemplateRender("file:admin/concentrator/helpers/modal_delete.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="/ladmin/scripts/models/mark_concentrator.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/ladmin/scripts/models/model_concentrator.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/ladmin/scripts/models/concentrator.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/ladmin/scripts/models/converters.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/mark_concentrator.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/model_concentrator.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/concentrator.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/converters.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="/ladmin/scripts/views/concentrator/helpers/model_edit.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/concentrator/helpers/model_delete.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/concentrator/helpers/list.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/concentrator/index.js"><?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:admin/helpers/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
