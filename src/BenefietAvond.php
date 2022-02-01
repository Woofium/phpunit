<?php
namespace TDD;

class BenefietAvond {
    public function kostenBenefietConcert($aantalBezoekers, $prijsTickets) {

        // Aantal bedieningspersoneel
        $totaalBedrag = round($aantalBezoekers * $prijsTickets);

        $maxBandUitgaven = round((20/100)* $totaalBedrag);

        return $maxBandUitgaven;
    }
}

?>
