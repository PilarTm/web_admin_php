<?php
/* Smarty version 3.1.33, created on 2019-03-05 22:40:08
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/e_counters/helpers/list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eb478a0d831_90189347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed62f13e33d0092d91a1c2799beabf2f6ab34653' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/e_counters/helpers/list.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7eb478a0d831_90189347 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="tableExample3" class="table table-striped table-hover dataTable no-footer" role="grid">
    <thead>
        <tr role="row">
            <th></th>
            <th></th>
            <th>Название</th>
            <th>Марка</th>
            <?php if (!isset($_smarty_tpl->tpl_vars['hide_converter']->value)) {?>
            <th>Подключен к</th>
            <?php }?>
            <th>Серийный номер</th>
            <th>Опросный номер</th>
        </tr>
    </thead>
    <tbody>
        <?php echo '<%';?> if( !e_counters_list.length ){ <?php echo '%>';?>
        <tr>
            <td colspan="100">Список пуст.</td>
        </tr>
        <?php echo '<%';?> } <?php echo '%>';?>
        <?php echo '<%';?> _.each( e_counters_list.toArray() , function( counter ){ <?php echo '%>';?>
        <?php echo '<%';?> var model = models.findWhere({ id : counter.get('model_id')}) <?php echo '%>';?>
        <tr role="row" class="odd"  id="<?php echo '<%';?>= counter.cid <?php echo '%>';?>">
            <td class="action_table delete"><a href="#" class="pe-7s-close-circle"></a></td>
            <td class="action_table edit"><a href="#" class="pe-7s-pen"></a></td>
            <td>
                <i class="glyphicon glyphicon-flash"></i>
                <a href="/admin/e_counters/<?php echo '<%';?>= counter.get('id') <?php echo '%>';?>">
                    <?php echo '<%';?>= counter.get_title() <?php echo '%>';?>
                </a>
            </td>
            <td>
                <?php echo '<%';?> if( typeof model != "undefined" ){ <?php echo '%>';?>
                <?php echo '<%';?>= model.get('title') <?php echo '%>';?>
                <?php echo '<%';?> }else{ <?php echo '%>';?>
                --
                <?php echo '<%';?> } <?php echo '%>';?>
            </td>
            <?php if (!isset($_smarty_tpl->tpl_vars['hide_converter']->value)) {?>
            <td>
                <?php echo '<%';?> var conv = converters.findWhere({ id : counter.get('converter_id') } ) <?php echo '%>';?>
                <?php echo '<%';?> var conc = concentrators.findWhere({ id : counter.get('concentrator_id') } ) <?php echo '%>';?>
                <?php echo '<%';?> if( typeof conc != "undefined" ){ <?php echo '%>';?>
                <i class="glyphicon glyphicon-magnet"></i>
                    <a href="/admin/concentrator/<?php echo '<%';?>= conc.get('id') <?php echo '%>';?>">
                    <?php echo '<%';?>= conc.get_title() <?php echo '%>';?>
                </a>
                <?php echo '<%';?> }else if ( typeof conv != "undefined" ){ <?php echo '%>';?>
                <i class="glyphicon glyphicon-transfer"></i>
                <a href="/admin/converter/<?php echo '<%';?>= conv.get('id') <?php echo '%>';?>">
                    <?php echo '<%';?>= conv.get_title() <?php echo '%>';?>
                </a>
                <?php echo '<%';?> } <?php echo '%>';?>
            </td>
            <?php }?>
            <td><?php echo '<%';?>= counter.escape('serial') <?php echo '%>';?></td>
            <td><?php echo '<%';?>= counter.escape('num_485') <?php echo '%>';?></td>
        </tr>
        <?php echo '<%';?> }) <?php echo '%>';?>
        <?php if (!$_smarty_tpl->tpl_vars['Self']->value->IsFullLicences()) {?>
        <tfoot>
            <tr>
                <th colspan="100" style="width:100%;" class="action_table" id="add_e_counter">
                    <a href="#" class="pe-7s-plus"></a>
                </th>
            </tr>
        </tfoot>
        <?php } else { ?>
        <tfoot>
            <tr>
                <th colspan="100" style="width:100%;" class="action_table" id="add_e_counter">
                    <div class="alert alert-warning">Вы достигли лимита лицензий</div>
                </th>
            </tr>
        </tfoot>
        <?php }?>
    </tbody>
</table><?php }
}
