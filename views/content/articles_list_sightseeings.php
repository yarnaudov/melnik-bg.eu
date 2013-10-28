<?php
foreach($articles as $article){  
	$categories[$article['categories'][0]][] = $article;
}
?>
		
<?php foreach($categories as $category => $articles){ ?>
		
	<h3 class="content_title sights_header sights_header_no_margin" ><?php echo $this->Category->getDetails($category, 'title'); ?></h3>
		
	<?php foreach($articles as $article){   
			  $article['text'] = strip_tags($article['text']); ?>

	<div class="sight" >
		<div class="sight_img" >
			<a href="<?=$this->menu_link.'/article:'.$article['alias'];?>" >
				<?php if(isset($article['params']['images'][0]) && is_array($article['params']['images'][0])){ ?>
				<img src="<?=$this->Image->getImageUrl($article['params']['images'][0]['id'], 150, 110);?>" >
				<?php }elseif(isset($article['params']['images'][0])){ ?>
				<img src="<?=base_url($article['params']['images'][0]);?>" >
				<?php }else{ ?>
				<img src="<?=base_url(IMAGES_DIR.'no_photo.jpg');?>" >
				<?php } ?>
			</a>
		</div>
		<div class="sight_text" >
			<div class="sight_title">
				<a href="<?=$this->menu_link.'/article:'.$article['alias'];?>" ><?=$article['title'];?></a>
			</div>
			<div>
				<?=mb_strlen($article['text']) > 300 ? mb_substr($article['text'], 0, 300).' ...' : $article['text'];?>
			</div>
		</div>
	</div>

	<?php } ?>

<?php } ?>