<?php /* Smarty version Smarty-3.1.18, created on 2014-05-02 22:16:21
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/artesanus/views/acl/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4845954075363fd15bdf5b6-19526861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55552ed14232432814cc4f6b8e354abcfbe5f12c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/artesanus/views/acl/index.tpl',
      1 => 1398986120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4845954075363fd15bdf5b6-19526861',
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
  'unifunc' => 'content_5363fd15c02722_23564497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5363fd15c02722_23564497')) {function content_5363fd15c02722_23564497($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a>
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a>
</div><?php }} ?>
