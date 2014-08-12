<?php /* Smarty version Smarty-3.1.18, created on 2014-05-03 04:26:49
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/artesanus_/views/acl/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1220311004536453e9e27d96-59246022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7a7f3a327e96dffc3a0102b42d5d7bf18906fbe' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/artesanus_/views/acl/index.tpl',
      1 => 1398986120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1220311004536453e9e27d96-59246022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_536453e9ea4cc1_49144225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536453e9ea4cc1_49144225')) {function content_536453e9ea4cc1_49144225($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a>
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a>
</div><?php }} ?>
