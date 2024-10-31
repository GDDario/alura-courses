<?php declare(strict_types=1);

function verificaSeEmailEhValido(): string
{
    $email = $_GET['email'];
    $mensagemSucesso = "O seu e-mail é: " . $_GET['email'];
    $mensagemErro = "O seu e-mail não é válido";

    if (filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
        return $mensagemSucesso;
    }

    return $mensagemErro;
}

echo verificaSeEmailEhValido();
