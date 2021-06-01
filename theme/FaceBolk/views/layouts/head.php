<!-- start: Web App Data-->
<link rel="manifest" href="<?= $this->theme->getBaseUrl(); ?>/ico/manifest.json">
<meta name="application-name" content="<?= \yii\helpers\Html::encode(Yii::$app->name) ?>">
<!-- end: Web App Data-->

<link rel="apple-touch-icon" sizes="180x180" href="<?= $this->theme->getBaseUrl(); ?>/ico/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= $this->theme->getBaseUrl(); ?>/ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= $this->theme->getBaseUrl(); ?>/ico/favicon-16x16.png">
<meta name="theme-color" content="#ffffff">

<!-- start: Apple Fullscreen and Webapp Title -->
<meta name="apple-mobile-web-app-title" content="<?= \yii\helpers\Html::encode(Yii::$app->name) ?>" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<!-- end: Apple Fullscreen and Webapp Title -->

<!-- start: Android Fullscreen -->
<meta name="mobile-web-app-capable" content="yes">
<!-- end: Android Fullscreen -->

<!-- dark theme switcher -->
<link rel="stylesheet" type="text/css" media="screen" title="light-theme" href="<?php echo $this->theme->getBaseUrl() . '/css/theme.css'; ?>">
<link rel="alternate stylesheet" type="text/css" media="screen" title="dark-theme" href="<?php echo $this->theme->getBaseUrl() . '/css/dark.css'; ?>">
<?php if(isset($_COOKIE["darktheme"]) && $_COOKIE["darktheme"] == "true"): ?>
	<script>
	(function switch_style ( css_title ){
		var i, link_tag ;
		for (i = 0, link_tag = document.getElementsByTagName("link") ;
		i < link_tag.length ; i++ ) {
		if ((link_tag[i].rel.indexOf( "stylesheet" ) != -1) &&
			link_tag[i].title) {
			link_tag[i].disabled = true ;
			if (link_tag[i].title == css_title) {
			link_tag[i].disabled = false ;
			}
		}
		}
	})('dark-theme');
	</script>
<?php endif; ?>

<script>
	function createCookie(name,value,days) {
		if (days) {
			var date = new Date();
			date.setTime(date.getTime()+(days*24*60*60*1000));
			var expires = "; expires="+date.toGMTString();
		}
		else var expires = "";
		document.cookie = name+"="+value+expires+"; path=/";
	}

	function readCookie(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}
		return null;
	}

	function eraseCookie(name) {
		createCookie(name,"",-1);
	}

	function toggleDarkMode(){
		if(readCookie('darktheme') == 'true'){
			console.log('don\'t strain your eyes');
			createCookie('darktheme', 'false', 9999999);
			location.reload(); 
		} else {
			console.log('dark as my soul, here we go!');
			createCookie('darktheme', 'true', 9999999);
			location.reload(); 
		}
	}
</script>


