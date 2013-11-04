<?php

	define('TEMPLATE_DIR', TEMPLATES_DIR.'/'.$this->Setting->getTemplate('main').'/');
	define('IMAGES_DIR', TEMPLATE_DIR.'images/');
	define('VIEWS_DIR', '../../'.TEMPLATE_DIR.'views/');
	
	$this->Module->templates['right-content1'] = array('main' => VIEWS_DIR.'modules/right-content-main');
	$this->Module->templates['right-content2'] = array('main' => VIEWS_DIR.'modules/right-content-main');	
	$this->Banner->templates['right-content1'] = array('main' => VIEWS_DIR.'banners/right-content-main');
	$this->Banner->templates['right-content2'] = array('main' => VIEWS_DIR.'banners/right-content-main');
	
?>
<!DOCTYPE html>
<html>
		
	<head>
		<include type="header" />		
		<link rel="shortcut icon" type="image/ico" href="<?php echo base_url(IMAGES_DIR.'icon.png'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url(TEMPLATE_DIR.'css/global.css'); ?>" type="text/css" media="all" />
		<link rel="stylesheet" href="<?php echo base_url(TEMPLATE_DIR.'css/style.css'); ?>" type="text/css" media="all" />
		<link href="<?php echo base_url(TEMPLATE_DIR.'/lightbox/css/lightbox.css');?>" rel="stylesheet" />
	</head>
		
	<body>

		<div id="main-container" >
		
			<div id="top" >			
				<div class="container" >				
					<div class="container-left language-switch" >
						<include type="module" name="language-switch" />
					</div>					
					<div class="container-right top-menu" >
						<include type="module" name="top-menu" />
					</div>				
				</div>			
			</div>
		
			<div id="middle" >
				<div class="container" >
					<div class="container-left" >					
						<div class="main-menu" >
							<include type="module" name="main-menu" />
						</div>						
						<include type="module" name="content-top" />
						<include type="content" />
						<include type="module" name="content-bottom" />						
					</div>
					<div class="container-right" >
						<include type="module" name="right-content1" />
						<include type="banner" name="right-content1" />
						<include type="module" name="right-content2" />
						<include type="banner" name="right-content2" />
					</div>	
				</div>
			</div>
			
			<div id="footer" >
				<div class="container" >
					<div class="container-left" >
						<div class="display-table" >
							<include type="module" name="footer-left" />
						</div>
					</div>
					<div class="container-right" >
						<span class="copyright" >
							Melnik-bg.eu &copy; 2010 - <?php echo date('Y'); ?>
							<br/>
							Designed by <a href="http://yvaweb.eu" >Yordan Arnaudov</a>
						</span>
						<include type="module" name="footer-right" />
					</div>	
				</div>
			</div>

		</div>
		
		<include type="js" />
		<script src="<?php echo base_url(TEMPLATE_DIR.'js/scripts.js');?>"></script>
		<script>
			var labelImage = "<?php echo lang('label_image'); ?>";
      var labelOf = "<?php echo lang('label_of'); ?>";
		</script>
		<script src="<?php echo base_url(TEMPLATE_DIR.'/lightbox/js/lightbox-2.6.min.js');?>"></script>		
		
	</body>
</html>
					