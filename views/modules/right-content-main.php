<div class="right_content module module_<?php echo $module['type'].$module['css_class_sufix'];?>" >
	<div class="right_content_top" ></div>
		<div class="right_content_back" >
			
			<?php if($module['show_title'] == 'yes'){ ?>
    	<h4 class="title" ><?php echo $module['title'];?></h4>
    	<?php } ?>
    
    	<div class="content" ><?php echo $content;?></div>
		</div>
	<div class="right_content_bottom" ></div>
</div>