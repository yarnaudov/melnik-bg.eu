<?php
	define('TEMPLATE_DIR', TEMPLATES_DIR.'/'.$this->Setting->getTemplate('main').'/');
  define('IMAGES_DIR', TEMPLATE_DIR.'images/');
  define('VIEWS_DIR', '../../'.TEMPLATE_DIR.'views/');
	
	$this->Content->templates['main'] = VIEWS_DIR.'content/main';
	$this->Content->templates['article'] = VIEWS_DIR.'content/article';
	$this->Content->templates['articles_list'] = VIEWS_DIR.'content/articles_list';
	$this->Content->templates['gallery'] = array('image' => VIEWS_DIR.'content/gallery/image', 'images' => VIEWS_DIR.'content/gallery/images');
	$this->Content->templates['contact_forms'] = array('contact_form' => VIEWS_DIR.'content/contact_forms/contact_form');
	
	$this->Module->templates['mod_language_switch'] = 'views/modules/language-switch';
	$this->Module->templates['mod_breadcrumb'] = 'views/modules/navigation';
	$this->Module->templates['top-menu'] = array('mod_menu' => 'views/modules/top-menu');
	$this->Module->templates['main-menu'] = array('mod_menu' => 'views/modules/main-menu');
?>
<!DOCTYPE html>
<html>
	
	<!--verify_people_group2664931306775209-->
		
	<head>

		<include type="header" />
		
		<link rel="shortcut icon" type="image/ico" href="http://melnik-bg.eu/img/icon.png" />
		<link rel="stylesheet" href="<?=base_url(TEMPLATE_DIR.'css/style.css');?>" type="text/css" media="all" />

	</head>
		
	<body>

		<div class="main">

			<div class="top_back">
				<div style="width: 912px; margin: auto;">
					<div class="top_text" style="float:left;">							
						<include type="module" name="language-switch" />
					</div>
						
					<div class="top_back_menu">
						<include type="module" name="top-menu" />
					</div>
					
				</div>
					
			</div>

			<div class="main_content">
				<div id="topleft">
					<include type="module" name="main-menu" />
				</div>

				<div id="headers">

					<include type="module" name="image" />

					<div id="crumbnavidation" >
						<include type="module" name="navigation" />
					</div>

				</div>

				<div class="right_content" style="margin-top: -24px;" >
					<div class="right_content_top" ></div>
					<div class="right_content_back" >
						<div style="overflow:hidden;width: 248px; height: 194px;" >
							<div id="NetweatherContainer" style="height: 220px; margin-top: -20px;" >
								<script type="text/javascript" src="http://netweather.accuweather.com/adcbin/netweather_v2/netweatherV2ex.asp?partner=netweather&amp;tStyle=green2&amp;logo=1&amp;zipcode=EUR|BG|BU020|MELNIK|&amp;lang=uke&amp;size=12&amp;theme=1&amp;metric=1&amp;target=blank"></script>
							</div>
						</div>
					</div>
					<div class="right_content_bottom" ></div>
				</div>
				
				<div class="main_content_left" >
					<include type="content" />
				</div>
					
				<div class="main_content_right">
					<include type="banner" name="right-content" />
					<include type="module" name="right-content" />
				</div>
				
			</div>

			<div class="footer_back">

				<div id="copyright">
					<span class="copyright_text" >
						Designed by <u><a href=\"contacts.php\">Yordan Arnaudov</a></u> - member of <u><a href=\"http://webrise.biz\" target=\"blank\">webrise</a></u> team<br/>&copy; 2010 Webrise
					</span>
				</div>
			</div>

		</div>

		<include type="js" />
		
		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-21431074-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
		
		<script  type="text/javascript">
		<!-- NACHALO NA TYXO.BG BROYACH -->
		d=document;
		d.write('<a href="http://www.tyxo.bg/?91199" title="Tyxo.bg counter" target="blank"><img width="0" height="0" border="0" alt="Tyxo.bg counter"');
		d.write(' src="http://cnt.tyxo.bg/91199?rnd='+Math.round(Math.random()*2147483647));
		d.write('&sp='+screen.width+'x'+screen.height+'&r='+escape(d.referrer)+'" /><\/a>');
		//-->
		</script>
		
	</body>
</html>
					