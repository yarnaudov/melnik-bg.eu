<div class="right-box banner banner_<?php echo $banner['type'].$banner['css_class_sufix'];?>" >
	<div class="right-box-top" ></div>
		<div class="right-box-middle" >
			
			<?php if($banner['show_title'] == 'yes'){ ?>
			<h4 class="banner_title" ><?php echo $banner['title'];?></h4>
			<?php } ?>
    
			<div class="content" ><?php echo $content;?></div>
			
		</div>
	<div class="right-box-bottom" ></div>
</div>