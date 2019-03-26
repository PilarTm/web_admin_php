<?php
/* Smarty version 3.1.33, created on 2019-03-12 01:56:37
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/place/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c86cb85b0fab8_08996409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2034868c3231101e122fa838cb2e1a67843b827b' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/place/index.html',
      1 => 1552335685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/helpers/head.html' => 1,
    'file:admin/helpers/logo.html' => 1,
    'file:admin/helpers/nav.html' => 1,
    'file:admin/place/helpers/model_edit.html' => 1,
    'file:admin/place/helpers/model_delete.html' => 1,
    'file:admin/user/helpers/registration.html' => 1,
    'file:admin/place/helpers/model_move.html' => 1,
    'file:admin/converters/helpers/modal_edit.html' => 1,
    'file:admin/e_counters/helpers/modal_edit.html' => 1,
    'file:admin/helpers/footer.html' => 1,
  ),
),false)) {
function content_5c86cb85b0fab8_08996409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/helpers/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:admin/helpers/logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:admin/helpers/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        <div class="header-title">
          <h3 class="m-b-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value->line('place.title');?>
</h3>
        </div>
        <hr>
      </div>
    </div>

    <div class="row">

      <div style="overflow-x: auto;">
        <div class="panel panel-filled" >

          <div class="panel-body" id="jstree_demo_div">
          </div>

        </div>
      </div>
    </div>
  </div>


  <?php echo '<script'; ?>
 type="text/javascript">

    $(document).ready(function(){
      $(".action_tree").on('click' , function(e){
        $(e.target).closest('li').find('> .dropdown-menu').show()
      })
    })

  <?php echo '</script'; ?>
>


  <link rel="stylesheet" href="/ladmin/jstree/themes/proton/style.css" />
  <?php echo '<script'; ?>
 type="text/javascript" src="/ladmin/jstree/jstree.min.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/template" id="add_place_tpl">
    <?php $_smarty_tpl->_subTemplateRender("file:admin/place/helpers/model_edit.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/template" id="delete_place_tpl">
    <?php $_smarty_tpl->_subTemplateRender("file:admin/place/helpers/model_delete.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/template" id="registration_user_tpl">
    <?php $_smarty_tpl->_subTemplateRender("file:admin/user/helpers/registration.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/template" id="move_place_tpl">
    <?php $_smarty_tpl->_subTemplateRender("file:admin/place/helpers/model_move.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/template" id="modal_edit_converter_tpl">
    <?php $_smarty_tpl->_subTemplateRender("file:admin/converters/helpers/modal_edit.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/template" id="modal_edit_tpl">
    <?php $_smarty_tpl->_subTemplateRender("file:admin/e_counters/helpers/modal_edit.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="/ladmin/scripts/models/mark_e_counters.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/models/model_e_counters.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/models/mark_converters.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/models/model_converters.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/models/place.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/models/user.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/models/converters.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/models/e_counters.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="/ladmin/scripts/collections/place.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/collections/converters.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/collections/mark_e_counters.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/collections/model_e_counters.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/collections/mark_converters.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/collections/model_converters.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="/ladmin/scripts/views/place/helpers/model_edit.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/views/converters/model_edit.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/views/place/helpers/model_delete.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/views/place/helpers/model_move.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/views/user/helpers/registration_modal.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/views/e_counters/model_edit.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/ladmin/scripts/collections/e_counters.js"><?php echo '</script'; ?>
>

  <link rel="stylesheet" href="/ladmin/jstree/themes/proton/style.css" />
  <?php echo '<script'; ?>
 src="/ladmin/scripts/views/place/index.js"><?php echo '</script'; ?>
>

  <?php $_smarty_tpl->_subTemplateRender("file:admin/helpers/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
