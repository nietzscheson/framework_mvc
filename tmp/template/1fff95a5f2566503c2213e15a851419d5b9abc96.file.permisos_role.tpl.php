<?php /* Smarty version Smarty-3.1.18, created on 2014-05-03 05:09:34
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/artesanus_/modules/usuarios/views/roles/permisos_role.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22176410153645d3c911129-15700579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fff95a5f2566503c2213e15a851419d5b9abc96' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/artesanus_/modules/usuarios/views/roles/permisos_role.tpl',
      1 => 1399086530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22176410153645d3c911129-15700579',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53645d3c954704_34193175',
  'variables' => 
  array (
    'titulo' => 0,
    'role' => 0,
    '_layoutParams' => 0,
    'permisos' => 0,
    'permiso' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53645d3c954704_34193175')) {function content_53645d3c954704_34193175($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 | <small><?php echo $_smarty_tpl->tpl_vars['role']->value['role'];?>
</small></h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/roles">Regresar</a>
</div>

<div class="bloque">
	<form method="POST" action="" name="acl">
		<input type="hidden" name="guardar" value="1"/>
		<?php if (isset($_smarty_tpl->tpl_vars['permisos']->value)&&count($_smarty_tpl->tpl_vars['permisos']->value)) {?>
		<table class="table table-bordered">
	      	<thead>
	        	<tr>
	          		<th>Permiso</th>
	          		<th class="text-center">Habilitado</th>
	          		<th class="text-center">Denegado</th>
	          		<th class="text-center">Ignorar</th>
	        	</tr>
	      	</thead>
	      	<tbody>
	      		<?php  $_smarty_tpl->tpl_vars['permiso'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['permiso']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['permiso']->key => $_smarty_tpl->tpl_vars['permiso']->value) {
$_smarty_tpl->tpl_vars['permiso']->_loop = true;
?>
		        <tr>
		          	<td><?php echo $_smarty_tpl->tpl_vars['permiso']->value['nombre'];?>
</td>
		          	<td class="text-center">
		          		<input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['permiso']->value['id'];?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['permiso']->value['valor']==1) {?>checked<?php }?>/>
		          	</td>
		          	<td class="text-center">
		          		<input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['permiso']->value['id'];?>
" value="" <?php if ($_smarty_tpl->tpl_vars['permiso']->value['valor']=='') {?>checked<?php }?>/>
		          	</td>
		          	<td class="text-center">
		          		<input type="radio" name="perm_<?php echo $_smarty_tpl->tpl_vars['permiso']->value['id'];?>
" value="x" <?php if ($_smarty_tpl->tpl_vars['permiso']->value['valor']==="x") {?>checked<?php }?>/>
		          	</td>
		        </tr>
		        <?php } ?>
	      	</tbody>
	    </table>
		<?php }?>

		<input class="btn btn-success" type="submit" value="Guardar"/>

	</form>

</div><?php }} ?>
