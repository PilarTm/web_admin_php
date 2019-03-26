<?php
/* Smarty version 3.1.33, created on 2019-03-06 03:27:45
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/converters/converter.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7ef7e1e015c4_18625673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55a2ebaab64141606720e181e90a18e4e0b35d01' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/converters/converter.html',
      1 => 1551824733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/helpers/head.html' => 1,
    'file:admin/helpers/logo.html' => 1,
    'file:admin/helpers/nav.html' => 1,
    'file:admin/e_counters/helpers/modal_edit.html' => 1,
    'file:admin/e_counters/helpers/modal_delete.html' => 1,
    'file:admin/e_counters/helpers/list.html' => 1,
    'file:admin/converters/helpers/info.html' => 1,
    'file:admin/helpers/footer.html' => 1,
  ),
),false)) {
function content_5c7ef7e1e015c4_18625673 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php $_smarty_tpl->_subTemplateRender("file:admin/helpers/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php $_smarty_tpl->_subTemplateRender("file:admin/helpers/logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:admin/helpers/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
>

        var id = <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
;

    <?php echo '</script'; ?>
>


    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="header-title">
                        <h3 class="m-b-xs"> Конвертер: <span id="converter_title"><?php echo $_smarty_tpl->tpl_vars['converter']->value->get_title();?>
</span></h3>
                    </div>
                    <hr>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-filled">
                        <div class="panel-body" id="converter_info"></div>
                    </div>
                </div>
            </div>


        <div class="row">

            <div class="col-lg-12 col-xs-12">
                <div class="panel panel-filled">

                    <div class="panel-body" id="e_counters_list"></div>

                </div>
            </div>
        </div>
    </section>
</div>


<?php echo '<script'; ?>
 type="text/template" id="modal_edit_tpl">
    <?php $_smarty_tpl->_subTemplateRender("file:admin/e_counters/helpers/modal_edit.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_converter'=>true), 0, false);
echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="modal_delete_tpl">
    <?php $_smarty_tpl->_subTemplateRender("file:admin/e_counters/helpers/modal_delete.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/template" id="e_counters_list_tpl">
    <?php $_smarty_tpl->_subTemplateRender("file:admin/e_counters/helpers/list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_converter'=>true), 0, false);
echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/template" id="converter_info_tpl">
    <?php $_smarty_tpl->_subTemplateRender("file:admin/converters/helpers/info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="/ladmin/scripts/models/mark_converters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/models/model_converters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/models/mark_e_counters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/models/model_e_counters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/models/e_counters.js"><?php echo '</script'; ?>
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
 src="/ladmin/scripts/collections/mark_e_counters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/model_e_counters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/e_counters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/converters.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="/ladmin/scripts/views/converters/model_edit.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/converters/helpers/title.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/converters/helpers/e_counters_list.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/e_counters/model_edit.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/e_counters/model_delete.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/converters/helpers/info.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/converters/converter.js"><?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:admin/helpers/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
