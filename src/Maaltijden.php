<?php
namespace TDD;

class Maaltijden {
    public function personeelsMaaltijden($aantalTafels, $aantalGasten) {

        // Aantal bedieningspersoneel
        $bediening = round(0.8 * $aantalTafels) + 1;

        $koks = round(0.5 * $aantalTafels) + 3;

        $barmensen = round(0.1 * $aantalGasten) + 1;

        $totaalAantalMaaltijden = $bediening + $koks + $barmensen;

        return $totaalAantalMaaltijden;
    }
}

?>
