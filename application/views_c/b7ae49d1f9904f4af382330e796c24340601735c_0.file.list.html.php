<?php
/* Smarty version 3.1.33, created on 2019-03-06 02:53:11
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/concentrator/helpers/list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eefc7f1d582_58483931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7ae49d1f9904f4af382330e796c24340601735c' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/concentrator/helpers/list.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7eefc7f1d582_58483931 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="tableExample3" class="table table-striped table-hover dataTable no-footer" role="grid">
    <thead>
        <tr role="row">
            <th></th>
            <th></th>
            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value->line('concentrator.name');?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value->line('concentrator.model');?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value->line('converter.title');?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value->line('concentrator.serial');?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value->line('concentrator.addr');?>
</th>

        </tr>
    </thead>
    <tbody>
        <?php echo '<%';?> if( !concentrators.length ){ <?php echo '%>';?>
        <tr>
            <td colspan="100">Список пуст.</td>
        </tr>
        <?php echo '<%';?> } <?php echo '%>';?>
        <?php echo '<%';?> _.each( concentrators.toArray() , function( concentrator ){ <?php echo '%>';?>
        <?php echo '<%';?> var model = models.findWhere({ id : concentrator.get('model_id') }) <?php echo '%>';?>
        <tr role="row" class="odd"  id="<?php echo '<%';?>= concentrator.cid <?php echo '%>';?>">
            <td class="action_table delete delete_concentrator">
                <a href="#" class="pe-7s-close-circle"></a></td>
            <td class="action_table edit edit_concentrator"><a href="#" class="pe-7s-pen"></a></td>
            <td>
                <i class="glyphicon glyphicon-magnet"></i>
                <a href="/admin/concentrator/<?php echo '<%';?>= concentrator.get('id') <?php echo '%>';?>"><?php echo '<%';?>= concentrator.get_title() <?php echo '%>';?></a>
            </td>
            <td><?php echo '<%';?>= model.escape('title') <?php echo '%>';?></td>
            <td>
                <i class="glyphicon glyphicon-transfer"></i>
                <?php echo '<%';?> var conv = converters.findWhere({ id : concentrator.get('converter_id') }) <?php echo '%>';?>
                <?php echo '<%';?> if( typeof conv != "undefined" ){ <?php echo '%>';?>
                <a href="/admin/converter/<?php echo '<%';?>= concentrator.get('converter_title') <?php echo '%>';?>" >
                    <?php echo '<%';?>= conv.get_title() <?php echo '%>';?>
                </a>
                <?php echo '<%';?> } <?php echo '%>';?>
            </td>
            <td><?php echo '<%';?>= concentrator.escape('serial') <?php echo '%>';?></td>
            <td><?php echo '<%';?>= concentrator.escape('addr') <?php echo '%>';?></td>
        </tr>
        <?php echo '<%';?> }) <?php echo '%>';?>
        <tfoot>
            <tr>
                <th colspan="100" style="width:100%;" class="action_table" id="add_concentrator">
                    <a href="#" class="pe-7s-plus"></a>
                </th>
            </tr>
        </tfoot>
    </tbody>
</table><?php }
}
