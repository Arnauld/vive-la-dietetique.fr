<?php
ob_start();
?>
<h1>Cabinet di�t�tique</h1>

	[block style="cadre;nl" title="Me contacter" anchor="contact"]
		<strong>Nathalie Le Roux</strong> ([mail]nathalie@vive-la-dietetique.fr[/mail])
		
		Di�t�ticienne dipl�m�e - Nutritionniste (N� ADELI 789500030)
		
		Mon successeur: <strong>Elodie Guitton</strong> ([mail]elodieguitton@laposte.net[/mail])
		1 Passage Fran�ois Pil�tre de Rozier
		78000 Versailles
		[ref="acces"]O� Elodie se cache ?[/ref]
		
		Consultations individuelles
		Sur rendez-vous
		Tel : 01 30 21 36 43
	[/block]
	
	<h1>La consultation individuelle</h1>
	
	[quote style="pull"]Un moment d'�change centr� sur vos attentes[/quote]
	
	<p>
	La consultation est un moment d'�change centr� sur vos attentes et vos besoins.
	Par une �coute attentive, je vais d�finir avec vous des objectifs personnalis�s
	� suivre pour r�pondre � votre demande.
	</p>
	<p>
    Les consultations de suivi sont indispensables au succ�s de votre d�marche.
    Lors de ces entretiens, j'adapte mes conseils en fonction des al�as de
    votre vie professionnelle et personnelle. Je r�ponds �galement aux
    difficult�s que vous pouvez rencontrer pour la mise en place de certains
    points convenus ensemble.
	</p>
	
	[list style="cloud"]
		[*]Equilibre Nutritionnel
		[*]Conseils et suivis personnalis�s
		[*]R�gimes th�rapeutiques avec suivi du m�decin traitant
		[*]sportifs
		[*]femmes enceintes
		[*]enfants, adolescents
		[*]adultes, personnes ag�es
		[*]...
	[/list]
	
	[list style="cloud"]
		[*]ob�sit�s
		[*]hyperlipid�mies
		[*]diab�tes
		[*]troubles digestifs
		[*]anorexies
		[*]...
	[/list]

	<h2>Balance � imp�dancem�trie</h2>
	
	[quote style="pull"]Votre perte de poids ne se fera pas au d�pend de vos muscles![/quote]
	
	<p>
	<b>Une prise en charge di�t�tique et une perte de poids efficace ne mettant pas en danger
	votre sant�!</b>
	</p>
	<p>
	Un r�gime engendre souvent une perte de masse musculaire. Cette balance nous permettra de
	suivre l'�volution de votre taux de masse graisseuse et votre taux de masse musculaire.
	Ainsi, j'affinerai mes conseils et votre r�partition en fonction des r�sultats.
	</p>
	<p>
	<b>Votre perte de poids ne se fera pas au d�pend de vos muscles!</b>
	</p>

<h1>Les ateliers th�matiques</h1>

	<p>
	En petit groupe, l'atelier permet d'enrichir ses connaissances en	
	mati�re d'alimentation. Les �changes avec la di�t�ticienne, 
	professionnel de l'alimentation, vont aider
	les participants � trier le <cite>vrai du faux</cite>.
	</p>
	[quote style="pull"]trier le <cite>vrai du faux</cite> gr�ce aux conseils
	d'un professionnel de l'alimentation[/quote]

	<p>
	Ces �changes apporteront des solutions pratiques, auxquelles vous
	n'auriez peut-�tre pas pens�, pour pallier une alimentation d�s�quilibr�e
	(pour vous-m�me, mais aussi pour vos proches : enfant, mari, femme, parent...)
	</p>

	<h2>Les ateliers ont lieu :</h2>
	<p>
	Le mercredi soir de 19h � 20h30<br/>
	Le samedi matin de 10h � 11h30<br/>
	[ref="acces"]Au cabinet di�t�tique[/ref]<br/>
	</p>
	
	<h2>Inscriptions, informations :</h2>
	<p>
	Inscription pr�alable par courrier, t�l�phone ou mail obligatoire. <br/>
	Groupes de 6 personnes maximum<br/>
	</p>

	<h2>Quelques th�mes abord�s</h2>
	<p>
		<h3>Alimentation �quilibr�e</h3>
		<p>
		Manger, prot�ger ma sant�, me faire plaisir.
		</p>
	
		<h3>Alimentation de la femme enceinte</h3>
		<p>
		Manger, nous prot�ger (mon enfant et moi), nous faire plaisir.
		</p>
		
		<h3>Alimentation de l'enfant de 3 � 11 ans</h3>
		<p>
		Nourrir mon enfant, veiller � sa sant�, lui faire plaisir.
		</p>
		
		<h3>Alimentation de l'adolescent</h3>
		<p>
		Donner des rep�res � mon ado, veiller � son alimentation.
		</p>
	</p>
	
	<h2>d'autres th�mes ?</h2>
	<p>
	Si vous souhaitez aborder d'autres th�mes, n'hesitez pas � [ref="contact"]me contacter[/ref]
	par mail ou t�l�phone.
	</p>
	
	<h1>Je suis l� !</h1>
	<div class='mapContainer'>
	[block style="cadre;nl;center" title="Plan d'acc�s" anchor="acces" width="560px"]
    	<div id='map' style='width: 500px; height: 300px;'>
    	<?php
    	if($_SERVER["SERVER_ADDR"]=="127.0.0.1") {
    		echo "<img src='data/map.png' alt='Plan d\'acc�s' width='500' height='300' >";
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
		var address = "<b>Cabinet di�t�tique</b><br/>Elodie Guitton<br/>1 Passage Fran�ois Pil�tre de Rozier<br/>78000 Versailles"; 
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
	"title" => "Vive la di�t�tique : Le cabinet et les consultations di�t�tiques � Versailles, Yvelines sur rendez-vous - Nathalie Le Roux di�t�ticienne diplom�e et nutritionniste - perte de poids, �quilibre et trouble alimentaire, enfants, sportifs, maladie",
	"description" => "Le cabinet et les consultations di�t�tiques � Versailles, Yvelines sur rendez-vous - Nathalie Le Roux di�t�ticienne diplom�e et nutritionniste - Un suivi et des conseils personnalis�s pour vous accompagner dans la perte de poids, l'apprentissage de l'�quilibre alimentaire, un accompagnement dans la prise en charge des troubles alimentaires, enfants, sportifs, personnes ag�es. Un r�gime adapt� � votre maladie",
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