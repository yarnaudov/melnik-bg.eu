<div class="like-buttons" >
	<div class="pull-left" >
		<a href="" class="send-change-request" title="Предложете промяна на статията" >е</a>
		<div id="send-change-request-dialog" title="Предложете промяна на статията" style="display: none;" >
			<h3><?php echo $article['title']; ?></h3>
			<?php echo $this->Module->load('send-change-request'); ?>
		</div>
	</div>
	<div class="pull-right" >
		<!--
		<span class="facebook-share" >
			<a href="#" 
			  onclick="
			    window.open(
			      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
			      'facebook-share-dialog', 
			      'width=626,height=436'); 
			    return false;">
			  Share on Facebook
			</a>
		</span>		
		-->
		<span class="google_plus" >
			<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
			<g:plusone size="medium"></g:plusone>
		</span>
		<span class="facebook" >
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/bg_BG/all.js#xfbml=1";
				fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-like" data-layout="button_count" data-show-faces="true" data-send="false"></div>
		</span>
	</div>
</div>