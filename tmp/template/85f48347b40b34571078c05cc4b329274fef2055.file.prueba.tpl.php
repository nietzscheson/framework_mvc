<?php /* Smarty version Smarty-3.1.18, created on 2014-05-07 18:08:38
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/artesanus_/views/post/prueba.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81962233753669450035147-67024815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85f48347b40b34571078c05cc4b329274fef2055' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/artesanus_/views/post/prueba.tpl',
      1 => 1399478917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81962233753669450035147-67024815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53669450085ec5_83628790',
  'variables' => 
  array (
    'titulo' => 0,
    '_acl' => 0,
    '_layoutParams' => 0,
    'posts' => 0,
    'post' => 0,
    'paginacion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53669450085ec5_83628790')) {function content_53669450085ec5_83628790($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
  <?php if ($_smarty_tpl->tpl_vars['_acl']->value->permiso("nuevo_post")) {?>
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/nuevo">Nuevo post</a>
  <?php }?>
</div>

<div class="bloque">
<div id="lista_registros">


<?php if (isset($_smarty_tpl->tpl_vars['posts']->value)&&count($_smarty_tpl->tpl_vars['posts']->value)) {?>
	<table class="table">
		<thead>
			<tr>
				<th class="col-md-2">Título</th>
				<th class="col-md-4">Cuerpo</th>
				<th class="col-md-4">Imagen</th>
				<th class="col-md-2"></th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
			<tr>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['post']->value['titulo'];?>

				</td>
				<td><p class="lead"><?php echo $_smarty_tpl->tpl_vars['post']->value['cuerpo'];?>
</p></td>
				<td>
					<?php if (isset($_smarty_tpl->tpl_vars['post']->value['imagen'])) {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/post/<?php echo $_smarty_tpl->tpl_vars['post']->value['imagen'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/post/thumb/thumb_<?php echo $_smarty_tpl->tpl_vars['post']->value['imagen'];?>
"/>
					</a>
					<?php }?>
				</td>

				<td>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/editar/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
						<button type="button" class="btn btn-default">
					  		<span class="glyphicon glyphicon-eye-open"></span>
						</button>
					</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
post/eliminar/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">
						<button type="button" class="btn btn-default">
					  		<span class="glyphicon glyphicon-trash"></span>
						</button>
					</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
<?php } else { ?>
	<div class="alert alert-danger">
	  	Aún no hay posts
	</div>
<?php }?>


	<div class="text-center">
		<?php echo (($tmp = @$_smarty_tpl->tpl_vars['paginacion']->value)===null||$tmp==='' ? '' : $tmp);?>

	</div>

</div>

</div>
<?php }} ?>
