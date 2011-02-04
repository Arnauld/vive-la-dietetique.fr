<?php
ob_start();
?>
<h1>Informations Nutritionnelles</h1>
[block style="cadre;nl" title="Bientôt" width="90%"]
<div style='text-align:center;'>
<big><strong>L'eau, la vie</strong></big>
</div>
[/block]

<?php
$pageContent = ob_get_clean();

require_once('model/config.php');
$page = array(
	"title" => "Vive la diététique : Informations Nutritionnelles",
	"description" => "Informations Nutritionnelles",
	"styles" => array("style/style.css", "style/menuHeader.css"),
	"menu" => $menu,
	"menuId" => "infoNut",
	"footerMenu" => $footerMenu,
	"metadata" => $metadata,
	"pageContent" => $pageContent
);

require_once("pageBuilder.class.php");
$pageBuilder = new pageBuilder ();
$pageBuilder->setPage($page);
$content = $pageBuilder->process();
echo $content;
	
?>