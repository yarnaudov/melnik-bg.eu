<div class="like-buttons" >
	<div class="pull-left" >
		<!--
		<a href="" class="send-change-request" title="Предложете промяна на статията" >Предложете промяна</a>
		<div id="send-change-request-dialog" title="Предложете промяна на статията" style="display: none;" >
			<div class="content-msg" ></div>
			<div class="content-form" ><?php echo $this->Module->load('send-change-request'); ?></div>
			<iframe id="send-change-request-iframe" name="send-change-request-iframe" src="#" style="display: none;" ></iframe>
		</div>
		-->
	</div>
	<div class="pull-right" >		
		<span class="like-button google_plus" >
			<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
			<g:plusone size="medium"></g:plusone>
		</span>
		<span class="like-button facebook" >
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
		<?php if('bg' == get_lang()){ ?>
		<span class="like-button svejo" >
			<script type="text/javascript" src="http://svejo.net/button.js"></script>
			<div class="svejo-button" data-href="<?php echo current_url(); ?>" data-size="compact"></div>
		</span>
		<?php } ?>
		<?php if('ru' == get_lang()){ ?>
		<span class="like-button vk" >
			<!-- Put this script tag to the <head> of your page -->
			<script type="text/javascript" src="//vk.com/js/api/openapi.js?101"></script>

			<script type="text/javascript">
			  VK.init({apiId: API_ID, onlyWidgets: true});
			</script>

			<!-- Put this div tag to the place, where the Like block will be -->
			<div id="vk_like"></div>
			<script type="text/javascript">
			VK.Widgets.Like("vk_like", {type: "button", height: 20});
			</script>
		</span>
		<?php } ?>
	</div>
</div>