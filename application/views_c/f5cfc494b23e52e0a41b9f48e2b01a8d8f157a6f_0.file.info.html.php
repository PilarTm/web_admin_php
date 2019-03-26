<?php
/* Smarty version 3.1.33, created on 2019-03-06 03:27:45
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/converters/helpers/info.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7ef7e1e26ce9_02295118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5cfc494b23e52e0a41b9f48e2b01a8d8f157a6f' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/converters/helpers/info.html',
      1 => 1551824733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7ef7e1e26ce9_02295118 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Значение</th>
                <th>Свойство</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Ip</td>
                <td><?php echo '<%';?>= converter.get('ip') <?php echo '%>';?></td>
            </tr>
            <tr>
                <td>Порт</td>
                <td><?php echo '<%';?>= converter.get('port') <?php echo '%>';?></td>
            </tr>
            <tr>
                <td>Название</td>
                <td><?php echo '<%';?>= converter.get_title() <?php echo '%>';?></td>
            </tr>
            <tr>
                <td>Модель</td>
                <td><?php echo '<%';?>= model.get('title') <?php echo '%>';?></td>
            </tr>
        </tbody>
    </table>
</div><?php }
}
