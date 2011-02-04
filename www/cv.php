<?php
ob_start();
?>

<h1>Présentation</h1>
	<p style='text-align:justify;'>
	Je suis diététicienne diplômée depuis 1999, 
	j'ai travaillé 6 années en milieu hospitalier.
	</p>
	<p style='text-align:justify;'>Cette expérience m'a
	permis de mettre en pratique mes connaissances dans le domaine thérapeutique
	et m'a confortée dans mon opinion sur l'importance de la diététique dans
	le traitement de certaines pathologies (diabètes, maladies cardiovasculaires,
	maladies digestives...).
	</p>

<h1>Pourquoi le libéral ?</h1>

	[quote style="pull"]Je souhaite vous aider, par une écoute et un
	accompagnement quotidien (...)[/quote]
	<p style='text-align:justify;'>
	Je me suis installée en libéral pour suivre et accompagner 
	ces patients atteints de maladies chroniques. Par un suivi
	personnalisé, je souhaite améliorer le confort de leur vie
	quotidienne.
	</p>

	<p style='text-align:justify;'>
	Une autre raison pour laquelle je me suis installée, toute
	aussi importante et intéressante pour moi, est la prévention.
	Nous le savons, bien manger est important pour la santé et
	permet de prévenir certaines pathologies (obésité, diabète,
	cholestérol, cancer, dénutrition...).<br/>
	Aujourd'hui, nous sommes assaillis d'informations d'ordre
	générale sur la façon dont nous devons manger.
	Celles-ci sont nombreuses, proviennent de diverses
	sources (bonnes et moins bonnes)
	et sont parfois mal interprétées ou   souvent difficiles à
	mettre en pratique au quotidien car non personnalisées.
	</p>
	<p style='text-align:justify;'>
	Je souhaite donc vous aider, par une écoute et un
	accompagnement quotidien, à prendre soin de votre santé, grâce
	à une alimentation équilibrée correspondant à vos habitudes
	de vies, vos goûts et vos besoins.
	</p>
	

<h1>Mon parcours en quelques lignes</h1>

	[quote style="pull"]Prise en charge du patient hospitalisé : 
	dénutritions, cancers, pathologies digestives, diabètes, surpoids...[/quote]
	
	<p>
	En parallèle à mon activité libérale au cabinet diététique, je travaille en
	clinique médicale.
	</p>
	<p>
	En collaboration avec les médecins, je gère l'alimentation
	des patients nécessitant des régimes particuliers : maladie coeliaque, 
	allergie, cholestérol, diabète, anorexie, cancer, etc.
	Et j'adapte les repas pour lutter contre la dénutrition fréquente en milieu hospitalier.
	</p>
	
	<p style='text-align:justify;'> 
	Mon	parcours en quelques lignes :
	<ul>
		<li>Formation au dépistage et la prise en charge de la dénutrition</li>
		<br/>
		<li>Depuis février 2006 - Diététicienne en clinique médicale : soins de suite, cancérologie et rééducation</li>
		<br/>
		<li>Septembre 2005 - installation en cabinet libéral</li>
		<br/>
		<li>1999-2005 - Diététicienne Hospitalière
			<ul>
				<li>Services de diabétologie-endocrinologie</li>
				<li>Services de cardiologie</li>
				<li>Services de dermatologie</li>
				<li>Services de médecine interne</li>
				<li>Services de neurologie</li>
				<li>Services de gastro-entérologie, chirurgies digestives</li>
			</ul>
		</li>
	</ul>
	</p>
	
	
	[quote style="pull"]Consultation individuelle : 
	diabètes, surpoids, cholestérol, syndrômes métaboliques, anorexies, troubles du comportements alimentaires...[/quote]
	
	<p style='text-align:justify;'>
	Mes actions de 1999 à aujourd'hui :
	<ul>
		<li>Prise en charge du patient hospitalisé (dénutritions, cancers, pathologies digestives, diabètes, surpoids...)</li>
		<li>Consultation individuelle (diabètes, surpoids, cholestérol, syndrômes métaboliques, anorexies, troubles du comportements alimentaires...)</li>
		<li>Education diététique en groupe</li>
		<li>Professeur vacataire à l'institut de formation des soins infirmiers de l'école de Versailles</li>
		<li>Animations nutritionnelles (ateliers, conférences...)</li>
	</ul>
	</p>

	<p style='text-align:justify;'>
	Et aussi :
	<ul>
	<li> Membre du réseau [link="www.repop.fr"]<strong>REPOP 78</strong>[/link] (Réseau pour la prise en charge et la prévention de l'obésité en pédiatrie)
	<li> Membre du réseau MICI (Maladies Inflammatoires Chroniques Intestinales)
	<li> Membre du réseau de la Ligue contre le cancer
	</ul>
	</p>


<?php
$pageContent = ob_get_clean();

require_once('model/config.php');
$page = array(
	"title" => "Vive la diététique : Nathalie Le Roux diététicienne diplomée et nutritionniste",
	"description" => "Nathalie Le Roux diététicienne diplomée et nutritionniste, spécialisée dans la prise en charge des syndrômes métabolique, anorexies et troubles du comportement alimentaire",
	"styles" => array("style/style.css", "style/menuHeader.css"),
	"menu" => $menu,
	"menuId" => "cv",
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