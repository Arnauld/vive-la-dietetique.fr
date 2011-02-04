<?php
ob_start();
?>
<h1>Consultation en ligne</h1>
[block style="cadre;nl" title="Consultation di�t�tique en ligne" width="90%"]
<div style='text-align:center;'>
Contactez moi par email � <big><strong>[mail]nathalie@vive-la-dietetique.fr[/mail]</strong></big>
</div>
[/block]

<?php
$pageContent = ob_get_clean();

require_once('model/config.php');
$page = array(
	"title" => "Vive la di�t�tique : Consultation di�t�tique en ligne - Prise en charge, suivi, conseils, r�gime personnalis�, coaching alimentaire par internet",
	"description" => "Consultation di�t�tique en ligne, par mail par Nathalie Le Roux di�t�ticienne diplom�e et Nutritioniste",
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