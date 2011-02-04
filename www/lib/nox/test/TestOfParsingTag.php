<?php
require_once('../../simpletest/unit_tester.php');
require_once('../../simpletest/reporter.php');
require_once('../noxContentProcessor.class.php');

ob_start();
?>
lorem ipsum nfj_jks@vive-la-dietetique.fr sqd
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
Sed non risus. 

<h1>Suspendisse lectus tortor</h1>, 
dignissim sit amet, adipiscing nec, 

ultricies sed, dolor. 

<h2>Suspendisse lectus tortor</h2>
Cras elementum ultrices diam. Maecenas ligula massa,
[list style="cloud"]
[*]varius a, semper congue, euismod non, mi. 
[*]Proin porttitor, orci nec nonummy
[*]molestie, enim est eleifend mi, 
[*]non fermentum diam nisl sit amet erat. 
[/list]
Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim.
Pellentesque congue. <cite>Ut in risus volutpat libero pharetra tempor</cite>. Cras vestibulum
bibendum augue. 

<h3>Praesent egestas leo in pede</h3>

[code]
Praesent egestas leo in pede. Praesent blandit odio eu enim.
[b]Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in
faucibus [b]orci luctus[/b] et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac
[/b]mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam
sodales hendrerit.
[/code]

<h2>Nulla sollicitudin</h2>

[b]Start[/b]</br>
[quote author="john smith" date="22/12/2006"]
Ut velit mauris, egestas sed, gravida nec, ornare ut, mi. Aenean ut orci vel
massa suscipit pulvinar. Nulla sollicitudin. Fusce varius, ligula non tempus
aliquam, nunc turpis ullamcorper nibh, in tempus sapien eros vitae ligula.
Pellentesque rhoncus nunc et augue. Integer id felis. 
[/quote]
[b]End[/b]</br>

Curabitur aliquet
pellentesque diam. Integer@vive-la-dietetique.fr quis metus vitae elit
lobortis egestas. Lorem ipsum dolor sit amet@vive-la-dietetique.fr, consectetuer
adipiscing elit. Morbi vel erat non mauris convallis vehicula. Nulla et sapien.
Integer tortor tellus, aliquam faucibus,
[quote]
convallis id, congue eu, quam. Mauris ullamcorper felis vitae erat. Proin
feugiat, augue non elementum posuere, metus purus iaculis lectus, et tristique
ligula justo vitae magna.
[/quote]

Aliquam convallis sollicitudin purus. Praesent aliquam, enim at fermentum mollis,
ligula massa [html]adipiscing nisl, ac euismod nibh nisl eu lectus. Fusce vulputate sem
at sapien. Vivamus leo. Aliquam euismod <libero> eu enim. Nulla <nec felis> sed leo
{placerat imperdiet}. Aenean suscipit[/html] nulla in justo. Suspendisse cursus rutrum
augue. Nulla tincidunt tincidunt mi. Curabitur iaculis, lorem vel rhoncus faucibus,
felis magna fermentum augue, et ultricies lacus lorem varius purus. Curabitur eu
amet.
<?php

$testing = ob_get_clean();
define("CONTENT", $testing);

class TestOfParsingTag extends UnitTestCase {
	
	function testSimpleParse() {
        $noxProcessor = new noxContentProcessor ();
        $noxProcessor->setContent(CONTENT);
        $noxProcessor->process();
        
        echo "-[".$testing."-- ".$noxProcessor->getProcessedContent()."]-";
        
        $tableOfContents = $noxProcessor->getTableOfContent();
        $nl = "\n";
        echo "<ul>".$nl;
        foreach($tableOfContents as $entry) {
        	$level = $entry["level"];
        	$title = $entry["title"];
        	$key = $entry["key"];
        	$font_size = 100-(15*($level-1))."%";
        	$margin = (15*($level-1))."px";
        	echo "<li style=\"font-size: $font_size; margin-left: $margin; \"><a href=\"#".$key."\">".$title."</a></li>".$nl;
        }
        echo "</ul>".$nl;
    }
}

if(!defined("TestAll")) {
	$test = &new TestOfParsingTag();
	$test->run(new HtmlReporter());
}



?>