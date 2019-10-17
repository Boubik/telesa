<?php
require "ITeleso.php";

class Koule implements ITeleso
{
    private $r;

    /**
     * set R
     * @param $r r
     */
    public function setR($r)
    {
        $this->r = $r;
    }

    public function __construct($r = 0)
    {
        $this->setR($r);
    }

    /**
     * vypočet povrch tělesa
     * 
     * @return float
     */
    public function povrch(): float
    {
        return 4 * M_PI * ($this->r ** 2);
    }

    /**
     * výpočet a vrátí objem tělesa
     * 
     * @return float
     */
    public function objem(): float
    {
        return (4 / 3) * M_PI * ($this->r ** 3);
    }

    /**
     * testuje, je-li objekt trojrozměrný
     * 
     * @return float
     */
    public function is3D(): bool
    {
        if ($this->r > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * vrací počet vecholů tělesa
     * 
     * @return integer počat vrcholů když je trojrozměrný, jinak 0
     */
    public function pocetVrcholu(): int
    {
        return 0;
    }

    /**
     * vygeneruje řetezec informující o telesu (jeho název a rozměr...)
     * 
     * @return string
     */
    public function info(): string
    {
        return "Koule<br>\n" .
            "r: 10<br>\n Počet vrcholů: " . $this->pocetVrcholu() . "<br>\n" .
            "Je 3D?: " . ($this->is3D() ? "Je" : "Není") . "<br>\n" .
            "P: " . $this->povrch() . "<br>\n" .
            "O: " . $this->objem() . "<br>\n" .
            "P: " . $this->povrch() . "<br>\n";
    }
}
