<?php /* Smarty version Smarty-3.1.18, created on 2014-05-03 04:57:58
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/artesanus_/modules/usuarios/views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7788817995364176b0849f8-90545440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfee04fa3222f4c149b796e62e5ce6f0d7d7d87c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/artesanus_/modules/usuarios/views/index/index.tpl',
      1 => 1399085876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7788817995364176b0849f8-90545440',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5364176b1d8c47_11731651',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5364176b1d8c47_11731651')) {function content_5364176b1d8c47_11731651($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/roles">Roles</a>
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a>
</div>

<div class="bloque">
	<?php if (isset($_smarty_tpl->tpl_vars['usuarios']->value)&&count($_smarty_tpl->tpl_vars['usuarios']->value)) {?>
	<table class="table table-bordered">
      	<thead>
        	<tr>
          		<th># ID</th>
          		<th>Usuario</th>
          		<th>Role</th>
          		<th></th>
        	</tr>
      	</thead>
      	<tbody>
      		<?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>
	        <tr>
	          	<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
</td>
	          	<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['usuario'];?>
</td>
	          	<td><?php echo $_smarty_tpl->tpl_vars['usuario']->value['role'];?>
</td>
	          	<td class="text-center">

	          		<a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
usuarios/permisos/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
">
	          			<span class="glyphicon glyphicon-wrench"></span>
	          		</a>
	          	</td>
	        </tr>
	        <?php } ?>
      	</tbody>
    </table>
    <?php }?>
</div><?php }} ?>
