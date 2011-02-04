<?php
ob_start();
?>
<h1>Consultation en ligne</h1>
[block style="cadre;nl" title="Consultation diététique en ligne" width="90%"]
<div style='text-align:center;'>
Contactez moi par email à <big><strong>[mail]nathalie@vive-la-dietetique.fr[/mail]</strong></big>
</div>
[/block]

<?php
$pageContent = ob_get_clean();

require_once('model/config.php');
$page = array(
	"title" => "Vive la diététique : Consultation diététique en ligne - Prise en charge, suivi, conseils, régime personnalisé, coaching alimentaire par internet",
	"description" => "Consultation diététique en ligne, par mail par Nathalie Le Roux diététicienne diplomée et Nutritioniste",
	"styles" => array("style/style.css", "style/menuHeader.css"),
	"menu" => $menu,
	"menuId" => "econsult",
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