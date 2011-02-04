<?php
ob_start();
?>

<h1>Pourquoi [b]Vive la diététique[/b]?</h1>
<p>
<cite>Pour Vivre il faut manger</cite>. De nos jours, c'est bien connu,
nos habitudes alimentaires sont mauvaises (repas rapides, trop gras et
trop sucrés...), celles-ci augmentent le risque d'avoir certaines maladies
comme le cancer, le diabète, le cholestérol...,   et donc un mauvais état
de santé.
</p>
<p>
Alors je suis tentée d'affirmer que pour <strong>BIEN VIVRE</strong>,
il faut <strong>BIEN MANGER</strong> et la solution est la Diététique.
</p>

[quote style="pull"]La diététique c'est l'équilibre, la variété, c'est manger de tout avec raison
et passion!!![/quote]
<p>
La diététique est souvent considérée, à  tort, synonyme de <cite>régime</cite>
ou pire de <cite>restriction</cite>, or la diététique est la médecine de notre
corps par l'alimentation. 
</p>
<p>
Notre corps a besoin d'aliment sain mais aussi
d'aliment plaisir, chacun de ces aliments a son rôle à jouer pour une bonne
santé.
</p>
<p>
La diététique c'est l'équilibre, la variété, c'est manger de tout avec raison
et passion!!!  
</p>

<p>
La connaissance et la pratique d'une bonne diététique permettent d'allier plaisir
et santé, et profiter ainsi pleinement de la vie.
</p>

<p>
Alors, si vous êtes d'accord avec moi, crions ensemble haut et fort : 

<strong>VIVE LA DIETETIQUE !</strong>
</p>
<?php
$pageContent = ob_get_clean();

require_once('model/config.php');
$page = array(
"title" => "Vive la diététique : La diététique c'est l'équilibre, la variété, c'est manger de tout avec raison et passion",
	"description" => "La diététique, la connaissance et la pratique de l'alimentation",
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