<?php
/* Smarty version 3.1.33, created on 2019-03-06 02:53:15
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/concentrator/concentrator.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eefcb3263b9_81647487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '592c69533781fd5b4062b6e45fb9b018d76f236f' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/concentrator/concentrator.html',
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
    'file:admin/e_counters/helpers/list.html' => 1,
    'file:admin/e_counters/helpers/modal_edit.html' => 1,
    'file:admin/e_counters/helpers/modal_delete.html' => 1,
    'file:admin/helpers/footer.html' => 1,
  ),
),false)) {
function content_5c7eefcb3263b9_81647487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/helpers/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:admin/helpers/logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:admin/helpers/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    var id = <?php echo $_smarty_tpl->tpl_vars['concentrator']->value->id;?>

<?php echo '</script'; ?>
>

<!-- Main content-->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="header-title">
                    <h3 class="m-b-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value->line("concentrator.title");?>
</h3>
                </div>
                <hr>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-12 col-xs-12">

                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#ecounters" aria-expanded="true"> 
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->line("ecounters.title");?>

                            </a>
                        </li>
                        <li class="disabled">
                            <a data-toggle="tab_dis" href="#vcounters" aria-expanded="false">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->line("vcounters.title");?>

                            </a>
                        </li>
                        <li class="disabled">
                            <a data-toggle="tab_dis" href="#hcounters" aria-expanded="false">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->line("hcounters.title");?>

                            </a>
                        </li>
                        <li class="disabled">
                            <a data-toggle="tab_dis" href="#icounters" aria-expanded="false">
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->line("icounters.title");?>

                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="ecounters" class="tab-pane active">
                            <div class="panel-body" id="ecounters_list">
                            </div>
                        </div>
                        <div id="vcounters" class="tab-pane">
                            <div class="panel-body" id="vcounters_list">
                            </div>
                        </div>
                        <div id="hcounters" class="tab-pane">
                            <div class="panel-body" id="hcounter_list">
                            </div>
                        </div>
                        <div id="icounters" class="tab-pane">
                            <div class="panel-body" id="icounters_list">
                            </div>
                        </div>


                    </div>

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
 type="text/template" id="ecounters_list_tpl">
    <?php $_smarty_tpl->_subTemplateRender("file:admin/e_counters/helpers/list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_converter'=>true), 0, false);
echo '</script'; ?>
>


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
 src="/ladmin/scripts/models/mark_e_counters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/models/model_e_counters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/ladmin/scripts/models/e_counters.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/mark_concentrator.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/model_concentrator.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/mark_e_counters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/model_e_counters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/concentrator.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/converters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/e_counters.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="/ladmin/scripts/views/concentrator/helpers/model_edit.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/concentrator/helpers/model_delete.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/e_counters/helpers/list.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/e_counters/model_edit.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/e_counters/model_delete.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/concentrator/concentrator.js"><?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:admin/helpers/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
