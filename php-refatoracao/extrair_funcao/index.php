<?php declare(strict_types=1);

$saldos = [
    'Giovanni' => 3000,
    'Erika' => 5000,
];

function exibeSaldoCorrentista(string $nome, array $saldos): void {
    if (array_key_exists($nome, $saldos)) {
        exibeMensagem($nome, $saldos);
    } else {
        exibeMensagemErro($nome);
    }
    
}

function exibeMensagem(string $nome, array $saldos): void {
    echo "<p>O saldo do $nome é: {$saldos[$nome]}.</p>";
}

function exibeMensagemErro(string $nome): void {
    echo "<p>Correntista \"$nome\" não existe.</p>";
}


exibeSaldoCorrentista('Giovanni', $saldos);
exibeSaldoCorrentista('Gabriel', $saldos);
