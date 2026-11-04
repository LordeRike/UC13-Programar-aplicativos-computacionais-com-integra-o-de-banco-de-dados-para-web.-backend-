<?php
    class Funcionario {
        private $nome;
        private $setor;
        private $tempo;
        private $salario;

        public function __construct($nome, $setor, $tempo, $salario) {
            $this->nome = $nome;
            $this->setor = $setor;
            $this->tempo = $tempo;
            $this->salario = $salario;
        }

        public function dadosSalario() {
            $sal = $this->salario;

            for ($i=0; $i < $this->tempo ; $i++) { 
                $sal += $sal *0.03;
            }

            return "<p>Funcionario: <strong>{$this->nome}</strong><br>
            Setor: <strong>{$this->setor}</strong><br>
            Tempo de Empresa: <strong>{$this->tempo}</strong><br>
            Salário Base(R$): <strong>{$this->salario}</strong><br>
            Salário Total(R$): <strong>".number_format($sal, 2,)."</strong> </p>";
        }
    }

?>