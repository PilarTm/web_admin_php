<?php
/* Smarty version 3.1.33, created on 2019-03-06 02:44:50
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/place/helpers/model_edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eedd222e7c1_39793852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1053ec1e65db07e21b37a178f867b796adc7e7fe' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/place/helpers/model_edit.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7eedd222e7c1_39793852 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title">
                    <?php echo '<%';?> if( place.get('id') ){ <?php echo '%>';?>
                    Редактирование точки
                    <?php echo '<%';?> }else{ <?php echo '%>';?>
                    Добавление точки
                    <?php echo '<%';?> } <?php echo '%>';?>
                </h4>
            </div>
            <div class="modal-body">
                    <div class="form-group has-warning">
                        <label for="model">Название<sup>*</sup></label> 
                        <input class="form-control" id="title" value="<?php echo '<%';?>= place.escape('title') <?php echo '%>';?>"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-default disabled" id="save">Сохранить</button>
                </div>
            </div>
        </div>
    </div><?php }
}
