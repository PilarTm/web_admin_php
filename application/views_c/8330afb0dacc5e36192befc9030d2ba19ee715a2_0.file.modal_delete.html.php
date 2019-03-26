<?php
/* Smarty version 3.1.33, created on 2019-03-06 02:53:12
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/concentrator/helpers/modal_delete.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eefc8028485_16227558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8330afb0dacc5e36192befc9030d2ba19ee715a2' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/concentrator/helpers/modal_delete.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7eefc8028485_16227558 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title danger">
                    Удаление концентратора

                </h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-danger" id="save">Удалить</button>
            </div>
        </div>
    </div>
</div><?php }
}
