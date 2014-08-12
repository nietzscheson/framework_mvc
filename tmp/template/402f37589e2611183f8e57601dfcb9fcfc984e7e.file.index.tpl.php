<?php /* Smarty version Smarty-3.1.18, created on 2014-07-14 09:10:29
         compiled from "/home/cristianangulo/public_html/framework/views/registro/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147240036753c39e85ec6782-91051848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '402f37589e2611183f8e57601dfcb9fcfc984e7e' => 
    array (
      0 => '/home/cristianangulo/public_html/framework/views/registro/index.tpl',
      1 => 1399675435,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147240036753c39e85ec6782-91051848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53c39e8638cb71_54342561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c39e8638cb71_54342561')) {function content_53c39e8638cb71_54342561($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
</div>

<div class="bloque">

	<form id="form1" method="POST" action="" class="form">
		<input type="hidden" name="enviar" value="1">
		<fieldset>
			<div class="form-group">
			    <label for="nombre">Nombre:</label>
			    <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" value="<<?php ?>?php if(isset($this->datos['nombre'])) echo $this->datos['nombre'];?<?php ?>>">
			</div>
			<div class="form-group">
			    <label for="titulo">Usuario:</label>
			    <input type="text" class="form-control" id="usuario" placeholder="Usuario" name="usuario" value="<<?php ?>?php if(isset($this->datos['usuario'])) echo $this->datos['usuario'];?<?php ?>>">
			</div>
			<div class="form-group">
			    <label for="email">Email:</label>
			    <input type="text" class="form-control" id="email" placeholder="E-Mail" name="email" value="<<?php ?>?php if(isset($this->datos['email'])) echo $this->datos['email'];?<?php ?>>">
			</div>
			<div class="form-group">
			    <label for="pass">Contraseña:</label>
			    <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass" value="<<?php ?>?php if(isset($this->datos['pass'])) echo $this->datos['pass'];?<?php ?>>">
			</div>
			<div class="form-group">
			    <label for="confirmar">Confirmar contraseña:</label>
			    <input type="password" class="form-control" id="confirmar" placeholder="Confirmar" name="confirmar" value="<<?php ?>?php if(isset($this->datos['confirmar'])) echo $this->datos['confirmar'];?<?php ?>>">
			</div>
			<input type="submit" value="Registrar" class="btn btn-primary">

		</fieldset>		
	</form>

</div><?php }} ?>
