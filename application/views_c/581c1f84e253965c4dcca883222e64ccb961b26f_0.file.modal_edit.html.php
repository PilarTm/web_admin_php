<?php
/* Smarty version 3.1.33, created on 2019-03-06 02:44:50
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/converters/helpers/modal_edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eedd22cf779_99485064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '581c1f84e253965c4dcca883222e64ccb961b26f' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/converters/helpers/modal_edit.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7eedd22cf779_99485064 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title">
                    <?php echo '<%';?> if( converter.get('id') ){ <?php echo '%>';?>
                    Редактирование конвертера
                    <?php echo '<%';?> }else{ <?php echo '%>';?>
                    Добавление конвертера
                    <?php echo '<%';?> } <?php echo '%>';?>
                </h4>
            </div>
            <div class="modal-body">
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
                    <div class="form-group has-warning"><label for="ip">Ip<sup>*</sup></label> 
                        <input type="text" class="form-control" id="ip" placeholder="127.0.0.1"
                        value="<?php echo '<%';?>= converter.escape('ip') <?php echo '%>';?>">
                    </div>
                    <div class="form-group has-warning"><label for="port">Порт<sup>*</sup></label> 
                        <input type="number" class="form-control" id="port" placeholder="50"
                        value="<?php echo '<%';?>= converter.escape('port') <?php echo '%>';?>">
                    </div>
                    <div class="form-group"><label for="login">Логин</label> 
                        <input type="text" class="form-control" id="login" placeholder="admin"
                        value="<?php echo '<%';?>= converter.escape('login') <?php echo '%>';?>">
                    </div>
                    <div class="form-group"><label for="password">Пароль</label> 
                        <input type="text" class="form-control" id="password" placeholder="****"
                        value="<?php echo '<%';?>= converter.escape('password') <?php echo '%>';?>">
                    </div>
                    <div class="form-group"><label for="title">Название</label> 
                        <input type="text" class="form-control" id="title" placeholder="Название 1"
                        value="<?php echo '<%';?>= converter.escape('title') <?php echo '%>';?>">
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
