<?php /* Smarty version Smarty-3.1.18, created on 2014-05-08 22:17:58
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/artesanus_/views/registro/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14559181536be62eb10bc1-97131927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb87477e3a01388704aaea2b8583613ae0c1e09f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/artesanus_/views/registro/index.tpl',
      1 => 1399580249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14559181536be62eb10bc1-97131927',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_536be62eb50c53_29720544',
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536be62eb50c53_29720544')) {function content_536be62eb50c53_29720544($_smarty_tpl) {?><div class="jumbotron">
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
