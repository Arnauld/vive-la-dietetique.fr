<?php
ob_start();
?>

<h1>Actualit�s</h1>

[block style="cadre;nl" title="Bient�t" width="90%"]

<p style='text-align:center;'>
29 septembre 2007<br/>
<strong>Journ�e porte ouverte MICI</strong><br/>
<a href='cabinet.php#contact'>Me contacter</a>
</p>
[/block]

<ul>
<li>A venir : Journ�e porte ouverte MICI (septembre 2007)</li>
<li>Semaine de d�pistage de la d�nutrition des seniors (du 25 au 30 juin 2007)</li>
<li>Mise en ligne du site [link]vive-la-dietetique.fr[/link] (6 avril 2007)</li>
<li>Journ�e porte ouverte MICI (octobre 2006)</li>
<li>Oratrice � la conf�rence <cite>alimentation et maladies biliaires inflammatoires</cite> (10 d�cembre 2005)</li>
</ul>

<?php
$pageContent = ob_get_clean();

require_once('model/config.php');
$page = array(
"title" => "Vive la di�t�tique : Actualit�s",
	"description" => "Actualit�s",
	"styles" => array("style/style.css", "style/menuHeader.css"),
	"menu" => $menu,
	"menuId" => "actualites",
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