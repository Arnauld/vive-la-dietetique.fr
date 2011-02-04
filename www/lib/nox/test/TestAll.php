<?php

define ("TestAll", TRUE);

require_once('../../simpletest/unit_tester.php');
require_once('../../simpletest/reporter.php');

$test = &new GroupTest('All tests');
$test->addTestFile('TestOfParsingTag.php');
$test->run(new HtmlReporter());
?>