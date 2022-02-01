<?php
namespace TDD;

include("./receipt.php");
include("./Maaltijden.php");
include("./BenefietAvond");

$receipt = new Receipt();
$maaltijden = new Maaltijden();
$Benefiet = new BenefietAvond2();

// $rekening = array(56, 128, 89, 24, 133, 233, 212);

$rekening = [56, 128, 89, 24, 133, 233, 212, 23];

$aantalTafels = 3;
$aantalGasten = 12;

$aantalBezoekers = 1200;
$prijsTickets = 45;

echo dirname(dirname(__FILE__));
echo "<br>";
echo DIRECTORY_SEPARATOR;
echo "<br>";
echo dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
?>


<h1> Voorbeeld UnitTest </h1>

<h3>Het totaalbedrag van de rekening is: <?php echo $receipt->total($rekening, "Hoi"); ?> euro</h3>

<h3>Het productbedrag van de rekening is: <?php echo $receipt->product($rekening); ?> euro </h3>

<hr>

<h3>Er zijn vandaag <?= $aantalTafels; ?> tafels gereserveerd voor <?= $aantalGasten; ?> gasten.</h3>
<h3>Er moeten dus <?php echo $maaltijden->personeelsMaaltijden($aantalTafels, $aantalGasten); ?> maaltijden voor de personeelsleden worden bezorgd.</h3>
