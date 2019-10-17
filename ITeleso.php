<?php

/**
 * Rozhraní pro geometrická tělesa
 */
interface ITeleso
{

    /**
     * vypočet povrch tělesa
     * 
     * @return float
     */
    public function povrch(): float;

    /**
     * výpočet a vrátí objem tělesa
     * 
     * @return float
     */
    public function objem(): float;

    /**
     * testuje, je-li objekt trojrozměrný
     * 
     * @return float
     */
    public function is3D(): bool;

    /**
     * vrací počet vecholů tělesa
     * 
     * @return integer počat vrcholů když je trojrozměrný, jinak 0
     */
    public function pocetVrcholu(): int;

    /**
     * vygeneruje řetezec informující o telesu (jeho název a rozměr)
     * 
     * @return string
     */
    public function info(): string;
}
