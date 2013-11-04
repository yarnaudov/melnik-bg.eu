
<ul>
	<?php foreach($languages as $language){ ?>
	<li>
		<a title="<?=$language['title'];?>" href="<?=base_url($language['abbreviation'].'/'.$this->uri->uri_string);?>" >
			<img src="<?=base_url(IMAGES_DIR . '/flag_'.$language['abbreviation'].'.png');?>" >
		</a>
	</li>
	<?php } ?>
</ul>