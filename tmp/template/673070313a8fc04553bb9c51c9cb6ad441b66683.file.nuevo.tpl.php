<?php /* Smarty version Smarty-3.1.18, created on 2014-05-03 18:41:11
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/artesanus_/views/post/nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188379784453651c2737b783-20956023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '673070313a8fc04553bb9c51c9cb6ad441b66683' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/artesanus_/views/post/nuevo.tpl',
      1 => 1398556997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188379784453651c2737b783-20956023',
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
  'unifunc' => 'content_53651c27444677_86870027',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53651c27444677_86870027')) {function content_53651c27444677_86870027($_smarty_tpl) {?><div class="jumbotron">
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
