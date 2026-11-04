<?php

class ContaBancaria {
    private $titular;
    private $saldo;

    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = '100.00';
    }

    public function sacar($valorR) {
        $nSaldo = $this->saldo;
        if ($nSaldo < $valorR ) {
            return "<h1>Saldo Insifuciente</h1>";
        } else {
            $nSaldo = $nSaldo - $valorR;
            return "<h2>Titular: <strong>{$this->titular}</strong><br>
            Saque de <strong>R$ $valorR</strong> Efetuado com sucesso. <br>
            Novo saldo é de <strong>R$ {$nSaldo}</strong></h2>";
        }
    }

    public function depositar($valorR) {
        $nSaldo = $this->saldo;
        $nSaldo = $nSaldo + $valorR;

        return "<h2>Titular: <strong>{$this->titular}</strong><br>
            Deposito de <strong>R$" .$valorR."</strong> Efetuado com sucesso. <br>
            Novo saldo é de <strong>R$ $nSaldo </strong></h2>";
    }
}
?>