<?php

class Mahasiswa {
    public $nim, $nama, $thn_angkatan, $prodi, $ipk;

    function __construct($nim, $nama)
    {
        $this->nim = $nim;
        $this->nama = $nama;
    }

    function predikat_ipk() {
        if ($this->ipk < 2.0) return "Cukup";
        elseif ($this->ipk < 3.0) return "Baik"; 
        elseif ($this->ipk < 3.75) return "Memuaskan"; 
        elseif ($this->ipk <= 4.0) return "Cum Laude"; 
    }
}
