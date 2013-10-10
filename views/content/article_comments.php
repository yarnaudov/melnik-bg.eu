    
    <div class="comments" >
	
		<span style="margin-top: -25px;display: block;font-size: 18px;" >Коментари</span>
	
		<div class="comments_list" >
			
			<ol>
			
				<?php foreach($article['comments'] as $comment){ 
						$date_time = explode(" ", $comment['created_on']);
						$date = explode("-", $date_time[0]);
						$time = explode(":", $date_time[1]);
						$date_time = $date[2]."/".$date[1]."/".$date[0]." ".$time[0].":".$time[1]; ?>

				<li>
					<span class="name" ><?php echo $comment['name'];?></span>
					<span class="date" ><?php echo $date_time;?></span>
					<span class="comment" ><?php echo $comment['comment'];?></span>
				</li>

				<?php } ?>
			
			</ol>
			
			<?php if(count($article['comments']) == 0){
				echo lang('msg_no_comments');
			} ?>
			
		</div>
	
		<div class="comments_form" >
			
			<form name="comment" class="commentForm" action="<?php echo current_url();?>" method="post" >

			<input type="hidden" name="article_id" value="<?php echo $article['id'];?>" >

			<div>
				<label><?php echo lang('label_name');?>: *</label>
				<input type="text" name="name" class="required input" >
			</div>

			<div>
				<label><?php echo lang('label_comment');?>: *</label>
				<textarea name="comment" class="required input" ></textarea>
			</div>

			<div>
				<label>&nbsp;</label>
				<img id="siimage" src="<?php echo base_url();?>/plugins/securimage/securimage_show.php?sid=<?php echo md5(uniqid()) ?>" alt="CAPTCHA Image" />
				<object type="application/x-shockwave-flash" data="<?php echo base_url();?>/plugins/securimage/securimage_play.swf?bgcol=#ffffff&amp;icon_file=./images/audio_icon.gif&amp;audio_file=<?php echo base_url();?>/plugins/securimage/securimage_play.php" width="19" height="19" >
				<param name="movie" value="<?php echo base_url();?>/plugins/securimage/securimage_play.swf?bgcol=#ffffff&amp;icon_file=./images/audio_icon.gif&amp;audio_file=<?php echo base_url();?>/plugins/securimage/securimage_play.php" />
				</object>
				&nbsp;
				<a tabindex="-1" style="border-style: none;" href="#" id="refresh_image" title="Refresh Image" onclick="document.getElementById('siimage').src = '<?php echo base_url();?>/plugins/securimage/securimage_show.php?sid=' + Math.random(); this.blur(); return false">
				<img src="<?php echo base_url();?>plugins/securimage/images/refresh.gif" alt="Reload Image" onclick="this.blur()" align="bottom" border="0" />
				</a>
				<br />
			</div>

			<div>
				<label><?php echo lang('label_enter_code');?>: *</label>
				<input type="text" name="ct_captcha" class="required captcha_input input" />
			</div>

			<div class="buttons" >
				<label>&nbsp;</label>
				<button class="add_comment" name="add_comment" ><?php echo lang('label_add_comment');?></button>
				<button type="reset" ><?php echo lang('label_clear');?></button>
			</div>

			</form>
			
			<?php 
			$script = "$('.commentForm').validate({
				submitHandler: function(form) {

					var submit_form = true;

					if(form.ct_captcha){
					submit_form = check_captcha(form);
					}

					if(submit_form == true){
					$(form).append('<input type=\"hidden\" name=\"send\" value=\"1\" >');
					form.submit();             
					}

				}
				
				   });";
			$this->jquery_ext->add_script($script);
			?>
			
		</div>
	
    </div>