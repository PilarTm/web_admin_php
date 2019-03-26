<?php
/* Smarty version 3.1.33, created on 2019-03-06 02:45:01
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/converters/helpers/list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eeddd813828_36821181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5ca6e660a679ad43c9051296b69d3e4b4753c21' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/converters/helpers/list.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7eeddd813828_36821181 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="tableExample3" class="table table-striped table-hover dataTable no-footer" role="grid">
    <thead>
        <tr role="row">
            <th></th>
            <th></th>
            <th>Название</th>
            <th>Ip Адрес</th>
            <th>Порт</th>
            <th>Mодель</th>

        </tr>
    </thead>
    <tbody>
        <?php echo '<%';?> if( !converter_list.length ){ <?php echo '%>';?>
        <tr>
            <td colspan="100">Список пуст.</td>
        </tr>
        <?php echo '<%';?> } <?php echo '%>';?>
        <?php echo '<%';?> _.each( converter_list.toArray() , function( converter ){ <?php echo '%>';?>
        <?php echo '<%';?> var mode = models.findWhere({ id : converter.get('model_id') }) <?php echo '%>';?>
        <tr role="row" class="odd"  id="<?php echo '<%';?>= converter.cid <?php echo '%>';?>">
            <td class="action_table delete"><a href="#" class="pe-7s-close-circle"></a></td>
            <td class="action_table edit"><a href="#" class="pe-7s-pen"></a></td>
            <td>
                <i class="glyphicon glyphicon-transfer"></i>
                <a href="/admin/converter/<?php echo '<%';?>= converter.get('id') <?php echo '%>';?>"><?php echo '<%';?>= converter.get_title() <?php echo '%>';?></a></td>
            <td><?php echo '<%';?>= converter.escape('ip') <?php echo '%>';?></td>
            <td><?php echo '<%';?>= converter.escape('port') <?php echo '%>';?></td>
            <td>
                <?php echo '<%';?> if( typeof mode == "undefined" ){ <?php echo '%>';?>
                    --
                <?php echo '<%';?> }else{ <?php echo '%>';?>
                    <?php echo '<%';?>= mode.get('title') <?php echo '%>';?>
                <?php echo '<%';?> } <?php echo '%>';?>

            </td>
        </tr>
        <?php echo '<%';?> }) <?php echo '%>';?>
        <tfoot>
            <tr>
                <th colspan="100" style="width:100%;" class="action_table" id="add_converter">
                    <a href="#" class="pe-7s-plus"></a>
                </th>
            </tr>
        </tfoot>
    </tbody>
</table><?php }
}
