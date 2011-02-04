<?php
$metadata = array(
	"description" => "Pour des conseils de nutrition, pour un problème de poids, une alimentation équilibrée et adaptée à votre pathologie (dénutrition, diabète, trouble de l'ordre alimentaire, etc) un suivi, contactez la diététicienne nutritionniste Nathalie Le Roux à Versailles.Des conseils personnalisés et un regime diététique adéquat vous seront proposés.",
	"keywords" => "cabinet diététique, diététicien, diététicienne, nutritionniste, nutrition, manger, santé, régime, alimentaire, cabinet, diabète, anorexie, boulimie, dénutrution, maigrir, amaigrissant, menu régime, alimentation, plaisir et nutrition, recette diététique, conseils, conseil, aliment, alimentaire, sportif, sport, vitamines, Versailles, 78, Yvelines, Diététicien, régime diététicien, diététique sportive",
	"subject" => "cabinet dieteticien versailles, cabinet diététique versailles, alimentation, regime dietetique, Versailles, Yvelines (78)",
	"robots" => "index, follow"
);

$menuAccueil = array ( 
	"id" => "accueil", 
	"label" => "Accueil", 
	"link" => "accueil.php");
$menuPresenation = array ( "id" => "presentation", "label" => "Présentation", "link" => "presentation.php");
$menuCabinet = array ( "id" => "cabinet", "label" => "Cabinet", "link" => "cabinet.php");
$menuInfoNut = array ( "id" => "infoNut", "label" => "Informations Nutritionnelles", "link" => "infos-nutritionnelles.php");
$menuCv = array( "id" => "cv", "label" => "Nathalie Le Roux", "link" => "cv.php");
$menuMonCompte = array( "id" => "monCompte", "label" => "Mon compte", "link" => "monCompte.php");
$menuAdmin = array( "id" => "admin", "label" => "Administration", "link" => "administration.php");
$menuTech = array( "id" => "tech", "label" => "Tech-Zone", "link" => "tech-zone.php");
$menuNews = array ( "id" => "actualites", "label" => "Actualités", "link" => "actualites.php");
$menuEConsult = array ( "id" => "econsult", "label" => "Consultation diététique en ligne", "link" => "econsult.php");

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
