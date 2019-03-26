<?php
/* Smarty version 3.1.33, created on 2019-03-05 22:39:30
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eb4527e1d88_67682675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dce7fcda3f9a5424ff76aacea5978981367e1a07' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/index.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/helpers/head.html' => 1,
    'file:admin/helpers/logo.html' => 1,
    'file:admin/helpers/nav.html' => 1,
    'file:admin/log/helpers/list_even.html' => 1,
    'file:admin/helpers/footer.html' => 1,
  ),
),false)) {
function content_5c7eb4527e1d88_67682675 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h3 class="m-b-xs"><?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
</h3>
                        <small>
                            v<?php echo $_smarty_tpl->tpl_vars['version']->value;?>

                        </small>
                </div>
                <hr>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-6 col-xs-12">
                <h4>Суммарная статистика</h4>
                <div class="row">
                    <div class="col-lg-6 col-xs-6">
                        <div class="panel panel-filled">

                            <div class="panel-body">
                                <h2 class="m-b-none">
                                    <span class="text-success"><?php echo $_smarty_tpl->tpl_vars['ecounters_count_success']->value;?>
</span> /
                                    <span class="text-warning"><?php echo $_smarty_tpl->tpl_vars['ecounters_count_warning']->value;?>
</span> /
                                    <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['ecounters_count_error']->value;?>
</span> 
                                </h2>
                                <div class="small">Электросчетчики</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-6">
                        <div class="panel panel-filled">
                            <div class="panel-body">
                                <h2 class="m-b-none">
                                    <span class="text-success">0</span> /
                                    <span class="text-warning">0</span> /
                                    <span class="text-danger">0</span> 
                                </h2>
                                <div class="small"><?php echo $_smarty_tpl->tpl_vars['lang']->value->line("converters.title");?>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-6 col-xs-12">
                <h4>Последние действия</h4>
                <div class="v-timeline vertical-container">
                    
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['log']->value, 'iLog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['iLog']->value) {
?>

                    <?php $_smarty_tpl->_subTemplateRender("file:admin/log/helpers/list_even.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php
}
} else {
?>
                        Еще ничего не произошло.
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </div>
            </div>
        </div>














    </div>
</section>
<!-- End main content-->

</div>


<?php $_smarty_tpl->_subTemplateRender("file:admin/helpers/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
