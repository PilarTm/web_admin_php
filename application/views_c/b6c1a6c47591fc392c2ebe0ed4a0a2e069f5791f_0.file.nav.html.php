<?php
/* Smarty version 3.1.33, created on 2019-03-05 22:39:10
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/public/helpers/nav.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eb43edefb72_10843189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6c1a6c47591fc392c2ebe0ed4a0a2e069f5791f' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/public/helpers/nav.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7eb43edefb72_10843189 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="header_area">
  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
        </ul>
        <ul class="nav navbar-nav navbar-left">
          <li><h3><?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
</h3></li>
        </ul>
        <ul class="nav navbar-nav menu_nav justify-content-center">
          <li class="nav-item active"><a class="nav-link" href="index.html">Главная</a></li>
          <li class="nav-item"><a class="nav-link" href="/news">Новости</a></li>
          <li class="nav-item"><a class="nav-link" href="/price">Цены</a></li>

          <li class="nav-item"><a class="nav-link" href="/contacts">Контакты</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"><a href="/auth" class="genric-btn primary">Войти</a></li>
      </div>
    </div>
  </nav>
</div>
</header><?php }
}
