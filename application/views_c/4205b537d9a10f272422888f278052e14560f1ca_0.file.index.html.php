<?php
/* Smarty version 3.1.33, created on 2019-03-06 02:45:01
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/converters/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eeddd730506_82459012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4205b537d9a10f272422888f278052e14560f1ca' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/converters/index.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/helpers/head.html' => 1,
    'file:admin/helpers/logo.html' => 1,
    'file:admin/helpers/nav.html' => 1,
    'file:admin/converters/helpers/list.html' => 1,
    'file:admin/converters/helpers/modal_edit.html' => 1,
    'file:admin/converters/helpers/modal_delete.html' => 1,
    'file:admin/helpers/footer.html' => 1,
  ),
),false)) {
function content_5c7eeddd730506_82459012 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <h3 class="m-b-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value->line("converters.title");?>
</h3>
                </div>
                <hr>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-12 col-xs-12">
                <div class="panel panel-filled">

                    <div class="panel-body table-responsive" id="converter_list"></div>

                </div>
            </div>
        </div>
    </section>

    <?php echo '<script'; ?>
 type="text/template" id="converter_list_tpl">
        <?php $_smarty_tpl->_subTemplateRender("file:admin/converters/helpers/list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type="text/template" id="modal_edit_converter_tpl">
        <?php $_smarty_tpl->_subTemplateRender("file:admin/converters/helpers/modal_edit.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/template" id="modal_delete_tpl">
        <?php $_smarty_tpl->_subTemplateRender("file:admin/converters/helpers/modal_delete.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="/ladmin/scripts/models/mark_converters.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/ladmin/scripts/models/model_converters.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/ladmin/scripts/models/converters.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="/ladmin/scripts/collections/mark_converters.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/ladmin/scripts/collections/model_converters.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/ladmin/scripts/collections/converters.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="/ladmin/scripts/views/converters/model_edit.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/ladmin/scripts/views/converters/model_delete.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/ladmin/scripts/views/converters/index.js"><?php echo '</script'; ?>
>


    <?php $_smarty_tpl->_subTemplateRender("file:admin/helpers/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
