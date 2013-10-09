<div>
	<table id="top_menu" cellspacing=0 cellpadding=0 >

		<tr>

			<?php foreach($menus as $key => $menu){ ?>
			<td <?=($menu['class'] != '' ? ' class="'.$menu['class'].'" ' : '');?> >
				<a href="<?=$menu['link'];?>" target="<?=$menu['target'];?>" >
					<?=$menu['title'];?>
				</a>
			</td>
			<?php } ?>

		</tr>

	</table>
</div>