<div class="right-box module module_<?php echo $module['type'].$module['css_class_sufix'];?>" >
	<div class="right-box-top" ></div>
		<div class="right-box-middle" >
			
			<?php if($module['show_title'] == 'yes'){ ?>
			<h4 class="module_title" ><?php echo $module['title'];?></h4>
			<?php } ?>
    
			<div class="content" ><?php echo $content;?></div>
			
		</div>
	<div class="right-box-bottom" ></div>
</div>