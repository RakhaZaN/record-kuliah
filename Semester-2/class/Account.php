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
        echo "<p>Nomor: {$this->nomor}</p>";
        echo "<p>Saldo: {$this->saldo}</p>";
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
}

$ahmad = new AccountBank('C001', 6000000, 'Ahmad');
$budi = new AccountBank('C002', 6000000, 'Budi');
$kurniawan = new AccountBank('C003', 6000000, 'Kurniawan');

// Simulasi
// 1. Ahmad nabung 1.000.000
$ahmad->deposit(1000000);
// 2. Ahmad transfer 1.500.000 ke kurniawan dan 500.000 ke Budi
$ahmad->transfer($kurniawan, 1500000);
$ahmad->transfer($budi, 500000);
// 3. Budi tarik uang 2.500.000
$budi->withdraw(2500000);
