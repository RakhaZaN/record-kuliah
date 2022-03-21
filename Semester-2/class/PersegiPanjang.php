<?php

class PersegiPanjang {
    private $p, $l;

    function __construct($panjang, $lebar)
    {
        $this->p = $panjang;
        $this->l = $lebar;
    }

    function getLuas() {
        return $this->p * $this->l;
    }

    function getKeliling()
    {
        return ($this->p * 2) + ($this->l * 2);
    }
}