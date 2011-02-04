<?php
ob_start();
?>
<h1>Cabinet diététique</h1>

	[block style="cadre;nl" title="Me contacter" anchor="contact"]
		<strong>Nathalie Le Roux</strong> ([mail]nathalie@vive-la-dietetique.fr[/mail])
		
		Diététicienne diplômée - Nutritionniste (N° ADELI 789500030)
		
		Mon successeur: <strong>Elodie Guitton</strong> ([mail]elodieguitton@laposte.net[/mail])
		1 Passage François Pilâtre de Rozier
		78000 Versailles
		[ref="acces"]Où Elodie se cache ?[/ref]
		
		Consultations individuelles
		Sur rendez-vous
		Tel : 01 30 21 36 43
	[/block]
	
	<h1>La consultation individuelle</h1>
	
	[quote style="pull"]Un moment d'échange centré sur vos attentes[/quote]
	
	<p>
	La consultation est un moment d'échange centré sur vos attentes et vos besoins.
	Par une écoute attentive, je vais définir avec vous des objectifs personnalisés
	à suivre pour répondre à votre demande.
	</p>
	<p>
    Les consultations de suivi sont indispensables au succès de votre démarche.
    Lors de ces entretiens, j'adapte mes conseils en fonction des aléas de
    votre vie professionnelle et personnelle. Je réponds également aux
    difficultés que vous pouvez rencontrer pour la mise en place de certains
    points convenus ensemble.
	</p>
	
	[list style="cloud"]
		[*]Equilibre Nutritionnel
		[*]Conseils et suivis personnalisés
		[*]Régimes thérapeutiques avec suivi du médecin traitant
		[*]sportifs
		[*]femmes enceintes
		[*]enfants, adolescents
		[*]adultes, personnes agées
		[*]...
	[/list]
	
	[list style="cloud"]
		[*]obésités
		[*]hyperlipidémies
		[*]diabètes
		[*]troubles digestifs
		[*]anorexies
		[*]...
	[/list]

	<h2>Balance à impédancemétrie</h2>
	
	[quote style="pull"]Votre perte de poids ne se fera pas au dépend de vos muscles![/quote]
	
	<p>
	<b>Une prise en charge diététique et une perte de poids efficace ne mettant pas en danger
	votre santé!</b>
	</p>
	<p>
	Un régime engendre souvent une perte de masse musculaire. Cette balance nous permettra de
	suivre l'évolution de votre taux de masse graisseuse et votre taux de masse musculaire.
	Ainsi, j'affinerai mes conseils et votre répartition en fonction des résultats.
	</p>
	<p>
	<b>Votre perte de poids ne se fera pas au dépend de vos muscles!</b>
	</p>

<h1>Les ateliers thématiques</h1>

	<p>
	En petit groupe, l'atelier permet d'enrichir ses connaissances en	
	matière d'alimentation. Les échanges avec la diététicienne, 
	professionnel de l'alimentation, vont aider
	les participants à trier le <cite>vrai du faux</cite>.
	</p>
	[quote style="pull"]trier le <cite>vrai du faux</cite> grâce aux conseils
	d'un professionnel de l'alimentation[/quote]

	<p>
	Ces échanges apporteront des solutions pratiques, auxquelles vous
	n'auriez peut-être pas pensé, pour pallier une alimentation déséquilibrée
	(pour vous-même, mais aussi pour vos proches : enfant, mari, femme, parent...)
	</p>

	<h2>Les ateliers ont lieu :</h2>
	<p>
	Le mercredi soir de 19h à 20h30<br/>
	Le samedi matin de 10h à 11h30<br/>
	[ref="acces"]Au cabinet diététique[/ref]<br/>
	</p>
	
	<h2>Inscriptions, informations :</h2>
	<p>
	Inscription préalable par courrier, téléphone ou mail obligatoire. <br/>
	Groupes de 6 personnes maximum<br/>
	</p>

	<h2>Quelques thêmes abordés</h2>
	<p>
		<h3>Alimentation équilibrée</h3>
		<p>
		Manger, protéger ma santé, me faire plaisir.
		</p>
	
		<h3>Alimentation de la femme enceinte</h3>
		<p>
		Manger, nous protéger (mon enfant et moi), nous faire plaisir.
		</p>
		
		<h3>Alimentation de l'enfant de 3 à 11 ans</h3>
		<p>
		Nourrir mon enfant, veiller à sa santé, lui faire plaisir.
		</p>
		
		<h3>Alimentation de l'adolescent</h3>
		<p>
		Donner des repères à mon ado, veiller à son alimentation.
		</p>
	</p>
	
	<h2>d'autres thêmes ?</h2>
	<p>
	Si vous souhaitez aborder d'autres thêmes, n'hesitez pas à [ref="contact"]me contacter[/ref]
	par mail ou téléphone.
	</p>
	
	<h1>Je suis là !</h1>
	<div class='mapContainer'>
	[block style="cadre;nl;center" title="Plan d'accès" anchor="acces" width="560px"]
    	<div id='map' style='width: 500px; height: 300px;'>
    	<?php
    	if($_SERVER["SERVER_ADDR"]=="127.0.0.1") {
    		echo "<img src='data/map.png' alt='Plan d\'accès' width='500' height='300' >";
    	}
    	?>
    	</div>
    [/block]
	</div>
	
<?php
$pageContent = ob_get_clean();
ob_start();
?>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAA79g8A3WY6zxUA_uYLfA_5xTMgrKfnPlysoSeUoNM2mFQFVRi_hTkVeDYEvhHaogPyjjzOfEd1VWVWQ"
      type="text/javascript"></script>
    <script type="text/javascript">
    //<![CDATA[

	//Creation de la fonction createInfoMarker
	function createInfoMarker(point, address) {
		var marker = new GMarker(point);
		GEvent.addListener(marker, "click",
			function() {
				marker.openInfoWindowHtml(address);
			}
		);
	  return marker;
	}

    function loadMap() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
		map.addControl(new GSmallMapControl());
		map.addControl(new GMapTypeControl());
        map.setCenter(new GLatLng(48.809905, 2.134757), 16);
		var point = new GLatLng (48.809905, 2.134757);
		var address = "<b>Cabinet diététique</b><br/>Elodie Guitton<br/>1 Passage François Pilâtre de Rozier<br/>78000 Versailles"; 
		var marker = createInfoMarker(point, address);
		map.addOverlay(marker);
      }
    }
    //]]>
</script>
<?php

$headerAddendum = ob_get_clean();
if($_SERVER["SERVER_ADDR"]=="127.0.0.1") {
	$headerAddendum = "";
	$bodyAttributes = "";
}else{
	$bodyAttributes ="onload=\"loadMap()\" onunload=\"GUnload()\"";
}



require_once('model/config.php');
$page = array(
	"title" => "Vive la diététique : Le cabinet et les consultations diététiques à Versailles, Yvelines sur rendez-vous - Nathalie Le Roux diététicienne diplomée et nutritionniste - perte de poids, équilibre et trouble alimentaire, enfants, sportifs, maladie",
	"description" => "Le cabinet et les consultations diététiques à Versailles, Yvelines sur rendez-vous - Nathalie Le Roux diététicienne diplomée et nutritionniste - Un suivi et des conseils personnalisés pour vous accompagner dans la perte de poids, l'apprentissage de l'équilibre alimentaire, un accompagnement dans la prise en charge des troubles alimentaires, enfants, sportifs, personnes agées. Un régime adapté à votre maladie",
	"styles" => array("style/style.css", "style/menuHeader.css"),
	"menu" => $menu,
	"menuId" => "cabinet",
	"footerMenu" => $footerMenu,
	"metadata" => $metadata,
	"pageContent" => $pageContent,
	"headerAddendum" => $headerAddendum,
	"bodyAttributes" => $bodyAttributes
);

require_once("pageBuilder.class.php");
$pageBuilder = new pageBuilder ();
$pageBuilder->setPage($page);
$content = $pageBuilder->process();
echo $content;
?>