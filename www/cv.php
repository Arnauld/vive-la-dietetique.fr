<?php
ob_start();
?>

<h1>Pr�sentation</h1>
	<p style='text-align:justify;'>
	Je suis di�t�ticienne dipl�m�e depuis 1999, 
	j'ai travaill� 6 ann�es en milieu hospitalier.
	</p>
	<p style='text-align:justify;'>Cette exp�rience m'a
	permis de mettre en pratique mes connaissances dans le domaine th�rapeutique
	et m'a confort�e dans mon opinion sur l'importance de la di�t�tique dans
	le traitement de certaines pathologies (diab�tes, maladies cardiovasculaires,
	maladies digestives...).
	</p>

<h1>Pourquoi le lib�ral ?</h1>

	[quote style="pull"]Je souhaite vous aider, par une �coute et un
	accompagnement quotidien (...)[/quote]
	<p style='text-align:justify;'>
	Je me suis install�e en lib�ral pour suivre et accompagner 
	ces patients atteints de maladies chroniques. Par un suivi
	personnalis�, je souhaite am�liorer le confort de leur vie
	quotidienne.
	</p>

	<p style='text-align:justify;'>
	Une autre raison pour laquelle je me suis install�e, toute
	aussi importante et int�ressante pour moi, est la pr�vention.
	Nous le savons, bien manger est important pour la sant� et
	permet de pr�venir certaines pathologies (ob�sit�, diab�te,
	cholest�rol, cancer, d�nutrition...).<br/>
	Aujourd'hui, nous sommes assaillis d'informations d'ordre
	g�n�rale sur la fa�on dont nous devons manger.
	Celles-ci sont nombreuses, proviennent de diverses
	sources (bonnes et moins bonnes)
	et sont parfois mal interpr�t�es ou   souvent difficiles �
	mettre en pratique au quotidien car non personnalis�es.
	</p>
	<p style='text-align:justify;'>
	Je souhaite donc vous aider, par une �coute et un
	accompagnement quotidien, � prendre soin de votre sant�, gr�ce
	� une alimentation �quilibr�e correspondant � vos habitudes
	de vies, vos go�ts et vos besoins.
	</p>
	

<h1>Mon parcours en quelques lignes</h1>

	[quote style="pull"]Prise en charge du patient hospitalis� : 
	d�nutritions, cancers, pathologies digestives, diab�tes, surpoids...[/quote]
	
	<p>
	En parall�le � mon activit� lib�rale au cabinet di�t�tique, je travaille en
	clinique m�dicale.
	</p>
	<p>
	En collaboration avec les m�decins, je g�re l'alimentation
	des patients n�cessitant des r�gimes particuliers : maladie coeliaque, 
	allergie, cholest�rol, diab�te, anorexie, cancer, etc.
	Et j'adapte les repas pour lutter contre la d�nutrition fr�quente en milieu hospitalier.
	</p>
	
	<p style='text-align:justify;'> 
	Mon	parcours en quelques lignes :
	<ul>
		<li>Formation au d�pistage et la prise en charge de la d�nutrition</li>
		<br/>
		<li>Depuis f�vrier 2006 - Di�t�ticienne en clinique m�dicale : soins de suite, canc�rologie et r��ducation</li>
		<br/>
		<li>Septembre 2005 - installation en cabinet lib�ral</li>
		<br/>
		<li>1999-2005 - Di�t�ticienne Hospitali�re
			<ul>
				<li>Services de diab�tologie-endocrinologie</li>
				<li>Services de cardiologie</li>
				<li>Services de dermatologie</li>
				<li>Services de m�decine interne</li>
				<li>Services de neurologie</li>
				<li>Services de gastro-ent�rologie, chirurgies digestives</li>
			</ul>
		</li>
	</ul>
	</p>
	
	
	[quote style="pull"]Consultation individuelle : 
	diab�tes, surpoids, cholest�rol, syndr�mes m�taboliques, anorexies, troubles du comportements alimentaires...[/quote]
	
	<p style='text-align:justify;'>
	Mes actions de 1999 � aujourd'hui :
	<ul>
		<li>Prise en charge du patient hospitalis� (d�nutritions, cancers, pathologies digestives, diab�tes, surpoids...)</li>
		<li>Consultation individuelle (diab�tes, surpoids, cholest�rol, syndr�mes m�taboliques, anorexies, troubles du comportements alimentaires...)</li>
		<li>Education di�t�tique en groupe</li>
		<li>Professeur vacataire � l'institut de formation des soins infirmiers de l'�cole de Versailles</li>
		<li>Animations nutritionnelles (ateliers, conf�rences...)</li>
	</ul>
	</p>

	<p style='text-align:justify;'>
	Et aussi :
	<ul>
	<li> Membre du r�seau [link="www.repop.fr"]<strong>REPOP 78</strong>[/link] (R�seau pour la prise en charge et la pr�vention de l'ob�sit� en p�diatrie)
	<li> Membre du r�seau MICI (Maladies Inflammatoires Chroniques Intestinales)
	<li> Membre du r�seau de la Ligue contre le cancer
	</ul>
	</p>


<?php
$pageContent = ob_get_clean();

require_once('model/config.php');
$page = array(
	"title" => "Vive la di�t�tique : Nathalie Le Roux di�t�ticienne diplom�e et nutritionniste",
	"description" => "Nathalie Le Roux di�t�ticienne diplom�e et nutritionniste, sp�cialis�e dans la prise en charge des syndr�mes m�tabolique, anorexies et troubles du comportement alimentaire",
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