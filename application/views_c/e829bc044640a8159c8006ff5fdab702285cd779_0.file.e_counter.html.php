<?php
/* Smarty version 3.1.33, created on 2019-03-27 02:51:04
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/e_counters/e_counter.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9a9ec8d4d2e1_87084411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e829bc044640a8159c8006ff5fdab702285cd779' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/admin/e_counters/e_counter.html',
      1 => 1553302932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/helpers/head.html' => 1,
    'file:admin/helpers/logo.html' => 1,
    'file:admin/helpers/nav.html' => 1,
    'file:admin/log/helpers/list_even.html' => 1,
    'file:admin/e_counters/helpers/info.html' => 1,
    'file:admin/helpers/footer.html' => 1,
  ),
),false)) {
function content_5c9a9ec8d4d2e1_87084411 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/sergey/deb/src/usr/share/nikapilar/www/application/third_party/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender("file:admin/helpers/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender("file:admin/helpers/logo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:admin/helpers/nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>

  var id = <?php echo $_smarty_tpl->tpl_vars['id']->value;?>
;

<?php echo '</script'; ?>
>


<!-- Main content-->
<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        <div class="header-title">
          <h3 class="m-b-xs"> Электросчетчик: 
            <i class="glyphicon glyphicon-flash"></i>
            <span class="c-accent" id="e_counter_title"></span></h3>
          </div>
          <hr>
        </div>
      </div>



      <div class="row">

        <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="panel panel-filled">
            <div class="panel-body" id="e_counter_info"></div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">

          <div class="row">

            <?php $_smarty_tpl->_assignInScope('first_id', '');?>
            <?php $_smarty_tpl->_assignInScope('id', '');?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meter']->value->parameters(), 'iParameter', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['iParameter']->value) {
?>


            <?php if (preg_match("/ACTIVE/",$_smarty_tpl->tpl_vars['iParameter']->value->ident)) {?>
            <?php $_smarty_tpl->_assignInScope('id', "active_chart");?>
            <?php } elseif (preg_match("/REACTIVE/",$_smarty_tpl->tpl_vars['iParameter']->value->ident)) {?>
            <?php $_smarty_tpl->_assignInScope('id', "reactive_chart");?>
            <?php } elseif (preg_match("/FULL/",$_smarty_tpl->tpl_vars['iParameter']->value->ident)) {?>
            <?php $_smarty_tpl->_assignInScope('id', "full_chart");?>
            <?php } elseif (preg_match("/POWER/",$_smarty_tpl->tpl_vars['iParameter']->value->ident)) {?>
            <?php $_smarty_tpl->_assignInScope('id', "power_chart");?>
            <?php } elseif (preg_match("/CURRENT/",$_smarty_tpl->tpl_vars['iParameter']->value->ident)) {?>
            <?php $_smarty_tpl->_assignInScope('id', "current_chart");?>
            <?php } elseif (preg_match("/VOLTAGE/",$_smarty_tpl->tpl_vars['iParameter']->value->ident)) {?>
            <?php $_smarty_tpl->_assignInScope('id', "voltage_chart");?>
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['i']->value) {?>
            <?php $_smarty_tpl->_assignInScope('first_id', $_smarty_tpl->tpl_vars['id']->value);?>
            <?php }?>

            <div class="col-lg-6 col-md-6 col-xs-12 chart_pane" data-chart_id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
            style="<?php if ($_smarty_tpl->tpl_vars['first_id']->value != $_smarty_tpl->tpl_vars['id']->value) {?>display:none;<?php }?>"
            >

            <div class="panel">
              <div class="panel-body">
                <div class="small">
                  <span class="c-white"><?php echo $_smarty_tpl->tpl_vars['iParameter']->value->title;?>
</span>
                </div>
                <div class="m-t-sm">
                  <?php if (!$_smarty_tpl->tpl_vars['meter']->value->count_pluck_value_by_parameter_by_date($_smarty_tpl->tpl_vars['iParameter']->value->id,$_smarty_tpl->tpl_vars['now']->value)) {?>
                  <h4 class="text-muted">Данных нет</h4>
                  <?php }?>
                  <small class="c-white"></small>
                  <div class="sparkline_<?php echo $_smarty_tpl->tpl_vars['iParameter']->value->id;?>
"></div>
                  <small class="slight"></small>


                  <?php echo '<script'; ?>
 type="text/javascript">
                    $(".sparkline_<?php echo $_smarty_tpl->tpl_vars['iParameter']->value->id;?>
").sparkline([
                      <?php echo $_smarty_tpl->tpl_vars['meter']->value->pluck_value_by_parameter_by_date($_smarty_tpl->tpl_vars['iParameter']->value->id,$_smarty_tpl->tpl_vars['now']->value);?>

                      ], {
                        type: 'line',
                        lineColor: '#fff',
                        lineWidth: 3,
                        fillColor: '#393D47',
                        height: 70,
                        width: '100%'
                      });
                    <?php echo '</script'; ?>
>

                  </div>
                </div>
              </div>
            </div>
            <?php
}
} else {
?>
            Нет параметров
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>


        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="btn-group panel-body">
            <a class="btn btn-default"  
            href="/admin/e_counters/<?php echo $_smarty_tpl->tpl_vars['meter']->value->id;?>
/archive/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['prev']->value,'%Y/%m/%d');?>
">
            <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['prev']->value,'%d.%m.%Y');?>

          </a>


          <button class="btn btn-default disabled" type="button">
            <b style="color:#fff"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['now']->value,'%d.%m.%Y');?>
</b>
          </button>
          <a class="btn btn-default"  
          href="/admin/e_counters/<?php echo $_smarty_tpl->tpl_vars['meter']->value->id;?>
/archive/<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['next']->value,'%Y/%m/%d');?>
">
          <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['next']->value,'%d.%m.%Y');?>

        </a>
      </div>
    </div>
  </div>


  <div class="row">


    <div class="col-lg-12 col-xs-12">

      <div class="panel panel-filled">

        <div class="panel-body">

          <h4>Показания</h4>
          <div class="tabs-container">
            <ul class="nav nav-tabs">

              <?php $_smarty_tpl->_assignInScope('active_tab', "last");?>
              <?php if ($_smarty_tpl->tpl_vars['now']->value->getTimestamp() != time()) {?>
                <?php $_smarty_tpl->_assignInScope('active_tab', "24hours");?>
              <?php }?>

              <li <?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "last") {?>class="active"<?php }?>>
                <a data-toggle="tab" href="#tab-1" aria-expanded="true"> Последние</a>
              </li>
              <li <?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "24hours") {?>class="active"<?php }?>>
                <a data-toggle="tab" href="#tab-2" aria-expanded="false">За 24 часа</a>
              </li>
            </ul>
            <div class="tab-content">
              <div id="tab-1" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "last") {?>active<?php }?>">
                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Параметр</th>
                        <th>Значение</th>
                        <th>Дата</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meter']->value->parameters(), 'iParameter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['iParameter']->value) {
?>
                      <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['iParameter']->value->title;?>
</td>
                        <?php $_smarty_tpl->_assignInScope('val', $_smarty_tpl->tpl_vars['meter']->value->last_value_by_parameter($_smarty_tpl->tpl_vars['iParameter']->value->id));?>
                        <td><?php if ($_smarty_tpl->tpl_vars['val']->value->id) {
echo $_smarty_tpl->tpl_vars['val']->value->value;
} else { ?>Нет данных<?php }?></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['val']->value->id) {
echo $_smarty_tpl->tpl_vars['val']->value->time;
} else { ?>--<?php }?></td>
                      </tr>
                      <?php
}
} else {
?>
                      <tr>
                        <td colspan="100">Нет данных</td>
                      </tr>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div id="tab-2" class="tab-pane  <?php if ($_smarty_tpl->tpl_vars['active_tab']->value == "24hours") {?>active<?php }?>">

                <br>

                <div class="tabs-container">
                  <ul class="nav nav-tabs" id="tab_panel_parameters">
                    <?php $_smarty_tpl->_assignInScope('find_active', 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['meter']->value->isset_parameter_like("ENERGY_ACTIVE_TARIF")) {?>
                    <li <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {?>class="active"<?php }?>>
                      <a data-toggle="tab" 
                      data-cahrt="active" href="#e-active" aria-expanded="true"> Активная энергия</a>
                    </li>
                    <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {
$_smarty_tpl->_assignInScope('find_active', 1);
}?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['meter']->value->isset_parameter_like("ENERGY_REACTIVE_TARIF")) {?>
                    <li <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {?>class="active"<?php }?>>
                      <a data-toggle="tab" 
                      data-cahrt="reactive" href="#e-reactive" aria-expanded="false">Реактивная энергия</a>
                    </li>
                    <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {
$_smarty_tpl->_assignInScope('find_active', 1);
}?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['meter']->value->isset_parameter_like("ENERGY_FULL_TARIF")) {?>
                    <li <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {?>class="active"<?php }?>>
                      <a data-toggle="tab" 
                      data-cahrt="full" href="#e-full" aria-expanded="false">Полная энергия</a>
                    </li>
                    <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {
$_smarty_tpl->_assignInScope('find_active', 1);
}?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['meter']->value->isset_parameter_like("VOLTAGE")) {?>
                    <li <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {?>class="active"<?php }?>>
                      <a data-toggle="tab" 
                      data-cahrt="voltage" href="#voltage" aria-expanded="false">Напряжение</a>
                    </li>
                    <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {
$_smarty_tpl->_assignInScope('find_active', 1);
}?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['meter']->value->isset_parameter_like("CURRENT")) {?>
                    <li <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {?>class="active"<?php }?>>
                      <a data-toggle="tab" 
                      data-cahrt="current" href="#current" aria-expanded="false">Ток</a>
                    </li>
                    <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {
$_smarty_tpl->_assignInScope('find_active', 1);
}?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['meter']->value->isset_parameter_like("POWER")) {?>
                    <li <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {?>class="active"<?php }?>>
                      <a data-toggle="tab" 
                      data-cahrt="power" href="#power" aria-expanded="false" >Мощность</a>
                    </li>
                    <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {
$_smarty_tpl->_assignInScope('find_active', 1);
}?>
                    <?php }?>
                  </ul>

                  <?php $_smarty_tpl->_assignInScope('find_active', 0);?>
                  <div class="tab-content">

                    <?php if ($_smarty_tpl->tpl_vars['meter']->value->isset_parameter_like("ENERGY_ACTIVE_TARIF")) {?>
                    <div id="e-active" class="tab-pane <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {?>active<?php }?>">

                      <div class="panel-body">
                        <table class="table">
                          <thead>
                            <tr>
                              <th></th>
                              <th class="text-center">Тариф 1</th>
                              <th class="text-center">Тариф 2</th>
                              <th class="text-center">Сумма</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meter']->value->get_active_energy($_smarty_tpl->tpl_vars['now']->value), 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'cell', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['cell']->value) {
?>
                              <?php if ($_smarty_tpl->tpl_vars['index']->value == "time") {?>
                              <td style="width:50px;"><?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
</td>
                              <?php } else { ?>
                              <td class="text-center">
                                <?php if (!$_smarty_tpl->tpl_vars['cell']->value->id) {?>
                                --
                                <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['cell']->value->value;?>

                                <?php }?>
                              </td>
                              <?php }?>
                              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </tbody>
                        </table>
                      </div>

                    </div>
                    <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {
$_smarty_tpl->_assignInScope('find_active', 1);
}?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['meter']->value->isset_parameter_like("ENERGY_REACTIVE_TARIF")) {?>
                    <div id="e-reactive" class="tab-pane <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {?>active<?php }?>">

                      <div class="panel-body">
                        <table class="table">
                          <thead>
                            <tr>
                              <th></th>
                              <th class="text-center">Тариф 1</th>
                              <th class="text-center">Тариф 2</th>
                              <th class="text-center">Сумма</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meter']->value->get_reactive_energy($_smarty_tpl->tpl_vars['now']->value), 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'cell', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['cell']->value) {
?>
                              <?php if ($_smarty_tpl->tpl_vars['index']->value == "time") {?>
                              <td style="width:50px;"><?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
</td>
                              <?php } else { ?>
                              <td class="text-center">
                                <?php if (!$_smarty_tpl->tpl_vars['cell']->value->id) {?>
                                --
                                <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['cell']->value->value;?>

                                <?php }?>
                              </td>
                              <?php }?>
                              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </tbody>
                        </table>
                      </div>

                    </div>
                    <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {
$_smarty_tpl->_assignInScope('find_active', 1);
}?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['meter']->value->isset_parameter_like("ENERGY_FULL_TARIF")) {?>
                    <div id="e-full" class="tab-pane <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {?>active<?php }?>">

                      <div class="panel-body">
                        <table class="table">
                          <thead>
                            <tr>
                              <th></th>
                              <th class="text-center">Тариф 1</th>
                              <th class="text-center">Тариф 2</th>
                              <th class="text-center">Сумма</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meter']->value->get_full_energy($_smarty_tpl->tpl_vars['now']->value), 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'cell', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['cell']->value) {
?>
                              <?php if ($_smarty_tpl->tpl_vars['index']->value == "time") {?>
                              <td style="width:50px;"><?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
</td>
                              <?php } else { ?>
                              <td class="text-center">
                                <?php if (!$_smarty_tpl->tpl_vars['cell']->value->id) {?>
                                --
                                <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['cell']->value->value;?>

                                <?php }?>
                              </td>
                              <?php }?>
                              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </tbody>
                        </table>
                      </div>

                    </div>
                    <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {
$_smarty_tpl->_assignInScope('find_active', 1);
}?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['meter']->value->isset_parameter_like("VOLTAGE")) {?>
                    <div id="voltage" class="tab-pane <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {?>active<?php }?>">

                      <div class="panel-body">
                        <table class="table">
                          <thead>
                            <tr>
                              <th></th>
                              <th class="text-center">Фаза 1</th>
                              <th class="text-center">Фаза 2</th>
                              <th class="text-center">Фаза 3</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meter']->value->get_voltage($_smarty_tpl->tpl_vars['now']->value), 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'cell', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['cell']->value) {
?>
                              <?php if ($_smarty_tpl->tpl_vars['index']->value == "time") {?>
                              <td style="width:50px;"><?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
</td>
                              <?php } else { ?>
                              <td class="text-center">
                                <?php if (!$_smarty_tpl->tpl_vars['cell']->value->id) {?>
                                --
                                <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['cell']->value->value;?>

                                <?php }?>
                              </td>
                              <?php }?>
                              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </tbody>
                        </table>
                      </div>

                    </div> 
                    <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {
$_smarty_tpl->_assignInScope('find_active', 1);
}?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['meter']->value->isset_parameter_like("CURRENT")) {?>
                    <div id="current" class="tab-pane <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {?>active<?php }?>">

                      <div class="panel-body">
                        <table class="table">
                          <thead>
                            <tr>
                              <th></th>
                              <th class="text-center">Фаза 1</th>
                              <th class="text-center">Фаза 2</th>
                              <th class="text-center">Фаза 3</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meter']->value->get_current($_smarty_tpl->tpl_vars['now']->value), 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'cell', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['cell']->value) {
?>
                              <?php if ($_smarty_tpl->tpl_vars['index']->value == "time") {?>
                              <td style="width:50px;"><?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
</td>
                              <?php } else { ?>
                              <td class="text-center">
                                <?php if (!$_smarty_tpl->tpl_vars['cell']->value->id) {?>
                                --
                                <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['cell']->value->value;?>

                                <?php }?>
                              </td>
                              <?php }?>
                              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </tbody>
                        </table>
                      </div>

                    </div>
                    <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {
$_smarty_tpl->_assignInScope('find_active', 1);
}?>
                    <?php }?>


                    <?php if ($_smarty_tpl->tpl_vars['meter']->value->isset_parameter_like("POWER")) {?>
                    <div id="power" class="tab-pane <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {?>active<?php }?>">

                      <div class="panel-body">
                        <table class="table">
                          <thead>
                            <tr>
                              <th></th>
                              <th class="text-center">Фаза 1</th>
                              <th class="text-center">Фаза 2</th>
                              <th class="text-center">Фаза 3</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meter']->value->get_power($_smarty_tpl->tpl_vars['now']->value), 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <tr>
                              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['row']->value, 'cell', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['cell']->value) {
?>
                              <?php if ($_smarty_tpl->tpl_vars['index']->value == "time") {?>
                              <td style="width:50px;"><?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
</td>
                              <?php } else { ?>
                              <td class="text-center">
                                <?php if (!$_smarty_tpl->tpl_vars['cell']->value->id) {?>
                                --
                                <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['cell']->value->value;?>

                                <?php }?>
                              </td>
                              <?php }?>
                              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </tbody>
                        </table>
                      </div>

                    </div>
                    <?php if (!$_smarty_tpl->tpl_vars['find_active']->value) {
$_smarty_tpl->_assignInScope('find_active', 1);
}?>
                    <?php }?>

                  </div>
                </div>
              </div>
              <div id="tab-3" class="tab-pane">
                <div class="panel-body">
                  Архив
                </div>
              </div>
            </div>


          </div>


        </div>
      </div>
    </div>
  </div>



  <div class="row">


    <div class="col-lg-12 col-xs-12">
      <h4>Последние действия</h4>
      <div class="v-timeline vertical-container">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meter']->value->last_log(10), 'iLog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['iLog']->value) {
?>
        <?php $_smarty_tpl->_subTemplateRender("file:admin/log/helpers/list_even.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      </div>
    </div>



  </div>

</section>
</div>

<?php echo '<script'; ?>
 type="text/template" id="e_counter_info_tpl">
  <?php $_smarty_tpl->_subTemplateRender("file:admin/e_counters/helpers/info.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="/ladmin/scripts/models/mark_e_counters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/models/model_e_counters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/models/e_counters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/models/converters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/models/concentrator.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/mark_e_counters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/model_e_counters.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/collections/e_counters.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="/ladmin/scripts/views/e_counters/helpers/info.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/e_counters/helpers/title.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/ladmin/scripts/views/e_counters/e_counter.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">

  $('#tab_panel_parameters').on("click" , "li" , function(e){
    $('.chart_pane').each(function(i,el){
      var action = $(el).data('chart_id') == $(e.target).data('cahrt')+"_chart" ? "show" : "hide"
      $(el)[action]()
    })
    
  })

<?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:admin/helpers/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  <?php }
}
