<?php
/* Smarty version 3.1.33, created on 2019-03-05 22:40:08
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/e_counters/helpers/modal_edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eb478a8d670_73662025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c11cf384c1a199423009ecc3b3f1aedb6100b8bf' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/e_counters/helpers/modal_edit.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7eb478a8d670_73662025 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title">
                    <?php echo '<%';?> if( e_counters.get('id') ){ <?php echo '%>';?>
                    Редактирование электросчетчика
                    <?php echo '<%';?> }else{ <?php echo '%>';?>
                    Добавление электросчетчика
                    <?php echo '<%';?> } <?php echo '%>';?>
                </h4>
            </div>
            <div class="modal-body">
                <div class="form-group has-warning">
                    <label for="mark">Марка<sup>*</sup></label> 
                    <select class="form-control" id="mark">
                        <option value="0">Выбрать марку</option>
                        <?php echo '<%';?> _.each( marks.toArray() , function( mark ){ <?php echo '%>';?>
                        <option value="<?php echo '<%';?>= mark.get('id') <?php echo '%>';?>"><?php echo '<%';?>= mark.get('title') <?php echo '%>';?></option>
                        <?php echo '<%';?> }) <?php echo '%>';?>
                    </select>
                </div>
                <div class="form-group  has-warning" style="display: none;">
                    <label for="model">Модель<sup>*</sup></label> 
                    <select class="form-control" id="model">
                    </select>
                </div>

                <?php if (!isset($_smarty_tpl->tpl_vars['hide_converter']->value)) {?>
                <div class="form-group">

                    <?php if (count($_smarty_tpl->tpl_vars['coverters']->value) && count($_smarty_tpl->tpl_vars['concentrators']->value)) {?>

                    <div class="tabs-container">
                        <ul class="nav nav-tabs">

                            <?php echo '<%';?> var active_tab = "converter" <?php echo '%>';?>
                            <?php echo '<%';?> if( e_counters.get('concentrator_id') ) { active_tab = "concentrator" } <?php echo '%>';?>

                            <?php if (!count($_smarty_tpl->tpl_vars['coverters']->value)) {?>
                            <?php echo '<%';?> var active_tab = "concentrator" <?php echo '%>';?>
                            <?php }?>

                            <?php if (count($_smarty_tpl->tpl_vars['coverters']->value)) {?>
                            <li <?php echo '<%';?> if( active_tab == "converter" ){ <?php echo '%>';?>class="active"<?php echo '<%';?> } <?php echo '%>';?>>
                                <a data-toggle="tab" href="#tab-1" aria-expanded="true"> 
                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value->line("converter.title");?>

                                </a>
                            </li>
                            <?php }?>
                            <li <?php echo '<%';?> if( active_tab == "concentrator" ){ <?php echo '%>';?>class="active"<?php echo '<%';?> } <?php echo '%>';?>>
                                <a data-toggle="tab" href="#tab-2" aria-expanded="false">
                                    <?php echo $_smarty_tpl->tpl_vars['lang']->value->line("concentrator.title");?>

                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane <?php echo '<%';?> if( active_tab == "converter" ){ <?php echo '%>';?>active<?php echo '<%';?> } <?php echo '%>';?>">
                                <div class="panel-body form-group has-warning">
                                    <select class="form-control" id="converter_id">
                                        <option value="0">Выбрать конвертер</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coverters']->value, 'converter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['converter']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['converter']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['converter']->value->get_title();?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane <?php echo '<%';?> if( active_tab == "concentrator" ){ <?php echo '%>';?>active<?php echo '<%';?> } <?php echo '%>';?>">
                                <div class="panel-body form-group has-warning">
                                    <select class="form-control" id="concentrator_id">
                                        <option value="0">Выбрать концентратор</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['concentrators']->value, 'concentrator');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['concentrator']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['concentrator']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['concentrator']->value->get_title();?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                        </div>


                    </div>
                    <?php } else { ?>

                    <?php if (count($_smarty_tpl->tpl_vars['coverters']->value)) {?>

                    <div class="form-group has-warning">
                        <label for="serial"><?php echo $_smarty_tpl->tpl_vars['lang']->value->line("converter.title");?>
<sup>*</sup></label> 
                        <select class="form-control" id="converter_id">
                            <option value="0">Выбрать конвертер</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['coverters']->value, 'converter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['converter']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['converter']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['converter']->value->get_title();?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <?php } elseif (count($_smarty_tpl->tpl_vars['concentrators']->value)) {?>
                    <div class="form-group has-warning">
                        <label for="serial"><?php echo $_smarty_tpl->tpl_vars['lang']->value->line("concentrators.title");?>
<sup>*</sup></label> 
                        <select class="form-control" id="concentrator_id">
                            <option value="0">Выбрать концентратор</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['concentrators']->value, 'concentrator');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['concentrator']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['concentrator']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['concentrator']->value->get_title();?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <?php }?>

                    <?php }?>


                </div>
                <?php }?>

                <div class="form-group has-warning"><label for="serial">Серийный номер<sup>*</sup></label> 
                    <input type="text" class="form-control" id="serial" placeholder="00000011"
                    value="<?php echo '<%';?>= e_counters.escape('serial') <?php echo '%>';?>">
                </div>
                <div class="form-group has-warning"><label for="num_485">Опросный номер<sup>*</sup></label> 
                    <input type="text" class="form-control" id="num_485" placeholder="11"
                    value="<?php echo '<%';?>= e_counters.escape('num_485') <?php echo '%>';?>">
                </div>
                <div class="form-group"><label for="title">Название</label> 
                    <input type="text" class="form-control" id="title" placeholder="Название 1"
                    value="<?php echo '<%';?>= e_counters.escape('title') <?php echo '%>';?>">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-accent" id="save">Сохранить</button>
            </div>
        </div>
    </div>
</div><?php }
}
