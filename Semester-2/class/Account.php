<?php

class Account {
    protected $nomor, $saldo;

    public function __construct($nomor, $saldo)
    {
        $this->nomor = $nomor;
        $this->saldo = $saldo;
    }

    public function deposit($saldo)
    {
        $this->saldo += $saldo;
    }

    public function withdraw($saldo) {
        $this->saldo -= $saldo;
    }

    public function cetak()
    {
        echo "Nomor: {$this->nomor} | ";
        echo "Saldo: {$this->saldo} | ";
    }

}

class AccountBank extends Account {
    public $customer;

    public function __construct($nomor, $saldo, $customer)
    {
        parent::__construct($nomor, $saldo);
        $this->customer = $customer;
    }

    public function transfer(object $account, $saldo)
    {
        $account->deposit($saldo);
        $this->withdraw($saldo);
    }

    public function cetak()
    {
        parent::cetak();
        echo "Customer: {$this->customer} <br>";
    }
}

$ahmad = new AccountBank('C001', 6000000, 'Ahmad');
$budi = new AccountBank('C002', 6000000, 'Budi');
$kurniawan = new AccountBank('C003', 6000000, 'Kurniawan');

// Simulasi
// nilai awal
$ahmad->cetak();
$budi->cetak();
$kurniawan->cetak();
echo "<hr>";
echo "<p>Transaction</p>";
// 1. Ahmad nabung 1.000.000
$ahmad->deposit(1000000);
// 2. Ahmad transfer 1.500.000 ke kurniawan dan 500.000 ke Budi
$ahmad->transfer($kurniawan, 1500000);
$ahmad->transfer($budi, 500000);
// 3. Budi tarik uang 2.500.000
$budi->withdraw(2500000);
echo "<hr>";
// nilai akhir
$ahmad->cetak();
$budi->cetak();
$kurniawan->cetak();
