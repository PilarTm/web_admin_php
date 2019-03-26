<?php
/* Smarty version 3.1.33, created on 2019-03-06 02:53:11
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/concentrator/helpers/modal_edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eefc8006a93_21156200',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d94fd81b2c2ea993798ffab629194489fe7e438' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/concentrator/helpers/modal_edit.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7eefc8006a93_21156200 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title">
                    <?php echo '<%';?> if( concentrator.get('id') ){ <?php echo '%>';?>
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value->line('concentrator.edit');?>

                    <?php echo '<%';?> }else{ <?php echo '%>';?>
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value->line('concentrator.add');?>

                    <?php echo '<%';?> } <?php echo '%>';?>
                </h4>
            </div>
            <div class="modal-body">
                    <div class="form-group has-warning">
                        <label for="converter_id">Конвертер<sup>*</sup></label> 
                        <select class="form-control" id="converter_id">
                            <option value="0">Выбрать конвертер</option>
                            <?php echo '<%';?> _.each( converters.toArray() , function( converter ){ <?php echo '%>';?>
                                <option value="<?php echo '<%';?>= converter.get('id') <?php echo '%>';?>"
                                    <?php echo '<%';?> if( converter.get('id') == concentrator.get('converter_id') ){ <?php echo '%>';?>selected<?php echo '<%';?> } <?php echo '%>';?>
                                    ><?php echo '<%';?>= converter.get_title() <?php echo '%>';?></option>
                            <?php echo '<%';?> }) <?php echo '%>';?>
                        </select>
                    </div>
                    <div class="form-group has-warning">
                        <label for="mark">Марка<sup>*</sup></label> 
                        <select class="form-control" id="mark">
                            <option>Выбрать марку</option>
                            <?php echo '<%';?> _.each( marks.toArray() , function( mark ){ <?php echo '%>';?>
                                <option value="<?php echo '<%';?>= mark.get('id') <?php echo '%>';?>"><?php echo '<%';?>= mark.get('title') <?php echo '%>';?></option>
                            <?php echo '<%';?> }) <?php echo '%>';?>
                        </select>
                    </div>
                    <div class="form-group has-warning" style="display: none;">
                        <label for="model">Модель<sup>*</sup></label> 
                        <select class="form-control" id="model">
                        </select>
                    </div>

                    <div class="form-group has-warning">
                        <label for="serial">Серийный номер<sup>*</sup></label> 
                        <input class="form-control" type="test" id="serial" value="<?php echo '<%';?>= concentrator.escape('serial') <?php echo '%>';?>"/>
                    </div>
                    <div class="form-group has-warning">
                        <label for="addr">Адрес<sup>*</sup></label> 
                        <input class="form-control" type="number" id="addr" value="<?php echo '<%';?>= concentrator.escape('addr') <?php echo '%>';?>"/>
                    </div>
                    <div class="form-group">
                        <label for="title">Название</label> 
                        <input class="form-control" type="text" id="title" value="<?php echo '<%';?>= concentrator.escape('title') <?php echo '%>';?>"/>
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
