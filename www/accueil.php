<?php
	require_once('model/config.php');
	require_once('lib/nox/noxUtil.php');
	require_once("lib/patError.php");
	require_once("lib/patErrorManager.php");
	require_once("lib/patTemplate.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Vive la diététique : Nathalie Le Roux diététicienne diplomée et nutritionniste à Versailles, Yvelines - régime, équilibre et trouble alimentaire, consultation personnalisée</title>
<link href="style/accueil.css" rel="stylesheet" type="text/css" />
<link href="style/footer.css" rel="stylesheet" type="text/css" />
<meta name="google-site-verification" content="sehJrdY3QTBeakLb9XUic9uAk8J1pT_pXndjI-c9X6A" />
</head>

<body>
<div id="container">
	<div id="pageHeader">
		<h1><span>Vive la diététique</span></h1>
	</div>
	<div id="pageContent">
		<ul id="menu">
			<li>
				<a id="cabinet" href="cabinet.php" title="Cabinet">
				<span>Le cabinet</span></a>
			</li>
			<li>
				<a id="diet" href="cv.php" title="Nathalie Le Roux">
				<span>Nathalie Le Roux</span></a>
			</li>
			<!--
			<li>
				<a id="infonut" href="infos-nutritionnelles.php" title="Informations nutritionnelles">
				<span>Informations nutritionnelles, actualités et articles</span>
				</a>
			</li>
			-->
			<li>
				<a id="presentation" href="presentation.php" title="Présentation">
				<span>Présentation</span>
			</a>
			</li>
		</ul>
	</div>
	<?php
	
		$tmpl = new patTemplate();
		$tmpl->setBasedir( "view" );
		$tmpl->readTemplatesFromFile("footer.tpl");
		
		foreach($footerMenu as $menuEntry) {
			$tmpl->addVar("footer_entry", "ID", $menuEntry['id']);
			$tmpl->addVar("footer_entry", "LINK", $menuEntry['link']);
			$tmpl->addVar("footer_entry", "LABEL", nbsp($menuEntry['label']));
			$tmpl->parseTemplate("footer_entry", "a");
		}
		echo $tmpl->getParsedTemplate("footer");
	 
	?>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-13243569-1");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>
