<?php /* Smarty version Smarty-3.1.18, created on 2014-05-03 04:57:37
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/artesanus_/modules/usuarios/views/acl/roles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10790234355364551884c502-92810348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '126520d52c1d211e85ced105e05e60d009bcef93' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/artesanus_/modules/usuarios/views/acl/roles.tpl',
      1 => 1399085824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10790234355364551884c502-92810348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53645518885d42_13382479',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'roles' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53645518885d42_13382479')) {function content_53645518885d42_13382479($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/">Regresar</a>
</div>

<div class="bloque">
	<?php if (isset($_smarty_tpl->tpl_vars['roles']->value)&&count($_smarty_tpl->tpl_vars['roles']->value)) {?>
	<table class="table table-bordered">
      	<thead>
        	<tr>
          		<th># ID</th>
          		<th>Role</th>
          		<th></th>
          		<th></th>
        	</tr>
      	</thead>
      	<tbody>
      		<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->_loop = true;
?>
	        <tr>
	          	<td><?php echo $_smarty_tpl->tpl_vars['role']->value['id_role'];?>
</td>
	          	<td><?php echo $_smarty_tpl->tpl_vars['role']->value['role'];?>
</td>
	          	<td class="text-center">

	          		<a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos_role/<?php echo $_smarty_tpl->tpl_vars['role']->value['id_role'];?>
">
	          			<span class="glyphicon glyphicon-wrench"></span>
	          		</a>
	          	</td>
	          	<td></td>
	        </tr>
	        <?php } ?>
      	</tbody>
    </table>
    <?php }?>
</div><?php }} ?>
