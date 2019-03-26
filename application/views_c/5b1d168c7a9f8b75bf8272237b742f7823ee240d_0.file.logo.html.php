<?php
/* Smarty version 3.1.33, created on 2019-03-06 02:43:52
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/helpers/logo.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eed985783a9_01454626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b1d168c7a9f8b75bf8272237b742f7823ee240d' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/helpers/logo.html',
      1 => 1551821679,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7eed985783a9_01454626 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="index.htm">
                    <?php echo $_smarty_tpl->tpl_vars['brand']->value;?>

                    <span>v<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</span>
                </a>
            </div>
                    <?php if ($_smarty_tpl->tpl_vars['Self']->value->droped_at != '') {?>
            <span class="navbar-form navbar-left text-danger" style="padding: 9px;

font-weight: bold;">
            Ваш личный кабинет будет удален через: 
            <?php $_smarty_tpl->_assignInScope('hour', intval((((strtotime($_smarty_tpl->tpl_vars['Self']->value->droped_at))-time())/60/60)));?>
            <?php echo $_smarty_tpl->tpl_vars['hour']->value;?>
ч
                </span>
        <?php }?>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class=" profil-link">
                        <a href="#">


                            <span class="profile-address"><?php echo $_smarty_tpl->tpl_vars['Self']->value->email;?>
</span>
                            <img src="/ladmin/images/profile.png" class="img-circle" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><?php }
}
