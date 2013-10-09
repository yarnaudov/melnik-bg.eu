<table id="general_menu" cellspacing=0 cellpadding=0 >

	<tr>

		<?php foreach($menus as $key => $menu){
				$menu['class'] == 'current' ? $menu['class'] = 'general_menu_active' : ''; ?>
		<td class="<?=$menu['class'];?>" >
			<a href="<?=$menu['link'];?>" target="<?=$menu['target'];?>" onmouseover="if(this.parentNode.className=='general_menu_active'){
																						active_menu='true';
																					  }
																					  else{
																						active_menu='false';
																						this.parentNode.className='general_menu_active';
																					  }"  
																					  onmouseout="if(active_menu!='true'){
																					    this.parentNode.className='';
																					  }" >
				<?=$menu['title'];?>
			</a>
		</td>
		<?php } ?>

	</tr>

</table>