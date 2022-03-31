<?php

class Fruit {
    public $name;
    protected $color;
    private $weight;

    public function set_name($n)
    {
        $this->name = $n;
    }

    protected function set_color($c)
    {
        $this->color = $c;
    }

    private function set_weight($w)
    {
        $this->weight = $w;
    }
}

$mango = new Fruit();

// Akses variable
$mango->name = 'Mango'; // OK
// $mango->color = 'Yellow'; // ERROR
// $mango->weight = '300'; // ERROR

// Akses function
$mango->set_name('Mango'); // OK
// $mango->set_color('Yellow'); // ERROR
// $mango->set_weight('300'); // ERROR