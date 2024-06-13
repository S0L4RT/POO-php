<?php
    require 'Conta.php';

    // Cria uma conta
    $conta = new Conta("1234", "João Silva", 1000);

    // Exibe saldo
    echo "Saldo incial: ". $conta -> obterSaldo() . " reais<br>";

    // Realizar um depósito
    if($conta -> depositar(500)){
        echo "Depósito realizado com sucesso<br>";
    }else{
        echo "Falha ao realizar depósito!<br>";
    }

    // Exibe saldo após depósito
    echo "Saldo após depósito: " . $conta -> obterSaldo() . " reais<br>";

    // Realizar um saque
    if($conta -> sacar(300)){
        echo "Saque realizado com sucesso!<br>";
    }else{
        echo "Falha ao realizar saque!<br>";
    }

    // Exibe saldo após saque
    echo "Saldo após saque: " . $conta -> obterSaldo() . " reais<br>";
?>