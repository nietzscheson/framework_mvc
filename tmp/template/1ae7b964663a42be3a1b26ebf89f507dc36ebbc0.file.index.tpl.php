<?php /* Smarty version Smarty-3.1.18, created on 2014-04-28 13:37:19
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/artesanus/views/nombres/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1081219751535e398d321e89-04933169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ae7b964663a42be3a1b26ebf89f507dc36ebbc0' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/artesanus/views/nombres/index.tpl',
      1 => 1398684322,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1081219751535e398d321e89-04933169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_535e398d357d56_27919102',
  'variables' => 
  array (
    'titulo' => 0,
    'generos' => 0,
    'genero' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535e398d357d56_27919102')) {function content_535e398d357d56_27919102($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
</div>

<div class="bloque">
	<form>
		<fieldset>
			<div class="form-group">
			    <label for="titulo">Género:</label>
			    <select id="genero" class="form-control">
			    	<option value=""> - Seleccione - </option>
			    	<?php  $_smarty_tpl->tpl_vars['genero'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['genero']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['generos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['genero']->key => $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->_loop = true;
?>
			    		<option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['genero']->value['genero'];?>
</option>
			    	<?php } ?>
			    </select>
			 </div>
			 <div class="form-group">
			    <label for="pass">Ciudad:</label>
			   <select id="ciudad" class="form-control">
			    	
			    </select>
			 </div>
			 <div class="form-group">
			   <label for="pass">Insertar ciudad:</label>
			   <input type="text" id="ins_ciudad" class="form-control" placeholder="Contraseña" name="ciudad" />
			   <br>
			   <button type="button" class="btn btn-default" id="insertar">Insertar</button>
			 </div>
		</fieldset>		
	</form>

</div><?php }} ?>
