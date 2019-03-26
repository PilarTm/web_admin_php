<?php
/* Smarty version 3.1.33, created on 2019-03-27 02:51:05
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/e_counters/helpers/info.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9a9ec91f8e94_93963470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c9bedacafd4926b2bee7d397111d01147aee2b9' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/e_counters/helpers/info.html',
      1 => 1553302932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9a9ec91f8e94_93963470 (Smarty_Internal_Template $_smarty_tpl) {
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
                <td>Сериный номер</td>
                <td><?php echo '<%';?>= counter.get('serial') <?php echo '%>';?></td>
            </tr>
            <tr>
                <td>Название</td>
                <td><?php echo '<%';?>= counter.get_title() <?php echo '%>';?></td>
            </tr>
            <tr>
                <td>Опросный номер</td>
                <td><?php echo '<%';?>= counter.get('num_485') <?php echo '%>';?></td>
            </tr>
            <?php echo '<%';?> if( counter.get('converter_id') ){ <?php echo '%>';?>
            <tr>
                <td>Конвертер</td>
                <td>
                    <a href="/admin/converter/<?php echo '<%';?>= converter.get('id') <?php echo '%>';?>">
                        <?php echo '<%';?>= converter.get_title() <?php echo '%>';?>
                    </a>
                </td>
            </tr>
            <?php echo '<%';?> } <?php echo '%>';?>
            <?php echo '<%';?> if( counter.get('concentrator_id') ){ <?php echo '%>';?>
            <tr>
                <td>Концентратор</td>
                <td>
                    <a href="/admin/concentrator/<?php echo '<%';?>= concentrator.get('id') <?php echo '%>';?>">
                        <?php echo '<%';?>= concentrator.get_title() <?php echo '%>';?>
                    </a>
                </td>
            </tr>
            <?php echo '<%';?> } <?php echo '%>';?>
            <tr>
                <td>Модель</td>
                <td><?php echo '<%';?>= model.get('title') <?php echo '%>';?></td>
            </tr>
        </tbody>
    </table>
</div><?php }
}
