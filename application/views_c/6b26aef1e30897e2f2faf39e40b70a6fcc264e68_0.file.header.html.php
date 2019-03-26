<?php
/* Smarty version 3.1.33, created on 2019-03-05 22:39:26
  from '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/welcome_to_admin/header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c7eb44e61a429_93224674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b26aef1e30897e2f2faf39e40b70a6fcc264e68' => 
    array (
      0 => '/home/sergey/deb/src/usr/share/nikapilar/www/application/views/welcome_to_admin/header.html',
      1 => 1551462222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c7eb44e61a429_93224674 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title><?php echo get_brand();?>
</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="/ladmin/vendor/fontawesome/css/font-awesome.css">
    <link rel="stylesheet" href="/ladmin/vendor/animate-css/animate.css">
    <link rel="stylesheet" href="/ladmin/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/ladmin/vendor/toastr/toastr.min.css">

    <!-- App styles -->
    <link rel="stylesheet" href="/ladmin/styles/pe-icons/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="/ladmin/styles/pe-icons/helper.css">
    <link rel="stylesheet" href="/ladmin/styles/stroke-icons/style.css">
    <link rel="stylesheet" href="/ladmin/styles/style.css">

    <?php echo '<script'; ?>
 src="/ladmin/vendor\pacejs\pace.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/ladmin/vendor\jquery\dist\jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/ladmin/vendor\bootstrap\js\bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/ladmin/scripts/core/underscore.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/ladmin/scripts/core/backbone.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/ladmin/scripts/luna.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/ladmin/vendor/toastr/toastr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        Backbone.emulateHTTP = true;
        Backbone.emulateJSON = true;
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        } 
    <?php echo '</script'; ?>
>
</head>
<body class="blank">

<!-- Wrapper-->
<div class="wrapper"><?php }
}
