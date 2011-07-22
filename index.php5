<?php 
header('Content-Type: text/html; charset=utf-8');

$jsonFileIsReadable = false;

if (file_exists('./social-networks.json') && is_readable('./social-networks.json')) {
	
	$jsonFileIsReadable = false;
	
	$fileContent = file_get_contents('./social-networks.json');
	$socialNetworks = json_decode($fileContent);
	
}

?>
<!DOCTYPE html>
<html>

<!-- 
	Thank you for viewing my sourcecode.
 	Do you like it? Great, I like it too.
 	
 	Please +1 my website at the top right of this page.
 	
 	If you want to donate my work, you can either donate via paypal,
 	or you can spend me a beer at the next barcamp (or DevCamp, ...).
 	Just leave me a note (see humans.txt!)
 	 
 	Thanks!
 
 	THIS SOURCE CODE IS LICENSED UNDER THE 
 	 		
 	 		CREATIVE COMMONS ATTRIBUTION-NONCOMMERCIAL-SHAREALIKE 3.0 UNPORTED LICENSE
 	 		(CC-BY-NC-SA, http://creativecommons.org/licenses/by-nc-sa/3.0/)
 	 
 	PLEASE RESPECT THE COPYRIGHT.
-->

	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
		<title>sebastianroming.de</title>
		<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' />
		<link rel='stylesheet' type='text/css' href='./common/sebastianroming.css?<?php echo time(); ?>' />
		<script type='text/javascript' src='https://apis.google.com/js/plusone.js'></script>
		<link type='text/plain' rel='author' href='http://www.sebastianroming.de/humans.txt' />
		<link rel='shortcut icon' href='./common/favicon.ico' type='image/x-icon' />
		
		<!--[if IE]>
			<link rel='shortcut icon' href='./common/favicon.ico' type='image/vnd.microsoft.icon' />
			<link rel='stylesheet' type='text/css' href='./common/sebastianroming.ie.css?<?php echo time(); ?>' />
			
			<![if lte IE 7]>
				<link rel='stylesheet' type='text/css' href='./common/sebastianroming.ieLt7.css?<?php echo time(); ?>' />
			<![endif]>
			
		<![endif]-->
		
	</head>
	
	<body>
	
		<div id='plusone'>
			<g:plusone size='small'></g:plusone>
		</div>
		
		<div id='main'>
			<div id='inner'>
				<h1>Sebastian</h1>
				<h2>Roming</h2>
				<div id='subtitle'>
					Software Developer &amp; PHP Evangelist
				</div>
				<div id='social-networks'>
					<ul>
						<?php 
						if ($jsonFileIsReadable === true) {
							
							foreach ($socialNetworks as $socialNetwork) {
								
								echo "<li class='" . $socialNetwork->css_class . "'><a href='" . $socialNetwork->url . "' rel='external'>" . $socialNetwork->title . "</a></li>";
								
							}
							
						} else {
							
							/**
							 * Fallback
							 */
							
							echo "<li class='monkey'>Sorry, something went wrong :(</li>";
							
						}
						?>
					</ul>
				</div>
			</div>
		</div>
		
		<script type='text/javascript'>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-2854605-7']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	
	</body>

</html>