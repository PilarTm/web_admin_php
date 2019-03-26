<?php
/* Smarty version 3.1.33, created on 2019-03-06 02:43:52
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/helpers/nav.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eed985b9590_58944129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6fcd10987703005637a7249fd28b0d864960245' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/helpers/nav.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7eed985b9590_58944129 (Smarty_Internal_Template $_smarty_tpl) {
if (!isset($_smarty_tpl->tpl_vars['active_tab']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('active_tab', "main");
}
if (!isset($_smarty_tpl->tpl_vars['active_nav']->value)) {?>
    <?php $_smarty_tpl->_assignInScope('active_nav', "main");
}?>

<aside class="navigation">
        <nav>
            <ul class="nav luna-nav">
                <li <?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "main") {?>class="active"<?php }?>>
                    <a href="/admin">Главная</a>
                </li>
                <li <?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "places") {?>class="active"<?php }?>>
                    <a href="/admin/places"><?php echo $_smarty_tpl->tpl_vars['lang']->value->line('place.title');?>
</a>
                </li>
                <li <?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "devices") {?>class="active"<?php }?>>
                    <a href="#monitoring" data-toggle="collapse" aria-expanded="false">
                        Устройства<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="monitoring" class="nav nav-second <?php if ($_smarty_tpl->tpl_vars['active_tab']->value != "devices") {?>collapse<?php }?>">
                        <li <?php if ($_smarty_tpl->tpl_vars['active_nav']->value == "converters") {?>class="active"<?php }?>>
                            <a href="/admin/converters">
                                <i class="glyphicon glyphicon-transfer"></i> 
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->line("converters.title");?>
</a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['active_nav']->value == "concentrator") {?>class="active"<?php }?>>
                            <a href="/admin/concentrator">
                                <i class="glyphicon glyphicon-magnet"></i>
                                <?php echo $_smarty_tpl->tpl_vars['lang']->value->line("concentrators.title");?>
</a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['active_nav']->value == "e_counters") {?>class="active"<?php }?>>
                            <a href="/admin/e_counter"> 
                            <i class="glyphicon glyphicon-flash"></i>
                        Электросчетчики</a>
                        </li>
                                            </ul>
                </li>
                
                <li>
                    <a href="#extras" data-toggle="collapse" aria-expanded="false">
                        Учетная запись <span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                    </a>
                    <ul id="extras" class="nav nav-second collapse">
                        <li><a href="profile.htm">Настройка</a></li>
                    </ul>
                </li>
                <li><a href="/admin/logout">Выход</a></li>
                
            </ul>
        </nav>
    </aside>
<?php }
}
