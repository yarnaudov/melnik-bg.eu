
<?php
foreach($articles as $article){  
	$categories[$article['categories'][0]][] = $article;
}
?>

<?php foreach($categories as $category => $articles){ ?>
        
    <?php if(count($categories) > 1){ ?>
    <div class="category-list" >
		<h3 class="content_title" ><?php echo $this->Category->getDetails($category, 'title'); ?></h3>
		<?php } ?>
        
		<?php foreach($articles as $article){   
			      $article['text'] = strip_tags($article['text']); ?>
		
		<div class="item" >
		
			<div class="item-image" >
				<a href="<?=$this->menu_link.'/article:'.$article['alias'];?>" >
					<?php if(isset($article['params']['images'][0]) && is_array($article['params']['images'][0])){ ?>
					<img src="<?=$this->Image->getImageUrl($article['params']['images'][0]['id'], 150, 150);?>" >
					<?php }elseif(isset($article['params']['images'][0])){ ?>
					<img src="<?=base_url($article['params']['images'][0]);?>" >
					<?php }else{ ?>
					<img src="<?=base_url(IMAGES_DIR.'no_photo.jpg');?>" >
					<?php } ?>
				</a>		
			</div>
			
			<div class="item-content" >
				<div class="item-title">
					<a href="<?=$this->menu_link.'/article:'.$article['alias'];?>" ><?=$article['title'];?></a>
				</div>
				<div class="item-text">
					<?=mb_strlen($article['text']) > 300 ? mb_substr($article['text'], 0, 300).' ...' : $article['text'];?>
				</div>
			</div>
			
		</div>
		
		<?php } ?>
		
		<?php if(count($categories) > 1){ ?>
		</div>
		<?php } ?>

<?php } ?>