<?php
/* Smarty version 3.1.33, created on 2019-03-06 02:43:52
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/log/helpers/list_even.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eed986f1955_55354418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1936e4ab663caae529daa044bb181645790c74f' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/log/helpers/list_even.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7eed986f1955_55354418 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="vertical-timeline-block">
    <div class="vertical-timeline-icon">
        <i class="fa fa-calendar"></i>
    </div>
    <div class="vertical-timeline-content">
        <div class="p-sm">
            <span class="vertical-date pull-right"> <small><?php echo $_smarty_tpl->tpl_vars['iLog']->value->time;?>
</small> </span>
            <span class="vertical-date">  
                <small>
                    <a href="/admin/log/user/<?php echo $_smarty_tpl->tpl_vars['iLog']->value->get_user()->id;?>
"
                        class="text-muted"
                        ><?php echo $_smarty_tpl->tpl_vars['iLog']->value->get_user()->email;?>
</a> 
                </small>
            </span><br>
            <small class="
            <?php if ($_smarty_tpl->tpl_vars['iLog']->value->action == "delete") {?>
            text-danger
            <?php } elseif ($_smarty_tpl->tpl_vars['iLog']->value->action == "update") {?>
            text-warning
            <?php } else { ?>
            text-success
            <?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['iLog']->value->action == "delete") {?>
            Удалил
            <?php } elseif ($_smarty_tpl->tpl_vars['iLog']->value->action == "update") {?>
            Изменил
            <?php } else { ?>
            Добавил
            <?php }?> :
        </small>
        <small>
            
            <?php if ($_smarty_tpl->tpl_vars['iLog']->value->table == "converters") {?>
                Конвертер: <a href="/admin/converter/<?php echo $_smarty_tpl->tpl_vars['iLog']->value->id_table;?>
"><?php echo $_smarty_tpl->tpl_vars['iLog']->value->get_object()->get_title();?>
</a>
            <?php } elseif ($_smarty_tpl->tpl_vars['iLog']->value->table == "place") {?>
                Место: <?php echo $_smarty_tpl->tpl_vars['iLog']->value->get_object()->title;?>

            <?php } elseif ($_smarty_tpl->tpl_vars['iLog']->value->table == "e_counters") {?>
                Электросчетчик:  <a href="/admin/e_counters/<?php echo $_smarty_tpl->tpl_vars['iLog']->value->id_table;?>
"><?php echo $_smarty_tpl->tpl_vars['iLog']->value->get_object()->get_title();?>
</a>
            <?php } elseif ($_smarty_tpl->tpl_vars['iLog']->value->table == "concentrator") {?>
                Концентратор:  <a href="/admin/concentrator/<?php echo $_smarty_tpl->tpl_vars['iLog']->value->id_table;?>
"><?php echo $_smarty_tpl->tpl_vars['iLog']->value->get_object()->get_title();?>
</a>
            <?php }?>
            <br>
        </small>
    </span>

</div>
</div>
</div><?php }
}
