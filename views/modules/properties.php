
<div>

    <?php if(isset($error)){ ?>
    <div class="error" >
        <?php echo $error;?>
    </div>
    <?php } ?>
    
 
    <?php if(isset($data)){
	      foreach($data as $property){ ?>
		  
		<div class="sight" >
			<div class="sight_img" >
				<a href="<?=$property['url'];?>" target="blank" >
					<img src="<?php echo $property['img_url'];?>" >
				</a>
			</div>
			<div class="sight_text" >
				<div class="sight_title">
					<a href="<?=$property['url'];?>" target="blank" ><?=$property['type'];?></a>
					<span style="float:right;">
						<span style="color:#693E34;font-size:13px;">Обява от:</span>
						<a target="_blank" href="http://<?php echo $property['site']; ?>" style="text-decoration: underline;"><?php echo $property['site']; ?></a>
					</span>
				</div>
				<div>
					<?php echo $property['info']; ?>
				</div>
			</div>
		</div>
		  
	<?php } } ?>
    
</div>
