<div class="article" >
    
    <?php if($article['show_title'] == 'yes'){ ?>
    <h4 class="article_titile" ><?=$article['title'];?></h4>
    <?php } ?>
    
    <div class="article_content" >
	
				<?php if(isset($article['params']['images'][0]) && is_array($article['params']['images'][0])){ ?>
				<img src="<?php echo $this->Image->getImageUrl($article['params']['images'][0]['id'], 250, 250); ?>" class="article-first-image" >
				<?php }elseif(isset($article['params']['images'][0])){ ?>
				<img src="<?php echo base_url($article['params']['images'][0]); ?>" class="article-first-image" >
				<?php } ?>
	
        <?=$article['text'];?>
        
    </div>
		
		<?php echo $this->load->view(VIEWS_DIR.'like-buttons'); ?>
		
				<?php if(isset($article['params']['images']) && count($article['params']['images']) > 1){ ?>
				
				<div class="article-gallery" >
		
					<ul>
					<?php foreach($article['params']['images'] as $image){ ?>
						
						<li>
						<?php if(is_array($image)){ ?>
						<a href="<?php echo $this->Image->getImageUrl($image['id']); ?>" title="<?php echo $image['title']; ?>" rel="lightbox[profile]" data-lightbox="article" >
							<img src="<?php echo $this->Image->getImageUrl($image['id'], 136, 100); ?>" >
						</a>
						<?php }else{ ?>
						<a href="<?php echo base_url($image); ?>" rel="lightbox[profile]" >
							<img src="<?php echo base_url($image); ?>" >
						</a>
						<?php } ?>
						</li>
					
					<?php }	?>
					</ul>
								
				</div>
					
				<?php } ?>
		
				<?php if(isset($article['field1']) && !empty($article['field1']->lat) && !empty($article['field1']->lng)){ ?>
				<div id="article-map" ></div>
				<?php $this->jquery_ext->add_library('https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false');
							$this->jquery_ext->add_script("	
								var mapOptions = {
								    zoom: parseInt(".$article['field1']->zoom."),
								    center: new google.maps.LatLng(".$article['field1']->lat.", ".$article['field1']->lng."),
								    mapTypeId: google.maps.MapTypeId.ROADMAP
								};
			
								var map = new google.maps.Map(document.getElementById('article-map'), mapOptions);
			
								var marker = new google.maps.Marker({
								    position: new google.maps.LatLng(".$article['field1']->lat.", ".$article['field1']->lng."),
								    map: map,
								    title: '".$article['title']."'
								});
							"); ?>
				<?php } ?>
   
		    <?php if(isset($article['params']['show_comments']) && $article['params']['show_comments'] == 'yes'){ ?>
						<h3><?php echo lang('label_comments'); ?></h3>
						<div class="fb-comments" data-href="<?php echo current_url(); ?>" data-numposts="5"></div>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/bg_BG/all.js#xfbml=1&appId=151974345013596";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>

			      <?php $this->load->view('content/article_comments'); ?>
			      
		    <?php } ?>
 
    
</div>
