<?php
ob_start();
?>

<h1>Pourquoi [b]Vive la di�t�tique[/b]?</h1>
<p>
<cite>Pour Vivre il faut manger</cite>. De nos jours, c'est bien connu,
nos habitudes alimentaires sont mauvaises (repas rapides, trop gras et
trop sucr�s...), celles-ci augmentent le risque d'avoir certaines maladies
comme le cancer, le diab�te, le cholest�rol...,   et donc un mauvais �tat
de sant�.
</p>
<p>
Alors je suis tent�e d'affirmer que pour <strong>BIEN VIVRE</strong>,
il faut <strong>BIEN MANGER</strong> et la solution est la Di�t�tique.
</p>

[quote style="pull"]La di�t�tique c'est l'�quilibre, la vari�t�, c'est manger de tout avec raison
et passion!!![/quote]
<p>
La di�t�tique est souvent consid�r�e, � tort, synonyme de <cite>r�gime</cite>
ou pire de <cite>restriction</cite>, or la di�t�tique est la m�decine de notre
corps par l'alimentation. 
</p>
<p>
Notre corps a besoin d'aliment sain mais aussi
d'aliment plaisir, chacun de ces aliments a son r�le �jouer pour une bonne
sant�.
</p>
<p>
La di�t�tique c'est l'�quilibre, la vari�t�, c'est manger de tout avec raison
et passion!!!  
</p>

<p>
La connaissance et la pratique d'une bonne di�t�tique permettent d'allier plaisir
et sant�, et profiter ainsi pleinement de la vie.
</p>

<p>
Alors, si vous �tes d'accord avec moi, crions ensemble haut et fort : 

<strong>VIVE LA DIETETIQUE !</strong>
</p>
<?php
$pageContent = ob_get_clean();

require_once('model/config.php');
$page = array(
"title" => "Vive la di�t�tique : La di�t�tique c'est l'�quilibre, la vari�t�, c'est manger de tout avec raison et passion",
	"description" => "La di�t�tique, la connaissance et la pratique de l'alimentation",
	"styles" => array("style/style.css", "style/menuHeader.css"),
	"menu" => $menu,
	"menuId" => "presentation",
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