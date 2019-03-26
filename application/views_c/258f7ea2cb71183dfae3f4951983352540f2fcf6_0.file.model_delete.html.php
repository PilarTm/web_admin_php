<?php
/* Smarty version 3.1.33, created on 2019-03-06 02:44:50
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/place/helpers/model_delete.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eedd2251922_49171455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '258f7ea2cb71183dfae3f4951983352540f2fcf6' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/place/helpers/model_delete.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7eedd2251922_49171455 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title">
                    Вы уверены, что хотите удалить эту точку?
                </h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-danger" id="delete_place">Удалить</button>
            </div>
        </div>
    </div>
</div><?php }
}
