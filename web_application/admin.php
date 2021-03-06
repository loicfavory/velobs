<?php header('Content-Type: text/html; charset=UTF-8');
	session_start();
	include 'lib/php/key.php';
	include 'lib/php/commonfunction.php';
	if (isset($_SESSION['user']) && isset($_SESSION['type'])) {
		switch ($_SESSION['type']) {
			case '1':
?>
<!DOCTYPE >
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>VelObs 2 Pieds 2 Roues [Admin]</title>
		<link rel="shortcut icon" type="image/png" href="resources/favicon/favicon.ico" />
	</head>
	<body>
		<div id="loading"> 
			<div class="loading-indicator">
				<img alt="mooveatis" src="resources/images/mooveatis32.png" width="32" height="32" style="margin-right:8px;float:left;vertical-align:top;"/>VelObs - <a href="http://www.mooveatis.fr" target="_blank">Mooveatis</a><br /><span id="loading-msg">Loading styles and images ...</span>
			</div>
			<link rel="stylesheet" type="text/css" href="resources/css/icon.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/ext-3.4.0/resources/css/ext-all.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/ext-3.4.0/resources/css/xtheme-gray.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/GeoExt/resources/css/geoext-all.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/GeoExt/resources/css/gxtheme-gray.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/GeoExt/resources/css/popup.css" />
			<link rel="stylesheet" type="text/css" href="resources/css/admin.css" />
			<link rel="stylesheet" type="text/css" href="resources/css/iconmarker.css" />
			<link rel="stylesheet" type="text/css" href="resources/css/fileuploadfield.css" />

			<!--<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading Google Maps API...';</script> 
			<script src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>-->
	
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading ExtJS...';</script>
			<script type="text/javascript" src="lib/js/framework/ext-3.4.0/adapter/ext/ext-base.js"></script>
			<script type="text/javascript" src="lib/js/framework/ext-3.4.0/ext-all.js"></script>
	
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading geographic components...';</script>
			<script type="text/javascript" src="lib/js/framework/OpenLayers-2.11/OpenLayers.js"></script>
			<script type="text/javascript" src="lib/js/framework/GeoExt/script/GeoExt.js"></script>
	
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading language...';</script>
			<script type="text/javascript" src="lib/js/framework/ext-3.4.0/src/locale/ext-lang-<?php echo $_SESSION['extension_language']; ?>.js"></script>
			<script type="text/javascript" src="lib/js/translation_<?php echo $_SESSION['extension_language']; ?>.js"></script>
			
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading extensions...';</script>
			<script type="text/javascript" src="lib/js/framework/ux/GeoNamesSearchCombo.js"></script>
			<script type="text/javascript" src="lib/js/admin/baselayerlist.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/SearchField.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/FileUploadField.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/IconCombo.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/CheckColumn.js"></script>
	
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading geometry...';</script>
			
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading application...';</script>
			<script type="text/javascript" src="lib/js/admin/modeemploi1.js"></script>
			<script type="text/javascript" src="lib/js/admin/icon1.js"></script>
			<script type="text/javascript" src="lib/js/admin/config1.js"></script>
			<script type="text/javascript" src="lib/js/admin/status1.js"></script>
			<script type="text/javascript" src="lib/js/admin/users1.js"></script>
			<script type="text/javascript" src="lib/js/admin/priorite1.js"></script>
			<script type="text/javascript" src="lib/js/admin/commune1.js"></script>
			<script type="text/javascript" src="lib/js/admin/pole1.js"></script>
			<script type="text/javascript" src="lib/js/admin/quartier1.js"></script>
			<script type="text/javascript" src="lib/js/admin/basket1.js"></script>
			<script type="text/javascript" src="lib/js/admin/poi1.js"></script>
			<script type="text/javascript" src="lib/js/admin/subcategory1.js"></script>			
			<script type="text/javascript" src="lib/js/admin/category1.js"></script>
			<script type="text/javascript" src="lib/js/admin/mapadmin1.js"></script>
			<script type="text/javascript" src="lib/js/admin/main1.js"></script>
	 
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Initialization...';</script> 
		</div>
		<div id="header">
			<div id="disconnect" title="<?php echo getTranslation($_SESSION['id_language'],'DISCONNECT'); ?>" onclick="self.location.href ='lib/php/admin/disconnect.php';"></div>
			<div id="gotopublicmap" title=<?php echo getTranslation($_SESSION['id_language'],'OPENPUBLICMAP'); ?> onclick="window.open('./');"></div>
			<div id="hellouser""><?php if ($_SESSION['nom'] != '') {echo "[".$_SESSION['nom']."]";} ?></div>
			<div id="update" style="display:none;"></div>
		</div>
	</body>
</html>
<?php			
				break;
			case '2':
?>
<!DOCTYPE >
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>VelObs 2 Pieds 2 Roues [Admin]</title>
		<link rel="shortcut icon" type="image/png" href="resources/favicon/favicon.ico" />
	</head>
	<body>
		<div id="loading"> 
			<div class="loading-indicator">
				<img alt="mooveatis" src="resources/images/mooveatis32.png" width="32" height="32" style="margin-right:8px;float:left;vertical-align:top;"/>VelObs - <a href="http://www.mooveatis.fr" target="_blank">Mooveatis</a><br /><span id="loading-msg">Loading styles and images ...</span>
			</div>
			<link rel="stylesheet" type="text/css" href="resources/css/icon.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/ext-3.4.0/resources/css/ext-all.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/ext-3.4.0/resources/css/xtheme-gray.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/GeoExt/resources/css/geoext-all.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/GeoExt/resources/css/gxtheme-gray.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/GeoExt/resources/css/popup.css" />
			<link rel="stylesheet" type="text/css" href="resources/css/admin.css" />
			<link rel="stylesheet" type="text/css" href="resources/css/iconmarker.css" />
			<link rel="stylesheet" type="text/css" href="resources/css/fileuploadfield.css" />

			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading Google Maps API...';</script> 
			<!--<script src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>-->
	
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading ExtJS...';</script>
			<script type="text/javascript" src="lib/js/framework/ext-3.4.0/adapter/ext/ext-base.js"></script>
			<script type="text/javascript" src="lib/js/framework/ext-3.4.0/ext-all.js"></script>
	
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading geographic components...';</script>
			<script type="text/javascript" src="lib/js/framework/OpenLayers-2.11/OpenLayers.js"></script>
			<script type="text/javascript" src="lib/js/framework/GeoExt/script/GeoExt.js"></script>
	
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading language...';</script>
			<script type="text/javascript" src="lib/js/framework/ext-3.4.0/src/locale/ext-lang-<?php echo $_SESSION['extension_language']; ?>.js"></script>
			<script type="text/javascript" src="lib/js/translation_<?php echo $_SESSION['extension_language']; ?>.js"></script>
			
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading extensions...';</script>
			<script type="text/javascript" src="lib/js/framework/ux/GeoNamesSearchCombo.js"></script>
			<script type="text/javascript" src="lib/js/admin/baselayerlist.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/SearchField.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/FileUploadField.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/IconCombo.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/CheckColumn.js"></script>
	
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading geometry...';</script>
			
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading application...';</script>
			<script type="text/javascript" src="lib/js/admin/modeemploi2.js"></script>
			<script type="text/javascript" src="lib/js/admin/poi2.js"></script>
			<script type="text/javascript" src="lib/js/admin/main2.js"></script>
	 
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Initialization...';</script> 
		</div>
		<?php
            if ($_SESSION['header_logo'] == 1) {
                echo '<div id="headergt">';
            } else if ($_SESSION['header_logo'] == 2) {
                echo '<div id="header" style="background:url(./resources/images/logowithsico.png) no-repeat;">';
            } else if ($_SESSION['header_logo'] == 3) {
                echo '<div id="header" style="background:url(./resources/images/logowithmur.png) no-repeat;">';
            } else {
                echo '<div id="header" style="background:url(./resources/images/logo.png) no-repeat;">';
            }
        ?>
			<div id="disconnect" title="<?php echo getTranslation($_SESSION['id_language'],'DISCONNECT'); ?>" onclick="self.location.href ='lib/php/admin/disconnect.php';"></div>
			<div id="gotopublicmap" title=<?php echo getTranslation($_SESSION['id_language'],'OPENPUBLICMAP'); ?> onclick="window.open('./');"></div>
			<div id="hellouser"><?php if ($_SESSION['nom'] != '') {echo "[".$_SESSION['nom']."]";} ?></div>
			<div id="update" style="display:none;"></div>
		</div>
	</body>
</html>
<?php
				break;
			case '3':
?>
<!DOCTYPE >
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>VelObs 2 Pieds 2 Roues [Admin]</title>
		<link rel="shortcut icon" type="image/png" href="resources/favicon/favicon.ico" />
	</head>
	<body>
		<div id="loading"> 
			<div class="loading-indicator">
				<img alt="mooveatis" src="resources/images/mooveatis32.png" width="32" height="32" style="margin-right:8px;float:left;vertical-align:top;"/>VelObs - <a href="http://www.mooveatis.fr" target="_blank">Mooveatis</a><br /><span id="loading-msg">Loading styles and images ...</span>
			</div>
			<link rel="stylesheet" type="text/css" href="resources/css/icon.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/ext-3.4.0/resources/css/ext-all.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/ext-3.4.0/resources/css/xtheme-gray.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/GeoExt/resources/css/geoext-all.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/GeoExt/resources/css/gxtheme-gray.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/GeoExt/resources/css/popup.css" />
			<link rel="stylesheet" type="text/css" href="resources/css/admin.css" />
			<link rel="stylesheet" type="text/css" href="resources/css/iconmarker.css" />
			<link rel="stylesheet" type="text/css" href="resources/css/fileuploadfield.css" />

			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading Google Maps API...';</script> 
			<!--<script src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>-->
	
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading ExtJS...';</script>
			<script type="text/javascript" src="lib/js/framework/ext-3.4.0/adapter/ext/ext-base.js"></script>
			<script type="text/javascript" src="lib/js/framework/ext-3.4.0/ext-all.js"></script>
	
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading geographic components...';</script>
			<script type="text/javascript" src="lib/js/framework/OpenLayers-2.11/OpenLayers.js"></script>
			<script type="text/javascript" src="lib/js/framework/GeoExt/script/GeoExt.js"></script>
	
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading language...';</script>
			<script type="text/javascript" src="lib/js/framework/ext-3.4.0/src/locale/ext-lang-<?php echo $_SESSION['extension_language']; ?>.js"></script>
			<script type="text/javascript" src="lib/js/translation_<?php echo $_SESSION['extension_language']; ?>.js"></script>
			
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading extensions...';</script>
			<script type="text/javascript" src="lib/js/framework/ux/GeoNamesSearchCombo.js"></script>
			<script type="text/javascript" src="lib/js/admin/baselayerlist.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/SearchField.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/FileUploadField.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/IconCombo.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/CheckColumn.js"></script>
	
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading geometry...';</script>
			
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading application...';</script>
			<script type="text/javascript" src="lib/js/admin/modeemploi3.js"></script>
			<script type="text/javascript" src="lib/js/admin/mapadmin3.js"></script>
			<script type="text/javascript" src="lib/js/admin/poi3.js"></script>

			<script type="text/javascript" src="lib/js/admin/main3.js"></script>
	 
			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Initialization...';</script> 
		</div>
        <?php
            if ($_SESSION['header_logo'] == 1) {
                echo '<div id="header" style="background:url(./resources/images/logowithgt.png) no-repeat;">';
            } else if ($_SESSION['header_logo'] == 2) {
                echo '<div id="header" style="background:url(./resources/images/logowithsico.png) no-repeat;">';
            } else if ($_SESSION['header_logo'] == 3) {
                echo '<div id="header" style="background:url(./resources/images/logowithmur.png) no-repeat;">';
            } else {
                echo '<div id="header" style="background:url(./resources/images/logo.png) no-repeat;">';
            }
        ?>
			<div id="disconnect" title="<?php echo getTranslation($_SESSION['id_language'],'DISCONNECT'); ?>" onclick="self.location.href ='lib/php/admin/disconnect.php';"></div>
			<div id="gotopublicmap" title=<?php echo getTranslation($_SESSION['id_language'],'OPENPUBLICMAP'); ?> onclick="window.open('./');"></div>
			<div id="hellouser"><?php if ($_SESSION['nom'] != '') {echo "[".$_SESSION['nom']."]";} ?></div>
			<div id="update" style="display:none;"></div>
		</div>
	</body>
</html>			
<?php
				break;
		    case '4':
?>
<!DOCTYPE >
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>VelObs 2 Pieds 2 Roues [Admin]</title>
		<link rel="shortcut icon" type="image/png" href="resources/favicon/favicon.ico" />
	</head>
	<body>
		<div id="loading">
			<div class="loading-indicator">
                <img alt="mooveatis" src="resources/images/mooveatis32.png" width="32" height="32" style="margin-right:8px;float:left;vertical-align:top;"/>VelObs - <a href="http://www.mooveatis.fr" target="_blank">Mooveatis</a><br /><span id="loading-msg">Loading styles and images ...</span>
            </div>
			<link rel="stylesheet" type="text/css" href="resources/css/icon.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/ext-3.4.0/resources/css/ext-all.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/ext-3.4.0/resources/css/xtheme-gray.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/GeoExt/resources/css/geoext-all.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/GeoExt/resources/css/gxtheme-gray.css" />
			<link rel="stylesheet" type="text/css" href="lib/js/framework/GeoExt/resources/css/popup.css" />
			<link rel="stylesheet" type="text/css" href="resources/css/admin.css" />
			<link rel="stylesheet" type="text/css" href="resources/css/admin_sico.css" />
			<link rel="stylesheet" type="text/css" href="resources/css/iconmarker.css" />
			<link rel="stylesheet" type="text/css" href="resources/css/fileuploadfield.css" />

			<!--<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading Google Maps API...';</script>
			<script src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>-->

			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading ExtJS...';</script>
			<script type="text/javascript" src="lib/js/framework/ext-3.4.0/adapter/ext/ext-base.js"></script>
			<script type="text/javascript" src="lib/js/framework/ext-3.4.0/ext-all.js"></script>

			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading geographic components...';</script>
			<script type="text/javascript" src="lib/js/framework/OpenLayers-2.11/OpenLayers.js"></script>
			<script type="text/javascript" src="lib/js/framework/GeoExt/script/GeoExt.js"></script>

			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading language...';</script>
			<script type="text/javascript" src="lib/js/framework/ext-3.4.0/src/locale/ext-lang-<?php echo $_SESSION['extension_language']; ?>.js"></script>
			<script type="text/javascript" src="lib/js/translation_<?php echo $_SESSION['extension_language']; ?>.js"></script>

			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading extensions...';</script>
			<script type="text/javascript" src="lib/js/framework/ux/GeoNamesSearchCombo.js"></script>
			<script type="text/javascript" src="lib/js/admin/baselayerlist.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/SearchField.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/FileUploadField.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/IconCombo.js"></script>
			<script type="text/javascript" src="lib/js/framework/ux/CheckColumn.js"></script>

			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading geometry...';</script>

			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Loading application...';</script>
            <script type="text/javascript" src="lib/js/admin/modeemploi4.js"></script>
            <script type="text/javascript" src="lib/js/admin/commune1.js"></script>
            <script type="text/javascript" src="lib/js/admin/pole1.js"></script>
            <script type="text/javascript" src="lib/js/admin/basket4.js"></script>
            <script type="text/javascript" src="lib/js/admin/poi4.js"></script>
            <script type="text/javascript" src="lib/js/admin/mapadmin1.js"></script>
            <script type="text/javascript" src="lib/js/admin/main4.js"></script>

			<script type="text/javascript">document.getElementById('loading-msg').innerHTML = 'Initialization...';</script>
		</div>
		<?php
            if ($_SESSION['header_logo'] == 1) {
                echo '<div id="headergt">';
            } else if ($_SESSION['header_logo'] == 2) {
                echo '<div id="header" style="background:url(./resources/images/logowithsico.png) no-repeat;">';
            } else if ($_SESSION['header_logo'] == 3) {
                echo '<div id="header" style="background:url(./resources/images/logowithmur.png) no-repeat;">';
            } else {
                echo '<div id="header" style="background:url(./resources/images/logo.png) no-repeat;">';
            }
        ?>
			<div id="disconnect" title="<?php echo getTranslation($_SESSION['id_language'],'DISCONNECT'); ?>" onclick="self.location.href ='lib/php/admin/disconnect.php';"></div>
			<div id="gotopublicmap" title=<?php echo getTranslation($_SESSION['id_language'],'OPENPUBLICMAP'); ?> onclick="window.open('./');"></div>
			<div id="hellouser"><?php if ($_SESSION['nom'] != '') {echo "[".$_SESSION['nom']."]";} ?></div>
			<div id="update" style="display:none;"></div>
		</div>
	</body>
</html>
<?php
		        break;
			default:
				break;
		}
	} else {
	    if (isset($_GET['id']) && $_GET['id'] != '') {
            header('Location: ./admin.html?id='.$_GET['id']);
	    } else {
	        header('Location: ./admin.html');
	    }

	}
?>