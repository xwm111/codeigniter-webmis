<table class="action">
	<tr>
		<td class="title"><?php echo $Menus['Ctitle']; ?></td>
		<td>
			<ul class="action_ct">
				<?php echo $Menus['actionHtml']; ?>
			</ul>
		</td>
	</tr>
</table>
<div class="line">&nbsp;</div>
<!-- Content -->
<table class="table_list">
	<tr class="title" id="admin_table">
		<td width="20"><a href="#" id="checkboxY"></a><a href="#" id="checkboxN"></a></td>
		<td>ID</td>
		<td><?php echo $this->lang->line('sys_admin_uname');?></td>
		<td><?php echo $this->lang->line('sys_admin_name');?></td>
		<td><?php echo $this->lang->line('sys_admin_state');?></td>
		<td><?php echo $this->lang->line('sys_admin_perm');?></td>
	</tr>
	<tbody id="listBG">
	<?php foreach($list as $val){?>
	<tr>
		<td><input type="checkbox" value="<?php echo $val->id;?>" /></td>
		<td><?php echo $val->id;?></td>
		<td><?php echo keyHH($val->uname, @$key['uname']);?></td>
		<td><?php echo keyHH($val->name, @$key['name']);?></td>
		<td><?php echo $val->state==1?'<span class="green">启用</span>':'<span class="red">禁用</span>';?></td>
		<td><a href="#" id="editPerm<?php echo $val->id;?>" title="<?php echo $val->perm;?>" onclick="editPerm(<?php echo $val->id;?>)">编辑</a></td>
	</tr>
	<?php } ?>
	</tbody>
</table>
<div class="page"><div class="pagelist"><?php echo $page.'<span>'.$total.'</span>'; ?></div></div>
<!-- Content End -->