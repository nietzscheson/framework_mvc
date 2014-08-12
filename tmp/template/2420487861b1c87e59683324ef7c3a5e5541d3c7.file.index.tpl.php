<?php /* Smarty version Smarty-3.1.18, created on 2014-05-09 22:47:06
         compiled from "/home/cristianangulo/public_html/framework/views/login/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1457506778536d5aeaf3f485-48605220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2420487861b1c87e59683324ef7c3a5e5541d3c7' => 
    array (
      0 => '/home/cristianangulo/public_html/framework/views/login/index.tpl',
      1 => 1399675432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1457506778536d5aeaf3f485-48605220',
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
  'unifunc' => 'content_536d5aeb01f3e5_69275028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536d5aeb01f3e5_69275028')) {function content_536d5aeb01f3e5_69275028($_smarty_tpl) {?><div class="jumbotron">
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
