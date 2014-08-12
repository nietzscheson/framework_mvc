<?php /* Smarty version Smarty-3.1.18, created on 2014-05-02 22:16:15
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/artesanus/views/post/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203745275535ada4c8c28c5-48188670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c71bd0b76c7eba19931a4c0696948b1d888454e4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/artesanus/views/post/index.tpl',
      1 => 1398983843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203745275535ada4c8c28c5-48188670',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_535ada4c8f18f0_71230720',
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
<?php if ($_valid && !is_callable('content_535ada4c8f18f0_71230720')) {function content_535ada4c8f18f0_71230720($_smarty_tpl) {?><div class="jumbotron">
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
<?php }} ?>
