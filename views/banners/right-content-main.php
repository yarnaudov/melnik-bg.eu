<div class="right_content banner banner_<?php echo $banner['type'].$banner['css_class_sufix'];?>" >
	<div class="right_content_top" ></div>
		<div class="right_content_back" >
		
			<?php if(isset($$banner['show_title']) &&  $banner['show_title'] == 'yes'){ ?>
			<h3 class="title" ><?php echo $banner['title']; ?></h3>
			<?php } ?>

			<div class="content" ><?php echo $content;?></div>
			
		</div>
	<div class="right_content_bottom" ></div>
</div>