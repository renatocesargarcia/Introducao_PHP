<?php

function validaNome(string $nome): bool
{
    if (empty($nome)) {
        setarMensagemErro('O nome não pode ser vazio, favor preencher');

        return false;
    } elseif (strlen($nome) < 3) {
        setarMensagemErro('O nome deve ter no mínimo 3 caracteres');

        return false;
    } elseif (strlen($nome) > 40) {
        setarMensagemErro('O nome é muito extenso');

        return false;
    }

    return true;
}

function validaIdade(string $idade): bool
{
    if (!is_numeric($idade)) {
        $_SESSION['mensagem de erro'] = 'Informe um número para a idade';
        header('location: index.php');

        return false;
    }

    return true;
}
