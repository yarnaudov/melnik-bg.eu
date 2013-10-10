<div class="article" >
    
    <?php if($article['show_title'] == 'yes'){ ?>
    <h4 class="sights_header" ><?=$article['title'];?></h4>
    <?php } ?>
    
    <div class="article_content" >
	
		<?php if(isset($article['params']['images'][0]) && is_array($article['params']['images'][0])){ ?>
		<img src="<?=$this->Image->getImageUrl($article['params']['images'][0]['id'], 150, 110);?>" class="first_image" >
		<?php }elseif(isset($article['params']['images'][0])){ ?>
		<img src="<?=base_url($article['params']['images'][0]);?>" >
		<?php } ?>
	
        <?=$article['text'];?>
		
		
		<?php 
		
		if(isset($article['params']['images'])){	
			echo "<div class=\"sights_images\" >\n";
			foreach($article['params']['images'] as $image){
			
				if(is_array($image)){
					echo "<img src=\"".$this->Image->getImageUrl($image['id'], 150, 110)."\" >\n";
				}
				else{
				
				}				
			
			}		
			echo "</div>\n";
		}
		
		?>
		
		
    </div>
   
    <?php if(isset($article['params']['show_comments']) && $article['params']['show_comments'] == 'yes'){
	      $this->load->view(VIEWS_DIR . 'content/article_comments');
          } ?>
    
</div>