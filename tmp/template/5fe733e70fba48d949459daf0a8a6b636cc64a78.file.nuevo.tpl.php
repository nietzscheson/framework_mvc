<?php /* Smarty version Smarty-3.1.18, created on 2014-05-01 17:01:54
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/artesanus_acl/views/post/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32023858536261e2cdf1d0-20074146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fe733e70fba48d949459daf0a8a6b636cc64a78' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/artesanus_acl/views/post/nuevo.tpl',
      1 => 1398556997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32023858536261e2cdf1d0-20074146',
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
  'unifunc' => 'content_536261e2da2da4_90171964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536261e2da2da4_90171964')) {function content_536261e2da2da4_90171964($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
  	<a class="btn btn-default"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/">Regresar</a>
</div>

<div class="bloque">

	<form id="form1" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo" class="form" enctype="multipart/form-data">
		<input type="hidden" name="guardar" value="1">
		<fieldset>
			<div class="form-group">
			    <label for="titulo">Título:</label>
			    <input type="text" class="form-control" id="titulo" placeholder="Título" name="titulo" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['titulo'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['titulo'];?>
<?php }?>">
			</div>
			<div class="form-group">
			    <label for="cuerpo">Cuerpo:</label>
			    <textarea class="form-control" id="cuerpo" name="cuerpo"><?php if (isset($_smarty_tpl->tpl_vars['post']->value['cuerpo'])) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['cuerpo'];?>
<?php }?></textarea>
			</div>
			<div class="form-group">
			    <label for="titulo">Imagen:</label>
			    <input type="file" class="form-control" id="titulo" placeholder="Título" name="imagen"/>
			</div>
			  <input type="submit" value="Guardar" class="btn btn-primary">

		</fieldset>		
	</form>

</div>

<p></p><?php }} ?>
