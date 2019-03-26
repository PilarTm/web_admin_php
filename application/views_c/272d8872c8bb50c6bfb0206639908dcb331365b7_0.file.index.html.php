<?php
/* Smarty version 3.1.33, created on 2019-03-05 22:39:26
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/auth/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eb44e551ba7_05127304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '272d8872c8bb50c6bfb0206639908dcb331365b7' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/auth/index.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:welcome_to_admin/header.html' => 1,
    'file:welcome_to_admin/footer.html' => 1,
  ),
),false)) {
function content_5c7eb44e551ba7_05127304 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:welcome_to_admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   <section class="content">
    <div class="back-link">
        <a href="/" class="btn btn-accent">Вернуться на сайт</a>
    </div>

    <div class="container-center animated slideInDown">


        <div class="view-header">
            <div class="header-icon">
                <i class="pe page-header-icon pe-7s-unlock"></i>
            </div>
            <div class="header-title">
                <h3>Вход</h3>
                <small>
                    Пожалуйста введите реквизиты для доступа.
                </small>
            </div>
        </div>

        <div class="panel panel-filled">
            <div class="panel-body">
                <form method="post" id="loginForm" novalidate="">
                    <div class="form-group">
                        <label class="control-label" for="username">Email</label>
                        <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                        <span class="help-block small">Ваша почта</span>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password">Пароль</label>
                        <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                        <span class="help-block small">Ваш пароль</span>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-accent">Войти</button>
                        <a class="btn btn-default" href="/registration">Регистрация</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:welcome_to_admin/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
