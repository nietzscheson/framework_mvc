<?php /* Smarty version Smarty-3.1.18, created on 2014-05-02 01:15:20
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/artesanus_acl/views/acl/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10218719885362cf635fe919-53886833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef141219d523dd22500b0dfbbeced72e1884c1f0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/artesanus_acl/views/acl/index.tpl',
      1 => 1398986120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10218719885362cf635fe919-53886833',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5362cf63626d30_27407970',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5362cf63626d30_27407970')) {function content_5362cf63626d30_27407970($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a>
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a>
</div><?php }} ?>
