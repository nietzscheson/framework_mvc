<?php /* Smarty version Smarty-3.1.18, created on 2014-05-03 00:09:33
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/artesanus_/modules/usuarios/views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15243465375364179dbdb628-72252166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94c90db248024b7787afb479d920b5cf4f3bebb6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/artesanus_/modules/usuarios/views/login/index.tpl',
      1 => 1398461682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15243465375364179dbdb628-72252166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5364179dc838b4_03284750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5364179dc838b4_03284750')) {function content_5364179dc838b4_03284750($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
</div>
<div class="bloque">
	<form id="form1" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login" class="form">
		<input type="hidden" name="enviar" value="1">
		<fieldset>
			<div class="form-group">
			    <label for="titulo">Usuario:</label>
			    <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="usuario" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['usuario'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['usuario'];?>
<?php }?>">
			 </div>
			 <div class="form-group">
			    <label for="pass">Contraseña:</label>
			    <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['pass'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['pass'];?>
<?php }?>">
			 </div>
			  <input type="submit" value="Entrar" class="btn btn-primary">

		</fieldset>		
	</form>

</div><?php }} ?>
