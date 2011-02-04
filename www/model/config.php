<?php
$metadata = array(
	"description" => "Pour des conseils de nutrition, pour un probl�me de poids, une alimentation �quilibr�e et adapt�e � votre pathologie (d�nutrition, diab�te, trouble de l'ordre alimentaire, etc) un suivi, contactez la di�t�ticienne nutritionniste Nathalie Le Roux � Versailles.Des conseils personnalis�s et un regime di�t�tique ad�quat vous seront propos�s.",
	"keywords" => "cabinet di�t�tique, di�t�ticien, di�t�ticienne, nutritionniste, nutrition, manger, sant�, r�gime, alimentaire, cabinet, diab�te, anorexie, boulimie, d�nutrution, maigrir, amaigrissant, menu r�gime, alimentation, plaisir et nutrition, recette di�t�tique, conseils, conseil, aliment, alimentaire, sportif, sport, vitamines, Versailles, 78, Yvelines, Di�t�ticien, r�gime di�t�ticien, di�t�tique sportive",
	"subject" => "cabinet dieteticien versailles, cabinet di�t�tique versailles, alimentation, regime dietetique, Versailles, Yvelines (78)",
	"robots" => "index, follow"
);

$menuAccueil = array ( 
	"id" => "accueil", 
	"label" => "Accueil", 
	"link" => "accueil.php");
$menuPresenation = array ( "id" => "presentation", "label" => "Pr�sentation", "link" => "presentation.php");
$menuCabinet = array ( "id" => "cabinet", "label" => "Cabinet", "link" => "cabinet.php");
$menuInfoNut = array ( "id" => "infoNut", "label" => "Informations Nutritionnelles", "link" => "infos-nutritionnelles.php");
$menuCv = array( "id" => "cv", "label" => "Nathalie Le Roux", "link" => "cv.php");
$menuMonCompte = array( "id" => "monCompte", "label" => "Mon compte", "link" => "monCompte.php");
$menuAdmin = array( "id" => "admin", "label" => "Administration", "link" => "administration.php");
$menuTech = array( "id" => "tech", "label" => "Tech-Zone", "link" => "tech-zone.php");
$menuNews = array ( "id" => "actualites", "label" => "Actualit�s", "link" => "actualites.php");
$menuEConsult = array ( "id" => "econsult", "label" => "Consultation di�t�tique en ligne", "link" => "econsult.php");

$menu = array(
	$menuAccueil,
	$menuCv,
	$menuPresenation,
	//$menuInfoNut,
	//$menuNews,
	$menuCabinet,
	$menuEConsult
);

$footerMenu = array(
	$menuAccueil,
	$menuCv,
	$menuPresenation,
	//$menuInfoNut,
	//$menuNews,
	$menuCabinet,
	//$menuMonCompte,
	//$menuAdmin,
	$menuEConsult
);

?>
